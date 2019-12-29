<!DOCTYPE html>
<html>
<head>
	<title>Manager</title>
	<style>
		.btn
		{
			  background-color: #442900;
  			  border: none;
  			  color: #FFE2B6;
  			  padding: 10px 18px;
  			  text-align: center;
  			  text-decoration: none;
  			  display: inline-block;
  			  font-size: 16px;
  			  border-radius: 10px;

		}
		.bodyclass
		{
			background-image: url(Room.jpg);
			background-position: center;
			background-attachment: fixed;
			background-size: 1900px 1000px;
			background-repeat: no-repeat;
		}
		.fontstyle
		{
			font-family: cursive;
			font-size: 20px;
			color: #FFE2B6;
		}
		input[type=text],[type=date]
		{
			width: 15%;
  			padding: 12px 15px;
  			margin: 4px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}
	    </style>
</head>
<body class="bodyclass">
<center>
<div class="fontstyle">
<h1 style="background-color: #481F00"><font style="color: #FFE2B6">Adding Room</font></h1>
<h3 style="background-color: #FFE2B6"><font style="color: #481F00">Enter Information</font></h3>
<hr width="600">
<form method="POST" action="action_addroom.php">

Room ID :
<input type="text" name="Room_ID" placeholder="Enter! Room-ID" maxlength="20"><br><br>

 Room Status :
<input type="text" name="Room_Status" placeholder="Enter! Room Status" maxlength="20">
<br><br>

Room Type :
<input type="text" name="Room_Type" placeholder="Enter! Room Type">

<br><br>
CNIC:
<input type="number" name="cnic" placeholder="Enter! Customer CNIC">
<br><br>
Manager ID:
<input type="number" name="mgrid" placeholder="Enter Manager Id" maxlength="20">
</font>
</div>
<hr width="600">
<input type="submit" name="sub" class="btn" value="Submit">
<input type="submit" name="clear" class="btn" value="Clear">
</center>
</form>
</body>
</html>