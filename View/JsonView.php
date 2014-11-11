<?php
namespace View;

class JsonView{
	
	public function setContentHeader($type){
   		return header('Content-type: ' . $type . '; charset=utf-8');
	}

}