<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../../assets/jquery.backstretch.js"></script>
		<link rel="stylesheet" href="../../assets/css/default.css">
		<link rel="stylesheet" href="../../assets/css/component.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cs-select.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cs-skin-border.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/cs-skin-overlay.css">
		<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-7243260-2']);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			</script>
		<script src="../../assets/js/modernizr.custom.js"></script>
		<script src="../../assets/js/classie.js"></script>
			<script src="../../assets/js/selectFx.js"></script>
			<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>
		<style>
			 @font-face { font-family: main_header; src: url('../../assets/fonts/bauserif.ttf'); } 
			body{
				display: none;
			}
			#main {
				/* border : 1px solid silver; */
				padding: 10px;
				width: 70%;
				background: linear-gradient(to right, #003366 0%,#234466 50%,#344d66 100%);
				min-height: 2000px;
				opacity: .99;
				margin: auto;
				text-align: center;
				border: 10px solid white;
				
				
			}
			#menu {
				background-color: white;
				height: 80px;
				padding: 10px;
				box-shadow: 10px 10px 5px black;
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
			.image_borders{
				
				border-radius: 60%;
				border-color: white;
			}
			.img-circular{
 width: 100px;
 height: 100px;
margin: 10px;
 background-size: cover;
 display: inline-block;
 border-radius: 100px;
 -webkit-border-radius: 100px;
 -moz-border-radius: 100px;
 transition: background 0.5s;
}
.img-circular:hover{
	background: black;
}
			#car1{
				background-image: url('../../assets/carB.jpg');
			}
			#car2{
				background-image: url('../../assets/carC.jpg');
			}
			#car3{
				background-image: url('../../assets/carD.jpg');
			}
			#car4{
				background-image: url('../../assets/carE.jpg');
			}
			#car5{
				background-image: url('../../assets/carF.jpg');
			}
			#car6{
				background-image: url('../../assets/carH.jpg');
			}
			#logo{
				width: 180px;
			}
			#main_log{
				width: 450px;
			}
			.radios {
			clear: both;
			width: 15%;
			margin: auto;
		}
					label {
		  width: 150px;
		  border-radius: 3px;
		  border: 1px solid #D1D3D4
		}
		
		/* hide input */
		input.radio:empty {
			display: none;
		}
		
		/* style label */
		input.radio:empty ~ label {
			position: relative;
			float: left;
			line-height: 2.5em;
			text-indent: 3.25em;
		/* 	margin-top: 2em; */
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		
		input.radio:empty ~ label:before {
			position: absolute;
			display: block;
			top: 0;
			bottom: 0;
			left: 0;
			content: '';
			width: 2.5em;
			background: #D1D3D4;
			border-radius: 3px 0 0 3px;
		}
		
		/* toggle hover */
		input.radio:hover:not(:checked) ~ label:before {
			content:'\2714';
			text-indent: .8em;
			color: #fff;
		}
		
		input.radio:hover:not(:checked) ~ label {
			color: #fff;
		}
		
		/* toggle on */
		input.radio:checked ~ label:before {
			content:'\2713';
			text-indent: .2em;
			color: #9CE2AE;
			background-color: #4d8fcc;
		}
		
		input.radio:checked ~ label {
			color: #fff;
		}
		
		/* radio focus */
		input.radio:focus ~ label:before {
			box-shadow: 0 0 0 3px #999;
		}
		.btn2{
			border: 1px #fff solid;
			color: #fff;
			
		}
		#wrapper{
			width: 14%;
			margin: auto;
		}
		.hovertext{
			margin-top: 39px;
text-align: center;
width: 100px;
			position: absolute;
			display: none;
		}
		#success{
			background-color: white;
			color: green;
			height: 20px;
		}
		
		.flag{
			width: 295px;
			height: 150px;
/* 			margin: 10px; */
		}
		#flag1{
			margin-right: 10px;
		}
		#flag2{
			margin-left: 10px;
		}
		#footer{
			color: grey;
			background-image: url('../../assets/Picture1.png');
			width: 100%;
			height: 150px;
		}
		#rights{
			vertical-align: bottom;
			margin-top: 430;
		}
		
		/* radio focus */
		
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
				<button class="btn btn-1 btn-1d">Contact Us</button>
				<a href='/main/allcars'><button class="btn btn-1 btn-1d">All Cars</button></a>
			</div>
		<div id="main">
			<?php if (isset($_SESSION['signup_success'])) {
						echo '<p id="success">'.$_SESSION['signup_success'].'</p>';
						unset($_SESSION['signup_success']);
					}?>
			<img id='flag1' class = 'flag' src="../../assets/flag1.gif">
			<img id='main_log' src="../../assets/Picture1.png">
			<img id='flag2' class = 'flag' src="../../assets/flag2.gif">
			<p class="headers">Find your dream car</p>
			<p class="lower">Just one click away</p>
			<div id="car_types">
				<a href="/main/vehicle/1"><div id='car1' class="img-circular"><p id='forcar1' class='hovertext'>Bus</p></div></a>
				<a href="/main/vehicle/2"><div id='car2' class="img-circular"><p id='forcar2' class='hovertext'>Sudan</p></div></a>
				<a href="/main/vehicle/3"><div id='car3' class="img-circular"><p id='forcar3' class='hovertext'>MiniVan</p></div></a><br>
				<a href="/main/vehicle/4"><div id='car4' class="img-circular"><p id='forcar4' class='hovertext'>SUV</p></div></a>
				<a href="/main/vehicle/5"><div id='car5' class="img-circular"><p id='forcar5' class='hovertext'>Coupe</p></div></a>
				<a href="/main/vehicle/6"><div id='car6' class="img-circular"><p id='forcar6' class='hovertext'>Hatchback</p></div></a>
			</div>
			<!--
