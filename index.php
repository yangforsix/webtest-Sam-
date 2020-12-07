<html>
	<head>
	
		<style type="text/css">
		 
        .top{
			height: auto; 
			background:green;
			opacity: 0.75;
			width:100%;
			margin-left: 0;
			background:lightcoral;
			position: fixed;
			top: 0;
			margin-bottom: 5px;
			font:italic 1em Georgia, serif;
		}
		.top input[type=text] {
  		float: right;
  		padding: 2px;
  		margin-top: 3px;
  		margin-right: 150px;
  		border: none;
  		font-size: 15px;
		}
		.top ul{
			font:italic 1em Georgia, serif;
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
				font:italic 1em Georgia, serif;
			}

			.top li a{
				display: block; font:italic 1em Georgia, serif;
				color:white;
				text-align: center;
				padding: 3px;
				overflow: hidden;
				text-decoration: none; 
				
			}
			.top li a:hover{
				background-color: #FF8C00;
			}

			.search-box{
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		background: #2f3640;
		height: 40px;
		border-radius: 40px;
		padding: 10px;
	}
	.search-box:hover>.search-txt{
		width: 240px;
		padding: 0 6px;
	}
	
	.search-btn{
		color: #e84118;
		float:right;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background: #2f3640;
		display: flex;
		justify-content: center;
		align-items: center;
		background-image: url("./img/search.jpg");
		background-repeat:no-repeat;
			background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-position: center 0;
	}
	.search-btn input{
		opacity: 0;
	}
	.search-txt{
		border: none;
		background: none;
		outline: none;
		float: left;
		padding: 0;
		color: white;
		font-size: 16px;
		transition: 0.4s;
		line-height: 40px;
		width: 0px;
	}

		body{
			background-image: url("./img/home-background.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
		
		}
		.top button {
			float:right;
			margin-right:20px; 
            height: 20px;
            width: 20px;
			cursor: pointer;
			border:none;
            
        }
		img{

			width: 100px;
			height: 100px;
		}
		a{
			text-decoration:none;
		}
		article {
			font:italic 1em Georgia, serif;
			text-align: center;
		}
		article ul{
			list-style-type: none;
		}
		.other{
			display:inline
		}
		.login {
			float:left;
			width:20%;
			margin-left: 150px;
		}
		.three{
			display:inline
		}
		.one {
			float:left;
			width:32%;
			margin-top: 10px;
		}
		.fas fa-search{
			background-image: url("./img/search.jpg");
		}
		.slideOne{
			float: right;
			
		}
		.wb{
			margin-right: 400px;
		}
		.a_demo_three {
      background-color:#3bb3e0;
      font-family: 'Open Sans', sans-serif;
      font-size:12px;
      text-decoration:none;
      color:#fff;
      position:relative;
      padding:10px 20px;
      border-left:solid 1px #2ab7ec;
      margin-left:35px;
      background-image: linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
    }
    .a_demo_three:active {
      top:3px;
      background-image: linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
      box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
    }

	
		</style>
		
    </head>
	<body>
	
		<div class="top">
			<center> 
				<ul>
					<li><a href="./homepage.php">Home</a></li>
					<li><a href="./index.php"><b>Toys</b></a></li>

                    <li>
					<form>
					
                      </form>
					<!-- <form action="index.php" method="GET">
					<select name="select" id="select" >
					 <option value="Mid">Mid</option>
					 <option value="Big">Big</option>
					 </select> 
					
					</form> -->
					</li>
					<li> <form><form></li>
                  
					<form action = "index.php" method = "GET">
					<div class="ondisplay">
  					<section title=".slideOne">
    				<div class="slideOne">
						<div class="wb">  
					  <input type="checkbox" value="Mid" id="slideOne" name="check[]" checked />Mid
					  <input type="checkbox" value="Mid" id="slideOne" name="check[]" checked />Big
					  <input type="button" class="a_demo_three" style="width: 100px; height: 40px" value="Choose"/>
</div>
     				 <label for="slideOne"></label>
   					 </div>
					  </section>
					  
					 
					 
					 </div>	 
					 <div>
					
					</div>
					<div class="search-box">
    				<input class="search-txt" type="text" name="search" placeholder="Type to search">
    				<a class="search-btn" href="#">
      				  <input type="submit" class="fas fa-search">
					</a>
					</div>
					</form>
                   
				</ul>
			</center> 
			

		</div>
		
		<article>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h1>Toys List</h1>
			<div class="list">
				<div class="three">
					<?php
					$db_config = include('./db_conf.php');
					$host = $db_config['host'];
					$dbname = $db_config['dbname'];
					$dsn = "mysql:host=$host;dbname=$dbname";
					$user = $db_config['user'];
					$pwd = $db_config['password'];
					$pdo = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
					@$aa = $_GET["search"];
					@$st = $_GET["check"];
					// if($st!=null)
					// {
					// 	$sqlst= "select * from product where class like '$st'";
					// }
					// else
					// {
					// 	$sqlst= "select * from product";
					// }
					if($aa!=null)
					$sql = "select * from product where name like '$aa'";
					else
					$sql = "select * from product";
					
					

					$pdoStatement =$pdo->query($sql);
					$result =  $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $key=>$value ) {
						echo "<div class='one'><a href='./detail.php?id=".$value['id']."'>"
						."<img src='./img/".$value['img'].".jpg'><br>"
						."Name: ".$value['name']
						."<br>"
						."Price: $".$value['price']
						."</a></div>";
						echo "";
					}



					
					?>
				<div>
			</div>
			<?php
				

			?>
			<br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<hr>
			<div class="other">
				<div class="login">
					<h1>a wide range of toys</h1>
					
				</div>
				<div class="login">
					<h1>24 hours delivery</h1>
					
				</div>
				<div class="login">
					<h1>Toy industry leader</h1>
					
				</div>
			</div>
			
			
		</article>
	</body>
</html>
