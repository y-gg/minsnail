<?php
namespace Org\Api;
class Weather{
    private $_url;
    private $_header = array(
			'apikey: d34835037c0014d30844771b0c9d6a3a',
		);
	private $ch;
	public function __construct(){
		$this->_url='http://apis.baidu.com/heweather/weather/free?cityip='.get_client_ip();
		$this->ch = curl_init();
	}
	public function getweather(){
		// 添加apikey到header
		curl_setopt($this->ch, CURLOPT_HTTPHEADER  , $this->_header);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		// 执行HTTP请求
		curl_setopt($this->ch , CURLOPT_URL , $this->_url);
		$res = curl_exec($this->ch);
		return json_decode($res,true);
	}
    
}
?>