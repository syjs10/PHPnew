<?php
    /**
    *
    */
    class DocumentStore
    {
        protected $data = [];
        public function addDocument(Documentable $document) {
            $key   = $document->getId();
            $value = $document->getContent();
            $this->data[$key] = $value;
        }
        public function getDocuments() {
            return $this->data;
        }
    }
    /**
     * 文档接口
     */
    interface Documentable
    {
        public function getId();

        public function getContent();
    }
    /**
    *
    * HTML文档类实现
    */
    class HtmlDocument implements Documentable
    {
        protected $url;
        function __construct($url) {
            $this->url = $url;
        }
        public function getId() {
            return $this->url;
        }
        public function getContent() {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_MAXREDIRS,      3);
            $html = curl_exec($ch);
            return $html;
        }
    }

    /**
    * 流文件类实现
    */
    class StreamDocument implements Documentable
    {
        protected $resource;
        protected $buffer;

        function __construct($resource, $buffer = 4096) {
            $this->resource = $resource;
            $this->buffer   = $buffer;
        }
        public function getId() {
            return 'resource-' . (int)$this->resource;
        }
        public function getContent() {
            $streamContent = '';
            rewind($this->resource);
            while(feof($this->resource) === false) {
                $streamContent .= fread($this->resource, $this->buffer);
            }
            return $streamContent;
        }
    }
    /**
    * 命令行文档类实现
    */
    class CommandOutputDocument implements Documentable
    {
        protected $command;
        function __construct($command) {
            $this->command = $command;
        }
        public function getId() {
            return $this->command;
        }
        public function getContent() {
            return shell_exec($this->command);
        }
    }



    $documentStore = new DocumentStore();
    $htmlDoc = new HtmlDocument("https://php.net");
    $documentStore->addDocument($htmlDoc);
    $streamDoc = new StreamDocument(fopen('index.php', 'rb'));
    $documentStore->addDocument($streamDoc);
    $cmdDoc = new CommandOutputDocument('cat /etc/hosts');
    $documentStore->addDocument($cmdDoc);

    print_r($documentStore->getDocuments());
