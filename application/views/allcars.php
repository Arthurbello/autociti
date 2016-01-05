<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="../../assets/css/default.css">
		<link rel="stylesheet" href="../../assets/css/component.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../../assets/jquery.backstretch.js"></script>
		<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
		<script src="../../assets/js/modernizr.custom.js"></script>
		<style>
			 @font-face { font-family: main_header; src: url('../../assets/RabbidHighwaySignII.otf'); } 
			
			#main {
				/* border : 1px solid silver; */
				padding: 20px;
				width: 70%;
				min-height: 1000px;
				opacity: .99;
				margin-left: 340px;
				display: inline-block;
				
				
				
			}
			#menu {
				background-color: #003366;
				height: 80px;
				padding: 10px;
				border: 1px black solid;
			}
			
			.headers{
				color: black;
				font-size: 50px;
				font-family: main_header;
			}
			.lower{
				color: black;
				font-size: 30px;
			}
			.lower_lower{
				color: black;
				font-size: 15px;
				font-family: main_header;
			}
			.btn{
				float: right;	
			}
			.btn_type2{
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
			.btn_type2:before,
			
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
			
			#logo{
				width: 180px;
			}
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
				width: 323px;
				height: 190px;
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
				font-size: 24px;
				display: inline-block;
				-webkit-margin-after: 0;
			}
			.description {
				vertical-align: top;
			}
			.price{
				color: #003366;
				display: inline-block;
				margin-left: 100px;
				font-size: 25px;
				font-weight: 700;
				-webkit-margin-after: 0;
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
			
			
		</style>
	</head>
	<body>
		<div id="menu">
			<a href="/"><img id="logo" src="../../assets/Picture1.png"></a>
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
				<button class="btn btn-1 btn-1d">All Cars</button>
			</div>
			<div class="filters">
				<h2>Filter By</h2><br><hr>
				<a href='#'><p class="filter_options" id="color_header">Colour</p></a>
				<div class="filter_hiddens" id="color_panel">
					<div id="color1" class="color"></div>
					<div id="color2" class="color"></div>
					<div id="color3" class="color"></div>
					<div id="color4" class="color"></div>
					<div id="color5" class="color"></div>
					<div id="color6" class="color"></div>
					<div id="color7" class="color"></div>
					<div id="color8" class="color"></div>
				</div>
				<hr>
				
				<a href='#'><p class="filter_options" id="price_header">Price</p></a>
				<div class="filter_hiddens" id="price_panel">
					<p>₦1,000,000 and under</p>
					<p>₦2,000,000 and under</p>
					<p>₦3,000,000 and under</p>
					<p>₦4,000,000 and under</p>
					<p>₦5,000,000 and under</p>
					<p>₦6,000,000 and under</p>
					<p>₦7,000,000 and under</p>
					<p>₦8,000,000 and under</p>
					<p>₦9,000,000 and under</p>
					<p>₦10,000,000 and under</p>
					<p>₦15,000,000 and under</p>
					<p>Above ₦15,000,000</p>
				</div>
				<hr>
				<a href='#'><p class="filter_options" id="make_header">Make</p></a>
				<div class="filter_hiddens" id="make_panel">
					<div id="make1" class="make">Acura</div>
					<div id="make2" class="make">BMW</div>
					<div id="make3" class="make">Chevrolet</div>
					<div id="make4" class="make">Dodge</div>
					<div id="make5" class="make"></div>
					<div id="make6" class="make"></div>
					<div id="make7" class="make"></div>
					<div id="make8" class="make"></div>
				</div>
			</div>
		<div id="main">
			<h1>All Cars</h1>
			<h3>Order by: <a href="/main/allcars/1"><span>Newest - Oldest</span></a>  |  <a href="/main/allcars/2"><span>Oldest - Newest</span></a></h3>
			
<?php
				foreach ($results->result() as $data) 
				{ ?>
				<div class='cars'>
					<a href="/main/view_car/<?php echo $data->id ?>">
						<?php
							
							echo '<img class="car_image" src="' . $data->image_link . '">';
							?>
							<div class='content'>
								<?php
									echo '<p class="title">' . $data->make . ' ' . $data->model . ' ' . $data->year . '</p>';
									echo '<p class="price"> ₦'. $data->price.'</p>';
									echo '<p class="description">' . $data->description. '</p><br>';
									if (isset($_SESSION['email'])) { 
											echo '<a id="favourite" href="/main/add_to_favourites/'.$data->id.'"><img class="fav" src="../../assets/star.png">Favourite</a>';
											
									}
									if (isset($_SESSION['is_admin'])) { 
										if ($_SESSION['is_admin']== "yes") { 
											echo '<a class="delete" href="/main/delete_car/'.$data->id.'">Delete</a>';
											}
									}
// 									echo $item->color . '<br>';
								?>
							</div>
					</a>
				</div>
				<?php
				}?>

		</div>
		<script>
			$('#color_header').click(function(){
				$('.filter_hiddens').css('display', 'none');
				$('#color_panel').fadeIn(200);
			})
			
			$('#price_header').click(function(){
				$('.filter_hiddens').css('display', 'none');
				$('#price_panel').fadeIn(200);
			})
			
			$('#make_header').click(function(){
				$('.filter_hiddens').css('display', 'none');
				$('#make_panel').fadeIn(200);
			})
				
			
			/*
$.backstretch([
			      "../../assets/car1.jpg"
			    , "../../assets/car2.jpg"
			    
			  ], {duration: 3000, fade: 750});
*/
		</script>
	</body>
</html>