<?php
$path = $_SERVER['DOCUMENT_ROOT']  . '/simple/';
require_once $path . 'Classconf2.php';
require_once $path . 'DispArr.php';
require_once('LinkCommand.php');


class HauptCommand  { 

protected $_links = array();
protected $lc;	
protected $section;
protected $registry;    
protected $haupt;
protected $hauptbody;
protected $retstr;

const DREY = "Frau Dr. Julia Dreyßig, Waisenhausstr. 17, Tel. 17117972";
const DREY_WS = "http://www.hausarztpraxis-neuhausen-nymphenburg.de";
const DREY_WS_TEXT = "Praxis Dr. Dreyßig</a>&#160;&#160;&nbsp;Tel.: 17117972";

const HUND = "Praxis Dr. Hundhausen, Dr. Braune, Nymphenburgerstr. 132, Tel. 1294014";
const HUND_WS = "https://www.hausaerzte-neuhausen.de";
const HUND_WS_TEXT = "Praxis Dr. Hundhausen</a>&#160;&#160;&nbsp;Tel.: 1294014";


const MVZ = "Vom 27.- 31.12. MVZ-Laim, Fürstenriederstr.62";  
const MVZ_WS = "http://www.mvz-laim.de";
const MVZ_WS_TEXT = "MVZ-Laim</a>&#160;&nbsp;Tel.: 089 - 69 310 760";
	
const WOE = "Frau Dr. med. Wöhrle,  Donnersbergerstraße 4";  
const WOE_WS = "http://www.praxis-woerle.de";
const WOE_TEXT = "Praxis Dr. Wöhrle</a>&#160;&#160;&nbsp;Tel.: 16 11 41";
const STER = "Vom 3.1. - 7.1. Frau Dr. med. Sterescu, Lachnerstr. 1, Tel.: 16 01 11";
const KERZ = "Vom 2.1. - 3.1. Frau Dr.med. Kerzendorf-Röhlig, Nymphenburgerstr. 172<br>Tel. 16 33 05";
//const TURAN ="Bei Atemwegsinfekten (Hals-, Ohrenschmerzen, Husten)<br>HNO-Ärztin Dr. Turan<br>Volkartstr. 5, Tel. 200 808 49 ";
const TURAN ="Bei Beschwerden im Hals- Nase- Ohrenbereich <br>HNO-Ärztin Dr. Turan<br>Volkartstr. 5, Tel. 200 808 49 ";
const DRINGEND = "In dringenden Fällen Bereitschaftspraxis München im Elisenhof:<br>"; 
const ELISENHOF = "https://m.kvb.de/bereitschaftsdienst/";
const TEXT = "Ärztl. Bereitschaftsdienst, </a>&#160;&#160;&nbsp;Tel.: 116 117 (ohne Vorwahl)";
const STORIES = ['tanzen','zuck', 'hz',  'nahrung',  'homoeopathie', 'az', 'naturheilmittel', 'tod', 'fastenzeit'];				
const FOLLOW  = ['hoeh', 'tra', 'nic', 'laura'];
const FOLLAY = [
'allgemeinarzt-az',
'allgemeinarzt-reiseimpfungen',
'allgemeinarzt-check',
'allgemeinarzt-impfungen',
'allgemeinarzt-tanzen',
'allgemeinarzt-hpv',
'allgemeinarzt-lufo',
'allgemeinarzt-nahrung',
'allgemeinarzt-naturheilmittel'];

const NOFOLLOW = [
'allgemeinarzt-az',
'allgemeinarzt-reiseimpfungen',
'allgemeinarzt-check',
'allgemeinarzt-impfungen',
'allgemeinarzt-tanzen',
'allgemeinarzt-hpv',
'allgemeinarzt-nahrung',];


// Auch in Switschkey in const SECTIONS eintragen 	
const L_HREF = [
'allgemeinarzt-covidpass',
//'allgemeinarzt-Atemnot-Infizierter',
'allgemeinarzt-coronavirus-deutschland',
'allgemeinarzt-Elektronische-AU',
'allgemeinarzt-telefon-AU',
'allgemeinarzt-az',
'allgemeinarzt-reiseimpfungen',
'allgemeinarzt-reiseimpfungen-erstattung',
'allgemeinarzt-krebsvorsorge',
'allgemeinarzt-check-up',
'allgemeinarzt-grippe',
'allgemeinarzt-lufo',
'allgemeinarzt-labor',
'allgemeinarzt-impfungen',
'allgemeinarzt-hpv',
'allgemeinarzt-bek',
'allgemeinarzt-allerg',
'allgemeinarzt-links',
'allgemeinarzt-weight-watch',
'allgemeinarzt-zuck',
'allgemeinarzt-hz',
'allgemeinarzt-nahrung',
'allgemeinarzt-homoeopathie',
'allgemeinarzt-impressum',
'allgemeinarzt-tanzen',
'allgemeinarzt-naturheilmittel'];

const L = [
'<strong>Krebsvorsorge</strong>#Vorsorge-Untersuchung'=>'allgemeinarzt-krebsvorsorge',
'<strong>Check-Up</strong>#Vorsorge' =>'allgemeinarzt-check-up',
'<strong>Labor</strong>#Blut-Untersuchung' =>'allgemeinarzt-labor',
'<strong>Lungenfunktion</strong># Raucherhusten, Asthma' =>'allgemeinarzt-lufo',
'<strong>Sporttauglichkeit</strong>#Tauch-Fähigkeit' =>'sport',
'<strong>Allergien</strong># Asthma, Heuschnupfen, Ekzeme' =>'allgemeinarzt-allerg',];  

const C = [
'<p><strong>Digitales Impfzeugnis</strong>#Das digitale Impfzeugnis stellen wir Ihnen gerne aus! Bitte bringen Sie Ihre Impfbescheinigungen mit</p>' => 'allgemeinarzt-covidpass',
//'<p><strong style=color:red>Atemnot bei Covid-19</strong>#Was kann man tun?</p>' => 'allgemeinarzt-Atemnot-Infizierter',	
'<p><strong style=color:red class=blinke_me>Covid-19</strong>#Interessante Hintergründe zu Epi-/Pandemien</p>' => 'allgemeinarzt-coronavirus-deutschland',
'<p><strong> Krankschreibung (AU)</strong>#Telefonische AU</p>'=>'allgemeinarzt-telefon-AU',
'<p><strong>Elektronische-AU</strong>#Elektronische AU'=>'allgemeinarzt-Elektronische-AU',
]; 
//'<strong class="blink_me">Singen hilft </strong>#gegen Atemnot Infizierter'=>'allgemeinarzt-Atemnot-Infizierter'];  
	
const IMPF = [ 
		'Reiseimpfungen#Hepatitis A, Hepatitis B, Typhus-, Gelbfieber-Impfung, Malaria-Prophylaxe' => 'allgemeinarzt-reiseimpfungen',
		'Impfungen#Hepatitis B-Impfung bis 18 J. als Kassenleistung' =>'allgemeinarzt-impfungen',
		'Gelbfieberimpfstelle# wir sind eine anerkannte Gelbfieber-Impfstelle'=>'allgemeinarzt-gelbfieberimpfstelle',
		'HPV-Impfung# Schutz gegen Gebärmutterkrebs' =>'allgemeinarzt-hpv',
		'Reiseimpfungen Erstattung#welche Kassen Impfungen erstatten' => 'allgemeinarzt-reiseimpfungen-erstattung',
/*		'Grippe-Impfung# 4-fach-Impfstoff vorrätig, fast täglich neue Influenza Fälle, aber langsam am Abflauen!' => 'allgemeinarzt-grippeimpfung',
		'erste nachgewiesene Grippe (Influenza) #am 12.12.16 in unserer Praxis, die Influenza kann durch einen Abstrich aus dem Mund nachgewiesen 				werden.' =>'allgemeinarzt-grippe',
*/
		'Aktuell: FSME-Impfung#("Zeckenimpfung")' => 'allgemeinarzt-zecken'	]; 
const SUM = ('Leistungen der Arztpraxis, wichtige Notfallnummern, Interessantes aus der Medizin');

