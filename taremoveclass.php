<meta charset="UTF-8" />
<?php
	include "connectlocal.php"; 

	try{
	

	
	$ta = $pdo->prepare("DELETE FROM ta WHERE subjID= ? ");
	$ta->bindParam(1,$_GET['subjID']);
	$ta->execute();

	$tc = $pdo->prepare("DELETE FROM teaching WHERE subjID = ? ");
	$tc->bindParam(1,$_GET['subjID']);
	$tc->execute();

	$sj = $pdo->prepare("DELETE FROM subject WHERE subjID = ?  ");
	$sj->bindParam(1,$_GET['subjID']);
	$sj->execute();
	
	}catch(PDOEXCEPTION $e){
		echo "Find exception : ".$e->getMessage();
	}

	echo "ลบรายวิชาสำเร็จ";
	echo "<br><form action='index.php'>
				<input type='submit' value='กลับหน้าหลัก'>
			</form> ";
?>