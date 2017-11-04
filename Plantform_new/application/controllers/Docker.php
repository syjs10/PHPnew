<?php
/**
 *  test Docker Class
 */
class Docker extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');

    }
    /**
     * 查看已经打开的docker容器
     * @return [array] [id, port]
     */
    public function docker_ps(){
        $command = "docker ps";
        exec($command, $arr);
        $list = array();
        $tp = array();
        foreach ($arr as $key => $value) {
            if ($key==0){
                continue;
            }
            $value = preg_replace('/\s+/', ' ', $value);
            $tp = explode(' ', $value);
            $port = explode(':', $tp[count($tp)-2]);
            $port = explode('-', $port[1]);
            $md = array('id' => $tp[0], 'port' => $port[0]);
            array_push($list, $md);
        }
        return $list;
    }
    /**
     * 判断是否端口被占用
     * @param  [int]  $port [port]
     * @return boolean
     */
    public function is_repeat($port) {
        $info = $this->docker_ps();
        foreach ($info as $key => $value) {
            if ($value['port']==$port){
                return true;
            }
        }
        return false;
    }
    /**
     * 创建docker而虚拟机
     *
     */
    public function docker_create() {
        /**
         * 防止重复开启虚拟机
         */
        if (isset($_SESSION['docker_info'])){
            return $_SESSION['docker_info']['port'];
            exit;
        }
        /**
         * 判断端口是否占用
         * @var [type]
         */
        $port = rand(10000,60000);
        while ($this->is_repeat($port)){
            $port = rand(10000,60000);
        }
        // $command = "docker run -d -p ".$port.":80 dorowu/ubuntu-desktop-lxde-vnc";
        $command = "docker run -d -p ".$port.":80 test:v1";
        $output  = exec($command, $arr);
        $output  = substr($output, 0, 12);
        $docker_info = array(
            'id'   => $output,
            'port' => $port,
            'time' => time()
        );
        $_SESSION['docker_info']=$docker_info;
        // var_dump($_SESSION['docker_info']);
        return $port;
    }
    /**
     * (未成功)
     * @param  [type] $length [description]
     * @return [type]         [description]
     */
    public function timing($length){
        ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
        set_time_limit(1);
        do{
            $time = $_SESSION['docker_info']['time'];
            if(time()-$time == $length) {
                $this->docker_del();
                return 0;
            }
            sleep(10);
        } while(true);
    }

    /**
     * 结束docker任务
     * @param  [string] $id docker id号
     * @return [string]     docker id号，用于判定是否关闭成功
     */
    public function dockerDel($id=NULL) {

        if($id != NULL){
            $command = "docker kill {$id}";
        } else {
            $command = "docker kill {$_SESSION['docker_info']['id']}";
        }

        $output = exec($command);
        if($id == NULL){

            if($output == $_SESSION['docker_info']['id']){
                unset($_SESSION['docker_info']);
                echo "<script>history.go(-2);</script>";
            }else{
                exit('docker close error');
            }
        } else {
            if ($output) {
                echo "<script>history.go(-2);</script>";
            }
        }
    }

    public function show_docker(){
        $port = $this->docker_create();
        sleep(5);
        echo "<script>
             self.location='http://localhost:$port';
         </script>";
        // echo exec('whoami');
    }
}

?>
