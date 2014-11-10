<?php
namespace Model;

class PageModel{
	private $pages = array();
	private $courses = array();
	
	public function getNumberOfPages($data){
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
}