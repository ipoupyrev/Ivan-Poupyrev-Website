<?
/* Config Part */ 

$directory = "./"; //  Webserver path to your adrotator files
$linkfile = "linkcode.inc"; //  The Link Code file
$adcountfile = "displayad.inc"; //  The Ad Display file
$pos = "left"; //  Postion of banner tag (left, center or right)
$help_msg = "no"; //  Display a "Help Message" - "Yes" to enable!
$help_message = ""; //  Enter "Help Message" here

/* End of Config */

// the file holding the advert number to view next
$num = file($directory.$adcountfile);

// the file holding the link codes
$adverts = file($directory.$linkfile);

// tells the script to look at the next item in the array
$num = $num[0]+1;

// counting the number of adverts - using function count()
$number = count($adverts);

// If ran out of adverts, start again!
if($num>$number-1){
    $num=0;	
}

// write the current number to the file
if (file_exists($directory.$adcountfile)) {
	$nu = fopen ($directory.$adcountfile, "w");
	fputs($nu,$num);
}
	else {
		die("<h1>Can't find file</h1><br>Check ad-count file ($adcountfile) exists<BR>Check file with links ($linkfile) exists<BR>Check directory ($directory) is correct");
}

// display the link on the page

if($help_msg == "yes"){
	echo "{$pos_statag}<small>$help_message</small>{$pos_endtag}";
}
echo "<div align=\"$pos\">$adverts[$num]</div>";
?>
