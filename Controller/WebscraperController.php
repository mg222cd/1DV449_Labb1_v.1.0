<?php
namespace Controller;

class WebscraperController{
	
	private $url;

	public function __construct($url){
		$this->url = $url;
	}

	public function doControl(){
		$ch = curl_init();
	}
}