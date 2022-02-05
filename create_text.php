<?php
$table = 'text';
require 'inc.php';
$query = "create table text (
  id int(11) not null auto_increment primary key,
  sec varchar(250),
  inhalt text
  )";
if($mysqli->query($query)) echo ", Query erfolgreich!<br>"; 

// open the mysqli prepared statement globally
$stmt = $mysqli -> prepare('INSERT INTO text (id,sec,inhalt) VALUES (?,?,?)');

function insertText($id,$sec,$inhalt) {
	
    global $stmt;
	// using prepared statement several times with different variables
	if (
		$stmt &&
		$stmt -> bind_param('iss', $id,$sec,$inhalt) &&
		$stmt -> execute() &&
	    $stmt -> affected_rows === 1
	) 	echo 'inserted: ' . $sec . '<br>';
    else echo 'Not updated';
}

// Blaupause
/*
insertText('null','',
'
');s 
*/
/*
insertText('null','Atemnot-Infizierter',
' Aus vielen Ländern sehen wir bewegende Szenen, wie Menschen von ihren Balkonen aus singen und musizieren.<br>
Dies ist eine einzigartige Möglichkeit, trotz der häuslichen Quarantäne und dem Abstandsgebot von 1,5 m die wichtige soziale Verbindung mit den Mitmenschen aufrechtzuerhalten.<br>
Die Kirchen haben bereits Aufrufe zu gemeinsamem Gebet und Gesang über durch Radio und Fernsehen ausgestrahlte Messen und Andachten organisiert.<br>
Im folgenden Artikel soll gezeigt werden, dass abgesehen vom sozialen und psychologischen Wert des gemeinsamen Singens auch ein direkter gesundheitlicher Wert damit verbunden ist und sogar ein wesentlicher therapeutischer Nutzen für einen am Coronavirus Erkrankten besteht!<br>
In meinem Artikel über Höhenkrankheit, sind die physikalischen Grundlagen dargelegt, die auch bei der durch den Coronavirus hervorgerufene Lungenerkrankung hilfreich sind.<br>
Um zu verstehen, warum Singen die Sauerstoffversorgung des Körpers verbessert, hier noch einmal die physikalischen Grundlagen.<br>
Auf einer Höhe von 5000 m herrscht der halbe Luftdruck wie auf Meeresniveau.<br>
Da der Sauerstofftransport in der Lunge direkt vom Luftdruck abhängt, kann die Lunge auf dieser Höhe nur noch die halbe Menge an Sauerstoff aufnehmen.<br>
Deshalb entsteht beim nicht adaptierten ein starkes Gefühl von Atemot, weil die Sauerstoffsättigung des Blutes absinkt.<br>
Versucht man allerdings, durch schnelleres Atmen, die sogenannte Hyperventilation dieser Atemnot zu entgegnen, tritt der unerwünschte Effekt ein, dass dann zuviel CO2 abgeatmet wird, da deren Austausch weniger durch den Luftdruck beeinträchtigt wird.<br>
Die Folgen sind eine Verschiebung des Blut-ph-Wertes mit nachfolgenden Elektrolyt-Verschiebungen.<br>
Anstatt zu hyperventilieren sollte man deshalb die sogenannte "Bergsteigeratmung" anwenden.<br>
Diese besteht aus einer verlängerten Ausatmung gegen Widerstand, mit leicht zusammengepressten Lippen, die sogenannte Pressatmung, gefolgt von einer nur leichten, passiven Einatmung.<br>
Durch diese Pressatmung wird der Druck in der Lunge erhöht und die Sauerstoffaufnahme normalisiert sich, ohne dass zuviel Co2 abgeatmet wird.<br>
Wenn Sie ungeduldig werden und sich fragen, was hat das mit Singen zu tun, verrate ich Ihnen schon jetzt, dass das Singen eine Art von "Pressatmung" darstellt, die zu einem höheren Luftdruck in der Lunge und damit besserer Sauerstoffaufnahme führt.<br>
<br>
Dieses Prinzip wird angewendet, wenn Bergsteiger an schwerer Höhenkrankheit leiden. Sie werden in eine Hülle gepackt, in die Helfer von Aussen mit einem Blasebalg erhöhten Druck aufbauen.<br>
So kann jemand gerettet werden, bis ein Hubschrauber den Schwerkranken abtransportieren kann.<br>
<br>Bei einem schweren Verlauf der Corona-Infektion wird die Lunge schwer geschädigt, sodass diese nicht mehr genug Sauerstoff aufnehmen kann.<br>
Deshalb ist die Situation ähnlich wie bei Höhenkrankheit und auch die Behandlung.<br> 
Die lebensrettende Massnahme bei Lungenschädigung durch den Coronavirus besteht in künstlicher Beatmung mit Überdruck, wobei zusätzlich noch Sauerstoff zugesetzt wird.<br>
Bei fortschreitendem Befall der Lunge, bis dann künstliche Beatmung eingesetzt wird b.z.w. ein Beatmungsplatz frei wird, würde es dem Erkrankten helfen, wenn er die Pressatmung anwendet oder so komisch es klingt, singt oder summt.<br>
Hier kommt als Gegenargument sofort, dass jemandem, der so schwer krank ist, nicht nach Singen zu Mute ist.<br>
Meine Hoffnung ist, dass Gesunde oder Menschen mit leichten Symptomen diesen Artikel lesen, und sich dann erinnern, wenn es ihnen schlecht gehen sollte.<br>
Man kann ja sonst nichts tun. Angenommen Sie haben eine Lungenerkrankung durch eine Corona-Infektion und warten auf einen Beatmungsplatz. Vielleicht liegen Sie zuhause oder im Krankenhaus.<br>
Aber ausser Beatmen kann man nicht wirklich etwas tun. Oder doch? Da war doch der Artikel, dass Singen oder Summen oder einfach Pressatmung die Sauerstoffaufnahme erhöht!<br>
Es hat mir persönlich gegen Höhenkrankheit sehr schnell geholfen. Innerhalb von 10 Minuten waren die Kopfschmerzen verschwunden, wenn ich mich erinnert habe zu singen.<br>
Eine kostengünstige Alternative zu teuren Beatmungsgeräten und für Laien ohne Ausbildung leicht anzuwendende wäre, schwer Erkrankte mit Atemproblemen, die keinen Beatmungsplatz bekommen können, in so einen Überdrucksack zu packen wie ihn die Himalaya-Bergsteiger verwenden.<br>
<br>In den letzten Zeilen bin ich von einem düsteren Szenario ausgegangen, wo Menschen mit Lungenerkrankung keinen Beatmungsplatz bekommen.<br>
Dies ist momentan leider in Italien, Spanien und im Elsass bereits der Fall.<br>
Hoffen wir, dass bei uns sich der Virus etwas langsamer ausbreitet, sodass immer genug Plätze auf Intensivstationen zur Verfügung stehen.<br>
Aber es ist doch ermutigend, dass wir selbst etwas tun können, auch wenn es uns erwischen sollte.<br>
');
*/
insertText('null','Atemnot-Infizierter',
'Den folgenden Artikel habe ich vor fast 2 Jahren geschrieben, als die Pandemie gerade anfing.<br>
Gott sei Dank ist es bisher nicht so schlimm gekommen, wie man am Anfang befürchten musste.<br>
Beim Verfassen hatte ich Tausende Menschen vor Augen, die Zuhause liegen mit dem quälenden Gefühl von Atemnot.<br>
Für diese Menschen gibt es keine wirkliche medizinische Hilfe, solange sie nicht so schwer krank sind, dass sie künstlich beatmet werden müssen.<br>
Leider ist es immer noch ein Problem, dass viele Menschen zu spät ärztliche Hilfe suchen, und zu spät beatmet werden.<br>
Nur die künstliche Beatmung kann bei schweren Lungenveränderungen das Leben retten.<br>
Die gute Nachricht ist, dass Singen ähnliche Wirkungen hat wie Beatmung, in Fällen, wo man noch abwartet oder weil  nicht genügend Beatmungsplätze zur Verfügung stehen.<br>
Dieser Artikel wendet sich an alle mit Covid-19 infizierten, die zuhause sind, die nicht schwer krank sind, oder die in der Klinik waren und denen gesagt wurde, die Lunge ist in Ordnung, sie können nach Hause gehen..<br>
Diesen Menschen könnte es helfen, zuhause zu singen!
<h2>Warum verbessert Singen die Sauerstoffversorgung des Körpers?</h2>
<p>Singen erzeugt ähnliche Effekte wie künstliche Beatmung.<br>Bei der künstlichen Beatmung spielen 2 Faktoren eine Rolle:<br>
1. Zusätzliche Gabe von Sauerstoff über die Atemmaske.<br>
2. Die Beatmung erfolgt mit Überdruck.<br>
Einen leichten Überdruck können wir durch Singen selbst erzeugen!<br>
Es ist wichtig, zu verstehen, warum wir durch Singen die Sauerstoffversorgung verbessern können.<br>Jemand der krank im Bett liegt mit Atemnot wird sich auf den Arm genommen fühlen, wenn man ihm sagt, er soll singen!<br> 
Man muss ihm deshalb verständlich erklären, wieso es ihm helfen kann, die Pressatmung (Singen) anzuwenden:<br>
<br>Deshalb hier die Theorie: Die Sauerstoffaufnahme in der Lunge hängt ab vom Luftdruck.<br>In 5000 m Höhe  beträgt der Luftdruck nur noch die Hälfte wie auf Meeresniveau<br>
Deshalb nimmt die Lunge eines Bergsteigers in dieser Höhe nur noch die halbe Menge an Sauerstoff auf.<br>Wir empfinden Atemnot und können uns nur noch langsam bewegen,<br>Hier hilft die sogenannte Bergsteigeratmung. Es ist eine Pressatmung, bei der die Ausatmung bei leicht zusammengepressten Lippen erfolgt.<br>
Dadurch erhöht sich der Luftdruck in der Lunge und die Sauerstoffaufnahme wird verbessert.<br>
Als Arzt, der auf einer Tibetexpedition eine Reisegruppe ärztlich betreut hat, weiss ich, wie schwer es ist, einen an akuter Atemnot leidenden zu überzeugen, die Pressatmung anzuwenden.<br>
Und doch ist sie die einzige Möglichkeit, die Atemnot zu bessern. Die häufige Reaktion bei Atemnot ist Hyperventilation, die die Symptome nur noch verschlechtert. <br>
Bei der Bergsteigeratmung wird während 4 Schritten gegen gepresste Lippen aus- und nur während eines Schrittes kurz eingeatmet.<br>
Das erhöht wirkungsvoll den Luftdruck in der Lunge und verhindert Hyperventilation.<br>
Was haben die Atemnot des Bergsteigers und die Atemnot des Covid-19-Kranken gemeinsam?<br>
Durch eine Lungenentzündung ist die Lunge so beeinträchtigt, dass der Gasaustausch schlechter ist,  etwa so wie auf 5000 m Höhe.!<br>
Durch die Überdruckbeatmung (oder Singen) wird die Sauerstoffaufnahme verbessert und Wasseransammlungen in der Lunge vermindert.<br>
Um zu verstehen, warum Singen die Sauerstoffversorgung des Körpers verbessert, hier noch einmal die physikalischen Grundlagen.<br>
Auf einer Höhe von 5000 m herrscht der halbe Luftdruck wie auf Meeresniveau.<br>
Da der Sauerstofftransport in der Lunge direkt vom Luftdruck abhängt, kann die Lunge auf dieser Höhe nur noch die halbe Menge an Sauerstoff aufnehmen.<br>
Deshalb entsteht beim nicht adaptierten ein starkes Gefühl von Atemot, weil die Sauerstoffsättigung des Blutes absinkt.<br>
Versucht man allerdings, durch schnelleres Atmen, die sogenannte Hyperventilation dieser Atemnot zu entgegnen, tritt der unerwünschte Effekt ein, dass dann zuviel CO2 abgeatmet wird, da deren Austausch weniger durch den Luftdruck beeinträchtigt wird.<br>
Die Folgen sind eine Verschiebung des Blut-ph-Wertes mit nachfolgenden Elektrolyt-Verschiebungen.<br>
Anstatt zu hyperventilieren sollte man deshalb die sogenannte "Bergsteigeratmung" anwenden.<br>
Diese besteht aus einer verlängerten Ausatmung gegen Widerstand, mit leicht zusammengepressten Lippen, die sogenannte Pressatmung, gefolgt von einer nur leichten, passiven Einatmung.<br>
Durch diese Pressatmung wird der Druck in der Lunge erhöht und die Sauerstoffaufnahme normalisiert sich, ohne dass zuviel Co2 abgeatmet wird.<br>
Wenn Sie ungeduldig werden und sich fragen, was hat das mit Singen zu tun, verrate ich Ihnen schon jetzt, dass das Singen eine Art von "Pressatmung" darstellt, die zu einem höheren Luftdruck in der Lunge und damit besserer Sauerstoffaufnahme führt.<br>
<br>
Dieses Prinzip wird angewendet, wenn Bergsteiger an schwerer Höhenkrankheit leiden. Sie werden in eine Hülle gepackt, in die Helfer von Aussen mit einem Blasebalg erhöhten Druck aufbauen.<br>
So kann jemand gerettet werden, bis ein Hubschrauber den Schwerkranken abtransportieren kann.<br>
<br>Bei einem schweren Verlauf der Corona-Infektion wird die Lunge schwer geschädigt, sodass diese nicht mehr genug Sauerstoff aufnehmen kann.<br>
Deshalb ist die Situation ähnlich wie bei Höhenkrankheit und auch die Behandlung.<br> 
Die lebensrettende Massnahme bei Lungenschädigung durch den Coronavirus besteht in künstlicher Beatmung mit Überdruck, wobei zusätzlich noch Sauerstoff zugesetzt wird.<br>
Bei fortschreitendem Befall der Lunge, bis dann künstliche Beatmung eingesetzt wird b.z.w. ein Beatmungsplatz frei wird, würde es dem Erkrankten helfen, wenn er die Pressatmung anwendet oder so komisch es klingt, singt oder summt.<br>
Hier kommt als Gegenargument sofort, dass jemandem, der so schwer krank ist, nicht nach Singen zu Mute ist.<br>
Meine Hoffnung ist, dass Gesunde oder Menschen mit leichten Symptomen diesen Artikel lesen, und sich dann erinnern, wenn es ihnen schlecht gehen sollte.<br>
Man kann ja sonst nichts tun. Angenommen Sie haben eine Lungenerkrankung durch eine Corona-Infektion und warten auf einen Beatmungsplatz. Vielleicht liegen Sie zuhause oder im Krankenhaus.<br>
Aber ausser Beatmen kann man nicht wirklich etwas tun. Oder doch? Da war doch der Artikel, dass Singen oder Summen oder einfach Pressatmung die Sauerstoffaufnahme erhöht!<br>
Es hat mir persönlich gegen Höhenkrankheit sehr schnell geholfen. Innerhalb von 10 Minuten waren die Kopfschmerzen verschwunden, wenn ich mich erinnert habe zu singen.<br>
Eine kostengünstige Alternative zu teuren Beatmungsgeräten und für Laien ohne Ausbildung leicht anzuwendende wäre, schwer Erkrankte mit Atemproblemen, die keinen Beatmungsplatz bekommen können, in so einen Überdrucksack zu packen wie ihn die Himalaya-Bergsteiger verwenden.<br>
Aber es ist doch ermutigend, dass wir selbst etwas tun können, auch wenn es uns erwischen sollte.<br>
<br>Stand: 30.01.2022
');

insertText('null','coronavirus-deutschland',
'<h3>Impfung gegen Covid-19 sinnvoll? -- Auf jeden Fall!</h3>
Gegen Virusepidemien sind Impfungen die einzige spezifische Massnahme!<br>
Ohne Impfstoffe wären wir durch Virusepidemien aufgrund des  Reiseverkehrs und der Bevölkerungsdichte noch mehr als frühere Generationen bedroht.<br> 
Die Impfungen sind die einzigen Waffen, die wir gegen Viren haben.<br>
Durch Epidemien starben früher regelmässig grosse Teile der Bevölkerung bis in die jüngste Zeit.<br>
<br>Erst durch die Erfindung der Impfungen und Verbesserung der Hygiene konnten wir Typhus, Pocken, Pest, Cholera usw. in den Griff bekommen!<br>
Noch vor 150 Jahren, vor der Erfindung der Eisenbahn, war der Ausbreitung von Infektionskrankheiten eine natürliche Grenze gesetzt.<br>
Die Cholera, die damals in München wütete, konnte von hier aus nicht nach Nürnberg oder Mailand kommen.<br>
Da die Fahrt mit der Postkutsche länger dauerte als die Inkubationszeit, kam ein Erkrankter nicht an sein Ziel.<br>
Er blieb im wahrsten Sinne des Wortes "auf der Strecke!"<br>
So wurde erst nach Einführung der Bahn die Cholera von München nach Nürnberg verschleppt, weil ein in München Angesteckter nach wenigen Stunden in Nürnberg ankam und die Krankheit erst dort ausbrach.<br>
Sie forderte damals in Nürnberg 500 Todesopfer und in München 2500.<br>
Mit der Postkutsche wäre der Angesteckte nicht bis Nürnberg gekommen, er wäre auf "der Strecke geblieben".<br> 
Durch den modernen Auto und Flugverkehr werden die Erreger nicht nur von Stadt zu Stadt, sondern von Kontinent zu Kontinent verschleppt.<br>
Da der einzige Schutz gegen Viren eine Impfung ist, sind wir heute neuen Viren, gegen die es noch keine Impfung gibt, noch mehr ausgeliefert als in früheren Zeiten.<br>
<br>Überhaupt gibt es Viruspandemien erst seit 5000 - 10000 Jahren.<br>
Damals wurde der Mensch vom Jäger und Sammler zum sesshaften Ackerbauern.<br>
Allmählich entstanden immer grössere Ansiedlungen. Durch diese und die unmittelbare Nähe zu den Haustieren breiteten sich Seuchen aus.<br>
Alle heute vorkommenden, den Menschen krankmachenden Virusstämme stammen aus dieser Zeit und gingen von Tieren auf den Menschen über.<br>
Masern kam zuerst bei Schafen und Ziegen vor und leitet sich vermutlich vom Rinderpest Virus ab, Pocken kam von domestizierten Kamelen über mit Kuhpocken infizierte Nagetiere, und Influenza bekamen wir von domestizierten Wasservögeln, also Enten und Gänsen. Diese paaren sich mit ihren freilebenden Verwandten, die als Zugvögel die Viren verbreiten.<br>
Kein Wunder also, wenn in einem der dichtbesiedeltsten Gebiete der Erde, in Südchina, in Guangdong auf einem Markt, in dem Wildtiere gehandelt werden, eine neue Virusvariante auftaucht.<br>
<br>In den kleinen Lebensgemeinschaften der Jäger und Sammler gibt es nicht 5ooo Individuen, die ein Virus jährlich befallen muss, um nicht auszusterben.<br>Deshalb treten Virusepidemien nur bei grossen Populationen auf, die es bei den Jägern und Sammlern nicht gab.<br>
<br><h2>Wieviel Einmischung von Seiten des Staates bei Pandemien darf sein?</h2><br>
Im Gespräch mit Impfgegnern stelle ich fest, dass es eine Gruppe gibt, die hauptsächlich aus "Trotz" die Impfung ablehnen, weil sie es als Bevormundung empfinden, indirekt zur Impfung gezwungen zu werden.<br>
Dies sehen sie als unberechtigten Eingriff in ihre Persönlichkeit.<br>
In der Vergangenheit hatten wir jedoch mehrmals Impfpflicht bei Pocken, Kinderlähmung und praktisch auch bei Masern-Mumps-Röteln, ohne dass diese Impfungen als unberechtigter Eingriff empfunden worden wären.<br>
Wahrscheinlich wird Covid-19 von vielen Menschen als wenig gefährlich eingestuft. Dies hängt oft davon ab, ob man im Bekanntenkreis jemand kennt, der ernsthaft an Corona erkrankt oder gestorben ist.<br>
Ich habe auch mehrmals gehört, dass Patienten glauben, Covid-19 gäbe es gar nicht. Diesen konnte ich allerdings versichern, dass ich selbst viele positive Tests gesehen habe und mehrere kenne, die ihre Grosseltern durch Covid-19 verloren haben!<br>   
Warum soll der Staat bei einer Pandemie denn keine Impfpflicht verordnen dürfen?<br>
<br>Traditionell war seit Entstehung der ersten Städte und der in diesen zwangsläufig entstehenden Seuchen vor 5000 - 10000 Jahren eine der <b>Hauptaufgaben der Obrigkeit die Seuchenbekämpfung</b>.<br>
Im vorindustriellen Italien war die Aufgabe der damals noch schlanken Kommunen:<ul>
<li>1. Die Verteidigung im Kriegsfall
<li><b>2. Die Seuchenbekämpfung</b>
<li>3. Das Organisieren von Festen.
</ul>
<br>
Es blieb lange rätselhaft, warum frühere Hochkulturen plötzlich ein abruptes Ende nahmen, ohne dass Zeichen von Gewalteinwirkung, Feuer, Krieg zu finden sind.<br>
Heute sind sich die Wissenschaftler ziemlich sicher, dass das plötzliche Ende einst blühender Hochkulturen durch grassierende Seuchen verursacht wurde.<br>
<b>Fazit: </b>Seit dem Übergang zur Sesshaftigkeit und dem Leben in grösseren Siedlungen sind Menschen ständig von Seuchen bedroht.<br>
Alle  Viren, die für Menschen pathogen sind, sind irgendwann vom Tier auf den Menschen übergegangen. Das ist also der Normalfall und braucht uns kein Kopfzerbrechen zu bereiten.<br>
Im Gegensatz zu früher sind wir durch den modernen Verkehr sogar noch weitaus mehr durch Pandemien gefährdet. Impfungen sind das Einzige, was wir gegen Viren therapeutisch machen können.<br>
Der medizinische Fortschritt der heutigen Zeit ist in der Hauptsache auf die Impfungen zurückzuführen.<br>
<br>Stand: 30.01.2022
');

insertText('null','covidpass',
'<h3>Wir erstellen aus Ihren mitgebrachten Impfbescheinigungen<br>das digitale Impfzeugnis,</h3>
<h4>Erstellung des digitalen Impfzeugnisses aus ihren Impfdaten</h4>
<p>Es gibt verschiedene Apps für das Handy, in die sie dann die von uns erzeugten QR-Codes einscannen können.<br>
Die "covidpass" app wird aus dem Google Playstore runtergeladen.<br>
Wenn sie dort nicht gelistet ist, haben sie wahrscheinlich noch nicht Android 6.0!<br> Mit früheren Android-Versionen ist die covidpass - app nicht kompatibel.
<br><br>Der Nachweis einer durchgemachten Covid-19 Infektion zählt soviel wie eine Impfung, sofern sie nicht länger als 6 Monate her ist.<br>
Genesene brauchen also nur eine Impfung!
<br>Stand: 24.10.2021
');

insertText('null','telefon-AU',
'<h3>Die Möglichkeit, telefonisch eine AU auszustellen<br>wurde bis 31.12.21 verlängert!</h3>

<h4>Keine AU für Personen in Quarantäne ohne Symptome!</h4>
<h4>Keine AU für Personen in Kurzarbeit ohne Symptome!</h4>
Der Grund ist, dass in diesen Fällen keine Krankheit vorliegt. Der Arbeitnehmer wird freigestellt, es gibt eine Entschädigung von einer Behörde.<br>
<br>Stand: 20.10.2021
');

insertText('null','Elektronische-AU',
'<h2>Seit 1.10. erwartet die Empfänger einer AU-Bescheinigung eine Überraschung!</h2>
<h3>Das vielen "lieb gewordene" gelbe Formular wurde durch einen Ausdruck auf weissem Papier ersetzt"</h3>
Der Abschnitt für die Krankenkasse entfällt, er wird nun automatisch elektronisch übermittelt.<br>
Für den Patienten ist es also einfacher geworden. Er muss nichts mehr an die KK schicken.
<br>Stand: 20.10.2021
');

/*
insertText('null','coronavirus',
'<br>Wenn Sie an sogenannten Erkältungssymptomen leiden, haben Sie höchstwahrscheinlich einen Virusinfekt.<br>
Dies könnte theoretisch auch eine Infektion mit dem neuen Covid-19 Virus sein.<br>
<br>
Es gibt anscheinend Unterschiede in den Symptomen.<br>
Laut einem Artikel aus "Spiegel Wissenschaft" leiden mit Coronavirus infizierte meist an Fieber und Husten, weniger an Schnupfen, Niessen, Hals- und Kopfschmerzen.<br>
Dies sei eher typisch für die grippalen Infekte.<br>
Eine Infektion mit dem Corona-Virus ist im Moment bei ca. 100 positiv getesteten Fällen in München noch unwahrscheinlich.<br>
Laut Anweisung der Kassenärztlichen Vereinigung Bayerns sollen Patienten mit dringendem V.a. Coronavirus nicht in den Praxen getestet werden.<br>
Dies würde zu einer nicht zu verantwortenden Gefährdung der übrigen Patienten führen.<br>
Ausserdem müsste die Praxis für 14 Tage geschlossen und alle anwesenden Patienten sowie das Personal in Quarantäne kommen.<br>
<br>
Bitte rufen Sie nur in begründeten Verdachtsfällen an, da sonst für wirklich betroffene zu lange Wartezeiten entstehen!<br>
Die Rufnummer ist: 116117<br>
<br><br>Stand: 17.03.2020
');

insertText('null','coronavirus',
'<br>Wenn Sie an sogenannten Erkältungssymptome wie Schnupfen, Hals- und Kopfschmerzen, Fieber und Husten leiden, haben Sie höchstwahrscheinlich einen Virusinfekt.<br>
Dies könnte theoretisch auch eine Infektion mit dem neuen Covid-19 Virus sein.<br>
<br>
Laut Anweisung der Kassenärztlichen Vereinigung Bayerns sollen Patienten mit dringendem V.a. Coronavirus nicht in den Praxen getestet werden.<br>
Dies würde zu einer nicht zu verantwortenden Gefährdung der übrigen Patienten führen.<br>
Ausserdem müsste die Praxis für 14 Tage geschlossen und alle anwesenden Patienten sowie das Personal in Quarantäne kommen.<br>
<br>Deshalb wurde ein Fahrdienst rund um die Uhr eingerichtet, der die Tests bei den Patienten zuhause durchführt.<br>
Bitte rufen Sie nur in begründeten Verdachtsfällen an, da sonst für wirklich betroffene zu lange Wartezeiten entstehen!<br>
Die Rufnummer ist: 116117<br>
<br>Die Krankenhäuser haben die Möglichkeit, bei Verdacht auf Covid-19virus den Test durchzuführen, wegen der hohen Nachfrage sind die Ambulanzen jedoch überfordert und weisen Patienten, bei denen keine Reise in Risikogebiete oder Kontakt mit Reisenden in Risikogebiete oder Kontakt mit Erkrankten bestand, zurück.<br>
Eine Infektion mit dem Corona-Virus ist in diesen Fällen unwahrscheinlich und wird im Moment nicht durchgeführt.<br>
<br>Aktuelle Risikogebiete sind unter <a href="https://www.rki.de/covid-19-risikogebiete"> Risikogebiete</a> abrufbar.<br><br>
Falls Sie übrigens hohes Fieber haben, sprich 40 Grad, haben Sie wahrscheinlich eine Influenza, derzeit Februar/März sehe ich täglich 3 Influenza-Fälle in der Praxis.<br>
<h3>Wann ist eine Laboruntersuchung indiziert?</h3>
Eine Laboruntersuchung auf SARS-CoV-2 ist dann angezeigt, wenn es sich bei den Betroffenen um begründete COVID-19-Verdachtsfälle handelt, d.h. sie<br>
unspezifische Allgemeinsymptome oder akute respiratorische Symptome jeder Schwere<br>UND innerhalb der letzten 14 Tage vor Erkrankungsbeginn Kontakt zu einem bestätigten COVID-19-Fall hatten
<br>und/oder akute respiratorische Symptome jeder Schwere mit oder ohne Fieber haben
<br>UND sich innerhalb der letzten 14 Tage vor Erkrankungsbeginn in einem Risikogebiet aufgehalten haben.<br>Aktuelle Risikogebiete sind unter <a href="https://www.rki.de/covid-19-risikogebiete"> Risikogebiete</a> abrufbar.
<br><br>Bei Patientinnen und Patienten, die diese Kriterien nicht erfüllen, ist eine Laboruntersuchung auf SARS-CoV-2 angezeigt, wenn Zeichen einer Viruspneumonie unklarer Ursache vorliegen oder eine Exposition möglich war (z.B. Reiserückkehrer aus Ländern und Regionen, in denen einzelne Infektionsfälle mit und ohne Rückverfolgbarkeit der Infektionsketten oder auch Infektions-Cluster aufgetreten sind, ohne dass es Hinweise auf eine anhaltende und breite Viruszirkulation in der Bevölkerung gibt, siehe auch SARS-CoV-2/COVID-19 in die Differentialdiagnose einbeziehen).
<br>Es gibt Hinweise, dass der Covid-19 Virus im Körper die Bildung von Interferon hemmt, einen körpereigenen Abwehrstoff.<br>
Entgegen einem intuitiven Verständnis werden bei einer Virusinfektion die allgemeinen Krankheitszeichen wie Abgeschlagenheit, Gliederschmerzen, Schwitzen und Fieber nämlich nicht durch die Erreger verursacht, sondern durch das körpereigene Interferon.<br>
So wäre es zu erklären, dass die an Covid-19 Virus Erkrankten sich lange Zeit nicht krank fühlen, und deshalb weiterhin Andere anstecken können.<br>
Das ist genau das Problem, dass man es einem Erkrankten lange Zeit nicht anmerkt, und er sich selbst lange nicht krank fühlt, weil er wegen der unterdrückten körpereigenen Interferonproduktion sich nicht krank fühlt.<br>
<br>Wir legen uns ins Bett wenn wir krank sind, weil uns unser eigenes Interferon uns sich krank fühlen lässt, nicht weil der Virus uns schlapp macht.<br>
Natürlich macht uns am Ende auch der Virus schlapp, wenn genügend Körperzellen zerstört sind, aber das typische Krankheitsgefühl am Anfang einer Virusinfektion, das uns von der Arbeit zu Hause bleiben lässt, kommt vom Interferon!
<br>
Je schwerer sich jemand bei Grippe krank fühlt, umso besser ist normalerweise sein Immunsystem, weil er viel Interferon produziert.<br>
Deshalb glaube ich, dass dieser Covid-19 Virus uns noch einige Zeit beschäftigen wird, weil er unser Immunsystem austrickst und eine Infizierte dadurch viele andere ansteckt, weil sie sich ja gar nicht krank fühlt.<br>
Es gibt sogar Hinweise, dass manche Viren unser Verhalten so beeinflussen können, dass ein Infizierter gesprächiger wird, leicht manisch und sogar mehr unter Menschen geht.<br>
<br>
Dass dies realistisch ist, kann man daraus ersehen, dass mit Prionen des Rinderwahnsinns infizierte Ameisen deren Verhalten so steuern, dass sie nicht in ihren Bau zurückkehren, sondern am Ende eines Grashalms verharren.<br>
So können sie von grasenden Pflanzenfressern leicht aufgenommen werden. Prionen sind noch wesentlich einfacher gebaut als Viren.<br>
<br><br>Stand: 06.03.2020
');
*/



insertText('null','fastenzeit',
'Gerade in der traditionellen vorösterlichen Fastenzeit sind viele Menschen hochmotiviert, ihren Gürtel vorübergehend enger zu schnallen.<br>
Hat man doch seit letztem Jahr wahrscheinlich wieder ein paar Pfunde zugelegt.<br>
Doch wie soll man es am Besten anstellen?<br>
Früher hat man ganz einfach auf Fleisch und Wurst verzichtet, damit erspart man sich schon eine Menge Kalorien, vor Allem durch den Verzicht auf Wurstwaren, enthalten diese doch 50 % tierische Fette, die man sowieso vermeiden sollte.<br>
Hinzugekommen ist in der heutigen Zeit jedoch das enorme und verführerische Angebot an Süssigkeiten, die es früher einfach nicht gab.<br>
Deshalb erweitern viele Menschen freiwillig den Verzicht auf Fleisch und Wurst auch auf Süssigkeiten.<br>
Doch ist es inzwischen eine kleine Minderheit, die ihr Leben nach christlichen Gebräuchen ausrichten.<br>
<br>Fasten ist jedoch für sehr viele Menschen sinnvoll und ärztlicherseits empfehlenswert.<br>Ausserdem möchte man ja im Sommer im Schwimmbad und am Strand eine gute Figur machen!<br>
Doch wie stellt man es am Besten an, die Pfunde purzeln zu lassen, denn darum geht es in erster Linie?<br>
<br>Intervallfasten<br><br>
Eine Studie konnte zeigen, dass es effektiver ist, intermittierend zu fasten als kontinuierlich.<br>Dies ist wahrscheinlich darauf zurückzuführen, dass bei kontinuierlichem Fasten der Stoffwechsel heruntergedrosselt wird, ein Überlebensmechanismus unseres Körpers, mit dem er in Hungerzeiten Energie einspart und das Überleben sichert.<br>
Lässt man jedoch nur eine Mahlzeit pro Tag weg, dann tritt diese Drosselung des Stoffwechsels nicht ein, weil unser Körper noch keinen Hungerszustand erkennt.<br><br>
Jedoch tritt nach einer Essenspause von 15 Stunden ein anderer Mechanismus in Kraft, der in den Mitochondrien die Enzyme für die Fettverbrennung aktiviert. Erst dann werden Fettreserven abgebaut.<br>');

 
insertText('null', 'naturheilmittel',
'Schon mal daran gedacht, sich das Geld für rezeptfreie Medikamente, wie pflanzlichen Hustensaft, Schmerzgel oder Globuli erstatten zu lassen? Das ist bei vielen Krankenkassen möglich.<br><br>
In der Regel werden rezeptfreie Medikamente aus dem Bereich der Phytotherapie, also Pflanzenmedizin, der Homöopathie sowie der anthroposophischen Medizin bezahlt. Einige Kassen erstatten aber auch nur homöopathische Medikamente oder nur für Schwangere.
Was und wie viel erstattet wird, ist von Kasse zu Kasse stark unterschiedlich. Auch ist die Höhe der möglichen Erstattungen pro Jahr unterschiedlich und in der Regel begrenzt. Die meisten Krankenkassen erstatten zwischen 50 bis 120 Euro pro Jahr und Versichertem. Beispiel: Die Techniker Krankenkasse oder auch die meisten BKK erstatten für rezeptfreie Medikamente aus den Bereichen Phytotherapie, Homöopathie und Anthroposophie zum Beispiel bis 100 Euro pro Jahr und Versichertem. Eine vierköpfige Familie kann sich damit pro Jahr die Kosten für bis zu 400 Euro für rezeptfreie Medikamente wieder zurückholen. Eine Familie mit drei Kindern kann somit maximal bis 500 Euro pro Jahr an Kosten für pflanzliche Erkältungsmittel, Schmerzgels, Heuschnupfenpräparate, Globuli und ähnlichem sparen.<br>
Einen aktuellen überblick gibt der Link.<br>
Man kann die Rezepte der letzten 4 Jahre erstatten lassen, vorausgesetzt man hat auch noch die Quittung von der Apotheke.<br>
Das ist die Voraussetzung: eine ärztliche Verordnung und die Apothekenquittung.<br>
Beispielhaft habe ich unten einen Link für das Erstattungsformular der TK eingerichtet.<br>
Ein Tip: Sich bei den KK immer mit der zuständigen Abteilung verbinden lassen, da mir schon viele Fehlinformationen berichtet wurden.');

insertText('null', 'allerg',
'<p>Wir führen Allergietests durch sowohl auf der Haut \(Prick-Test\) als auch aus dem Blut \(Rast-Test\).
Die Blutuntersuchungen auf Allergien können bei konkretem Verdacht auf bestimmte Allergien eingesetzt werden, eignen sich jedoch nicht als Screening-Methode bei vagem Verdacht auf z.B. eine Lebensmittelallergie.<br>
Die Zahl der nötigen Tests wäre zu gross.<br>
Hier muss der Patient im Vorfeld durch Auslassversuche und gewissenhaftes Führen eines Ernährungstagebuches die Suche nach möglichen Allergenen eingrenzen.<br>
Deshalb bleiben Untersuchungen auf Lebensmittelallergien meist erfolglos.<br>
Es gilt: ohne Ernährungstagebuch über mindestens 14 Tage und konkreten Verdacht ist eine Untersuchung auf Lebensmittelallergien sinnlos!
</p>  
<p>Die Ergebnisse des Prick-Tests können nach 20 min. abgelesen werden. Die Bluttests werden ins Labor geschickt und die Ergebnisse liegen am nächsten Tag vor.</p>
<p>Bei Pollenallergie (Heuschnupfen) und Allergie gegen Tierhaare mit stärkeren Beschwerden empfehle ich die sublinguale Hyposensibilisierung.
Dabei sind keine Spritzen notwendig, sondern es werden Tropfen der Allergielösung unter die Zunge getropft und dort für 1 -2 Minuten belassen und danach geschluckt.</p>');

insertText('null', 'az',
'<p>Gerade übergewicht im Kindheits- und jungen Erwachsenenalter hinterlässt lebenslange Schäden, die sich auch bei späterer Gewichtsabnahme nicht mehr beseitigen lassen.</p>
<p>Ursache sind Bewegungsmangel und Zufuhr hyperkalorischer, also energiereicher Lebensmittel. Günstig sind wasserreiche Lebensmittel wie Gemüse, Obst, Suppen.</p>
<p>Die Zahl der Zuckerkranken in Deutschland und besonders den Schwellenländern nimmt weiter zu. Dies hängt vor allem mit dem Übergewicht zusammen, das ebenfalls stark zunimmt, sowie dem Mangel an Bewegung in vielen Berufen.</p>
<p>Derzeit leiden 8 % der Bevölkerung an einer bekannten, manifesten Zuckerkrankeit.<br>
Weitere 8 % leiden an einer noch nicht entdeckten, aber bereits ausgebrochenen Zuckerkrankheit und bei weiteren 16 % befindet sich die Krankheit in einem Vorstadium.<br>
Insgesamt sind 40 % der Bevölkerung hinsichtlich ihres Zuckerstoffwechsels auffällig und es ist folglich mit einem weiteren Ansteigen des Diabetes in unserer Gesellschaft zu rechnen.</p>
<p>Während sich in Deutschland die meisten Leute jedoch  einigermassen kalorienbewusst ernähren, und Sport treiben, nimmt in den Schwellenländern die Zuckerkrankheit, der Diabetes, mit rasanter Geschwindigkeit zu.</p>
<p>So sind z.B. die nordamerikanischen Indianer aktuell nicht mehr durch Völkermord sondern durch Diabetes vom Aussterben bedroht.!</p>
<p>Überall auf der Welt, wo die Menschen ihre traditionelle Ernährung und körperliche Tätigkeit aufgegeben haben, und sich von hochkalorischen Nahrungsmitteln wie Wurst, Käse, Fast - Food und süssen Softdrinks ernähren, breitet sich der Diabetes rasant aus.<p>');

insertText('null', 'check-up', 
'Was untersucht der Arzt?<h4>1. Herz und Kreislauf</h4>Der Arzt bestimmt die Pulsfrequenz, achtet darauf, ob der Herzrhythmus regelmässig ist, und misst den Blutdruck. Ab 140/90 mmHg beginnt der Bluthochdruck, der das Risiko für Schlaganfall, Herzinfarkt und Nierenversagen drastisch erhÃ¶ht.<br>
Ein EKG (Elektro-Kardiogramm) oder ein Belastungs- EKG gehört nicht zum Check-up 35, kann aber bei akuten Beschwerden natürlich von uns durchgeführt werden, bzw. erfolgt AbklÃ¤rung durch den Kardiologen.<br>
<h4>2. Blutwerte</h4>Für die Bestimmung der Blutwerte müssen Sie morgens nüchtern, das heisst ohne gefrühstückt zu haben, in die Arztpraxis kommen. Sie dürfen und sollen sogar Tee oder Kaffee ohne Milch und Zucker trinken.<br>
Bei der Untersuchung im Rahmen des Check-up 35 werden im Labor folgende Werte ermittelt:<br>
1. der Blutzucker-Wert. Er sollte zwischen 60 und 100 mg/dl (kapillares Vollblut) liegen<br>
2. der Gesamtcholesterin-Spiegel (Ziel: 200 bis 220 mg/dl). Er kann dem Arzt einen ersten Anhaltspunkt auf erhöhte Blutfette liefern. Falls nötig, wird er die Werte für das "schlechte" LDL und das "gute" HDL-Cholesterin gesondert bestimmen lassen;<br>
Sie sollten unter 160 bzw. über 40 mg/dl liegen, das Verhältnis LDL : HDL sollte bei Gesunden kleiner als 3, bei Risikopatienten noch niedriger sein.<br>
Im Labor wird das tiefgefrorene Blutserum für einige Tage aufgehoben, es können dann z.B. noch das "schlechte" LDL und das "gute" HDL-Cholesterin nachgefordert werden, falls das Gesamtcholesterin beim Check-Up erhöht war.<br>
<h4>3. Urinprobe</h4>
Zusätzlich zur Blutprobe kann im Labor eine Urinprobe untersucht werden. Sie hilft, Nieren- Erkrankungen, -steine, bakterielle Infektionen, Diabetes und Mangelernährung zu erkennen.<br>
Ebenso können natürlich bei Verdacht oder zum Ausschluss bestimmter Erkrankungen alle notwendigen Untersuchungen durchgeführt werden.');

insertText('null', 'grippe', 
'<h4>Was ist Grippe? Ein Virusinfekt des Körpers durch den Influenza-Virus</h4>Was ist besonders am Influenza Virus<br>Es gibt unzählige Viren. Die wenigsten davon können den Menschen etwas anhaben.<br>Und die meisten davon verursachen nur eine sogenannte Erkältung oder grippalen Infekt. Es gibt jedoch auch tödliche Viren wie z.B. Ebola, HIV, Pocken, Gelbfieber.<br \>
Der Influenza Virus gehört zu den gefährlichen Viren, er kann auch zu Todesfällen führen.

<br>Die Viren, die nur leichte Symptome verursachen, verbreiten sich logischerweise am schnellsten, weil der Erkrankte trotzdem noch unter Menschen gehen und so auch mehr Leute anstecken kann. Wer dagegen eine Grippe mit dem Influenzavirus hat, ist meist eine Woche ans Bett gefesselt und kann nur wenige anstecken.<br>In unserer Praxis haben wir jährlich 25 bis 40 Influenzafälle. Bei anderen Virusinfekten, die einen grippalen Infekt verursachen, kann es vorkommen, daß an einem Tag bis zu 80 Patienten unsere Praxis aufsuchen.<br>Es ist wichtig, eine Grippe richtig zu diagnostizieren. Denn das hohe Fieber, starker Husten und schlechter Allgemeinzustand kann auch durch eine Lungenentzündung hervorgerufen werden, eine lebensgefährliche Erkrankung, die mit Antibiotika behandelt werden muß.<br><br>Influenza kann der Arzt sehr einfach diagnostizieren durch einen Rachenabstrich. Das Ergebnis liegt nach 1 Tag vor. Dieser Test weist lebende Viren nach und ist daher nur die ersten 4 Tage positiv, weil danach die Viren durch das Immunsystem eliminiert werden.<br>

Eine echte Grippe bekommt man statistisch alle 10 Jahre. Sie nimmt einen schwereren Verlauf als eine Erkältung.<br>Hohes Fieber über mehrere Tage, starke Kopf- und Gliederschmerzen und meist starker Husten. Todesfälle werden durch Herz-Kreislaufversagen ausgelöst, weil der Virus den Herzmuskel angreift.<br>Deshalb muss nach einer überstandenen Grippe eine Sportpause eingelegt werden.<br> Die Diagnose ist einfach durch einen Mundabstrich zu stellen. Welche Therapie gibt es? übliche Antibiotika sind  gegen Grippe unwirksam. Sinnvoll sind nur Schmerzmittel. Wenn es aber keine spezifische Behandlung gegen Influenza gibt, was bringt dann der Labornachweis? Sehr viel   
<h4>2.');

insertText('null', 'hoehenkrankheit',
'<h3>Vorbeugung von Höhenkrankheit</h3>
<p>In diesem Artikel möchte ich nur auf einen Aspekt der Höhenkrankheit eingehen, der aber in den meisten Veröffentlichungen nicht oder nur am Rande erwähnt wird : <strong>Die "Pressatmung"</strong></p>
Ich fand die Pressatmung in einem dicken Werk über Höhenkrankheit, das ich anlässlich der Betreuung einer Reisegruppe auf einer Reise nach Tibet studierte, mit nur einem Satz erwähnt.<br><br>
Das Prinzip leuchtet ein: Durch die Ausatmung bei leicht geschlossenen Lippen entsteht in der Lunge ein erhöhter Druck, der den erniedrigten Luftdruck in der Höhe kompensieren kann.<br><br>
In der Praxis ist es manchmal schwierig, die Betroffenen, die bereits unter Atemnot leiden, daran zu hindern, zu hyperventilieren, und statt dessen zu einer ruhigen Pressatmung überzugehen.<br>
Langsam gegen erhöhten Luftdruck auszuatmen erscheint ihnen kontraproduktiv und vermehrt ihre Angst.<br>
Hier muss der Helfer seine ganze überzeugungskraft einsetzen, um den Höhenkranken von der Hyperventilation abzuhalten.<br>
<p>Bei der Pressatmung während dem Gehen wird während 4 Schritten langsam ausgeatmet gegen den Widerstand der leicht geschlossenen Lippen, und dann nur während eines Schritts passiv eingeatmet, d.h. soviel Luft, wie von selbst in die Lungen ströhmt.<br>
Hierbei muss man unbedingt der Versuchung widerstehen, bei einer Atemnot "wild" einzuatmen, da dies nur zu einem Hyperventilationssyndrom führt.<br>
Durch die Pressatmung wird jedoch der Druck in der Lunge erhöht, und somit die Ursache der Höhenkrankheit, der verminderte Luftdruck, beseitigt.<br>
<br>Anstatt die Lippen zusammenzupressen könnte man auch leise singen bzw. "summen". Dies hat auf meiner Reise in Tibet bei der Reisegruppe, die ich betreut habe, einwandfrei funktioniert.</div></div>');

insertText('null', 'homoeopathie',
'In letzter Zeit ist die Homöopathie ins Schussfeld geraten, konnte doch bisher kein wissenschaftlicher Beweis der Wirksamkeit der Homöopathie gegenüber Placebo erbracht werden!</p>
<p>Placebos sind Scheinmedikamente, die keinen Wirkstoff enthalten.</p>
<div class="red_bold">
<p>Sensationelle  Entdeckungen der Gehirnforschung haben jedoch gezeigt, dass die bisher geringschätzig beurteilte "Placebowirkung"  eindeutig messbare stoffliche Veränderungen  im Gehirn bewirkt.<br>
- Homöopathie wirkt doch: Placebos setzen im Gehirn Endorphine frei.</p>
</div>
<p>Wer ein Placebo einnimmt im Glauben, es sei ein Schmerzmittel, dessen Gehirn setzt Endophine frei, die wirksamsten Schmerzmittel überhaupt!</p>
<p>Voraussetzung ist bei der Placebowirkung, dass sowohl der Arzt als auch der Patient wirklich daran glaubt.</p>
<p>Wer jetzt aber glaubt, er könne Homöopathie als Humbug und Scharlatanerie bezeichnen, weil die Wirkung der Homöopathie auf dem Placeboeffekt beruht, der irrt:<br>
Die Wirkung vieler synthetisch hergestellter Medikamente beruht ebenfalls auf dem Placeboeffekt!</p>
<p>Während homöopathische Medikamente keine Nebenwirkungen haben können, da sie rein physikalisch allenfalls Spuren von Wirkstoffen enthalten, ist dies bei synthetischen Medikamenten nicht der Fall.</p>
<p>Jahrzentelang bekamen Patienten mit Herzschwäche von Schulmedizinern Digitalispräparate verabreicht, inzwischen haben sich diese in Bezug auf Herzstärkung als unwirksam erwiesen.<br>
Trotzdem können Digitalispräparate gefährliche Herzrythmusstörungen hervorrufen.</p>
<p>Die Schulmedizin hat inzwischen die Anwendung von Antibiotika bei banalen Erkältungen, die durch Viren ausgelöst werden, als unwirksam erkannt, die Gabe von Antibiotika bei Virusinfekten ist nicht mehr als ein Placebo, da Antibiotika gegen Viren unwirksam sind.<br>
Dass sie oft trotzdem wirken, beruht auf Placeboeffekt, weil Arzt und Patient daran glauben.</p>
<p>Hier handelt es sich allerdings um Placebos mit gefährlichen Nebenwirkungen, während homöopathische Erkältungsmittel wie Ferrum phosphoricum, Aconitum, Bryonia oder Meteoreisen keine Nebenwirkungen besitzen.');

insertText('null', 'hpv',
'<p>Die Impfung besteht aus drei Einzeldosen zu je 0,5 ml, die i.m. gespritzt werden.<br>
Die Impfungen erfolgen im Idealfall nach folgendem Schema: 0, 2, 6 Monate.<br>
Sollte hiervon ein abweichendes Impfschema erforderlich sein, ist die zweite Dosis frühestens einen Monat nach der ersten und die dritte frühestens drei Monate nach der zweiten Dosis zu verabreichen. Alle drei Dosen sind innerhalb von 12 Monaten zu verabreichen.<br>
In Deutschland kostet eine Impfdosis nach Angaben des Herstellers im Januar 2007 155,05 Euro; die gesamte Grundimmunisierung also 465,14 Euro.<br>
<br>Da die "ständige Impfkommission" (STIKO) die neue Impfung derzeit für MÃ¤dchen zwischen zwölf und 17 Jahren empfiehlt, müssten Interessierte anderer Alters- und Personengruppen individuell bei ihrer Kasse erfragen, ob diese auch ausserhalb der STIKO-Empfehlung die Kosten für die HPV-Impfung übernimmt. <br>
<br>So haben einige gesetzliche Krankenkassen bereits vor der STIKO-Empfehlung die Kosten für den neuen HPV-Impfstoff für weibliche und zum Teil auch für männliche Versicherte ab dem Alter von frühestens neun Jahren bis maximal zur Vollendung des 26. Lebensjahres übernommen, je nach Kasse. Nicht auszuschliessen ist, dass die betreffenden Kassen die individuellen Altersbeschränkungen auf die STIKO-Empfehlung anpassen. <br>
Für privatversicherte Personen gilt der jeweilige Vertrag. Sie müssten die Frage der Kostenübernahme individuell mit ihrer Kasse klären.</p> ');


insertText('null', 'hz',
'Durch kräftiges Schnäuzen wird der virusreiche Schleim aus der Nase direkt in die Nebenhöhlen gepresst.</p>
<p>Amerikanische Forscher fanden beim Schnäuzen einen 10-fach so hohen Druck wie beim Niesen oder Husten. <br>
Kein Wunder also, dass der Schleim beim Naseputzen bis in den letzten Winkel der Nasennebenhöhlen gelangt.</p>
<p>Beim sogenannten "Hochziehen" jedoch entsteht ein kräftiger Unterdruck in den Nasennebenhöhlen, der den Schleim zum Abfliessen bringt.<br>
Zwar bekommt nicht jeder verschnupfte Naseputzer gleich eine schwere Nebenhöhlenentzündung, trotzdem könnte das Schnäuzen die Dauer des lästigen Schnupfens verlängern, heisst es im -New Scientist-
<br<br>
Im September 2010 stelte Dr. von Hirschhausen in seiner beliebten Quiz-Sendung die Frage: "was ist gesünder, Hochziehen oder Schnäuzen?
<br>Alle 3 Kandidaten beantworteten die Frage falsch mit "Schnäuzen". <br>Dr. von Hirschhausen erklärte, dass man beim Schnäuzen die Viren auf die Hände und in die Umwelt verteilt, während,  wenn man nach dem Hochziehen den Schleim runterschluckt, die Viren und Bakterien durch die Magensäure unschädlich gemacht werden.<br>
Hier eine Empfehlung "hochzuziehen" nach kurzer Werbung und Ratschlägen zu Fieber und Nasensprays: <a href=\'http://www.focus.de/gesundheit/videos/achtung-grippewelle-das-sind-die-fuenf-groessten-fehler-im-kampf-gegen-erkaeltungen_id_4505623.html\'>FOCUS ONLINE</a><br>
<br>
Gerade bei peinlichen Themen gibt es viele Scherze, so bei Wikipedia unter <a href=\'http://de.wikipedia.org/wiki/Wikipedia:Auskunft/Archiv/2010/Woche_48#Sputum\'>Link zu wikipedia</a> <br>');


insertText('null', 'impfungen',
'Die Hepatitis B Impfung  schützt vor der Ansteckung mit dem Hepatitis B Virus, der eine Leberentzündung (Hepatitis) verursacht.<br>
Die übertragung des Hepatitis-B-Virus erfolgt über infiziertes Blut, sexuell (Vergewaltigung !) oder während der Geburt.
Daneben kann das Virus aber auch über Spritzen oder Nadeln übertragen werden.<br>Risikofaktoren sind daher der Gebrauch von Drogen, Tätowierungen oder Körperpiercing. Auch eine Übertragung des Hepatitis-B-Virus über offene Wunden, Rasierklingen oder Zahnbürsten ist möglich.<br><br>
In Deutschland hat 1 % der Bevölkerung eine chronische Hepatitis B, während 5 -7 % der Weltbevölkerung unter einer chronischen Hepatitis B leiden.<br>  
Deshalb wird die Hepatitis B Impfung als Reiseimpfung für Mittel- und Südamerika, Afrika, Indien, China, Thailand und andere asiatische Länder empfohlen.<br>
-Also auf jeden Fall vor dem 18. Lebensjahr noch impfen lassen, denn die nächste Reise kommt bestimmt und nicht alle Krankenkassen übernehmen Reiseimpfungen!<br>
<h5 class=\'preise\'>Impfungen, die von allen Krankenkassen bezahlt werden:</h5>
<ul id=\'diphterie\' >
<li>Diphterie-, Tetanus-, Polio-Impfung</li>
<li>Zeckenschutz-Impfung (FSME)</li>
<li>Grippe-Impfung</li>
<li>Hepatitis-B-Impfung bis zum 18. Lj.</li>
</ul>
<h5 class=\'preise\'>Impfungen für die häufigsten Reiseländer:</h5>
<table id=\'preise75\'>
<tr><td>China:<td>Hepatitis- A, B, Typhus-Impfung, Malaria in einigen Provinzen, Tollwut<br>event. Japanische Enzephalitis</tr>
<tr><td>Asien allgemein<td>Kein Gelbfieber in Asien! Im Winterhalbjahr Grippeimpfung, Hepatitis- A, B, Typhus-Impfung, Malaria in einigen Ländern, Tollwut<br>event. Japanische Enzephalitis</tr>
<tr><td>Indien:<td>Hepatitis- A, B, Typhus-Impfung, Malaria, Tollwut-Impfung</tr>
<tr><td>Türkei:<td>Hepatitis- A, Tollwut-Impfung</tr>
<tr><td>Thailand:<td>Hepatitis- A, B, Typhus-Impfung, Malaria, Tollwut-Impfung </tr>
<tr><td>ägypten:<td>Hepatitis- A-Impfung</tr>
<tr><td>Afrika:<td>Hepatitis- A, B, je nach Land Malaria, Gelbfieber-, Tollwut-Impfung</tr>
<tr><td>Südamerika:<td>Hepatitis- A, B, je nach Land Malaria, Gelbfieber-, Tollwut-Impfung</tr>
<tr><td>Generell<td>Tetanus, Diphterie, Polio-Impfung</tr>
<tr><td>Gelbfieber-Impfung<td>Gelbfieber kommt in Asien nicht vor, jedoch droht Gelbfieber in einigen zentralafrikanischen und südamerikanischen Ländern<br>
Die Gelbfieber-Impfung ist die einzige Impfung, die nur von zugelassenen Gelbfieber-Impfstellen durchgeführt werden darf. Unsere Praxis ist eine zugelassene Gelbfieber-Impfstelle.</tr>
</table>
Die Länder, in denen am häufigsten eine Infektion mit Hepatitis A erfolgte, sind:<br>
Türkei, Spanien, Pakistan, ägypten, Indien, China und Afrika.');

insertText('null', 'impressum',
'<div class="notfall-praxis">
<table class=\'notfall-praxis\' cellspacing="0" >
<tr><td><h3>Impressum</h3></td>
</tr>
<tr><td>Pflichtangaben nach Â§ 5 Telemediengesetz</td>
</tr>
<tr>
<td>
<table class="notfall-praxis"  cellspacing="5" >
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Name<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Dr. med. Karl Theodor Zeitler</td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Praxisanschrift<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Winthirstr.4, 80639 München</td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Telefon:<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>089 / 162625</td></tr><tr valign=\'top\' align=\'left\'>
<td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Fax<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>vorhanden, bitte tel. erfragen</td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Gesetzliche Berufsbezeichnung<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Arzt</td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Staat der die Berufsbezeichnung verliehen hat<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Bundesrepublik Deutschland</td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>ärztekammer<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Bayerische Landesärztekammer<br>Mühlbaurstr. 16<br>81677 München<br>
<a href=\'http://www.blaek.de\'>BLäK</a></td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Kassenärztliche Vereinigung<br>(Aufsichtsbehörde)<td class=\'zeiten\' bgcolor=\'#ebf4ff\'>Kassenärztliche Vereinigung Bayerns<br>Arabellastr. 30<br>
81925 München<br><a href=\'http://www.kvb.de\' target=\'_blank\'>http://www.kvb.de</a></td></td></tr>
<tr valign=\'top\' align=\'left\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Berufsrechtliche Regelung<td class=\'zeiten\' bgcolor=\'#ebf4ff\'><a href=\'http://www.blaek.de/beruf_recht/berufsordnung/bo_2002.cfm?CFID=68467&CFTOKEN=63068415\'>Berufsordnung für die ärzte Bayerns</a><br></td></tr>
<tr valign=\'top\' align=\'left\' bgcolor=\'#ffffcc\'><td class=\'zeiten\' bgcolor=\'#EFF2FF\'>Email<td class=\'zeiten\' bgcolor=\'#ebf4ff\'><script type="text/javascript" language="javascript">
<!--
var name = "praxis";
var domain = "dr-zeitler.de";
var mailto = ""mailto:";
document.write(\'<a href=\' + mailto  + name + \'@\' + domain + \'">\' + name + \'@\' + domain + \'<\/a>\');
//--></script>
  praxis [at] dr-zeitler [dot] de
</tr>
</table>
</tr></table></div>');

insertText('null', 'krebsvorsorge',
'Männer haben ab 45 Jahren jährlich Anspruch auf eine Kontrolle der Prostata und der Haut.</p>
<p>Machen Sie den Arzt auch darauf aufmerksam, wenn Sie als Kind an Hodenhochstand gelitten haben. Dies gilt als wichtiger Risikofaktor für Hodenkrebs.</p>
<p>Welche zusätzlichen Möglichkeiten bietet die moderne Medizin?<br>Von den zahlreichen laborchemischen Tests sind nur wenige zur Früherkennung geeignet.</br>Für Männer gibt es die Bestimmung des PsA (Prostata spezifisches Antigen).<br>
Ihn empfehle ich bei der Krebsvorsorge oder bei Blutuntersuchungen immer mitzumachen. PsA ist eine Selbstzahlerleistung.( Ca. 12.- Euro)</p>
<p>Die Dickdarmkrebs-Vorsorge beginnt bei Männern und Frauen mit 50. <br>Ab 56 bezahlt die Kasse eine Dickdarmspiegelung zur Vorsorge auf Darmkrebs.<br>
<span style=\'color: red; font-weight: bold;\'>Diese Möglichkeit sollte jeder Mensch nützen, da mit einer Dickdarmspiegelung alle 5 Jahre der häufigsten Krebserkrankung wirkungsvoll vorgebeugt werden kann!</span><br>
Wir informieren Sie gerne.<br>
Bei Verdacht auf Darmkrebs ist eine Darmspiegelung in jedem Alter möglich.
<h3>Auch die Früherkennung des Lungenkrebs ist jetzt möglich!</h3>
Da bereits bei einer Grösse von 1cm Fernmetastasen auftreten, also bevor im Röntgenbild der Tumor überhaupt zu sehen ist, war bei Lungenkrebs bisher praktisch keine Vorsorge mÃ¶glich.<br>
Es wird jedoch daran gearbeitet, in der Atemluft mit speziellen Biochips Substanzen zu entdecken, die bereits bei einer Grösse von 1 cm abgesondert werden und nachweisbar sind.<br>
Diese Chips sind jedoch noch nicht praxistauglich, da sie momentan nur eine Sensitivität von 60 % besitzen.<br>
Es gibt jedoch bereits heute schon eine Möglichkeit, diese Moleküle in der Atemluft nachzuweisen!<br>
Speziell ausgebildete Hunde können mit ihrer unglaublich feinen Nase diese Moleküle erschnüffeln und so zur Früherkennung des Lungenkrebs eingesetzt werden.<br>
Eine Tierärztin in Oberbayern hat 6 Hunde dafür ausgebildet.<br>
Link zur Webseite siehe unten');


insertText('null', 'labor',
'Die Ergebnisse der meisten Labortests stehen uns schon am selben Tag um 17 Uhr zur Verfügung.<br>Dadurch kann schnell und gezielt behandelt werden. Sie können Ihren schriftlichen Befund mitnehmen.');


insertText('null', 'links','');


insertText('null', 'lufo',
'<div id=\'clear\'><img src="bronchen.jpg" alt="raucherlunge" width="320" height="520" style="float:left; border: 0; margin-right:20px;
  margin-bottom:10px" alt="Text?">
<p>90% der Betroffenen sind Raucher (Raucherlunge). Wichtig ist die rechtzeitige Diagnose, denn die Schäden an den Bronchien bei der Raucherlunge können nur gestoppt, aber meist nicht rückgängig gemacht werden.</p>
<p>Die Raucherlunge entsteht nach langjährigem Rauchen, erst ab Mitte 40 treten Beschwerden auf.<br><br>
Die leichteren Stadien der Raucherlunge erkennt man mit der Lungenfunktionsmessung.<br>
Bei den schwereren Formen der Raucherlunge besteht Atemnot bei Belastung und später auch in Ruhe.<br>
Wichtig für den Raucher ist, dass diese Atembeschwerden einfach diagnostiziert und behandelt werden können.<br>
Durch die rechtzeitige Behandlung mit Bronchien - erweiternden Mitteln kann Folgeschäden wie Überblähung der Lungenbläschen vorgebeugt werden (Emphysem).<br>
Durch den ständig erhöhten Widerstand vor allem beim Ausatmen platzen die Lungenbläschen und können ihre Funktion dann nicht mehr erfüllen.<br>
<br><h3>Wie entsteht die Raucherlunge</h3>
Viele Raucher denken, ihre Lunge sei ganz schwarz vom vielen eingeatmeten Teer.<br><br>
Dies ist jedoch selten der Fall!<br>
Der Teer wird nämlich von den sogenannten Fresszellen, die zu den weissen Blutkörperchen gehören, abgebaut.<br>
Dabei kann jedoch eine chronische Entzündung entstehen, in deren Verlauf die Luftröhren eingeengt werden (Bronchitis).<br>
Der Fachausdruck für die Raucherlunge lautet:<br><br>
Chronisch obstruktive Lungenerkrankung, auf Englisch chronic obstructive pulmonary disease = C O P D<br><br>
Die Verengung der Bronchien kann durch eine einfache Untersuchung, die Spirometrie schon im Frühstadium erkannt werden.<br>
<h3>Was ist der Unterschied zwischen Asthma und Raucherlunge (COPD)?</h3>
COPD ist in den meisten Fällen die Folge einer langjährigen Raucherkarriere und beginnt erst im vierten oder fünften Lebensjahrzehnt.<br>
Da 90 \% der Patienten mit COPD starke Raucher sind, kann man COPD vereinfacht mit "Raucherlunge" gleichsetzen.<br><br>
Wird eine COPD diagnostiziert, bedeutet dies, dass bereits ein schwerer Schaden an der Lunge eingetreten ist, der behandelt werden muss.<br>
Atemnot, Husten, Auswurf (AHA-Symptomatik): Bei Asthmatikern besteht die Atemnot beim akuten Asthmaanfall, COPD-Patienten verspüren die Atemnot immer. Zu Beginn der COPD ist die Atemnot nur bei Belastung vorhanden, im weiteren Verlauf auch in Ruhe. Der Auswurf ist beim Asthma  glasklar und sehr zÃ¤h, bei der COPD dagegen klar bis gelblich und flüssiger. Husten ist beim Asthma hÃ¤ufig das erste Zeichen eines drohenden Asthmaanfalls; meist ist der Husten trocken. COPD-Patienten husten vor allem morgens viel Schleim ab.<br><br>
Ursachen:  Auslöser von Asthma ist sehr häufig eine Überempfindlichkeit der Lunge auf bestimmte Stoffe. Dazu zählen unter anderem Pollen, Gräser, Hausstaubmilben oder Tierhaare. Für die COPD ist hauptsÃ¤chlich das Rauchen verantwortlich, in seltenen FÃ¤llen auch die Luftverschmutzung.<br><br>
Untersuchungsergebnisse: Im Lungenfunktionstests ist die Atemfunktion sowohl beim Asthma als auch bei der COPD eingeschränkt. Durch ein bronchienerweiterndes Spray (Beta-2-Mimetikum) lÃ¤sst sich beim Asthma der Widerstand der Atemwege senken und damit die Lungenfunktion deutlich verbessern. Bei der COPD fallen die Unterschiede dagegen viel geringer aus.
Diese Diagnostik erfolgt mit Hilfe der Spirometrie.<br><br>
Jeder Raucher ab 40 sollte einmal jä¤hrlich eine Lungenfunktionsprüfung durchführen, um Schäden an seiner Lunge rechtzeitig zu erkennen und Gegenmassnahmen ergreifen zu können.</p></div>');


insertText('null', 'nahrung',
'<h3>"Cholesterinfrei" heisst nicht automatisch "gesund"<br>Bei einem akuten Infekt stimuliert ein Butterbrot das Immunsystem</h3>
Cholesterin wird zur Häfte durch die Nahrung aufgenommen, und zur Hälfte im Körper selbst synthetisiert, da es Ausgangsstoff für die meisten Hormone unseres Körpers ist. <br>
Da bei einem akuten Infekt viele Abwehrhormone produziert werden, kann man deren Bildung durch Zufuhr von Cholesterin anregen.<br>
Früher wurde sogar bei schweren Infekten reines Cholesterin gespritzt. Je nach Ernährungsweise muss natürlich bei der heute überwiegenden überernährung die Kalorienzufuhr und die Zufuhr von Cholesterin eingeschrünkt werden, ich müchte mit diesem Beitrag nur sagen, daü man bei einem akuten Infekt mal eine Ausnahme machen und sich ein Butterbrot günnen darf.<br> 
<p>Nach neuesten Erkenntnissen sollte man den Verzehr von Kohlehydraten einschränken und einen Teil der so eingesparten Kalorien durch hochwertige öle wie Olivenöl, Rapsöl ersetzen. Diese sind für den Kürper wertvoll wegen ihres Gehaltes an Omega-3 Fettsüuren.</p>
<p>Sonnenblumenöl, der Hauptbestandteil der meisten Pflanzenöle, ist jedoch weniger wertvoll, da es kaum Omega-3 Fettsäuren enthält. </p>
<p>Margarine, das zum Teil aus Sonnenblumenöl besteht und oft ausserdem gehärtet ist, ist kein hochwertiges Fett und hat auch kaum Vorteile gegenüber Butter!</p>
<p class=\'bold_6\'>Bei akuten Infekten stimuliert Butter durch seinen Gehalt an natürlichen Immunstoffen und Cholesterin das Immunsystem!</p>');


insertText('null', 'onan','');

insertText('null', 'notdienst-elisen',
'<h3 style="color:red">Bitte rufen Sie untenstehenden Link auf, um die aktuellsten Sprechzeiten zu erfahren!</h3>
Behandlung durch Allgemein-, Kinder- und HNO-ärzte, Chirurgen/Orthopäden zu folgenden Zeiten:<br>
<table WIDTH="50%"><tr>
<td>Montag, Dienstag, Donnerstag<br>19:00 - 23:00 </td><td></td></tr>
<tr><td>Mittwoch und Freitag<br>14:00 - 23:00</td><td></td></tr>
<tr><td>Samstag, Sonntag, Feiertag<br>08:00 - 23:00</td><td></td></tr>
</table><br>
Achtung:  Gynäkologen, Augen- und Hautärzte, Nervenärzte/Psychiater haben abweichende Sprechzeiten!<br>Aktuelle Daten mit Sprechzeiten aller ärzte siehe unten unter "Links".
</p>');

insertText('null', 'reiseimpfungen',
'Planen Sie eine Reise oder ist es ein "last minute" Urlaub?<br>
In jedem Fall gehört zum absoluten Urlaubsgenuss die reisemedizinische Beratung!<br>
Auch vor "last minute" Reisen sind Impfungen wie Hepatitis A, Typhus, Gelbfieber (Gelbfieber-Impfung 10 Tage) möglich!<br>
Wir freuen uns, wenn wir zum Gelingen Ihrer Reise beitragen können durch einen kurzfristigen Termin.
<h5 class="preise">Impfungen, die von allen Krankenkassen bezahlt werden:</h5>
<ul id="diphterie">
<li>Diphterie-, Tetanus-, Polio-Impfung</li>
<li>Zeckenschutz-Impfung (FSME)</li>
<li>Grippe-Impfung</li>
<li>Hepatitis-B-Impfung bis zum 18. Lj.</li>
</ul>
<h5 class="preise">Impfungen für die häufigsten Reiselünder:</h5>
<table id=\'preise75\'>
<tr><td>China:<td>Hepatitis- A, B, Typhus-Impfung, Malaria in einigen Provinzen, Tollwut<br>event. Japanische Enzephalitis</tr>
<tr><td>Asien allgemein<td>Kein Gelbfieber in Asien! Im Winterhalbjahr Grippeimpfung, Hepatitis- A, B, Typhus-Impfung, Malaria in einigen Ländern, Tollwut<br>event. Japanische Enzephalitis</tr>
<tr><td>Indien:<td>Hepatitis- A, B, Typhus-Impfung, Malaria, Tollwut-Impfung</tr>
<tr><td>Türkei:<td>Hepatitis- A, Tollwut-Impfung</tr>
<tr><td>Thailand:<td>Hepatitis- A, B, Typhus-Impfung, Malaria, Tollwut-Impfung </tr>
<tr><td>ägypten:<td>Hepatitis- A-Impfung</tr>
<tr><td>Afrika:<td>Hepatitis- A, B, je nach Land Malaria, Gelbfieber-, Tollwut-Impfung</tr>
<tr><td>Südamerika:<td>Hepatitis- A, B, je nach Land Malaria, Gelbfieber-, Tollwut-Impfung</tr>
<tr><td>Generell<td>Tetanus, Diphterie, Polio-Impfung</tr>
<tr><td>Gelbfieber-Impfung<td>Gelbfieber kommt in Asien nicht vor, jedoch droht Gelbfieber in einigen zentralafrikanischen und südamerikanischen Ländern<br>
Die Gelbfieber-Impfung ist die einzige Impfung, die nur von zugelassenen Gelbfieber-Impfstellen durchgeführt werden darf. Unsere Praxis ist eine zugelassene Gelbfieber-Impfstelle.</tr>
</table>
Die Länder, in denen am häufigsten eine Infektion mit Hepatitis A erfolgte, sind:<br>
Türkei, Spanien, Pakistan, ägypten, Indien, China und Afrika.');

insertText('null', 'reiseimpfungen-erstattung',
'<h3 class="preise">Impfungen, die von allen Krankenkassen bezahlt werden:</h3>
<ul id="diphterie">
<li>Diphterie-, Tetanus-, Polio-Impfung</li>
<li>Zeckenschutz-Impfung (FSME)</li>
<li>Grippe-Impfung</li>
<li>Hepatitis-B-Impfung bis zum 18. Lj.</li>
</ul>
<h5 class="preise" >Reiseimpfungen wie Typhus, Hepatitis A + B, Gelbfieber-Impfung, Tollwut, Japanische Enzephalitis werden inzwischen von fast allen KK erstattet. <br>Allerdings gibt es teilweise Einschränkungen bezüglich der Gesamtsumme pro Jahr.<br>Auch werden einzelne Impfungen sowie Malaria-Prophylaxe nicht von allen KK übernommen.<br>Bitte informieren Sie sich auf dieser Liste über die aktuellen Leistungen Ihrer speziellen KK!<br>
<a href= \'http://www.crm.de/krankenkassen/index.html\' onclick="oeffnefenster(\'http://www.crm.de/krankenkassen/kk_tabelle_kassen.htm\'); return false;  " rel=\'nofollow\'>(für Link zur Liste der Kassen hier klicken)</a><br>
<br>Bitte beachten: "erstatten" heisst, die Impfung muss beim Arzt bar bezahlt werden  (oder per Karten-Terminal), die Quittung wird dann bei der Kasse zur Erstattung eingereicht.<br><br>
</h5>');


insertText('null', 'tanzen',
'Warum ist Tanzen so gesund?<br>
<p>Glückshormone werden produziert, die sich auch günstig aufs Immunsystem auswirken.<br>
<b>Eine Studie der UNI Tübingen belegt, dass bei wiederholten schwungvollen Bewegungen der Serotoningehalt im Blut ansteigt.</b><br>
Serotonin ist das Glückshormon, das für gute Stimmung sorgt und Stresshormone wie Adrenalin und Cortisol abbaut.<br>
Tanzen stellt an den Tänzer viele unterschiedliche Anforderungen wie Fitness, Balance, Rhythmusgefühl und Koordination.<br>
Darüberhinaus hat Tanzen noch andere positive Wirkungen.<br>So werden viele Alterungsprozesse durch einen aktiven Lebensstil verzögert.<br>
Tanzen bekommt in unserer alternden Gesellschaft somit eine präventive Funktion.<br>
Aber auch emotionale, affektive und soziale Komponenten werden beim Tanzen sehr stark angesprochen.<br>
Personen, die schon lange tanzen, schnitten auch bei Tests für Aufmerksamkeit und intellektuelle Fähigkeiten besser ab.<br><br>
Sanfter Sport wie Tanzen hilft im Kampf gegen die Volkskrankheiten chronische Rückenschmerzen, Diabetes, Bluthochdruck und Depression.<br>
<p>Das einzige Risiko beim Tanzen ist die Musiklautstärke, die in Diskos und manchen Lokalitäten oft viel zu laut und damit schädlich fürs Gehör ist.<br>
</p>');

insertText('null', 'tod',
'Haben Sie nahe Angehörige verloren und sind Sie tief betroffen? <br>
<p>Diese Seite versucht, Trost zu spenden und Ihnen wieder Halt zu geben, wenn Sie tief erschüttert sind nach dem schmerzlichen Verlust einer nahestehenden Person oder eines geliebten Haustiers.<br>
Regelmässig kommen in unsere Arztpraxis Menschen, die für ein paar Tage um eine Arbeitsunfähigkeit bitten, weil sie wegen eines Todesfalls aufgewühlt sind und an Schlaf- und Konzentrationsstörungen leiden.<br>
Anstatt Beruhigungsmittel zu verschreiben, versuche ich bei dieser Gelegenheit, zu helfen den Tod wieder in die richtige Perspektive zu rücken, während unsere Gesellschaft Alter, Krankheit und Tod versteckt.<br>
Ein Beispiel hierführ ist das Verschwinden des Brauchs, Tote im Leichenschauhaus 3 Tage offen bis zur Beerdigung aufzubahren.<br>
So führte in meiner Grundschulzeit eine Abkürzung des Schulwegs durch den Friedhof, dabei konnten wir durch das Glasfenster sehen, wer gerade verstorben war. Heute sind jedoch die Särge verschlossen.<br><br>
Doch haben die Menschen auch früher den Tod aus ihrem Bewusstsein verdrängt.<br>In den 3000 Jahre alten indischen Upanischaden wird die Frage gestellt: "Was ist das grösste Wunder auf der Erde?" Die Antwort: "Dass die Menschen so leben, als ob sie nie sterben würden".<br><br>Welche positiven Auswirkungen kann ein Bewusstsein unseres eigenen sicheren Todes haben?<br>
Möglicherweise mehr Gelassenheit!<br>
Angststörungen sind heute weit verbreitet, eine radikale Psychotherapiemethode gegen Angststörungen sagt, das Schlimmste, was uns jemals passieren kann, der Tod, wird sowieso passieren, also wovor soll man dann noch Angst haben.<br><br>
Der Prophet Mohammed hat sogar gesagt, "wer am Tag 40 Mal an seinen Tod denkt, wird noch auf Erden befreit werden".<br><br>
Ich erinnere mich lebhaft an die Gebete bei meinen Großeltern vor den Mahlzeiten oder beim Rosenkranz, bei denen das "Gegrüsset seist Du Maria" gebetet wurde, in dem es heisst "bitte für uns Sünder, jetzt und in der Stunde unseres Todes, Amen". <br>Dabei empfand ich jedesmal einen kleinen Schauder.<br><br>
Soll man also den Rest seines Lebens in "Sack und Asche" gehen und sich an nichts mehr freuen?<br><br>
Im Gegenteil, das Bewusstsein, nicht unbegrenzt Zeit zu haben kann dazu führen, dass wir unsere Zeit nicht mehr mit Unsinn und nutzlosen Sorgen vergeuden.<br><br>
So ist es auch zu erklären, dass Menschen, die an einer unheilbaren Krankheit leiden oder litten und dem Tod ins Auge geschaut haben, berichten, dass sie zufriedener sind mit ihrem Leben, weil sie sich bewusst geworden sind, dass sie nicht unendlich leben werden.<br>
Daher rührt zum Teil auch das Paradox, dass Menschen in der 2. Lebenshälfte meist glücklicher sind, obwohl sie schon an verschiedenen Zipperlein leiden, und zwar zu 80 - 90 %, wie in dem Buch "Die bessere Hälfte: Worauf wir uns mitten im Leben freuen können", gezeigt wird.<br><br>
Deshalb ermutige ich Sie, anlässlich eines Trauerfalls sich mit dem Tod vielleicht sogar ein wenig "anzufreunden", denn er gehört zum Leben! 
<br>Tips zum Bewältigen der Trauerphasen nach Verena Kast finden Sie anschliessend unter "Links"');

insertText('null', 'team',
'<center>
<table width=\'950\' cellspacing=\'0\' cellpadding=\'0\' border=\'0\'>
<tr><td valign=top align=left><img src=\'fil.jpg\' width=\'233\' height=\'300\' alt=\'\' border=\'0\' align=\'left\' hspace=30>
<p>Filiz Bayterin, Medizinische Fachangestellte,<br>
<h4 style=\'font-weight: normal\'>Wenden Sie sich vertrauensvoll an Frau Bayterin, sie ist immer bestrebt, Ihnen behilflich zu sein und eine individuelle Lösung zu finden!</h4>
21 Berufsjahre,<br>
in unserer Praxis als Erstkraft seit 2000.<br />
Am 1.7.2020 feierten wir ihr 20-jähriges Jubiläum!<br>
Sie hat durch ihr freundliches Wesen und ihren engagierten, unermüdlichen Einsatz  wesentlich zum Erfolg unserer Praxis beigetragen!<br>
Ich danke Frau Bayterin für den besonders liebevollen und umsichtigen Umgang mit unseren Patienten!<br><br>
</p>
</td></tr><tr><td> </td></tr>
<tr><td valign=top align=right><img src=\'zel.jpg\' width=\'233\' height=\'300\' alt=\'\' border=\'0\' align=\'right\' hspace=30>
<p>Zeliha Kutlu, Medizinische Fachangestellte<br />
<br>Auch sie ist eine wirkliche "Perle". <br>äusserst zuverlässig, immer freundlich und ebenfalls ein Profi beim Blutabnehmen.<br> 
in unserer Praxis seit 1.09.2008</p>
8 Berufsjahre.<br>
   </td></tr><tr><td> </td></tr>
<tr><td valign=top align=left><img src=\'dr.jpg\' width=\'233\' height=\'300\' alt=\'\' border=\'0\' align=\'left\' hspace=30>
<p>Dr. med. Karl Theodor Zeitler<br />Facharzt für Allgemeinmedizin<br />
Bestallung als Arzt 1978,<br>Facharzt für Allgemeinmedizin seit 1985.</p>
Seit 31 Jahren am Rotkreuzplatz niedergelassen.</p>
Selbstverständlich habe ich die strengen Fortbildungsanforderungen der ärztekammer erfüllt.</p>
   </td></tr><tr><td> </td></tr>

<tr><td valign=top align=right><img src=\'aibolit.png\' width=\'233\' height=\'300\' alt=\'\' border=\'0\' align=\'right\' hspace=30>
<p>Unser Praxismaskottchen<br>Dr. Ajbolit, Arzt<br />
<br>Diese Figur auf meinem Schreibtisch ist ein Reisemitbringsel aus Russland.<br>Eine aus russischen Kinderbüchern bekannte Figur. Behandelt Menschen und Tiere, alle, die Hilfe brauchen.<br>
   </td></tr><tr><td> </td></tr>
<tr><td valign=top align=left>
</td></tr><tr><td> </td></tr>
</table>
</center>');

insertText('null', 'praxiszeiten',
'Die Praxis ist Montag bis Donnerstag von 9 bis 18 Uhr<br>und Freitags von 9 bis 13 Uhr durchgehend geöffnet.<br><br>
Die Sprechstunde beginnt um 9:00 Uhr.<br>
Von 8 - 9 sowie zwischen 13 und 16 Uhr findet keine Sprechstunde statt.<br>Sie können jedoch in dieser Zeit vorbestellte Überweisungen und Rezepte, sowie Befunde abholen.<br><br> ');

insertText('null', 'zuck',
'Zum Frühstück Kohlehydrate und Fett, z.B. Marmeladebrote, Semmeln mit Nuss-Nougat Creme<br>
Abends jedoch keine Kohelehydrate, sondern Fett und Eiweiss.
<p>Von allen unsinnigen Diätvorschlägen ist FDH das falscheste Rezept.</p>
<ol><li><span class=\'aktivierung\'>1. Stoffwechsel Aktivierung durch ausreichende Nahrungszufuhr</span><br>
Schränkt man die Nahrungszufuhr nämlich stärker ein, wird der Stoffwechsel verlangsamt und der gegenteilige Effekt tritt ein: das Abnehmen kommt zum Stillstand.<br>
Bei der Zusammensetzung der Nahrung ist es sehr wichtig, Lebensmittel mit einem hohen Wassergehalt auszuwählen. Also viel Gemüse und Obst.<br>
Also Nahrungsmittel mit hoher Kaloriendichte ergänzen mit wasserreichem Gemüse.<br>
</li>
<li><span class=\'aktivierung\'>2. Stoffwechsel Aktivierung durch Aufbau der Muskelmasse.</span><br>
Jedes Pfund Muskeln im Körper verbrennt zusätzlich 200 kcal pro Tag.<br>
Durch gewaltsame Fastenkuren wird hauptsächlich Muskelmasse abgebaut, dies rächt sich jedoch bald, da mit dem Schwinden der Muskelmasse der Stoffwechsel und damit der Kalorienverbrauch in Ruhe geringer wird.<br>
Die Muskelmasse schwindet mit zunehmendem Alter. Sie wird durch Fett ersetzt.<br>
Ebenso wird Muskel abgebaut durch zu wenig Eiweiss-haltige Ernährung. Dies ist bei vielen Diäten und Entschlackungskuren, Heilfasten usw. der Fall.<br>
Auch durch zu einseitige Ernährung bekommt der Körper zu wenig hochwertiges Eiweiss.<br>
Vegetarier sollten Getreide mit Hülsenfrüchten kombinieren, dann ist auch pflanzliches Eiweiss hochwertig.<br>
Tierisches Eiweiss sollte allerdings nicht zum Frühstück gegessen werden, sondern Mittags und Abends, da es zusammen mit Kohlehydraten den Insulin-Spiegel erhöht. <br>
</li>
<li ><span class=\'aktivierung\'>3. Stoffwechsel Aktivierung durch direke Hormonsteuerung.</span><br> 
Durch Verzehr von Kohlehydraten mit niedrigem glykämischem Index können wir direkt das Hormon günstig beeinflussen, das den Fettabbau hemmt (Insulin).<br>
Zufuhr von langsam verdaulichen Kohlehydraten und Verzicht auf Zucker bremst das Hormon Insulin und aktiviert damit den Fettstoffwechsel.<br>
Durch Weglassen von Kohlehydraten am Abend bleibt der Insulinspiegel in der Nacht niedrig, das Wachstumshormon steigt jedoch an, dies hat Anti-Aging Wirkungen,  und es wird Fett abgebaut.<br>
</li>
<li ><span class=\'aktivierung\'>4. Stoffwechsel Aktivierung durch Sport.</span><br>
Treppe benutzen statt Aufzug, Spazierengehen statt Fernsehen.<br>
Körperliche Bewegung, Sport ist der Königsweg zur Stoffwechsel Aktivierung. Flott Spazierengehen 3 mal pro Woche eine halbe Stunde oder Rad fahren genügt schon, 
Die Menge an Hormonen, die unsere Körperfunktionen günstig beeinflussen, und durch körperliche Bewegung freigesetzt werden, übersteigt die Wirkung der derzeit erhültlichen Anti-Aging Medikamente bei weitem (siehe "Stern"-Artikel.</p></li>  
</ol>
<p>Am Anfang kann es  hilfreich sein, zusützlich zu einer Diüt spezielle Medikamente einzunehmen. Beratung über richtige Ernührung ist jedoch immer notwendig.</br>
Hierdurch steigt die Motivation, wenn die Pfunde "purzeln".<br><br>
Es gibt 3 Arten von Medikamenten zur Gewichtsreduktion:<br><br>
1. Die älteren Appetitzügler.<br>
2. Mittel, die die Fettresorption hemmen.<br>
3. Die modernen Sättigungsverstürker.<br>
<hr>
</p>
In den letzten Jahren hat der pro Kopf - Verzehr von Zucker, vor allem in Getränken drastisch zugenommen. Mit gefährlichen Folgen für unsere Gesundheit.<br>
Alle Kohlenhydrate werden im Kürper zu Zucker abgebaut und treten aus dem Darm ins Blut über.<br>
Es ist jedoch entscheidend, wie schnell der Abbau stattfindet.<br>
Dabei gilt: Je langsamer, desto besser! Günstig sind Obst, Gemüse, Hülsenfrüchte, Reis, Teigwaren.<br><br>
Ungünstig sind Süssigkeiten, Süfte, Cola, Backwaren..<br><br>
Unser Stoffwechsel ist in Jahrmillionen auf knappes Nahrungsangebot bei viel Bewegung optimiert. In den letzten Jahrzehnten haben sich diese Verhältnisse umgekehrt.
Heute leidet z.B. in den USA mehr als die Hälfte der Bevölkerung an übergewicht.<br><br>
Wer ein Paar Pfunde loswerden müchte, sollte die neuesten Empfehlungen der Ernührungsforscher kennen: Es genügt nicht, die Fettzufuhr einzuschrünken, wie früher immer propagiert wurde. <br>
Wichtig ist vielmehr, müglichst wenig schnell verdauliche Kohlenhydrate zu essen.<br> 
<div class=\'rotbalken\'>
In der Praxis bedeutet das meist, gesüsste Getrünke wegzulassen: Alle fertigen Obsüfte, Eistee, Softdrinks.<br>
Diese enthalten ca. 100 g Zucker pro Liter, der noch dazu sehr schnell ins Blut aufgenommen wird, und über einen starken Anstieg des Insulins dann dick macht.<br>
</div>
Während in Deutschland eine gewisse Allgemeinbildung bezüglich Ernährung vorhanden ist und sportliche Betütigung als Breitensport ausgeübt wird, breitet sich der Diabetes  in den Schwellenlündern mit "Tsunami" - artiger Geschwindigkeit aus!<br>
Ebenfalls sind die Ureinwohner in vielen Ländern durch Diabetes vom Aussterben bedroht.<br>
');




?>

