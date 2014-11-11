<?php
namespace Model;

require_once('Model/Course.php');

class PageModel{
	private $course;
	private $pages = array();
	private $courses = array();
	//fields to put into course-object
	private $name;
	private $url;
	private $code;
	private $urlSyllabus;
	private $introduction;
	private $latestArticle_header;
	private $latestArticle_author;
	private $latestArticle_dateAndTime;
	
	public function getNumberOfPages($data){
		ini_set('max_execution_time', 300);
		$dom = new \DomDocument();
		if ($dom->loadHTML($data)) {
			$xpath = new \DOMXPath($dom);
			$items = $xpath->query('//div[@id="blog-dir-pag-top"]//a[@class="page-numbers"]');
			foreach ($items as $item) {
					//add each value to pages-array
					$this->pages[] = $item->getAttribute("href");
			}
			//find the last key in the array
			$reversedArr = array_reverse($this->pages);
			$lastPageHref = $reversedArr[0];
			//find the number after "="-sign
			$explodedHref = explode("=", $lastPageHref);
			$reversedHref = array_reverse($explodedHref);
			$number = $reversedHref[0];
			return $number;
		} 
		else {
			die("Fel uppstod vid inläsning av HTML");
		}
	}

	public function getLinks($data){
		ini_set('max_execution_time', 300);
		$dom = new \DomDocument();
		if ($dom->loadHTML($data)) {
			$xpath = new \DOMXPath($dom);
			$items = $xpath->query('//ul[@id="blogs-list"]//div[@class="item-title"]/a');
			foreach ($items as $item) {
				//only if "kurs" is included in the url
				if (strpos($item->getAttribute("href"), 'kurs') !== FALSE) {
					$this->courses[] = $item->getAttribute("href");
				}
			}
			return $this->courses;
		} 
		else {
			die("Fel uppstod vid inläsning av HTML");
		}
	}

	public function getCourseInfo($data, $courseUrl){
		//ini_set('max_execution_time', 300);
		libxml_use_internal_errors(true);
		$dom = new \DomDocument();
		if ($dom->loadHTML($data)) {
			$xpath = new \DOMXPath($dom);
			//kursnamn
			$item = $xpath->query('//div[@id="header-wrapper"]//h1/a');
			foreach ($item as $value) {
    			$this->name = $value->nodeValue;
   			}
   			//länk
   			$this->url = $courseUrl;
   			//kurskod
   			$item = $xpath->query('//div[@id="header-wrapper"]//li/a');
   			$tempArr = array();
   			foreach ($item as $value) {
   				$tempArr[] = $value->nodeValue;
   			}
			$tempArrReversed = array_reverse($tempArr);
			$this->code = $tempArrReversed[0];
   			//kursplan
   			$item = $xpath->query('//ul[@class="sub-menu"]//li[@class="menu-item menu-item-type-custom menu-item-object-custom"]/a');
   			foreach ($item as $value) {
   				if (strpos($value->nodeValue, 'Kursplan') !== FALSE) {
					$this->urlSyllabus = $value->getAttribute("href");
				}
   			}
   			//introduktion
   			//senaste inlägg - rubrik
   			//senaste inlägg - författare
   			//senaste inlägg - datum och tid
   			//lägg in i arrayobjektet
   			//returnera
   			//temporär testkod:
   			echo $this->name . $this->url . $this->code . $this->urlSyllabus . "<br />";
		} 
		else {
			die("Fel uppstod vid inläsning av HTML");
		}
	}
}