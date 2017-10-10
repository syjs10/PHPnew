<?php
   require_once 'ErrorCode.php';
    /**
    *
    */

    class User
    {
        /**
         * 数据库连接句柄
         * @var [type]
         */
        private $_db;
        /**
         * 获取数据库连接句柄
         * @param PDO $_db PDO连接句柄
         */
        public function __construct($_db)
        {
            $this->_db = $_db;
        }
        /**
         * 用户登陆
         * @param  [type] $username [description]
         * @param  [type] $password [description]
         * @return [type]           [description]
         */
        public function login($username, $password)
        {
            if (empty($password)) {
                throw new Exception("用户名不能为空", ErrorCode::USERNAME_CANNOT_EMPTY);
            }
             if (empty($password)) {
                throw new Exception("密码不能为空", ErrorCode::PASSWORD_CANNOT_EMPTY);
            }
            $sql = 'SELECT * FROM `user` WHERE `username` = :username AND `password` = :password';
            $password = $this->_md5($password);
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            if(!$stmt->execute()) {
                throw new Exception("服务器内部错误",ErrorCode::SERVER_INTERNAL_ERROR);

            }
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if(empty($user)) {
                throw new Exception("用户名或密码错误", ErrorCode::USERNAME_OR_PASSWORD_INVALID);
            }
            unset($user['password']);
            return $user;

        }
        /**
         * 用户注册
         * @param  [type] $username [description]
         * @param  [type] $password [description]
         * @return [type]           [description]
         */
        public function register($username, $password)
        {
            if (empty($password)) {
                throw new Exception("用户名不能为空", ErrorCode::USERNAME_CANNOT_EMPTY);
            }
             if (empty($password)) {
                throw new Exception("密码不能为空", ErrorCode::PASSWORD_CANNOT_EMPTY);
            }
            if ($this->isUsernameExists($username)) {
                throw new Exception("用户名已存在", ErrorCode::USERNAME_EXISTS);
            }
            $password = $this->_md5($password);
            $createdAt = date('Y-m-d H:i:s');
            $sql = 'INSERT INTO `user`(`username`, `password`, `createdAt`)VALUES(:username, :password, :createdAt)';
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':createdAt', $createdAt);
            if (!$stmt->execute()) {
                // print_r($stmt->errorInfo());
                throw new Exception("注册失败", ErrorCode::REGISTER_FAIL);
            }
            return [
                'userId' => $this->_db->lastInsertId(),
                'username' => $username,
                'createdAt' => $createdAt
            ];
        }
        /**
         * MD5加密
         * @param  [type] $string [description]
         * @param  string $key    [description]
         * @return [type]         [description]
         */
        private function _md5($string, $key = 'test') {
            return md5($string, $key);
        }
        /**
         * 检测用户名是否存在
         * @param  [type]  $username [description]
         * @return boolean           [description]
         */
        private function isUsernameExists($username)
        {
            $exists = false;
            $sql    = 'SELECT * FROM `user` WHERE `username` = :username';
            $stmt   = $this->_db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return !empty($result);
        }
    }