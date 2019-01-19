<?php
	
	$url = "https://journals.sagepub.com/home/VRT";
	// Create a new DOM Document to hold our webpage structure 
    $xml = new DOMDocument(); 

    // Load the url's contents into the DOM 
    $xml->loadHTMLFile($url); 

    // Empty array to hold all links to return 
    $links = array(); 

    //Loop through each <a> tag in the dom and add it to the link array 
    foreach($xml->getElementsByTagName('a') as $link) { 
		if(trim($link->nodeValue)=='Privacy Policy'){
			$links[] = array('url' => trim($link->getAttribute('href')), 'text' => trim($link->nodeValue)); 
		}
    } 
	 echo 'The url and corresponding url text is in the below printed array i.e $links';
	 print_r($links);
	 die('end!!!');

?>