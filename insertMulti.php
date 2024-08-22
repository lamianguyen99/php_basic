<?php
include_once("config.php");
$temp = 0;
$run = 0;
$i=0;
// insert multi records with rows
$query = 'INSERT INTO Product (name, description, cost) VALUES ';
// array to create each rows
$query_parts = array();
$count = 0;
$starttime = microtime(true);
try{
	while ($run == 0){
		$i++;
		$temp++;
		// declare variable for one record 	
		$cost =(string)$i;
        	$description = 'description' . (string)$i;
		// shuffle for name
		$name = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 20)), 0, 20);
		
		
		$query_parts[] = "('" . $name . "', '" . $description . "'," . $cost . ")";
		if ($temp%10==0){
        		$query .= implode(',', $query_parts);
			$query .= ";";
			echo $query;
			if ($conn->query($query) === TRUE) {
                		echo "<br>New record created successfully ";
        		} else {
                		echo "Error: " . $conn->error;
			}
			$count++;
			echo "haiiiiiiiiiiii" . $count;
			// reset về  giá trị ban đầu đã khởi tạo
			$query = 'INSERT INTO Product (name, description, cost) VALUES ';
			$query_parts = array();		
		}
		elseif ($count > 500000){
			echo $count;
			$run=1;
		}

	}	
}
//catch exception
catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
}
//count time to end
$endtime = microtime(true);
$timediff = $endtime - $starttime;
//
echo "<br>done" . $timediff;

/*
header("Content-Type: text/plain");
header('Content-Disposition: attachement; filename="/var/www/huyfr1.vietnix.xyz/jinujawad.csv"');
$pp = new NumberFormatter('en', NumberFormatter::SPELLOUT);
for ($x = 1; $x <= 500000; $x++) {
echo $pp->format($x).','."Decsription: $x ".','.$x."\n";
//withoutnumber formatter
//echo $x.','."The number is: $x ".','.$x."\n";
}
*/

?>
