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
			#main{
				width: 66%;
				margin: auto;
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
			.fav{
				width: 30px;
			}
			#favourite{
				margin-right: 60px; 
			}
			.delete_favourite{
				color: red;
			}
			#footer{
			color: white;
			background: linear-gradient(to right, #003366 0%,#234466 50%,#344d66 100%);
			width: 100%;
			height: 150px;
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
				<button class="btn btn-1 btn-1d">Profile</button>
				
				<?php }else{ ?>
				
				<a href="/main/login"><button class="btn btn-1 btn-1d">Login/SignUp</button></a>
				
				<?php } ?>
				<button class="btn btn-1 btn-1d">Contact Us</button>
				<a href='/main/allcars'><button class="btn btn-1 btn-1d">All Cars</button></a>
		</div>
		<div id="main">
			<h1>Your favourites</h1>
			<?php $k = 0;
				$_SESSION['favourites'][0] = array_values($_SESSION['favourites'][0]);
				$_SESSION['favourites'][1] = array_values($_SESSION['favourites'][1]);
				if(empty($_SESSION['favourites'][0])){
					echo 'You have no favourites';
				}
				foreach ($_SESSION['favourites'][0] as $value) {
				   
				foreach ($query as $data) 
				{ if($value == $data->id){?>
				<div class='cars'>
					
						<?php
							
							echo '<img class="car_image" src="' . $data->image_link . '">';
							?>
							<div class='content'>
								<?php
									echo '<p class="title">' . $data->make . ' ' . $data->model . ' ' . $data->year . '</p>';
									echo '<p class="price"> ₦'. $data->price.'</p>';
									echo '<p class="description">' . $data->description. '</p><br>';
									echo '<a class="delete_favourite" href="/main/delete_favourite/'.$_SESSION['favourites'][1][$k].'">Delete from favourites</a>'
									                
									
// 									echo $item->color . '<br>';
								?>
							</div>
				</div>
				<?php
				$k++;}}}?>
			
			
		</div>
		<br>
		<br>
		<br>
		<div id='footer'><p style="float: right;">© 2016 Autocitiltd.com All rights reserved.</p></div>
		<script src="js/classie.js"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script>
		
	</body>
</html>