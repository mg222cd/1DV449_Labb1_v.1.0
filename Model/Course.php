<?php
namespace Model;

class Course{
	//fields
	private $name;
	private $url;
	private $code;
	private $urlSyllabus;
	private $introduction;
	private $latestArticle_header;
	private $latestArticle_author;
	private $latestArticle_dateAndTime;
	private $default = "no information";
	//others
	private $data;
	private $dom;
	private $xpath;

	public function __construct($data){
		$this->data = $data;
		$this->dom = new \DomDocument();
	}

	//name:
	public function setName(){
		if ($this->dom->loadHTML($this->data)) {
			$xpath = new \DOMXPath($this->dom);
			$items = $xpath->query('//div[@id="header-wrapper"]//h1');
			var_dump($items);
		} 
		else {
			die("Fel uppstod vid inläsning av HTML");
		}
	}

	public function getName(){
		return $this->name;
	}	
}