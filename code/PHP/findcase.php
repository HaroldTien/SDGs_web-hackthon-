<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>case</title>
	<link rel="stylesheet" href="../CSS/index.css">
<style type="text/css">
	body{
		font-family: 'Noto Sans TC', sans-serif;
		font-size: 20px;
		color: white;
		background-color: rgba(16,17,47,1.00);
	}
	hr{
		display: none;
	}	
	a{
		border: 0px;
		text-decoration:none;
		color:white;
	}
	.case a{
		position: relative;
		top: 300px;
		left: 0px;
    	padding-right: 10%;
    	padding-bottom: 10%;
   		padding-top: 80%;
    	padding-left: 90%;
		text-decoration: none;
		color: white;
	}
	.title{
		font-size: 35px;		
		height: 150px;
		position: absolute;top: 15px;left: 50%;right: 50%;		
	}
	.sidebar{
		padding: 10px;
		position: absolute; top:100px; right: 3%;
		background-color:rgba(0,0,0,0.00);
		z-index: 1;
		width: 20%;
		height: 400px;
		border-radius:10px;
		border:0.5px solid white;
	}	
	.sidebar-title{
		font-size: 25px;
		text-align: center;
		color: white;
	}
	.case{
		color:#000080	;
		background-color:#F5DEB3;
		width:35%;
		height: 350px;
		margin-top: 150px;
		margin-left:10%;
		border-radius:10px;
	}
	.casetitle{
		background-color: #FFD700;
		font-size: 25px;
		text-align: center;
	}
	.button{
		text-decoration: none;
		color: white;
		padding: 5px;
		position: relative;top: 250px; left: 35%; right: 50%;
		border: 0.5px solid rgba(252,252,252,1.00);
		border-radius: 10px;
	}
	.caseinner{
		padding-left: 30px;
		padding-right:30px;
		padding-top:10px;
	}
	
</style>
</head>

<body>
	<?php
		require_once("dbtools.inc.php");
		//指定每頁顯示幾筆記錄
		$records_per_page = 5;

		//取得要顯示第幾頁的記錄
		if (isset($_GET["page"]))
		$page = $_GET["page"];
		else
		$page = 1;

		//建立資料連接
		$link = create_connection();

		//執行 SQL 命令
		$sql = "SELECT * FROM peole_data ORDER BY date DESC";	
		$result = execute_sql($link, "makecase", $sql);

		$total_records = mysqli_num_rows($result);
		$total_pages = ceil($total_records / $records_per_page);
		$started_record = $records_per_page * ($page - 1);
		mysqli_data_seek($result, $started_record);
		$j=0;
		while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
		{
			$case_code=$row['case_code'];
			
			echo "	<div class='case'>
					<a class='case-link 'href='case.php?case_code=$case_code'></a>
						<div class='casetitle'>".$row["case_title"]."</div>
						<div class='caseinner'>".$row["discritble_case"]."</div>
					</div>";
			$j++;
		}
		echo "</table>" ;

		//產生導覽列
		echo "<p align='center'>";

		if ($page > 1)
		echo "<a href='findcase.php?page=". ($page - 1) . "'>上一頁</a> ";

		for ($i = 1; $i <= $total_pages; $i++)
		{
		if ($i == $page)
			echo "$i ";
		else
			echo "<a href='findcase.php?page=$i'>$i</a> ";
		}

		if ($page < $total_pages)
		echo "<a href='findcase.php?page=". ($page + 1) . "'>下一頁</a> ";
		echo "</p>";

		//釋放記憶體空間
		mysqli_free_result($result);
		mysqli_close($link);
	?>
	<!-- <div class="title">Case</div>
	<div class="case">
		<div class="casetitle">Title</div>
		<div class="caseinner">case說明</div>
	</div>
	<div class="case">
		<div class="casetitle">Title</div>
		<div class="caseinner">case說明</div>
	</div> -->
	<div class="top">
		<span class="meun">
			<a href="../index.html">回首頁</a>
		</span>
	</div>
	<!--sidebar-->
	<span class="sidebar">
		<div class="sidebar-title">來去提案</div>
		<br>
		<div class="makecase">聯合國於2015年訂定出17項指標，而本團隊最關注的是第十二項指標「確保永續消費及生產模式」，只要你的提案有關於永續消費或是生產模式，你正是我們要找的人才，趕快準備好你的企劃書項我們投稿，由本平台為你媒合吧！</div>
		<hr>
		<a href="../HTML/Makecase.html" class="button" target="_blank">Make case</a>
	</span>
</body>
</html>
