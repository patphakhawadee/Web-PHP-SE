<meta charset="UTF-8" />
<?php
	include "connectlocal.php"; 
	
	try{
		$sj = $pdo->prepare("UPDATE subject SET subjNameTH=?,subjNameEN=?,subjCredit=?,subjDes=?,secAmount=?,year=?,term=?,userID=? WHERE subjID=?");
		
		$sj->bindParam(1,$_GET['subjNameTH']);
		$sj->bindParam(2,$_GET['subjNameEN']);
		$sj->bindParam(3,$_GET['subjCredit']);
		$sj->bindParam(4,$_GET['subjDes']);
		$sj->bindParam(5,$_GET['secAmount']);
		$sj->bindParam(6,$_GET['year']);
		$sj->bindParam(7,$_GET['term']);
		$sj->bindParam(8,$_GET['userID']);
		$sj->bindParam(9,$_GET['subjID']);
		$sj->execute();
	}catch(PDOEXCEPTION $e){
		echo "Find exception : ".$e->getMessage();
		
	}
	
	echo "แก้ไขรายละเอียดรายวิชาสำเร็จ";
	echo "<br><form action='index.php'>
				<input type='submit' value='กลับหน้าหลัก'>
			</form> ";
?>