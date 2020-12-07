<html>
	<head>
		<style type="text/css">
		
        .top{
			height: auto; 
			width:100%;
			margin-left: 0;
			background:green;
			opacity: 0.75;
			position: fixed;
			top: 0;
			margin-bottom: 5px;
		}
		.top ul{

			width: auto;
			list-style-type: none;
			white-space:nowrap;
			overflow: hidden;
			margin-left: 5%;
			/* margin-top: 0;          */
			padding: 0;

		}
		.top li {
			float:left;
			margin-right:2%;  
			position: relative;
			overflow: hidden;
		
		}

		.top li a{
			display: block; 
			color:white;
			text-align: center;
			padding: 3px;
			overflow: hidden;
			text-decoration: none; 
			
		}
		.top li a:hover{
			background-color: #FF8C00;
		}


		body{
			background:black;
			background-image: url("./img/page.gif");
			background-repeat:no-repeat;
			background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-position: center 0;
		}
		.name {
			font-size:larger;
			height: 60px;
			color: white;
			font:italic 1em Georgia, serif;
		}
		.desc {
			
			height: 50px;
			color: lightyellow;
			font:italic 1em Georgia, serif;
		}
		.suit {
			height: 40px;
			font:italic 1em Georgia, serif;
			color: lightcyan;
		}
		article {
			font:italic 1em Georgia, serif;
			text-align: center;
			color:lightyellow;
		}
		button {
			font:italic 1em Georgia, serif;
			background-color: lightblue;
			height: 70px;
			width: 160px;
			text-align: center;
			font-size: larger;
		}
		button:hover{
			background-color: yellowgreen;
		}
		</style>
		
    </head>
	<body>
		<div class="top">
			<center> 
				<ul>
					<li><a href="./homepage.php">Home</a></li>
					<li><a href="./index.php">Toys</a></li>
				</ul>
			</center>
		</div>
		<article>
			<h1>Toy Detail</h1>
			<div>
				<?php
				$db_config = include('./db_conf.php');
				$host = $db_config['host'];
				$dbname = $db_config['dbname'];
				$dsn = "mysql:host=$host;dbname=$dbname";
				$user = $db_config['user'];
				$pwd = $db_config['password'];
				$pdo = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
				$id = $_GET['id'];
				
				$sql = "select * from product where id=".$id;
				$pdoStatement =$pdo->query($sql);
				$result =  $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
				echo "<div class='name'>Name: ".$result[0]['name']."</div>";
				echo "<div class='price'>Price: $".$result[0]['price']."</div>";
				echo "<div class='desc'>Description: ".$result[0]['desc']."</div>";
				echo "<div class='suit'>Suitable: ".$result[0]['suitable']."</div><hr>";
				echo "<div class='image'><img src='./img/".$result[0]['img'].".jpg'></div>";
				?>
			</div>
			<hr>
			<div class="button"><a href="./index.php"><button>Back to toys list</button></a></div>
		</article>
	</body>
</html>
