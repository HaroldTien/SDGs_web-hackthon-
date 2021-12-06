<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>case-詳細</title>
<style type="text/css">
	body{
		margin: 0px;
		background-color:#272833;
		color: white;
		font-size: 20px;
		font-family: 'Noto Sans TC', sans-serif;
	}
	.case-box{
		border:0.5px solid white; 
		padding: 5px 10px;
		padding-left: 10px;
		margin: 15px;
		background-color: #272833;
		width: 30%;
		height: 500px;
		border-radius:10px;
	}
	.case-title{
		margin-top: 5px;
		text-align: center;
	}
	.sidebar{
		overflow: scroll;
		background-color:#272833;
		width:20%;
		height: 700px;
		position: absolute; top:0px; right: 0.5%;
	}
	.sidebar h3{
		text-align: center;
	}
	.sidebar p{
		padding: 5px;
		margin-left: 5px;
	}
	.user-name,.user-email{
		padding-left: 10px;
	}
	.case-number, .case-inner, .case-sup{
		padding-left: 10px;
	}
	.join{
		position: absolute; left: 45%; top:600px;
	}
	.case-img{
		position: absolute; top: 100px; left: 35%;
		border-radius:10px;
		
	}
	input[type="submit"]{
		margin: 10px;
		padding: 15px 20px;
		background-color:rgba(0,0,0,0.00);
		color: white;
		border: solid 0.5px ;
		border-radius: 6px;
	}
	input[type="text"]{
		width: auto;
		height: 20px;
		padding: 7px;
		background-color: rgba(0,0,0,0.00);
		border: 0.5px solid white;
		border-radius: 6px;
		margin: 5px;
	}
	input[type="password"]{
		width: auto;
		height: 20px;
		padding: 7px;
		background-color: rgba(0,0,0,0.00);
		border: 0.5px solid white;
		border-radius: 6px;
		margin: 5px;
	}
	.img-text{
		position: absolute; left: 40%; top: 450px;px;
	}
</style>
</head>


<body>
    <?php
        require_once("dbtools.inc.php");
        $case_code=$_GET["case_code"];

        $link = create_connection();
        $sql = "SELECT * FROM peole_data WHERE case_code=".$case_code;	
		$result = execute_sql($link, "makecase", $sql);
        $row = mysqli_fetch_assoc($result);

		echo "<div class='case-box'>
				<div class='case-title'>
					<h3>企劃名稱 : ".$row["case_title"]."</h3>
				</div>
				<div class='user-name'>
					<p>企劃發起人姓名 : ".$row["name"]."</p>
				</div>
				<div class='user-email'>
					<p>企劃發起人email : ".$row["email"]."</p>
				</div>
				<div class='case-number'>
					<p>企劃發起人電話 : ".$row["phone_number"]."</p>
				</div>
				<div class='case-sup'>
					<p>執行此企劃需要那些協助 :<br	> ".$row["people_need"]."</p>
				</div>
				</div>
				
				<div class='sidebar'>
					<h3>企劃說明</h3>
					<p>".$row["discritble_case"]."</p>
				</div>";

    ?>
    <img src="../IMG/rawpixel-666928-unsplash.png" width="700" height="350"  class="case-img"alt=""/><br>
	<p class="img-text">與他人合作，一起推動SDGs!</p>
	</div>
</body>
</html>