<?php
				foreach ($query as $item) 
				{
					echo $item->name . ' ';
					echo $item->color . '<br>';
				
				}?>
-->
				<form action="/main/results" method="post">
					<h4 class='lower' >Or just fill out this quick search form</h4>
					<p class="lower_lower">Condition</p>
					<div class="radios">	
					<input type="radio" value="new" name="condition" id="radio3" class="radio"/>
					<label for="radio3">New</label>
					</div>
					
					<div class="radios">	
					<input type="radio" value="used" name="condition" id="radio4" class="radio"/>
					<label for="radio4">Used</label>
					</div>
					
					<div class="radios">	
					<input checked="checked" type="radio" value="both" name="condition" id="radio5" class="radio"/>
					<label for="radio5">Both</label>
					</div><br><br><br><br><br><br>
					<p class="lower_lower">Brand</p>
					<section id='fand'>
						
							<div id = "brand" class="cs-select cs-skin-overlay">
<!-- 								<span class="cs-placeholder">Select a Max Price</span> -->
								<div class="cs-options">
									<ul>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="All Makes">
											<span>All Makes</span>
											</li>
											<li data-option="" data-value="Acura">
											<span>Acura</span>
											</li>
											<li data-option="" data-value="BMW">
											<span>BMW</span>
											</li>
											<li data-option="" data-value="Chevrolet">
											<span>Chevrolet</span>
											</li>
											<li data-option="" data-value="Dodge">
											<span>Dodge</span>
											</li>
											<li data-option="" data-value="Ford">
											<span>Ford</span>
											</li>
											<li data-option="" data-value="Honda">
											<span>Honda</span>
											</li>
											<li data-option="" data-value="Hyundai">
											<span>Hyundai</span>
											</li>
											<li data-option="" data-value="Jeep">
											<span>Jeep</span>
											</li>
										</ul>
										</li>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="Land Rover">
											<span>Land Rover</span>
											</li>
											<li data-option="" data-value="Kia">
											<span>Kia</span>
											</li>
											<li data-option="" data-value="Lexus">
											<span>Lexus</span>
											</li>
											<li data-option="" data-value="Mazda">
											<span>Mazda</span>
											</li>
											<li data-option="" data-value="Mercedes-Benz">
											<span> Mercedes-Benz </span>
											</li>
											<li data-option="" data-value="Nissan">
											<span> Nissan </span>
											</li>
											<li data-option="" data-value="Toyota">
											<span> Toyota </span>
											</li>
											<li data-option="" data-value="Volkswagen">
											<span> Volkswagen </span>
											</li>
											<li data-option="" data-value="Volvo">
											<span> Volvo </span>
											</li>
										</ul>
										</li>
									</ul>
								</div>
								<select name="make" class="cs-select cs-skin-overlay">
<!-- 									<option value="" disabled="" selected="">Select a Max Price</option> -->
									<optgroup label="">
										<option selected="selected" value="All Makes">All Makes</option>
										<option value="Acura">Acura</option>
										<option value="BMW">BMW</option>
										<option value="Chevrolet">Chevrolet</option>
										<option value="Dodge">Dodge</option>
										<option value="Ford">Ford</option>
										<option value="Honda">Honda</option>
										<option value="Hyundai">Hyundai</option>
										<option value="Jeep">Jeep</option>
									</optgroup>
									<optgroup label="">
										<option value="Land Rover">Land Rover</option>
										<option value="Kia">Kia</option>
										<option value="Lexus">Lexus</option>
										<option value="Mazda">Mazda</option>
										<option value="Mercedes-Benz">Mercedes-Benz</option>
										<option value="Nissan">Nissan</option>
										<option value="Toyota">Toyota</option>
										<option value="Volkswagen">Volkswagen</option>
										<option value="Volvo">Volvo</option>
										
									</optgroup>
								</select>				
							</div>
						
					</section>
					<br><br><br>
					<p class="lower_lower">Max price</p>
					<section id = 'max_price'>
							<div class="cs-select cs-skin-overlay">
