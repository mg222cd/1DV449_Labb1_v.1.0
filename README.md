<h1>1DV449 - Webbteknik II - Laboration 01</h1>
<h2>Vad tror Du vi har för skäl till att spara det skrapade datat i JSON-format?</h2>
<p>
Json är ett stort och välkänt format för datautbyte som man har en stor fördel av att kunna, framförallt senare i kursen då vi ska jobba mot API:er. En fördel med JSON är att det inte är låst till något programmeringsspråk. JSON är lätt att förstå både för människor och maskiner, och snabbare och tydligare än XML. Trenden pekar uppåt för JSON men neråt för XML. I den här labben särskiljde man ju informationen i samband med skrapningen, det är då onödigt att klumpa ihop allt till HTML igen, när man redan har det sorterat och klart.
</p>
<h2>Olika jämförelsesiter är flitiga användare av webbskrapor. Kan du komma på fler typer av tillämplingar där webbskrapor förekommer?</h2>
<p>
Sökmotorer är uppbyggda lite på samma vis som webbskrapor, bortsett att dom läser ut all infromation från en sida istället för bara enskilda bitar. Används även av företag för att samla aktuella kontaktuppgifter, t.ex för riktad reklam. Ett annat exempel är nyhetsflöden, och marknads- och trendanalyser. Tjänster för att spara sidor och läsa offline.
</p>
<h2>Hur har du i din skrapning underlättat för serverägaren?</h2>
<p>
Jag identifierar mig i HTTP-Headern med User Agent. Om en skrapning nyligen är gjord (inom 5 minuter) så görs ingen ny skrapning utan resultatet från den gamla visas istället.
</p>
<h2>Vilka etiska aspekter bör man fundera kring vid webbskrapning?</h2>
<p>
Man bör läsa "terms of use" hur sidan får användas, alternativt fråga webbplatsägaren. Skrapningar belastar webbplatsägarens server och kan göra sidan långsam. Man bör också ha i åtanke att materialet på sidan kan vara upphovsrättsskyddat eller copyrightat. Material som ligger bakom inloggningar och lösenord kanske ligger skyddat av en anledning - att webbplatsägaren inte vill att det ska vara åtkomligt för alla.
</p>
<h2>Vad finns det för risker med applikationer som innefattar automatisk skrapning av webbsidor? Nämn minst ett par stycken!</h2>
<p>
Man bör ha i åtanke att hålla koll på sidan som skrapas, om design och arkitektur förändras finns risk att ens webbskrapa inte längre fungerar eller inte längre skrapar information. Man får då ingen varning om detta. Om många skrapar samma sida, eller om ens skrapa är välbesökt (och man inte har någon bra hantering för caching) riskerar man att belasta sidan som skrapas alltför hårt.
</p>
<h2>Tänk dig att du skulle skrapa en sida gjord i ASP.NET WebForms. Vad för extra problem skulle man kunna få då?</h2>
<p>
ViewStaten ställer till det. Som sades i peer-instruction 2 "Varje anrop kräver att man skickar med extra information för att behålla ASP.NET-applikationens 'state'".
</p>
<h2>Välj ut två punkter kring din kod du tycker är värd att diskutera vid redovisningen. Det kan röra val du gjort, tekniska lösningar eller lösningar du inte är riktigt nöjd med.</h2>
<p>
Jag valde att lagra varje xpath-skrapning som ett objekt, på samma vis som när man arbetar med databaser och repository patterns, jag tyckte detta var smidigt och gjorde koden lättbegriplig. Jag försökte även bygga skrapan med MVC-arkitektur. 
</p>
<h2>Hitta ett rättsfall som handlar om webbskrapning. Redogör kort för detta.</h2>
<p>
Har ej hittat något exempel på detta i Sverige, men endel internationella rättsfall finns listade här <a href="http://en.wikipedia.org/wiki/Web_scraping#Legal_issues">http://en.wikipedia.org/wiki/Web_scraping#Legal_issues</a> Ett exempel där är eBay v. Bidder's Edge, där Edge för att stoppades från åtkomst, insamling och indexering av auktioner från webbplatsen eBay. Man hade även lagt automatiska bud. Detta sågs som "olaga intrång av lösöre" (fick inte till bättre översättning) på samma sätt som om det skulle ha varit utfört av en fysisk person och inte en robot. Dock verkar detta ej gälla all skrapning av information, utan enbart där man kunnat bevisa att den ägaren av den skrapade webbplatsen tagit skada.
</p>
<h2>Känner du att du lärt dig något av denna uppgift?</h2>
<p>
</p>

