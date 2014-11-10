<?php
namespace Model;

class Course{
	private $name;
	private $url;
	private $code;
	private $urlSyllabus;
	private $introduction;
	private $latestArticle_header;
	private $latestArticle_author;
	private $latestArticle_dateAndTime;

	public function __construct($name, $url, $code, $urlSyllabus, $introduction, $latestArticle_header, $latestArticle_author, $latestArticle_dateAndTime){

	}

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
}