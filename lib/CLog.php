<?php

/**
 * @package common
 * CLog class file
 *
 * Really simple,isn't it?
 */
Class CLog {
    private $_logConfig;
    private $moduleName;

    function __construct($moduleName){
    	global $logconfig;
    	$this->moduleName = $moduleName;
    	$this->_logConfig = $logconfig;
    }

    public function debug($msg){
    	$this->log($msg, 0);
    }

    public function info($msg){
    	$this->log($msg, 1);
    }

    public function warn($msg){
    	$this->log($msg, 2);
    }

    public function error($msg){
    	$this->log($msg, 3);
    }

    public function dump($msg){
        ob_start();
        error_log(date('Y-m-d h:i:s') . ": \n", 3, $this->_logConfig['log_file_name']);
        var_dump($msg);
        error_log(ob_get_clean(), 3, $this->_logConfig['log_file_name']);
    }


    private function log($msg, $level = 0) {
    	if ($level >= $this->_logConfig['log_level']) {
            $levelType="debug";//=$this->_logConfig['levels'][$level];
            $this->_logConfig['log_file_name']=sprintf($this->_logConfig['log_file_name'],date("Y-m-d")."_".$levelType);
            if (!is_string($msg)){
                $msg = var_export($msg, true);
            }
	        $msg = date('Y-m-d h:i:s') . " [" . $this->moduleName . "] - " . $this->_logConfig['levels'][$level] . " - " . $msg . "\n";
	        if ($this->_logConfig['trace'] != 0) {
	        	$msg .= $this->getCallChain() . "\n";
	        }
	        
	        if(!file_exists(dirname($this->_logConfig['log_file_name']))){
	        	mkdir(dirname($this->_logConfig['log_file_name']), 0777,true);
	        }
	        error_log($msg, 3, $this->_logConfig['log_file_name']);
    	}
    }


    private function getCallChain() {
		//Get root calling module name
        /**
         * @see http://php.net/manual/en/function.debug-backtrace.php
         *
         * debug_backtrace has diffrent args before and after 5.3.6
         */
		$tr = debug_backtrace();

		//Get caller stack
		$ident = "\t";
		$call_chain = "";
		foreach ($tr as $t) {
            if(!empty($t['file'])){
                $call_chain .= $ident . $this->getFileName($t['file']) .":" . $t['line'] . " -> " . $t['function'] . "\n";
                $ident .= $ident;
            }
		}

		return $call_chain;
    }
	private function getFileName($pathName) {
		$ret = $pathName;
		$pn = str_replace('\\', '/', $pathName);
		$rp = strrpos($pn, "/");
		if ($rp >= 0) {
			$ret = substr($pathName, $rp+1);
		}
		return $ret;
	}
}
