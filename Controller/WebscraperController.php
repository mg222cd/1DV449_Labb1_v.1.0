<?php
namespace Controller;

class WebscraperController{
	
	private $url;

	public function __construct($url){
		$this->url = $url;
	}

	public function doControl(){
		//curl get
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $this->url);

		$data = curl_exec($ch);
		curl_close($ch); // <-- inte viktigt men "god sed"

		return $data;
	}
}