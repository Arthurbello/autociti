 <?php
	 
	 
 ?>
<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="../../assets/css/default.css">
		<link rel="stylesheet" href="../../assets/css/component.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../../assets/jquery.backstretch.js"></script>
		<script src="../../assets/js/modernizr.custom.js"></script>
		<style>
			 @font-face { font-family: main_header; src: url('../../assets/RabbidHighwaySignII.otf'); } 
			
			
			#menu {
				box-shadow: 10px 10px 5px grey;
				background-color: #003366;
				height: 80px;
				padding: 10px;
			}
			/* General button style (reset) */
			.btn {
				border: none;
				font-family: inherit;
				font-size: inherit;
				color: inherit;
				background: none;
				cursor: pointer;
				padding: 15px 30px;
				display: inline-block;
				margin: 5px 7px;
				text-transform: uppercase;
				letter-spacing: 1px;
				font-weight: 700;
				outline: none;
				position: relative;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}
			
			.btn:after {
				content: '';
				position: absolute;
				z-index: -1;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}
			
			/* Pseudo elements for icons */
			.btn:before,
			.icon-heart:after,
			.icon-star:after,
			.icon-plus:after,
			.icon-file:before {
				font-family: 'icomoon';
				speak: none;
				font-style: normal;
				font-weight: normal;
				font-variant: normal;
				text-transform: none;
				line-height: 1;
				position: relative;
				-webkit-font-smoothing: antialiased;
			}

			/* Button 1 */
			.btn-1 {
				border: 1px solid #fff;
				color: #fff;
			}
			
			.btn-1d {
				overflow: hidden;
			}
			
			
			.btn-1d:after {
				width: 0;
				height: 103%;
				top: 50%;
				left: 50%;
				background: #003366;
				opacity: 0;
				-webkit-transform: translateX(-50%) translateY(-50%);
				-moz-transform: translateX(-50%) translateY(-50%);
				-ms-transform: translateX(-50%) translateY(-50%);
				transform: translateX(-50%) translateY(-50%);
			}
			
			.btn-1d:hover,
			.btn-1d:active {
				color: #003366;
				background: #fff;
			}
			
			.btn-1d:hover:after {
				width: 90%;
				opacity: 1;
			}
			
			.btn-1d:active:after {
				width: 101%;
				opacity: 1;
			}
			
			.btn{
				float: right;	
			}
			
			#logo{
				width: 180px;
			}
			        .pure-button{
	        background-color: #003366;
	        padding: 15px 30px;
        }
        #main{
	        width: 80%;
	        margin: auto;
	        text-align: center;
        }
        .headers{
				color: white;
				font-size: 50px;
				font-family: main_header;
			}
			.lower{
				color: white;
				font-size: 30px;
			}
			.lower_lower{
				color: white;
				font-size: 15px;
				font-family: main_header;
			}
			.btn{
				float: right;	
			}
			
			.cars {
				width: 1023px;
				margin: 15px;
				border: 0.1em #003366 solid;
				height: 200px;
				background: linear-gradient(to right, #1e5799 0%,#1e5799 0%,#ffffff 0%,#e8e8e8 100%);	
				box-shadow: 10px 10px 45px grey;			
			}
			.car_image{
				width: 646px;
				height: 380px;
				margin: auto;
			}
			.content{
				padding: 8px;
				display: inline-block;
				vertical-align: top;
			}
			h1{
				color: #003366;
				font-size: 50px;
			}
			.title{
				width: 400px;
				font-size: 34px;
				display: inline-block;
				-webkit-margin-after: 0;
			}
			.description {
				vertical-align: top;
			}
			.price{
				color: #003366;
				display: inline-block;
				font-size: 25px;
				font-weight: 700;
				-webkit-margin-after: 0;
				text-align: center;
			}
			.filters{
				display: inline-block;
				vertical-align: top;
				width: 300px;
				border: 1px solid grey;
				min-height: 180px;
				margin-top: 140px;
				position: fixed;
				text-align: center;
			}
			h2{
				text-align: center;
			}
			#color_panel{
				width: 100%;
				display: none;
				
			}
			#price_panel{
				display: none;
			}
			#make_panel{
				display: none;
			}
			
			
			.color{
				width: 50px;
				height: 50px;
				display: inline-block;
				margin: 5px;
				border: 1px solid black;
				border-radius: 5px;
			}
			#color1 {
				background-color: black;
			}
			#color2 {
				background-color: #b01b1b;
			}
			#color3 {
				background-color: white;
			}
			#color4 {
				background-color: silver;
			}
			#color5 {
				background-color: grey;
			}
			#color6 {
				background-color: blue;
			}
			#color7 {
				background-color: #F7E7CE;
			}
			#color8 {
				background-color: #722F37;
			}
			.make{
				width: 40%;
				display: inline-block;
				transition: background 0.8s;
			}
			.make:hover{
				color: #003366;
			}
			
			.delete{
				color: red;
			}
			.fav{
				width: 30px;
			}
			#favourite{
				margin-right: 60px; 
			}
			#quote {
				width: 300px;
				height: 80px;
			}
		</style>
	</head>
	<body>
		<div id="menu"><a href="/"><img id="logo" src="../../assets/Picture1.png"></a>
		<?php if (isset($_SESSION['is_admin'])) { 
					if ($_SESSION['is_admin']== "yes") { 
			?>
				<a href="/main/admin"><button class="btn btn-1 btn-1d">Admin</button></a>
			<?php }} ?>
				<?php if (isset($_SESSION['email'])) { ?>
			<a href="/main/logout"><button class="btn btn-1 btn-1d">Logout</button></a>
				<a href="/main/profile"><button class="btn btn-1 btn-1d">Profile</button></a>
				
				<?php }else{ ?>
				
				<a href="/main/login"><button class="btn btn-1 btn-1d">Login/SignUp</button></a>
				
				<?php } ?>
				<button class="btn btn-1 btn-1d">FAQ</button>
				<a href='/main/allcars'><button class="btn btn-1 btn-1d">All Cars</button></a>
		</div>
		<div id="main"><br><br>
			
					
						<?php
							echo '<img class="car_image" src="' . $data[0]->image_link . '"><br>';
							if (isset($_SESSION['email'])) { 
											echo '<a id="favourite" href="/main/add_to_favourites/'.$data[0]->id.'"><img class="fav" src="../../assets/star.png">Favourite</a>';
											
									}
									if (isset($_SESSION['is_admin'])) { 
										if ($_SESSION['is_admin']== "yes") { 
											echo '<a class="delete" href="/main/delete_car/'.$data[0]->id.'">Delete</a><br>';
											}
									}
							?>
							<div class='content'>
								<?php
									echo '<p class="title">' . $data[0]->make . ' ' . $data[0]->model . ' ' . $data[0]->year . '</p><br>';
									echo '<p class="price"> ₦'. $data[0]->price.'</p><br><br>';
									echo 'Color: '.$data[0]->color.'<br><br>';
									echo 'Condition: '.$data[0]->car_condition.'<br><br>';
									echo 'Mileage: '.$data[0]->mileage.'<br><br>';
									echo '<button class="pure-button pure-button-primary" id="quote">Get a quote</button>';
									echo '<p class="description">' . $data[0]->description. '</p><br>';
									
// 									echo $item->color . '<br>';
								?>
							</div>
				
		</div>
		
	</body>
</html>