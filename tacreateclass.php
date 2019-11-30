<!DOCTYPE html>
<?php 
include "connectlocal.php"; 

$tc = $pdo->prepare("SELECT * FROM user WHERE userType=2");
$tc->execute();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Create Class </title>
</head>
<body>
	<form method="get"action="tacreateclass_save.php">
	  
	    <h1 align="center" >สร้างห้องเรียน</h1>
	    <hr align="center" width="600"><br>

	    <table align="center">
	    	<tr>
	    		<td>

			    <label for="subjID"><b>รหัสวิชา</b></label><br>
			    <input type="text" maxlength="6" style="width:500px;height:20px" placeholder="กรอกรหัสวิชา" id="subjID" name="subjID"  required><br><br>

			    <label for="subjNameTH"><b>ชื่อวิชา(ภาษาไทย)</b></label><br>
			    <input type="text"  style="width:500px;height:20px" placeholder="กรอกชื่อวิชา(ภาษาไทย)" name="subjNameTH"  required><br><br>

			    <label for="subjNameEN"><b>ชื่อวิชา(ภาษาอังกฤษ)</b></label><br>
			    <input type="text"  style="width:500px;height:20px" placeholder="กรอกชื่อวิชา(ภาษาอังกฤษ)" name="subjNameEN"   required><br><br>

			    <label for="subjDes"><b>คำอธิบายรายวิชา</b></label><br>
			    <textarea id="subjDes" name="subjDes"  rows="5" cols="69"   required></textarea><br><br>
			    
			    <label for="secAmount"><b>จำนวนกลุ่มการเรียน</b></label>
			    <input type="number" style="width:50px;height:20px" name="secAmount"  required>

				<label for="subjCredit" ><b>จำนวนหน่วยกิต</b></label>
			    <input style="width:50px;height:20px" type="number" name="subjCredit" required><br><br>

				<label for="term"><b>ภาคการศึกษา</b></label>
			    <select name="term" style="width:50px;height:25px" required>
		  			<option value="1">1</option>
		  			<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>

				<label for="year"><b>ปีการศึกษา</b></label>
			    <select  name="year"  style="width:100px;height:25px" required>
		  			<option value="2561">2561</option>
		  			<option value="2562">2562</option>
					<option value="2563">2563</option>
					<option value="2564">2564</option>
				</select><br><br>

				<label for="userID"><b>อาจารย์ผู้สอน</b></label><br>
				<select style="width:500px;height:25px" name="userID" required>
				<?php 
				while($row = $tc->fetch()){
				?>
		  			<option value="<?=$row['userID']?>"><?=$row['userName']?> </option>
		  		<?php } ?>	
				</select><br><br>
				
				<label for="ta"><b>ผู้ช่วยสอน</b></label><br>
				<table>
						<tr>
							<td>คนที่ 1 </td>
							<td>นางสาวธนพร</td>
							<td>ฉัตรมงคลชาติ</td>
						</tr>
				</table>
				<input type="hidden" id="getTaID" name="getTaID" value="583020637-5" >

				<button type="submit" name="Submit">บันทึก</button>
				<a href="index.php"><button type="button" >ยกเลิก</button></a>
			</td>
		</tr>
	</table>
	  
	</form>
</body>
</html>