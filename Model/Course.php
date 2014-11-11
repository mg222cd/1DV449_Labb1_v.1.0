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
	private $default = 'no information';

	public function __construct($name, $url, $code, $urlSyllabus, $introduction, $latestArticle_header, $latestArticle_author, $latestArticle_dateAndTime){
		
		$this->course_name = (! is_null($name)) ? $name : $this->default; 
		$this->course_url = (! is_null($url)) ? $url : $this->default; 
		$this->course_code = (! is_null($code)) ? $code : $this->default; 
		$this->url_syllabus = (! is_null($urlSyllabus)) ? $urlSyllabus : $this->default; 
		$this->introduction_text = (! is_null($introduction)) ? $introduction : $this->default;
		$this->latest_article_header = (!is_null($latestArticle_header)) ? $latestArticle_header : $this->default; 
		$this->latest_article_author = (!is_null($latestArticle_author)) ? $latestArticle_author: $this->default; 
		$this->latest_article_date_and_time = (!is_null($latestArticle_dateAndTime)) ? $latestArticle_dateAndTime : $this->default; 

		//$this->course_name = $name; 
		//$this->course_url = $url; 
		//$this->course_code = $code;
		//$this->url_syllabus = $urlSyllabus;
		//$this->introduction_text = $introduction;
		//$this->latest_article_header = $latestArticle_header;
		//$this->latest_article_author = $latestArticle_author;
		//$this->latest_article_date_and_time = $latestArticle_dateAndTime;
	}
}