<!-- 								<span class="cs-placeholder">Select a Max Price</span> -->
								<div class="cs-options">
									<ul>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="All Prices">
											<span>All Prices</span>
											</li>
											<li data-option="" data-value="1000000">
											<span>₦1,000,000</span>
											</li>
											<li data-option="" data-value="1500000">
											<span>₦1,500,000</span>
											</li>
											<li data-option="" data-value="2000000">
											<span>₦2,000,000</span>
											</li>
											<li data-option="" data-value="2500000">
											<span>₦2,500,000</span>
											</li>
											<li data-option="" data-value="3000000">
											<span>₦3,000,000</span>
											</li>
											<li data-option="" data-value="3500000">
											<span>₦3,500,000</span>
											</li>
											<li data-option="" data-value="4000000">
											<span>₦4,000,000</span>
											</li>
											<li data-option="" data-value="4500000">
											<span>₦4,500,000</span>
											</li>
											<li data-option="" data-value="5000000">
											<span>₦5,000,000</span>
											</li>
											<li data-option="" data-value="5500000">
											<span>₦5,500,000</span>
											</li>
											<li data-option="" data-value="6000000">
											<span>₦6,000,000</span>
											</li>
											<li data-option="" data-value="6500000">
											<span>₦6,500,000</span>
											</li>
										</ul>
										</li>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="7000000">
											<span>₦7,000,000</span>
											</li>
											<li data-option="" data-value="7500000">
											<span>₦7,500,000</span>
											</li>
											<li data-option="" data-value="8000000">
											<span>₦8,000,000</span>
											</li>
											<li data-option="" data-value="8500000">
											<span>₦8,500,000</span>
											</li>
											<li data-option="" data-value="9000000">
											<span>₦9,000,000</span>
											</li>
											<li data-option="" data-value="9500000">
											<span>₦9,500,000</span>
											</li>
											<li data-option="" data-value="10000000">
											<span>₦10,000,000</span>
											</li>
											<li data-option="" data-value="12000000">
											<span>₦12,000,000</span>
											</li>
											<li data-option="" data-value="14000000">
											<span>₦14,000,000</span>
											</li>
											<li data-option="" data-value="16000000">
											<span>₦16,000,000</span>
											</li>
											<li data-option="" data-value="18000000">
											<span>₦18,000,000</span>
											</li>
											<li data-option="" data-value="20000000">
											<span>₦20,000,000</span>
											</li>
										</ul>
										</li>
									</ul>
								</div>
								<select name="price" class="cs-select cs-skin-overlay">
<!-- 									<option value="" disabled="" selected="">Select a Max Price</option> -->
									<optgroup label="">
									<option selected="selected" value="All Prices">All Prices</option>
										<option value="1000000">₦1,000,000</option>
										<option value="1500000">₦1,500,000</option>
										<option value="2000000">₦2,000,000</option>
										<option value="2500000">₦2,500,000</option>
										<option value="3000000">₦3,000,000</option>
										<option value="3500000">₦3,500,000</option>
										<option value="4000000">₦4,000,000</option>
										<option value="4500000">₦4,500,000</option>
										<option value="5000000">₦5,000,000</option>
										<option value="5500000">₦5,500,000</option>
										<option value="6000000">₦6,000,000</option>
										<option value="6500000">₦6,500,000</option>
									</optgroup>
									<optgroup label="">
										<option value="7000000">₦7,000,000</option>
										<option value="7500000">₦7,500,000</option>
										<option value="8000000">₦8,000,000</option>
										<option value="8500000">₦8,500,000</option>
										<option value="9000000">₦9,000,000</option>
										<option value="9500000">₦9,500,000</option>
										<option value="10000000">₦10,000,000</option>
										<option value="12000000">₦12,000,000</option>
										<option value="14000000">₦14,000,000</option>
										<option value="16000000">₦16,000,000</option>
										<option value="18000000">₦18,000,000</option>
										<option value="20000000">₦20,000,000</option>
									</optgroup>
								</select>				
							</div>
						
					</section>
					<br><br><br>
					<p class="lower_lower">Mileage</p>
					<section id = 'mileage'>
							<div class="cs-select cs-skin-overlay">
