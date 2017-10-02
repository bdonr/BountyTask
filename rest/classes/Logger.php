<?php
  /**
   *
   * @author  David Krawec
   * @date    12.09.2017
   */

class Logger{
    private $path = "";
    private $ip = "";

    public function __construct($path){
        $this->path = $path;
    }

    public function setIP($ip){
        $this->ip = $ip;
    }

    public function getIP(){
        return $this->ip;
    }

    public function logInfo($action){

    }

    public function logWarn($action){

    }

    public function logErr($action){

    }

    public function logDebug($action){

    }

    private function createLogString($level, $action){

    }
  }
?>
