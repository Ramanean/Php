<?Php

//Getting the contents of the url and extracting data from it using Custom functions

$website_url='http://www.spacenext.com';
$curl = curl_init($website_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.224 Safari/534.10');
$html = curl_exec($curl);
curl_close($curl);


//Dom functions
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);


function get_dom($url)
{
	$website_url='http://www.spacenext.com';
	$website_url=$url;
	$curl = curl_init($website_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.224 Safari/534.10');
	$html = curl_exec($curl);
	curl_close($curl);
	//Dom functions
	$dom = new DOMDocument();
	@$dom->loadHTML($html);
	$xpath = new DOMXPath($dom);
	return $xpath;
}


function elementfind($xpath,$query)
{

	$rows = $xpath->query($query);
	$array = array();
	foreach($rows as $node){
		$array[] = $node;
	}
	return $array;
}

//Finding only text - Usage textfind($xpath,$query,"text") - query is nothing but any xpath query.
function textfind($xpath,$query,$att1)
{

	$rows = $xpath->query($query);
	$array = array();
	foreach($rows as $node){
		$array[] = $node->textContent;
	}
	return $array;
}

//Finding only links - Usage textfind($xpath,$query,"href")
function linkfind($xpath,$query,$attribute)
{

	$rows = $xpath->query($query);
	$array = array();
	foreach($rows as $node){
		$array[] = $node->getAttribute($attribute);
	}
	return $array;
}

?>
