<?php
namespace Model;

class Course{
	public $name;
	public $url;
	public $code;
	public $urlSyllabus;
	public $introduction;
	public $latestArticle_header;
	public $latestArticle_author;
	public $latestArticle_dateAndTime;

	public function __construct($name, $url, $code, $urlSyllabus, $introduction, $latestArticle_header, $latestArticle_author, $latestArticle_dateAndTime){
		$this->name = $name; 
		$this->url = $url; 
		$this->code = $code;
		$this->urlSyllabus = $urlSyllabus;
		$this->introduction = $introduction;
		$this->latestArticle_header = $latestArticle_header;
		$this->latestArticle_author = $latestArticle_author;
		$this->latestArticle_dateAndTime = $latestArticle_dateAndTime;
	}
	/*
	public function getName(){
		return $this->name;
	}	

	public function getUrl(){
		return $this->url;
	}

	public function getCode(){
		return $this->code;
	}

	public function getUrlSyllabus(){
		return $this->urlSyllabus;
	}

	public function getIntroduction(){
		return $this->introduction;
	}

	public function getLatestArticle_header(){
		return $this->latestArticle_header;
	}

	public function getLatestArticle_author(){
		return $this->latestArticle_author;
	}

	public function getLatestArticle_dateAndTime(){
		return $this->latestArticle_dateAndTime;
	}
	*/
}