<!-- 								<span class="cs-placeholder">Select a Max Price</span> -->
								<div class="cs-options">
									<ul>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="All Miles">
											<span>All Miles</span>
											</li>
											<li data-option="" data-value="10">
											<span>10 Miles</span>
											</li>
											<li data-option="" data-value="20">
											<span>20 Miles</span>
											</li>
											<li data-option="" data-value="30">
											<span>30 Miles</span>
											</li>
											<li data-option="" data-value="40">
											<span>40 Miles</span>
											</li>
											<li data-option="" data-value="50">
											<span>50 Miles</span>
											</li>
										</ul>
										</li>
										<li class="cs-optgroup">
										<span></span>
										<ul>
											<li data-option="" data-value="75">
											<span>75 Miles</span>
											</li>
											<li data-option="" data-value="100">
											<span>100 Miles</span>
											</li>
											<li data-option="" data-value="150">
											<span>150 Miles</span>
											</li>
											<li data-option="" data-value="200">
											<span>200 Miles</span>
											</li>
											<li data-option="" data-value="250">
											<span>250 Miles</span>
											</li>
											<li data-option="" data-value="500">
											<span>500 Miles</span>
											</li>					
										</ul>
										</li>
									</ul>
								</div>
								<select name="miles" class="cs-select cs-skin-overlay">
<!-- 									<option value="" disabled="" selected="">Select a Max Price</option> -->
									<optgroup label="">
									<option selected="selected" value="All Miles">All Miles</option>
										<option value="10">10 Miles</option>
										<option value="20">20 Miles</option>
										<option value="30">30 Miles</option>
										<option value="40">40 Miles</option>
										<option value="50">50 Miles</option>
										
									</optgroup>
									<optgroup label="">
										<option value="75">75 Miles</option>
										<option value="100">100 Miles</option>
										<option value="150">150 Miles</option>
										<option value="200">200 Miles</option>
										<option value="250">250 Miles</option>
										<option value="500">500 Miles</option>
									</optgroup>
								</select>				
							</div>
						
					</section>
					<br><br><br>
					<div id='wrapper'>
						<button type="submit" class="btn btn2 btn-1a">Search</button>
					</div>
				</form>
				<p id='rights'>© 2016 Autocitiltd.com All rights reserved.</p>
			</div>
			<div id='footer'></div>
			<script>
				$(document).ready(function(){
				var checks = 0;})
			</script>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/selectFx.js"></script>	
		<script>
			
			function showit(){
				$('span').click(function(){
					$('#max_price').show(10);
				})
			}
			$(document).ready(function(){
				
				
				/*
$('body').click(function(){
					checks++;
					console.log(checks)
					if(checks != 2){
						$('#max_price').show(10);	
					}
					else{
						$('#max_price').hide(10);
					}
				})
				$('#brand').click(function(){
					checks = -3;
					console.log(checks)
					if(checks != 2){
						$('#max_price').show(10);	
					}
					else{
						$('#max_price').hide(10);
					}
				})
*/
				$('#car1').mouseover(function(){
					$('#forcar1').fadeIn(10);
				})
				$('#car1').mouseout(function(){
					$('#forcar1').fadeOut(10);
				})
				
				$('#car2').mouseover(function(){
					$('#forcar2').fadeIn(10);
				})
				$('#car2').mouseout(function(){
					$('#forcar2').fadeOut(10);
				})
				
				$('#car3').mouseover(function(){
					$('#forcar3').fadeIn(10);
				})
				$('#car3').mouseout(function(){
					$('#forcar3').fadeOut(10);
				})
				
				$('#car4').mouseover(function(){
					$('#forcar4').fadeIn(10);
				})
				$('#car4').mouseout(function(){
					$('#forcar4').fadeOut(10);
				})
				
				$('#car5').mouseover(function(){
					$('#forcar5').fadeIn(10);
				})
				$('#car5').mouseout(function(){
					$('#forcar5').fadeOut(10);
				})
				
				$('#car6').mouseover(function(){
					$('#forcar6').fadeIn(10);
				})
				$('#car6').mouseout(function(){
					$('#forcar6').fadeOut(10);
				})
				setTimeout(function(){ $('#success').fadeOut(2000) }, 5000);
				
				$('body').fadeIn(1000);
				$.backstretch([
				      "../../assets/car1.jpg"
				    , "../../assets/car2.jpg"
				    
				  ], {duration: 3000, fade: 750});
				  
				 (function() {
					[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
						new SelectFx(el);
					} );
				})();
				/*
$('#max_price').click(function(){
					$('this').css('dispaly', 'initial');
				})
*/
			})
			
		</script>
	</body>
</html>