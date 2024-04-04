<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2024 Leo Feyer
 *
 * @package   flaggen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2024
 */

namespace Schachbulle\ContaoFlaggenBundle\Classes;

class Flaggen extends \Frontend
{

	var $flag = array(); // Flaggen-Definitionen
	
	public function __construct()
	{
		$this->flag = array
		(
			'ABW' => array('code' => 'aw', 'name' => 'Aruba'),
			'AFG' => array('code' => 'af', 'name' => 'Afghanistan'),
			'AGO' => array('code' => 'ao', 'name' => 'Angola'),
			'AIA' => array('code' => 'ai', 'name' => 'Anguilla'),
			'ALA' => array('code' => 'ax', 'name' => 'Åland'),
			'ALB' => array('code' => 'al', 'name' => 'Albanien'),
			'AND' => array('code' => 'ad', 'name' => 'Andorra'),
			'ANT' => array('code' => 'an', 'name' => 'Niederländische Antillen (historisch)'),
			'ARE' => array('code' => 'ae', 'name' => 'Vereinigte Arabische Emirate'),
			'ARG' => array('code' => 'ar', 'name' => 'Argentinien'),
			'ARM' => array('code' => 'am', 'name' => 'Armenien'),
			'ASC' => array('code' => 'ac', 'name' => 'Ascension'),
			'ASM' => array('code' => 'as', 'name' => 'Amerikanisch-Samoa'),
			'ATA' => array('code' => 'aq', 'name' => 'Antarktis'),
			'ATF' => array('code' => 'tf', 'name' => 'Französische Süd- und Antarktisgebiete'),
			'ATG' => array('code' => 'ag', 'name' => 'Antigua und Barbuda'),
			'AUS' => array('code' => 'au', 'name' => 'Australien'),
			'AUT' => array('code' => 'at', 'name' => 'Österreich'),
			'AZE' => array('code' => 'az', 'name' => 'Aserbaidschan'),
			'BDI' => array('code' => 'bi', 'name' => 'Burundi'),
			'BEL' => array('code' => 'be', 'name' => 'Belgien'),
			'BEN' => array('code' => 'bj', 'name' => 'Benin'),
			'BES' => array('code' => 'bq', 'name' => 'Bonaire, Saba, Sint Eustatius'),
			'BFA' => array('code' => 'bf', 'name' => 'Burkina Faso'),
			'BGD' => array('code' => 'bd', 'name' => 'Bangladesch'),
			'BGR' => array('code' => 'bg', 'name' => 'Bulgarien'),
			'BHR' => array('code' => 'bh', 'name' => 'Bahrain'),
			'BHS' => array('code' => 'bs', 'name' => 'Bahamas'),
			'BIH' => array('code' => 'ba', 'name' => 'Bosnien und Herzegowina'),
			'BLM' => array('code' => 'bl', 'name' => 'Saint-Barthélemy Saint-Barthélemy'),
			'BLR' => array('code' => 'by', 'name' => 'Belarus'),
			'BLZ' => array('code' => 'bz', 'name' => 'Belize'),
			'BMU' => array('code' => 'bm', 'name' => 'Bermuda'),
			'BOL' => array('code' => 'bo', 'name' => 'Bolivien'),
			'BRA' => array('code' => 'br', 'name' => 'Brasilien'),
			'BRB' => array('code' => 'bb', 'name' => 'Barbados'),
			'BRN' => array('code' => 'bn', 'name' => 'Brunei'),
			'BTN' => array('code' => 'bt', 'name' => 'Bhutan'),
			'BUL' => array('code' => 'bg', 'name' => 'Bulgarien'),
			'BUR' => array('code' => 'bu', 'name' => 'Burma (jetzt Myanmar)'),
			'BVT' => array('code' => 'bv', 'name' => 'Bouvetinsel'),
			'BWA' => array('code' => 'bw', 'name' => 'Botswana'),
			'CAF' => array('code' => 'cf', 'name' => 'Zentralafrikanische Republik'),
			'CAN' => array('code' => 'ca', 'name' => 'Kanada'),
			'CCK' => array('code' => 'cc', 'name' => 'Kokosinseln'),
			'CHL' => array('code' => 'cl', 'name' => 'Chile'),
			'CHN' => array('code' => 'cn', 'name' => 'Volksrepublik China'),
			'CIV' => array('code' => 'ci', 'name' => 'Elfenbeinküste (Côte d’Ivoire)'),
			'CMR' => array('code' => 'cm', 'name' => 'Kamerun'),
			'COD' => array('code' => 'cd', 'name' => 'Demokratische Republik Kongo'),
			'COG' => array('code' => 'cg', 'name' => 'Republik Kongo (ehem. Kongo-Brazzaville)'),
			'COK' => array('code' => 'ck', 'name' => 'Cookinseln'),
			'COL' => array('code' => 'co', 'name' => 'Kolumbien'),
			'COM' => array('code' => 'km', 'name' => 'Komoren'),
			'CPT' => array('code' => 'cp', 'name' => 'Clipperton (reserviert für ITU)'),
			'CPV' => array('code' => 'cv', 'name' => 'Kap Verde (Cabo Verde)'),
			'CRI' => array('code' => 'cr', 'name' => 'Costa Rica'),
			'CRO' => array('code' => 'hr', 'name' => 'Kroatien'),
			'CSK' => array('code' => 'cs', 'name' => 'Tschechoslowakei (historisch)'),
			'CUB' => array('code' => 'cu', 'name' => 'Kuba'),
			'CUW' => array('code' => 'cw', 'name' => 'Curaçao'),
			'CXR' => array('code' => 'cx', 'name' => 'Weihnachtsinsel'),
			'CYM' => array('code' => 'ky', 'name' => 'Cayman Islands (Kaimaninseln)'),
			'CYP' => array('code' => 'cy', 'name' => 'Zypern'),
			'CZE' => array('code' => 'cz', 'name' => 'Tschechien'),
			'DDR' => array('code' => 'dd', 'name' => 'Deutsche Demokratische Republik (historisch)'),
			'DGA' => array('code' => 'dg', 'name' => 'Diego Garcia (reserviert für ITU)'),
			'DJI' => array('code' => 'dj', 'name' => 'Dschibuti'),
			'DMA' => array('code' => 'dm', 'name' => 'Dominica'),
			'DNK' => array('code' => 'dk', 'name' => 'Dänemark'),
			'DOM' => array('code' => 'do', 'name' => 'Dominikanische Republik'),
			'DZA' => array('code' => 'dz', 'name' => 'Algerien'),
			'ECU' => array('code' => 'ec', 'name' => 'Ecuador'),
			'EGY' => array('code' => 'eg', 'name' => 'Ägypten'),
			'ERI' => array('code' => 'er', 'name' => 'Eritrea'),
			'ESH' => array('code' => 'eh', 'name' => 'Westsahara'),
			'ESP' => array('code' => 'es', 'name' => 'Spanien'),
			'EST' => array('code' => 'ee', 'name' => 'Estland'),
			'ETH' => array('code' => 'et', 'name' => 'Äthiopien'),
			'FIN' => array('code' => 'fi', 'name' => 'Finnland'),
			'FJI' => array('code' => 'fj', 'name' => 'Fidschi'),
			'FLK' => array('code' => 'fk', 'name' => 'Falklandinseln'),
			'FRA' => array('code' => 'fr', 'name' => 'Frankreich'),
			'FRO' => array('code' => 'fo', 'name' => 'Färöer'),
			'FSM' => array('code' => 'fm', 'name' => 'Föderierte Staaten von Mikronesien'),
			'FXX' => array('code' => 'fx', 'name' => 'Frankreich France métropolitaine(europäisches Frankreich ohne Übersee-Départements)'),
			'GAB' => array('code' => 'ga', 'name' => 'Gabun'),
			'GBR' => array('code' => 'gb', 'name' => 'Vereinigtes Königreich(Großbritannien und Nordirland)'),
			'GEO' => array('code' => 'ge', 'name' => 'Georgien'),
			'GER' => array('code' => 'de', 'name' => 'Deutschland'),
			'GGY' => array('code' => 'gg', 'name' => 'Guernsey (Kanalinsel)'),
			'GHA' => array('code' => 'gh', 'name' => 'Ghana'),
			'GIB' => array('code' => 'gi', 'name' => 'Gibraltar Gibraltar'),
			'GIN' => array('code' => 'gn', 'name' => 'Guinea'),
			'GLP' => array('code' => 'gp', 'name' => 'Guadeloupe'),
			'GMB' => array('code' => 'gm', 'name' => 'Gambia'),
			'GNB' => array('code' => 'gw', 'name' => 'Guinea-Bissau'),
			'GNQ' => array('code' => 'gq', 'name' => 'Äquatorialguinea'),
			'GRC' => array('code' => 'gr', 'name' => 'Griechenland'),
			'GRD' => array('code' => 'gd', 'name' => 'Grenada'),
			'GRL' => array('code' => 'gl', 'name' => 'Grönland'),
			'GTM' => array('code' => 'gt', 'name' => 'Guatemala'),
			'GUF' => array('code' => 'gf', 'name' => 'Französisch-Guayana'),
			'GUM' => array('code' => 'gu', 'name' => 'Guam'),
			'GUY' => array('code' => 'gy', 'name' => 'Guyana'),
			'HKG' => array('code' => 'hk', 'name' => 'Hongkong'),
			'HMD' => array('code' => 'hm', 'name' => 'Australien Heard und McDonaldinseln'),
			'HND' => array('code' => 'hn', 'name' => 'Honduras'),
			'HTI' => array('code' => 'ht', 'name' => 'Haiti'),
			'HUN' => array('code' => 'hu', 'name' => 'Ungarn'),
			'IDN' => array('code' => 'id', 'name' => 'Indonesien'),
			'IMN' => array('code' => 'im', 'name' => 'Isle of Man'),
			'IND' => array('code' => 'in', 'name' => 'Indien'),
			'IOT' => array('code' => 'io', 'name' => 'Britisches Territorium im Indischen Ozean'),
			'IRL' => array('code' => 'ie', 'name' => 'Irland'),
			'IRN' => array('code' => 'ir', 'name' => 'Iran'),
			'IRQ' => array('code' => 'iq', 'name' => 'Irak'),
			'ISL' => array('code' => 'is', 'name' => 'Island'),
			'ISR' => array('code' => 'il', 'name' => 'Israel'),
			'ITA' => array('code' => 'it', 'name' => 'Italien'),
			'JAM' => array('code' => 'jm', 'name' => 'Jamaika'),
			'JEY' => array('code' => 'je', 'name' => 'Jersey (Kanalinsel)'),
			'JOR' => array('code' => 'jo', 'name' => 'Jordanien'),
			'JPN' => array('code' => 'jp', 'name' => 'Japan'),
			'KAZ' => array('code' => 'kz', 'name' => 'Kasachstan'),
			'KEN' => array('code' => 'ke', 'name' => 'Kenia'),
			'KGZ' => array('code' => 'kg', 'name' => 'Kirgisistan'),
			'KHM' => array('code' => 'kh', 'name' => 'Kambodscha'),
			'KIR' => array('code' => 'ki', 'name' => 'Kiribati'),
			'KNA' => array('code' => 'kn', 'name' => 'St. Kitts und Nevis'),
			'KOR' => array('code' => 'kr', 'name' => 'Südkorea'),
			'KWT' => array('code' => 'kw', 'name' => 'Kuwait'),
			'LAO' => array('code' => 'la', 'name' => 'Laos'),
			'LBN' => array('code' => 'lb', 'name' => 'Libanon'),
			'LBR' => array('code' => 'lr', 'name' => 'Liberia'),
			'LBY' => array('code' => 'ly', 'name' => 'Libyen'),
			'LCA' => array('code' => 'lc', 'name' => 'St. Lucia'),
			'LIE' => array('code' => 'li', 'name' => 'Liechtenstein'),
			'LKA' => array('code' => 'lk', 'name' => 'Sri Lanka'),
			'LSO' => array('code' => 'ls', 'name' => 'Lesotho'),
			'LTU' => array('code' => 'lt', 'name' => 'Litauen'),
			'LUX' => array('code' => 'lu', 'name' => 'Luxemburg'),
			'LVA' => array('code' => 'lv', 'name' => 'Lettland'),
			'MAC' => array('code' => 'mo', 'name' => 'Macau'),
			'MAF' => array('code' => 'mf', 'name' => 'Saint-Martin (französischer Teil)'),
			'MAR' => array('code' => 'ma', 'name' => 'Marokko'),
			'MCO' => array('code' => 'mc', 'name' => 'Monaco'),
			'MDA' => array('code' => 'md', 'name' => 'Moldau'),
			'MDG' => array('code' => 'mg', 'name' => 'Madagaskar'),
			'MDV' => array('code' => 'mv', 'name' => 'Malediven'),
			'MEX' => array('code' => 'mx', 'name' => 'Mexiko'),
			'MHL' => array('code' => 'mh', 'name' => 'Marshallinseln'),
			'MKD' => array('code' => 'mk', 'name' => 'Nordmazedonien'),
			'MLI' => array('code' => 'ml', 'name' => 'Mali'),
			'MLT' => array('code' => 'mt', 'name' => 'Malta'),
			'MMR' => array('code' => 'mm', 'name' => 'Myanmar'),
			'MNE' => array('code' => 'me', 'name' => 'Montenegro'),
			'MNG' => array('code' => 'mn', 'name' => 'Mongolei'),
			'MNP' => array('code' => 'mp', 'name' => 'Nördliche Marianen'),
			'MOZ' => array('code' => 'mz', 'name' => 'Mosambik'),
			'MRT' => array('code' => 'mr', 'name' => 'Mauretanien'),
			'MSR' => array('code' => 'ms', 'name' => 'Montserrat'),
			'MTQ' => array('code' => 'mq', 'name' => 'Martinique'),
			'MUS' => array('code' => 'mu', 'name' => 'Mauritius'),
			'MWI' => array('code' => 'mw', 'name' => 'Malawi'),
			'MYS' => array('code' => 'my', 'name' => 'Malaysia'),
			'MYT' => array('code' => 'yt', 'name' => 'Mayotte'),
			'NAM' => array('code' => 'na', 'name' => 'Namibia'),
			'NCL' => array('code' => 'nc', 'name' => 'Neukaledonien'),
			'NER' => array('code' => 'ne', 'name' => 'Niger'),
			'NFK' => array('code' => 'nf', 'name' => 'Norfolkinsel'),
			'NGA' => array('code' => 'ng', 'name' => 'Nigeria'),
			'NIC' => array('code' => 'ni', 'name' => 'Nicaragua'),
			'NIU' => array('code' => 'nu', 'name' => 'Niue'),
			'NLD' => array('code' => 'nl', 'name' => 'Niederlande'),
			'NOR' => array('code' => 'no', 'name' => 'Norwegen'),
			'NPL' => array('code' => 'np', 'name' => 'Nepal'),
			'NRU' => array('code' => 'nr', 'name' => 'Nauru'),
			'NTZ' => array('code' => 'nt', 'name' => 'Neutrale Zone (Saudi-Arabien und Irak bis 1993)'),
			'NZL' => array('code' => 'nz', 'name' => 'Neuseeland'),
			'OMN' => array('code' => 'om', 'name' => 'Oman'),
			'PAK' => array('code' => 'pk', 'name' => 'Pakistan'),
			'PAN' => array('code' => 'pa', 'name' => 'Panama'),
			'PCN' => array('code' => 'pn', 'name' => 'Pitcairninseln'),
			'PER' => array('code' => 'pe', 'name' => 'Peru'),
			'PHL' => array('code' => 'ph', 'name' => 'Philippinen'),
			'PLW' => array('code' => 'pw', 'name' => 'Palau'),
			'PNG' => array('code' => 'pg', 'name' => 'Papua-Neuguinea'),
			'POL' => array('code' => 'pl', 'name' => 'Polen'),
			'PRI' => array('code' => 'pr', 'name' => 'Puerto Rico'),
			'PRK' => array('code' => 'kp', 'name' => 'Nordkorea'),
			'PRT' => array('code' => 'pt', 'name' => 'Portugal'),
			'PRY' => array('code' => 'py', 'name' => 'Paraguay'),
			'PSE' => array('code' => 'ps', 'name' => 'Palästina'),
			'PYF' => array('code' => 'pf', 'name' => 'Französisch-Polynesien'),
			'QAT' => array('code' => 'qa', 'name' => 'Katar'),
			'REU' => array('code' => 're', 'name' => 'Réunion'),
			'ROU' => array('code' => 'ro', 'name' => 'Rumänien'),
			'RUS' => array('code' => 'ru', 'name' => 'Russland'),
			'RWA' => array('code' => 'rw', 'name' => 'Ruanda'),
			'SAU' => array('code' => 'sa', 'name' => 'Saudi-Arabien'),
			'SCG' => array('code' => 'cs', 'name' => 'Serbien und Montenegro (historisch)'),
			'SDN' => array('code' => 'sd', 'name' => 'Sudan'),
			'SEN' => array('code' => 'sn', 'name' => 'Senegal'),
			'SGP' => array('code' => 'sg', 'name' => 'Singapur'),
			'SGS' => array('code' => 'gs', 'name' => 'Südgeorgien und die Südlichen Sandwichinseln'),
			'SHN' => array('code' => 'sh', 'name' => 'St. Helena, Ascension und Tristan da Cunha'),
			'SJM' => array('code' => 'sj', 'name' => 'Spitzbergen und Jan Mayen'),
			'SLB' => array('code' => 'sb', 'name' => 'Salomonen'),
			'SLE' => array('code' => 'sl', 'name' => 'Sierra Leone'),
			'SLO' => array('code' => 'si', 'name' => 'Slowenien'),
			'SLV' => array('code' => 'sv', 'name' => 'El Salvador'),
			'SMR' => array('code' => 'sm', 'name' => 'San Marino'),
			'SOM' => array('code' => 'so', 'name' => 'Somalia'),
			'SPM' => array('code' => 'pm', 'name' => 'Saint-Pierre und Miquelon'),
			'SRB' => array('code' => 'rs', 'name' => 'Serbien'),
			'SSD' => array('code' => 'ss', 'name' => 'Südsudan'),
			'STP' => array('code' => 'st', 'name' => 'São Tomé und Príncipe'),
			'SUI' => array('code' => 'ch', 'name' => 'Schweiz'),
			'SUN' => array('code' => 'su', 'name' => 'Sowjetunion (UdSSR, historisch)'),
			'SUR' => array('code' => 'sr', 'name' => 'Suriname'),
			'SVK' => array('code' => 'sk', 'name' => 'Slowakei'),
			'SWE' => array('code' => 'se', 'name' => 'Schweden'),
			'SWZ' => array('code' => 'sz', 'name' => 'Eswatini'),
			'SXM' => array('code' => 'sx', 'name' => 'Sint Maarten'),
			'SYC' => array('code' => 'sc', 'name' => 'Seychellen'),
			'SYR' => array('code' => 'sy', 'name' => 'Syrien'),
			'TAA' => array('code' => 'ta', 'name' => 'Vereinigtes Königreich Tristan da Cunha(verwaltet von St. Helena, reserviert für UPU)'),
			'TCA' => array('code' => 'tc', 'name' => 'Turks- und Caicosinseln'),
			'TCD' => array('code' => 'td', 'name' => 'Tschad'),
			'TGO' => array('code' => 'tg', 'name' => 'Togo'),
			'THA' => array('code' => 'th', 'name' => 'Thailand'),
			'TJK' => array('code' => 'tj', 'name' => 'Tadschikistan'),
			'TKL' => array('code' => 'tk', 'name' => 'Tokelau'),
			'TKM' => array('code' => 'tm', 'name' => 'Turkmenistan'),
			'TON' => array('code' => 'to', 'name' => 'Tonga'),
			'TTO' => array('code' => 'tt', 'name' => 'Trinidad und Tobago'),
			'TUN' => array('code' => 'tn', 'name' => 'Tunesien'),
			'TUR' => array('code' => 'tr', 'name' => 'Türkei'),
			'TUV' => array('code' => 'tv', 'name' => 'Tuvalu'),
			'TWN' => array('code' => 'tw', 'name' => 'Taiwan'),
			'TZA' => array('code' => 'tz', 'name' => 'Tansania'),
			'UGA' => array('code' => 'ug', 'name' => 'Uganda'),
			'UKR' => array('code' => 'ua', 'name' => 'Ukraine'),
			'UMI' => array('code' => 'um', 'name' => 'Vereinigte Staaten United States Minor Outlying Islands'),
			'URY' => array('code' => 'uy', 'name' => 'Uruguay'),
			'USA' => array('code' => 'us', 'name' => 'Vereinigte Staaten'),
			'UZB' => array('code' => 'uz', 'name' => 'Usbekistan'),
			'VAT' => array('code' => 'va', 'name' => 'Vatikanstadt'),
			'VCT' => array('code' => 'vc', 'name' => 'St. Vincent und die Grenadinen'),
			'VEN' => array('code' => 've', 'name' => 'Venezuela'),
			'VGB' => array('code' => 'vg', 'name' => 'Britische Jungferninseln'),
			'VIR' => array('code' => 'vi', 'name' => 'Amerikanische Jungferninseln'),
			'VNM' => array('code' => 'vn', 'name' => 'Vietnam'),
			'VUT' => array('code' => 'vu', 'name' => 'Vanuatu'),
			'WLF' => array('code' => 'wf', 'name' => 'Wallis und Futuna'),
			'WSM' => array('code' => 'ws', 'name' => 'Samoa'),
			'YEM' => array('code' => 'ye', 'name' => 'Jemen'),
			'YUG' => array('code' => 'yu', 'name' => 'Jugoslawien (historisch)'),
			'ZAF' => array('code' => 'za', 'name' => 'Südafrika'),
			'ZAR' => array('code' => 'zr', 'name' => 'Zaire (jetzt Demokratische Republik Kongo)'),
			'ZMB' => array('code' => 'zm', 'name' => 'Sambia'),
			'ZWE' => array('code' => 'zw', 'name' => 'Simbabwe'),
		);
	}

	public function run($strTag)
	{
		$arrSplit = explode('::', $strTag);

		// Inserttag {{flagge::GER,50}}
		// Gibt die Deutschland-Flagge mit Breite 50px zurück (Standard bei fehlender Angabe = 20)
		if($arrSplit[0] == 'flagge' || $arrSplit[0] == 'cache_flagge')
		{
			// Parameter angegeben?
			if(isset($arrSplit[1]))
			{
				$werte = explode(',', $arrSplit[1]);
				if(isset($werte[1])) $breite = $werte[1];
				else $breite = 20;
				return self::getFlagge($werte[0], $breite);
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false; // Tag nicht dabei
		}

	}
	
	public function getFlagge($code, $breite)
	{
		if(isset($this->flag[$code]))
		{
			// Flagge gefunden
			return '<img src="bundles/contaoflaggen/flags/'.$this->flag[$code]['code'].'.svg" width="'.$breite.'" title="'.$this->flag[$code]['name'].'">';
		}
		else
		{
			// Flagge nicht gefunden
			return $code;
		}
	}
}
