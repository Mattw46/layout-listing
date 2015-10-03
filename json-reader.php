<?php

/* Reads in  data.json and converts to an array
	Array is used to output content on the calling page*/
function print_entries() {
	$string = file_get_contents("data/data.json");
	$json_a = json_decode($string, true);
	
	$len = sizeof($json_a);
	foreach ($json_a as $value) {
		if (!empty($value["thumbnail"])) {
			print "<img src=\"".$value["thumbnail"]."\" alt=\"icon\" >";
		}
		print "<a href=\"".$value["url"]."\">".$value["title"]."</a>\n";
		print "<p>".$value["description"]."</p>";
		print "\n";
		
		print "<hr />";
		
		
	}
}

?>