	public function _sql($tab, $where='id > 0') {
    $sql= "select * from $tab where sec = '$where'";// 1=ueberschrift,2=url,3=url(2) als Link zeigen, 4=text(6) anzeigen, 6=summary, 7=artikel
	$ergebnis = mysqli_query(Db::$connection,$sql) or die (mysqli_error());
	return $ergebnis;
}	

public function dbfill($story) {
    $ret = '';
	$result = array();
	//$ergebnis = $this->_sql('section', $story) ;
    $sql= "select * from section where sec = '$story'";	
    $ergebnis = mysqli_query(Db::$connection,$sql) or die (mysqli_error());    
    in_array($story, self::NOFOLLOW) ? $follow = "rel='nofollow'" : $follow = '';
	
    while($row = mysqli_fetch_array($ergebnis, MYSQL_BOTH)) $result[] = $row;
    	foreach ($result as $row ) 
		$ret .=  sprintf("<p><strong>%s&nbsp;</strong><a href='index.php?section=allgemeinarzt-%s.php' %s>%s</a></p>",
            $row['nav'], $row['sec'], $follow ,$row['ueb']);
    //echo $row['nav'] . $row['sec'] . "follow: " . $follow . $row['ueb'];    
    //echo $ret;	
    return $ret;
} 


public function fill_left_side($arr, $class='') {
        $retstr = '';		
        foreach ($arr as $k => $section) {
		if(strpos($k,'#'))	{
			$ka = substr($k, 0, strpos($k, '#'));  // 1. String Überschrift
			$zus = sprintf("%s",substr($k, strpos($k, '#')+1));// 2. String 2. Zeile
		}
		
		else	{$ka=$k; $zus='';}
		
		in_array($section, self::NOFOLLOW) ? $follow = "rel='nofollow'" : $follow='';
		
        if(in_array($section, self::L_HREF))
            $retstr .= sprintf("<li class='%s'><a href='index.php?section=%s.php' %s>%s</a>  %s</li>", 
            $class,$section, $follow, $ka,$zus );
        else $retstr .= sprintf("<li class='%s'>%s, %s</li>",$class,$ka,$zus);  
	}
	return $retstr;
}		
 


public function __construct($section) {
    $this->section = $section;        
    $this->registry = Registry::getInstance();
    //$this->registry->setSection($this->section);         
    $this->_links = $this->registry->getDBLinks();    
    }


public function write($data) {
	$this->hauptbody .= $data;
	}

public function linkfactory($ay) {
    $this->retay = sprintf("<ul>");
	$follow = array( 'hoeh', 'tro', 'nic','laura');
		
	foreach($ay as $linkvalue ) {
	if(in_array($linkvalue['abk'], $follow)) 
    $this->retay .= sprintf("<li style='padding: 2px 2px 25px 0px;'><a href= '%s' target='_blank'> %s</li>\n", $linkvalue['url'], $linkvalue['text']);
	else
    $this->retay .= sprintf("<li style='padding: 2px 2px 2px 0px;'><a  href= '%s' onclick= \"oeffnefenster('%s'); return false;  \" rel='nofollow'><span style='color: black;'>%s </span></li>\n", $linkvalue['url'], $linkvalue['url'], $linkvalue['text']);
	}
	$this->retay .= sprintf("</ul>");
    return $this->retay;
	}
	
public function execute() { 
/*
$this->haupt .= sprintf("<table id='content-top-urlaub'><tr><td>");
$this->haupt .= sprintf("<h3 id='urlaub' class='blink_me'>Heute Donnerstag 27.01. ist die Praxis ausnahmsweise<br>nur bis 13:00 geöffnet</h3>");
$this->haupt .= sprintf("<ul class='urlaub'>");
$this->haupt .= sprintf("<li>%s%s",self::DRINGEND, DispArr::make_jslink(self::ELISENHOF, self::TEXT));
$this->haupt .= sprintf("</li></ul></td></tr></table><br>");
*/
/*
$this->haupt .= sprintf("<table id='content-top-urlaub'><tr><td>");
$this->haupt .= sprintf("<br><h3 id='urlaub' class='blink_me'>Die Praxis ist diese Woche nur<br>von 09:00 - 13:00 geöffnet.<br>Nachmittags keine Sprechstunde</h3>");
$this->haupt .= sprintf("<ul class='urlaub'>");
$this->haupt .= sprintf("<li>%s%s",self::DRINGEND, DispArr::make_jslink(self::ELISENHOF, self::TEXT));
$this->haupt .= sprintf("</li></ul></td></tr></table><br>");
*/

/*
$this->haupt .= sprintf("<table id='content-top-urlaub'><tr><td>");
$this->haupt .= sprintf("<h2 id='urlaub' class='blink_me'><br>Wir machen Urlaub vom 24.12. bis 7.1.</h2>");
$this->haupt .= sprintf("<ul class='urlaub'>");
$this->haupt .= sprintf("<li>Vertretung freundlicherweise:<br></li>");
$this->haupt .= sprintf("<li>%s,<br>%s</li><br>",self::MVZ, DispArr::make_jslink(self::MVZ_WS, self::MVZ_WS_TEXT));
//$this->haupt .= sprintf("<li>%s,<br>%s</li><br>",self::HUND, DispArr::make_jslink(self::HUND_WS, self::HUND_WS_TEXT));
$this->haupt .= sprintf("<li>%s</li><br>", self::STER);
//$this->haupt .= sprintf("<li>%s</li><br>", self::TURAN);
//$this->haupt .= sprintf("<li>%s</li><br>", self::KERZ);
$this->haupt .= sprintf("<li>%s%s",self::DRINGEND, DispArr::make_jslink(self::ELISENHOF, self::TEXT));
$this->haupt .= sprintf("</li></ul></td></tr></table><br>");
*/

$this->haupt .= sprintf("<table id='content-top' cellpadding='0' cellspacing='0' %s", self::SUM);
$this->haupt .= sprintf("<tr><td class='left_; color:gray;'>");

$this->haupt .= sprintf("<h1 class='ggl'>Allgemeinarzt / Coronavirus</h1>");
$this->haupt .= sprintf("<ul>%s</ul>", $this->fill_left_side(self::C,'b4')); // b4=font-weight:normal
	

$this->haupt .= sprintf("<h1 class='ggl'>Allgemeinarzt / Naturheilverfahren</h1>");
$this->haupt .= sprintf("<ul>%s</ul>", $this->fill_left_side(self::L,'b4')); // b4=font-weight:normal

$this->haupt .= sprintf("<h1 class='ggl'>Reisemedizin /  Reise-Impfungen</h1>");
$this->haupt .= sprintf("<ul>%s</ul>", $this->fill_left_side(self::IMPF, 'b4'));

$this->haupt .= sprintf("<h1 class='ggl'>Aus der Praxis</h1>");
foreach(self::STORIES as $story)  
$this->haupt .= sprintf("%s", $this->dbfill ($story)); 

$this->haupt .= sprintf("<h1 class='ggl'>Weitere Links</h1>");
$this->haupt .= sprintf("<a href='index.php?section=allgemeinarzt-links.php'>Links zu </a>Erstattung von Naturheilmitteln, ICD-Schlüssel, Reisemedizin, Reiseimpfungen, Tropenmedizin, Allgemeinmedizin, BMI - Rechner, Arzt-Webseiten, Gesundheitsjournalismus kritisch, Risikokompetenz, Homöopathie");
$this->haupt .= sprintf("</td>");

#+++++++++++++++++ R E C H T E   S P A L T  E ******************#
$this->haupt .= sprintf("<td class='right_'>");
$this->haupt .= sprintf("<script src=\"https://cdn1.jameda-elements.de/widgets/siegel/80262256_1/308965/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container308965\" style=\"position:relative; width:272px; height:168px; margin:15px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/top10-top20-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><div id=\"jambw\" style=\"position:absolute; top:11px; left:108px; width:152px; height:88px; overflow:hidden; white-space:normal;\"><div style=\"position:absolute; top:32px; left:0px; color:#666;\">Bewertung wird geladen...</div></div><div style=\"position:absolute; top:111px; left:108px; width:152px; height:40px; overflow:hidden; font-size:11px; line-height:13px;\"><a href=\"https://www.jameda.de/muenchen/aerzte/innere-allgemeinmediziner/fachgebiet/?utm_content=BWlast&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=80262256&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"color:#888; text-decoration:none; border:0px; background-color:transparent !important;\" target=\"_blank\"><strong>Innere- &amp; Allgemeinmediziner</strong><br>in M&uuml;nchen</a></div></div>");
$this->haupt .= sprintf("%s</li></ul>", DispArr::not_tafel());
$this->haupt .= sprintf("<h1 class='ggl' >Links für Allgemeinmedizin</h1>\n");
$this->haupt .= $this->linkfactory($this->_links);
$this->haupt .= sprintf("</td></tr>");
$this->haupt .= sprintf("</table><div id='pad10'>");
$this->write($this->haupt);
return $this->hauptbody;
	}
}
?>
