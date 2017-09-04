<?php
    /**
    * Method selection Class
    */
    class Password
    {
        protected $method;
        function __construct($method = 'bcrypt')
        {
            switch ($method) {
                case 'bcrypt':
                    $this->method = new BcryptPassword();
                    break;
                case 'md5':
                    $this->method = new Md5Password();
                    break;
                case 'sha1':
                    $this->method = new Sha1Password();
                    break;
                default:
                    throw new Exception("There is no such method");
                    break;
            }
        }
        public function encryption($password)
        {
            return $this->method->encryption($password);
        }
        public function match($inputPassword, $password)
        {
            return $this->method->match($inputPassword, $password);
        }
    }
    /**
     * Password interface
     */
    interface PWD {
        // Encrypte the input password
        public function encryption($password);
        // Verify that both passwords are the same
        public function match($inputPassword, $password);
    }
    /**
    * Bcrypt class
    */
    class BcryptPassword implements PWD
    {
        /**
         * Encrypte the input password
         * @param  String $password password
         * @return Srting           encrypted password
         */
        public function encryption($password)
        {
            $passwordHash = password_hash(
                $password,
                PASSWORD_DEFAULT,
                ['cost' => 12]
            );
            if ($passwordHash === false) {
                throw new Exception('Password hash failed');
            }
            return $passwordHash;
        }
        /**
         * Verify that both passwords are the same
         * @param  String $inputPassword The password to verify
         * @param  String $password      Saved password
         * @return Bool                  Whether the password is the same
         */
        public function match($inputPassword, $password){
            if (!password_verify($inputPassword, $password)) {
                throw new Exception('Wrong Password');
                return false;
            }
            return true;
        }
    }
    /**
    * MD5 class
    */
    class Md5Password implements PWD
    {
        /**
         * Encrypte the input password
         * @param  String $password password
         * @return Srting           encrypted password
         */
        public function encryption($password)
        {
            $passwordHash = md5($password);
            if ($passwordHash === false) {
                throw new Exception('Password hash failed');
            }
            return $passwordHash;
        }
        /**
         * Verify that both passwords are the same
         * @param  String $inputPassword The password to verify
         * @param  String $password      Saved password
         * @return Bool                  Whether the password is the same
         */
        public function match($inputPassword, $password){
            if (!md5($inputPassword) === $password) {
                throw new Exception('Wrong Password');
                return false;
            }
            return true;
        }
    }
    /**
    * SHA1 class
    */
    class Sha1Password implements PWD
    {
        /**
         * Encrypte the input password
         * @param  String $password password
         * @return Srting           encrypted password
         */
        public function encryption($password)
        {
            $passwordHash = sha1($password);
            if ($passwordHash === false) {
                throw new Exception('Password hash failed');
            }
            return $passwordHash;
        }
        /**
         * Verify that both passwords are the same
         * @param  String $inputPassword The password to verify
         * @param  String $password      Saved password
         * @return Bool                  Whether the password is the same
         */
        public function match($inputPassword, $password){
            if (!sha1($inputPassword) === $password) {
                throw new Exception('Wrong Password');
                return false;
            }
            return true;
        }
    }


    echo $pwd = $_POST['password'];
    // $password = new Password('sha1');
    // echo $pwd = $password->encryption();
    // echo $password->match('test', $pwd);
