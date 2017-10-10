<?php
    require_once 'ErrorCode.php';
    /**
    *
    */
    class Article
    {
        /**
         * 数据库句柄
         * @var [type]
         */
        private $_db;
        /**
         * 构造方法
         * @param PDO $_db 数据库连接句柄
         */
        public function __construct($_db)
        {
            $this->_db = $_db;
        }
        /**
         * 创建文章
         * @param  [type] $title   [description]
         * @param  [type] $content [description]
         * @param  [type] $userId  [description]
         * @return [type]          [description]
         */
        public function create($title, $content, $userId)
        {
            if (empty($title)) {
                throw new Exception("文章标题不能为空", ErrorCode::ARTICLE_TITLE_CANNOT_EMPTY);
            }
            if (empty($content)) {
                throw new Exception("文章内容不能为空", ErrorCode::ARTICLE_CONTENT_CANNOT_EMPTY);
            }
            $createdAt = date('Y-m-d H:i:s');

            $sql = 'INSERT INTO `article` (`title`, `content`, `createdAt`, `userId`) VALUES (:title, :content, :createdAt, :userId);';
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':createdAt', $createdAt);
            $stmt->bindParam(':userId', $userId);
            if (!$stmt->execute()) {
                throw new Exception("发表文章失败", ErrorCode::ARTICLE_CREATE_FAIL);
            }
            return [
                'articleId' => $this->_db->lastInsertId(),
                'title'     => $title,
                'content'   => $content,
                'userId'    => $userId,
                'createdAt' => $createdAt
            ];
        }
        /**
         * 查看一篇文章
         * @param  [type] $articleId [description]
         * @return [type]            [description]
         */
        public function view($articleId)
        {
            if (empty($articleId)) {
                throw new Exception("文章ID不能为空", ARTICLE_ID_CANNOT_EMPTY);
            }
            $sql = 'SELECT * FROM `article` WHERE `articleId` = :articleId';
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':articleId', $articleId);
            $stmt->execute();
            $article = $stmt->fetch(PDO::FETCH_ASSOC);
            if(empty($article)) {
                throw new Exception("文章不存在", ErrorCode::ARTICLE_NOT_FOUND);
            }
            return $article;
        }
        /**
         * 修改文章
         * @param  [type] $articleId [description]
         * @param  [type] $title     [description]
         * @param  [type] $content   [description]
         * @param  [type] $userId    [description]
         * @return [type]            [description]
         */
        public function edit($articleId, $title, $content, $userId)
        {
            $article = $this->view($articleId);
            if ($article['userId'] != $userId) {
                throw new Exception("您无权编辑此文章", ErrorCode::PERMISSION_DENIED);
            }
            $title=empty($title) ? $article['title'] : $title;
            $content=empty($content) ? $article['content'] : $content;
            if ($title == $article['title'] && $content == $article['content']) {
                return $article;
            }
            $sql = 'UPDATE `article` SET `title` = :title, `content` = :content WHERE `articleId` = :articleId';
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':articleId', $articleId);
            if (!$stmt->execute()) {
                throw new Exception("文章编辑失败", ErrorCode::ARTICLE_EDIT_FAIL);
            }
            return [
                'articleId'=>$articleId,
                'title'=>$title,
                'content'=>$content,
                'createdAt'=>$article['createdAt']
            ];
        }
        /**
         * 删除文章
         * @param  [type] $articleId [description]
         * @param  [type] $userId    [description]
         * @return [type]            [description]
         */
        public function delete($articleId, $userId)
        {
            $article = $this->view($articleId);
            if ($article['userId'] != $userId) {
                throw new Exception("您无权删除此文章", ErrorCode::PERMISSION_DENIED);
            }
            $sql = 'DELETE FROM `article` WHERE `articleId` = :articleId AND `userId` = :userId';
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':articleId', $articleId);
            $stmt->bindParam(':userId', $userId);
            if (!$stmt->execute()) {
                throw new Exception("文章删除失败", ErrorCode::ARTICLE_DELET_FAIL);
            }
            return true;
        }
        /**
         * 读取文章列表
         * @param  [type]  $userId [description]
         * @param  integer $page   [description]
         * @param  integer $size   [description]
         * @return [type]          [description]
         */
        public function getList($userId, $page = 1, $size = 10)
        {
            if ($size > 100) {
                throw new Exception("分页大小最大为100", ErrorCode::PAGE_SIZE_TOO_BIG);
            }
            // $sql = 'SELECT * FROM `article` WHERE `userId` = :userId LIMIT :limit,:offset';
            $sql = 'SELECT * FROM `article` WHERE `userId` = :userId LIMIT :limit, :offset';
            $limit = ($page - 1) * $size;
            $limit = $limit < 0 ? 0 : $limit;
            $stmt = $this->_db->prepare($sql);
            // echo $limit;
            // echo $size;exit();
            $stmt->bindParam(':userId', $userId);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $size, PDO::PARAM_INT);
            $stmt->execute();
            print_r($stmt);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }