 <?php
	 
	 if (!isset($_SESSION['email'])) { 
	 header('Location: index');
	 }
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
        #form_wrapper{
	        width: 55%;
	        margin: auto;
        }
        input{
	        width: 350px;
	        height: 40px;
        }
        #success{
	        color: green;
        }
		</style>
	</head>
	<body>
		<div id="menu"><a href="/"><img id="logo" src="../../assets/Picture1.png"></a>
		<?php if (isset($_SESSION['is_admin'])) { 
					if ($_SESSION['is_admin']== "yes") { 
			?>
				<button class="btn btn-1 btn-1d">Admin</button>
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
			<?php if(isset($_SESSION['successful_addition'])){
					echo '<h2 id="success">'.$_SESSION['successful_addition'].'</h2>';
					}
					?>
			<h1>Add a new vehicle</h1>
			<div id='form_wrapper'>
				<form method="post" action="/main/add_new">
					<label for='make'>Make</label><br><br>
					<input id='make' name='make' placeholder="make"><br><br>
					<label for='model'>Model</label><br><br>
					<input id='model' name='model' placeholder="model"><br><br>
					<label for='mileage'>Mileage</label><br><br>
					<input id='mileage' name='mileage' placeholder="mileage"><br><br>
					<label for="color">Colour</label><br><br>
					<select name='color' id ='color' >
						<option selected="selected">Black</option>
						<option >Red</option>
						<option >White</option>
						<option >Silver</option>
						<option >Grey</option>
						<option >Champagne</option>
						<option >Wine</option>
						<option >Blue</option>
					</select><br><br>
					<label for='condition'>Condition</label><br><br>
					<select name='condition' id ='condition' >
						<option selected="selected">New</option>
						<option >Used</option>
					</select><br><br>
					<label for='style'>Style</label><br><br>
					<select name='style' id ='style' >
						<option selected="selected">Bus</option>
						<option >Sudan</option>
						<option >MiniVan</option>
						<option >SUV</option>
						<option >Coupe</option>
						<option >Hatchback</option>
					</select><br><br>
					<label for='year'>Year</label><br><br>
					<input id='year' name='year' placeholder="year"><br><br>
					<label for='price'>Price</label><br><br>
					<input id='price' name='price' placeholder="price"><br><br>
					<label for='image'>Main image Link</label><br><br>
					<input id='image' name='image' placeholder="image"><br><br>
					<label for='image2'>Image Link 2 *optional*</label><br><br>
					<input id='image2' name='image2' placeholder="image"><br><br>
					<label for='image3'>Image Link 3 *optional*</label><br><br>
					<input id='image3' name='image3' placeholder="image"><br><br>
					<label for='image4'>Image Link 4 *optional*</label><br><br>
					<input id='image4' name='image4' placeholder="image"><br><br>
					<label for='description'>Description</label><br><br>
					<textarea rows='10' cols="80" name='description' placeholder="description"></textarea><br><br>
					<button type="submit" class="pure-button pure-button-primary">Add</button>
				</form>
			</div>
		</div>
		<br>
		<br>
		<br>
		
		<?php if(isset($_SESSION['successful_addition'])){ ?>
					<script>
						setTimeout(function(){ $('#success').fadeOut(2000) }, 5000);
					</script>
					<?php unset($_SESSION['successful_addition']);}
					?>

	</body>
</html>