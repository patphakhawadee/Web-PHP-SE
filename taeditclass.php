<!DOCTYPE html>
<?php 
include "connect.php"; 

$sj = $pdo->prepare("SELECT * FROM subject WHERE subjID = ?");
$sj->bindParam(1,$_GET['subjID']);
$sj->execute();
$rowsj = $sj->fetch();

$tc = $pdo->prepare("SELECT * FROM user WHERE userID =?");
$tc->bindParam(1,$rowsj['userID']);
$tc->execute();
$rowtc = $tc->fetch();

$ta = $pdo->prepare("SELECT * FROM ta WHERE subjID = ?");
$ta->bindParam(1,$_GET['subjID']);
if ($ta->execute()){
	$rowta = $ta->fetch();
	$sa = $pdo->prepare("SELECT * FROM user WHERE userID = ?");
	$sa->bindParam(1,$rowta['userID']);
	$sa->execute();
}





//$taname = $pdo->prepare("SELECT * FROM user WHERE userID = ?");
//$taname->bindParam(1,$rowta['userID']);

?>
<html>
<head>
<meta charset="UTF-8">
<title>Create Class </title>
</head>
<body>
	<form method="get"action="taeditclass_save.php">
	  
	    <h1 align="center" >แก้ไขรายละเอียดห้องเรียน</h1>
	    <hr align="center" width="600"><br>

	    <table align="center">
	    	<tr>
	    		<td>

			    <label for="subjID"><b>รหัสวิชา</b></label><br>
			    <input type="text" maxlength="6" style="width:500px;height:20px" placeholder="กรอกรหัสวิชา" id="subjID" name="subjID" disabled value="<?=$rowsj['subjID']?>" ><br><br>

			    <label for="subjNameTH"><b>ชื่อวิชา(ภาษาไทย)</b></label><br>
			    <input type="text"  style="width:500px;height:20px" placeholder="กรอกชื่อวิชา(ภาษาไทย)" name="subjNameTH"  value="<?=$rowsj['subjNameTH']?>" ><br><br>

			    <label for="subjNameEN"><b>ชื่อวิชา(ภาษาอังกฤษ)</b></label><br>
			    <input type="text"  style="width:500px;height:20px" placeholder="กรอกชื่อวิชา(ภาษาอังกฤษ)" name="subjNameEN" value="<?=$rowsj['subjNameEN']?>"  ><br><br>

			    <label for="subjDes"><b>คำอธิบายรายวิชา</b></label><br>
			    <textarea id="subjDes" name="subjDes"  rows="5" cols="69"  ><?=$rowsj['subjDes']?></textarea><br><br>
			    
			    <label for="secAmount"><b>จำนวนกลุ่มการเรียน</b></label>
			    <input type="number" style="width:50px;height:20px" name="secAmount"  value="<?=$rowsj['secAmount']?>">

				<label for="subjCredit" ><b>จำนวนหน่วยกิต</b></label>
			    <input style="width:50px;height:20px" type="number" name="subjCredit" value="<?=$rowsj['subjCredit']?>"><br><br>

				<label for="term"><b>ภาคการศึกษา</b></label>
			    <select name="term" style="width:50px;height:25px" >
			    	<option value="<?=$rowsj['term']?>" selected ><?=$rowsj['term']?></option>
		  			<option value="1">1</option>
		  			<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>

				<label for="year"><b>ปีการศึกษา</b></label>
			    <select  name="year"  style="width:100px;height:25px" >
			    	<option value="<?=$rowsj['year']?>" selected ><?=$rowsj['year']?></option>
		  			<option value="2561">2561</option>
		  			<option value="2562">2562</option>
					<option value="2563">2563</option>
					<option value="2564">2564</option>
				</select><br><br>

				<label for="userID"><b>อาจารย์ผู้สอน</b></label><br>
				<select style="width:500px;height:25px" name="userID" disabled value="<?=$rowsj['userID']?>">
		  			<option value="<?=$rowsj['userID']?>" readonly><?=$rowtc['userName']?> </option>	
				</select><br><br>
				
				<label for="sta"><b>ผู้ช่วยสอน</b></label><br>
				<?php 
    
                    $ta = $pdo->prepare("SELECT * FROM ta 
                    INNER JOIN user on ta.userID = user.userID
                    WHERE subjID = ?");
                    $ta->bindParam(1,$_GET['subjID']);
                       if ($ta->execute())
                       {
	                       while ($rowsa = $ta->fetch())
                           {
					           echo $rowsa['userName']."<br>";
				           }
                       }
    
				
				?>
				<br>
				<button type="submit" name="Submit">บันทึก</button>
				<a href="index.php"><button type="button" >ยกเลิก</button></a>
				<a href="taremoveclass.php?subjID=<?=$rowsj['subjID']?>&getTaID=<?=$rowta['userID']?>&getTcID=<?=$rowsj['userID']?>"  onclick="return confirm('ยืนยันการลบรายวิชา?')"><button type="button" >ลบรายวิชา</button></a>
			</td>
		</tr>
	</table>
	  
	</form>
</body>
</html>