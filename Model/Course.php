<?php
namespace Model;

class Course{
	public $course_name;
	public $course_url;
	public $course_code;
	public $url_syllabus;
	public $introduction_text;
	public $latest_article_header;
	public $latest_article_author;
	public $latest_article_date_and_time;

	public function __construct($name, $url, $code, $urlSyllabus, $introduction, $latestArticle_header, $latestArticle_author, $latestArticle_dateAndTime){
		$this->course_name = $name; 
		$this->course_url = $url; 
		$this->course_code = $code;
		$this->url_syllabus = $urlSyllabus;
		$this->introduction_text = $introduction;
		$this->latest_article_header = $latestArticle_header;
		$this->latest_article_author = $latestArticle_author;
		$this->latest_article_date_and_time = $latestArticle_dateAndTime;
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