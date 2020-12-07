<html>
	<head>
		<style type="text/css">

		
        .top{
			height: auto; 
			width:100%;
			background:green;
			opacity: 0.75;
			margin-left: 0;
			background:lightcoral;
			position: fixed;
			top: 0;
			margin-bottom: 5px;
			font:italic 1em Georgia, serif;
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
			font:italic 1em Georgia, serif;
			float:left;
			margin-right:2%;  
			position: relative;
			overflow: hidden;
		}

		.top li a{
			font:italic 1em Georgia, serif;
			display: block; 
			color:white;
			text-align: center;
			padding: 3px;
			overflow: hidden;
			text-decoration: none; 
			
		}
		.top li a:hover{
			background-color: orange;
		}


		body{
			background-image: url("./img/homepage.gif");
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-position: center 0;
			
		}
		article {
			text-align: center;
			font:italic 1em Georgia, serif;
		}
		article h1 {
			color: blueviolet;
			
		}
		article .desc {
			font:italic 1em Georgia, serif;
			color: violet;
			
		}
		article .image img{
			width: 80%;
		}
		.three{
			font:italic 1em Georgia, serif;
			display:inline
		}
		.one {

			float:left;
			width:32%;
		}
		.one img {
			width: 50px;
			height: 40px;
		}
		.other{
			display:inline
		}
		.login {
			float:left;
			width:48%;
		}
		button {
			background: #FF8C00;
			border-radius: 10px;
			border: 2px solid #FF8C00;
			font:italic 1em Georgia, serif;
			width: 80px;
			height: 40px;
			margin: 5px;
			font-size: large;
		}
		table{
			font:italic 1em Georgia, serif;
			margin-top: 50px;
			margin-left: 150px;
			margin-right: 150px;
			margin-bottom: 50px;
		}
		table td{
			font:italic 1em Georgia, serif;
			padding:10px;
		}
		
		</style>
		
    </head>
	<body>
		<div class="top">
			<center> 
				<ul>
					<li><a href="./homepage.php"><b>Home</b></a></li>
					<li><a href="./index.php">Toys</a></li>
				</ul>
			</center>
		</div>
		<br><br>
		<article>
			<h1>Welcome to the world of toys!!!</h1>
			<div class="image">
				<img src="./img/home.jpg" style="width: 700px; height:500px">
				<br>
				<br>
			</div>
			<div class="desc">
				<h1>Here are the messages about us :</h1>
				<table>
					<tr>
						<td>Location : No.550 Dalian Rd.(W) Shanghai 200083,China</td>
					</tr>
					<tr>
					<td>Telephone : 13196730031</td>
					</tr>
					<tr><td>Date of work: from Monday to Friday</td></tr>
					<tr><td>E-mail : 1509724111@qq.com</td></tr>
				    <tr><td>If you have any questions, please contact us.</td></tr>
				</table>
				
			</div>
			<br>
			<div class="three">
				<div class="one">
					<img src="./img/one.jpg"><p>A wide range of toys</p>
				</div>
				<div class="one">
					<img src="./img/two.jpg"><p>24 hours delivery</p>
				</div>
				<div class="one">
					<img src="./img/thre.jpg"><p>Toy industry leader</p>
				</div>
				
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
			
			
		</article>
	</body>
</html>
