<?php
namespace Controller;

require_once('Model/PageModel.php');
require_once('View/CurlView.php');

class WebscraperController{
	private $curlView;
	private $pageModel;
	private $url = "https://coursepress.lnu.se/kurser/";
	private $courseLinks;
	private $courseInfo = array();

	public function __construct(){
		$this->pageModel = new \Model\PageModel();
		$this->curlView = new \View\CurlView();
	}

	public function doControl(){
		//1 - get data from https://coursepress.lnu.se/kurser/
		$tempData = $this->curlView->curlGetRequest($this->url);
		//2 - find how many pages in paging.
		$lastPage = $this->pageModel->getNumberOfPages($tempData);
		//3 - scrape courses from all pages in paging, result(url) will be but in array $courseLinks
		for ($i=1; $i <= $lastPage; $i++) { 
			$currentUrl = $this->url . "?bpage=" . $i;
			$data = $this->curlView->curlGetRequest($currentUrl);
			$this->courseLinks = $this->pageModel->getLinks($data);
		}
		// 4 - scrape information from each link
		foreach ($this->courseLinks as $course) {
			//curl-getta adressen
			$data = $this->curlView->curlGetRequest($course);
			//skrapa informationen
			$this->courseInfo = $this->pageModel->getCourseInfo($data, $course);
		}
		//var_dump($this->courseInfo);
		//die();
		json_encode($this->courseInfo);
		var_dump($this->courseInfo);
		die();
		/*
		foreach ($this->courseInfo as $course) {
			echo $course->getName();
			echo $course->getUrl();
			echo $course->getCode();
			echo $course->getUrlSyllabus();
			echo $course->getIntroduction();
			echo $course->getLatestArticle_header();
			echo $course->getLatestArticle_author();
			echo $course->getLatestArticle_dateAndTime();
		}
		*/
		//nu ligger allt i arrayen $this->courseLinks
		//loopa igenom den och lägg all info på objekt.


			//IDÉ OM FORTSÄTTNING:
			//gör om frågan ovan så att endast kurslänken hämtas/returners från pageModel->scrapeInformation
			//typ $this->courseLinks[] = $this->pageModel->scrapeInformation($this->data);
			//$this->courseLinks .= $this->pageModel->scrapeInformation($data); <-- verkar tyvärr bara returnera 1 st kurs / sida (första eller sista)
			//använd sedan arrayen och loopa igenom den och skrapa fram datat från varje länk.
			//lägg in informationen i ny array, parsa till JSON och skriv ut på sidan.
			//4 - curl geta länken tillhörande varje kurs
			//5 skrapa datat på sidan innanför länken till varje kurs.
			//Glöm ej heller jobbiga labbkrav som att identifiera sig på servern, skriva ut info om statistik (antal kurser och tid för skrapning)
			//samt att datat ska cachas om det är mindre än X antal minuter sedan senaste skrapning
	}

}