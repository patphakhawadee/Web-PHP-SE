<meta charset="UTF-8" />
<?php
	include "connectlocal.php"; 
	
	try{
		$sj = $pdo->prepare("insert into subject (subjID,subjNameTH,subjNameEN,subjCredit,subjDes,secAmount,year,term,userID) values(?,?,?,?,?,?,?,?,?)");
		$sj->bindParam(1,$_GET['subjID']);
		$sj->bindParam(2,$_GET['subjNameTH']);
		$sj->bindParam(3,$_GET['subjNameEN']);
		$sj->bindParam(4,$_GET['subjCredit']);
		$sj->bindParam(5,$_GET['subjDes']);
		$sj->bindParam(6,$_GET['secAmount']);
		$sj->bindParam(7,$_GET['year']);
		$sj->bindParam(8,$_GET['term']);
		$sj->bindParam(9,$_GET['userID']);
		$sj->execute();
	}catch(PDOEXCEPTION $e){
		echo "มีรายวิชา ".$_GET['subjID']." ในภาคการศึกษา ".$_GET['term']." ในปีการศึกษา ".$_GET['year']."นี้ถูกสร้างขึ้นแล้ว";
		
	}
	try{
		$getTaID = $_GET['getTaID'];
		$subjID = $_GET['subjID'];

		$pdo->exec("INSERT INTO ta VALUES ('','$getTaID','$subjID')");

	}catch(PDOEXCEPTION $e){
		echo "Find exception : ".$e->getMessage();
	}
	try{
		$subjID = $_GET['subjID'];
		$userID = $_GET['userID'];
		$pdo->exec("INSERT INTO teaching VALUES ('','$userID','$subjID')");

	}catch(PDOEXCEPTION $e){
		echo "Find exception : ".$e->getMessage();
	}
	echo "สร้างรายวิชาสำเร็จ";
	echo "<br><form action='index.php'>
				<input type='submit' value='กลับหน้าหลัก'>
			</form> ";
?>
