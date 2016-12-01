<?php 
if (isset($_REQUEST["filename"])) { 
$dbname = $_REQUEST["filename"];
if (end(explode('.',$dbname)) != "xml") die ("Invalid file extension");
$dbname = stripslashes($dbname); 
}
else {
$dbname = "guestbook.xml";
}
$file = fopen($dbname, "w+") or die("Can't open XML file"); 
$xmlString = $HTTP_RAW_POST_DATA; 
if(!fwrite($file, $xmlString)){ 
print "Error writing to XML-file"; 
} 
print $xmlString."\n"; 
fclose($file); 
?>
