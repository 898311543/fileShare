<?php
	$myfile = fopen("/home/wwwroot/default/ip.txt","w") or die("unable to open file!");
if(isset($_GET['address'])){
	$txt = date("h:i:sa")."    ".$_GET['address']."\n";
	fwrite($myfile,$txt);
	fclose($myfile);
}	
else{
	echo "address don't set";
}
?>
