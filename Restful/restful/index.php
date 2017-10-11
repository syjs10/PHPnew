<?php
    require_once __DIR__.'/../lib/user.php';
    require_once __DIR__.'/../lib/article.php';
    require_once __DIR__.'/../lib/ErrorCode.php';
    $pdo = require __DIR__.'/../lib/db.php';
    /**
    *
    */
    class Restful
    {
        /**
         * @var User
         */
        private $_user;
        /**
         * @var Article
         */
        private $_article;
        /**
         * 请求方法
         * @var [String]
         */
        private $_requestMethod;
        /**
         * 请求资源名称
         * @var [String]
         */
        private $_resourceName;
        /**
         * 请求资源ID
         * @var [String]
         */
        private $_id;
        /**
         * 允许请求的资源列表
         * @var [Array]
         */
        private $_allowResources = ['users', 'articles'];
        /**
         * 允许请求的HTTP方法
         * @var [type]
         */
        private $_allowRequestMethods = ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'];
        /**
         * 常用状态码
         * @var [Array]
         */
        private $_statusCodes = [
            200 => 'Ok',
            204 => 'No Content',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Server Internal Error'
        ];
        /**
         * 构造函数
         * @param User    $_user    [description]
         * @param Article $_article [description]
         */
        public function __construct(User $_user, Article $_article)
        {
            $this->_user = $_user;
            $this->_article = $_article;
        }

        public function run()
        {
            try {
                $this->_setupRequestMethod();
                $this->_setupResource();
                if ($this->_resourceName == 'users') {
                    return $this->_json($this->_handleUser());
                } else if ($this->_resourceName == 'articles') {
                    return $this->_json($this->_handleArticle());
                }
             } catch(Exception $e) {
                $this->_json(['error' => $e->getMessage()], $e->getCode());
            }
        }
        /**
         * 初始化请求方法
         * @return [type] [description]
         */
        private function _setupRequestMethod ()
        {
            $this->_requestMethod = $_SERVER['REQUEST_METHOD'];
            if (!in_array($this->_requestMethod, $this->_allowRequestMethods)) {
                throw new Exception('请求方法不被允许', 405);
            }
        }
        /**
         * 初始化请求资源与初始化资源标识符
         * @return [type] [description]
         */
        private function _setupResource()
        {
            $path = $_SERVER['PATH_INFO'];
            $params = explode('/', $path);
            $this->_resourceName = $params[1];
            if (!in_array($this->_resourceName, $this->_allowResources)) {
                throw new Exception("请求资源不存在", 400);
            }
            if (!empty($params[2])) {
                $this->_id = $params[2];
            }
        }
        /**
         * 输出JSON
         * @param  [type] $array [description]
         * @return [type]        [description]
         */
        private function _json($array, $code = 0)
        {
            if ($array === null && $code == 0) {
                $code = 204;
            }
            if ($code > 0 && $code != 200) {
                header("HTTP/1.1 {$code} {$this->_statusCodes[$code]}");
            }
            header('Content-Type:application/json;charset=utf-8');
            if ($code != 204) {
                echo json_encode($array, JSON_UNESCAPED_UNICODE);
            }
            exit ();
        }
        /**
         * 请求用户资源
         * @return [type] [description]
         */
        private function _handleUser()
        {
            if ($this->_requestMethod != 'POST') {
                throw new Exception("请求方法不被允许", 405);
            }
            $body = $this->_getBodyParams();
            if (empty($body['username'])) {
                throw new Exception("用户名不能为空", 400);
            }
            if (empty($body['password'])) {
                throw new Exception("密码不能为空", 400);
            }
            return $this->_user->register($body['username'], $body['password']);
        }
        /**
         * 请求文章资源
         * @return [type] [description]
         */
        private function _handleArticle()
        {
            switch ($this->_requestMethod) {
                case 'POST':
                    return $this->_handleArticleCreate();
                case 'PUT':
                    return $this->_handleArticleEdit();
                case 'DELETE':
                    return $this->_handleArticleDelete();
                case 'GET':
                    if (empty($this->_id)) {
                        return $this->_handleArticleList();
                    } else {
                        return $this->_handleArticleView();
                    }
                default:
                    throw new Exception("请求方法不被允许", 405);
            }
        }
        /**
         * 创建文章
         * @return [Array] [description]
         */
        public function _handleArticleCreate()
        {
            $body = $this->_getBodyParams();
            if (empty($body['title'])) {
                throw new Exception("文章标题不能为空", 400);
            }
            if (empty($body['content'])) {
                throw new Exception("文章内容不能为空", 400);
            }
            $user = $this->_userLogin($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
            try {
                $article = $this->_article->create($body['title'], $body['content'], $user['userId']);
                return $article;
            } catch (Exception $e) {
                if (!in_array($e->getCode(),
                    [
                        ErrorCode::ARTICLE_TITLE_CANNOT_EMPTY,
                        ErrorCode::ARTICLE_CONTENT_CANNOT_EMPTY
                    ])) {
                    throw new Exception($e->getMessage(), 401);
                } else {
                    throw new Exception($e->getMessage(), 500);
                }
            }
        }
        /**
         * 编辑文章
         * @return [type] [description]
         */
        public function _handleArticleEdit()
        {
            $user = $this->_userLogin($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']);
            try {
                $article = $this->_article->view($this->_id);
                if ($article['userId'] != $user['userId']) {
                    throw new Exception("你无权编辑此文章", 403);
                }
                $body = $this->_getBodyParams();
                $title = empty($body['title']) ? $article['title'] : $body['title'];
                $content = empty($body['content']) ? $article['content'] : $body['content'];
                if ($title == $article['title'] && $content == $article['content']) {
                    return $article;
                }
                return $this->_article->edit($this->_id, $title, $content, $user['userId']);
            } catch (Exception $e) {
                if ($e->getCode() < 100) {
                    if ($e->getCode() == ErrorCode::ARTICLE_NOT_FOUND) {
                        throw new Exception($e->getMessage(), 404);
                    } else {
                        throw new Exception($e->getMessage(), 400);
                    }
                } else {
                    throw $e;
                }
            }
        }
        /**
         * 删除文章
         * @return [type] [description]
         */
        public function _handleArticleDelete()
        {
            $user = $this->_userLogin($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']);
            try {
                $article = $this->_article->view($this->_id);
                if ($article['userId'] != $user['userId']) {
                    throw new Exception("你无权删除此文章", 403);
                }
                $this->_article->delete($this->_id, $user['userId']);
                return null;
            } catch (Exception $e) {
                if ($e->getCode() < 100) {
                    if ($e->getCode() == ErrorCode::ARTICLE_NOT_FOUND) {
                        throw new Exception($e->getMessage(), 404);
                    } else {
                        throw new Exception($e->getMessage(), 400);
                    }
                } else {
                    throw $e;
                }
            }
        }
        /**
         * 文章列表
         * @return [type] [description]
         */
        public function _handleArticleList()
        {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $size = isset($_GET['size']) ? $_GET['size'] : 10;
            if ($size > 100) {
                throw new Exception("分页过大", 404);
            }
            $user = $this->_userLogin($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']);
            return $this->_article->getList($user['userId'], $page, $size);
        }
        public function _handleArticleView()
        {
            try {
                return $this->_article->view($this->_id);
            } catch (Exception $e) {
                if ($e->getCode() == ErrorCode::ARTICLE_NOT_FOUND) {
                    throw new Exception($e->getMessage(), 404);
                } else {
                    throw new Exception($e->getMessage(), 400);
                }
            }
        }

        /**
         * 获取请求参数
         * @return [type] [description]
         */
        private function _getBodyParams()
        {
            $row = file_get_contents('php://input');
            if (empty($row)) {
                throw new Exception('请求参数错误', 400);
            }
            return json_decode($row, true);
        }
        /**
         * 用户登录
         * @param  [type] $PHP_AUTH_USER [description]
         * @param  [type] $PHP_AUTH_PW   [description]
         * @return [type]                [description]
         */
        private function _userLogin($PHP_AUTH_USER, $PHP_AUTH_PW)
        {
            try {
                 return $this->_user->login($PHP_AUTH_USER, $PHP_AUTH_PW);
            } catch (Exception $e) {
                if (!in_array($e->getCode(),
                    [
                        ErrorCode::PASSWORD_CANNOT_EMPTY,
                        ErrorCode::USERNAME_CANNOT_EMPTY,
                        ErrorCode::USERNAME_OR_PASSWORD_INVALID
                    ])) {
                    throw new Exception($e->getMessage(), 400);
                } else {
                    throw new Exception($e->getMessage(), 500);
                }
            }
        }
    }
    $user = new User($pdo);
    $article = new Article($pdo);

    $restful = new Restful($user, $article);

    $restful->run();