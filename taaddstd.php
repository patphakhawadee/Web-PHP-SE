<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Taaddstd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 
<div class = "submit" 
	class = "text">
	<form method="get"action="taaddstd.php">
	  
	    <h2 align="center" >เพิ่มรายชื่อนักศึกษา</h2>
	    <!-- <hr align="center" width="400"><br> -->

	    <table align="center">
	    	<tr>
	    		<td> 
						<label for="userID"><b>รหัสนักศึกษา</b></label><br>
						<input type="text" maxlength="11" style="width:300px;height:33px;display:initial;"  class="form-control" placeholder="กรอกรหัสนักศึกษา" id="userID" name="userID" required>  
						<button type="submit" name="Submit" class="btn btn-info ">เพิ่ม</button ><br><br>

				<button type="submit" class="btn btn-success" name="Submit">บันทึก</button>
				<a href="index.php"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
			</td>
		</tr>
	</table>
	  
	</form>
</div>
</body>
</html>