<?php include 'db.php';?>
<?php
//to create new entry
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$FNAME = $_POST["FNAME"];
	$PWRD = $_POST["PWRD"];
	$UNAME = $_POST["UNAME"];
	$CELL = $_POST["CELL"];
	$SLID = $_POST["SLID"];
	
	$q = "INSERT INTO `MAIN_TABLE` (`FNAME`,`UNAME`,`SLID`,`CELL`,`PWRD`) VALUES";
	$q = $q." ('".$FNAME."','".$UNAME."','".$SLID."','".$CELL."','".$PWRD."')";
	$q = $q.";";

//	echo $q;	
	$res = $mysqli->query($q);

	if (!$res){
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}else{
    	echo 'sucess';
    }
}
?>