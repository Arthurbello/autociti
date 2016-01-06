 <?php
	 session_start(); 
	 if (isset($_SESSION['email'])) { 
	 header('Location: index');
	 }
 ?>
<html>
	<head>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
						<script src="../../assets/jquery.backstretch.js"></script>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="../../assets/css/default.css">
		<link rel="stylesheet" href="../../assets/css/component.css">
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
			
			#login_box{
				
				box-shadow: 0px 10px 15px grey;
				width: 400px;
				min-height: 450px;
				border-radius: 10px;
				margin: 60px auto ;
				background: white;
			}
			.diff{
				border: 1px solid #003366;
				color: #003366;
			}
			.same{
				background-color: #003366;
			}
			#initial{
				width: 70%;
				margin: auto;
				position: relative;
  top: 35%;
  transform: translateY(-50%);
			}
			
			#login_content{
				width: 48%;
				display: none;
				margin: auto;
				position: relative;

  transform: translateY(-50%);
			}
			#sign_up_content{
				width: 48%;
				display: none;
				margin: auto;
				position: relative;

  transform: translateY(-15%);
			}
			#logo{
				width: 180px;
			}
			.content{
				margin: auto;
				position: relative;
  top: 10%;
  transform: translateY(-50%);
				text-align: center;
				color: #6f6c6c;
			}
			#info2{
				display: none;
				padding-top: 200px;
			}
			#info3{
				display: none;
				padding-top: 200px;
			}
			.for_log_content{
				display: none;
				margin-top: -50px;
				margin-left: 90px;
			}
			.for_sign_content{
				display: none;
				top: 10%;
				margin-left: 90px;
			}
			#info{
				padding-top: 200px;
			}
			#match {
        	font-size: 12px;
        	color: red;
        	display: none;
        }
        #count {
        	font-size: 12px;
        	color: red;
        	display: none;
        }
        .pure-button{
	        background-color: #003366;
	        padding: 15px 30px;
        }
        #error{
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
				<button class="btn btn-1 btn-1d">Login/SignUp</button>
				<button class="btn btn-1 btn-1d">Contact Us</button>
				<a href='/main/allcars'><button class="btn btn-1 btn-1d">All Cars</button></a>
			</div>
		<br>
		<br>
		<br>
		<div id="login_box">
			<h1 id = 'info' class='content'>Login or create a new account</h1>
			<div id='initial'>
				<button id='specific_sign' class="btn btn-1 btn-1d diff">SignUp</button>
				<button id='specific' class="btn btn-1 btn-1d same">Login</button>
				
			</div>
			<h1 id='info2' class='content'>Login</h1>
			<div id='login_content'>
				<form id="login_form" method="post" action="/main/process_login" class="pure-form pure-form-stacked">
					<?php if (isset($_SESSION['login_error'])) {
						echo '<p id="error">'.$_SESSION['login_error'].'</p>';
						
					}?>
										<label for="email">Email</label>
			        <input class="checkers_login" id="email" name='email' type="email" placeholder="example@example.com">
					<label for="password">Password</label>
			        <input class="checkers_login" required id="password" name='password' type="password" placeholder="Password">
					
				</form>
				
			</div>
			<div class="for_log_content">
				<input disabled id = 'login_button' class="pure-button pure-button-primary" name='register' type='submit' value='Login'>
				<button id='cancel' class=" pure-button pure-button-primary">Cancel</button>
			</div>
			<h1 id='info3' class='content'>Sign Up</h1>
			<div id='sign_up_content'>
				<form id="sign_form" method="post" action="/main/process_sign_up" class="pure-form pure-form-stacked">
					<?php if (isset($_SESSION['signup_error'])) {
						echo '<p id="error">'.$_SESSION['signup_error'].'</p>';
						
					}?>
					<label for='email'>Email</label>
					<input class='checkers_register' required id='first_email' type='text' placeholder='email' name='email'><br>
			        
			        <label for="username">Username</label>
			        <input class='checkers_register' required id='first_name' type='text' placeholder='Username' name='username'><br>
			
			        <label for='password'>Password</label>
				 	<input class='checkers_register passwords' required id='first_pass' type='password' placeholder='Password' name='password'><br>
				 	<span id='count'>Must be greater than 5 characters</span><br>
				 	<label for='password_confirmation'>Confirm Password</label>
				 	<input class='checkers_register passwords' required id='password_confirmation' type='password' placeholder='Confirm Password' name='password_confirmation'><br>
				 	<span id='match'>Does not match password</span><br>
								
				</form>
				
			</div>
			<div class="for_sign_content">
				<input disabled id = 'register' class="  pure-button pure-button-primary" name='register' type='submit' value='Register'>
				<button id='cancel_sign' class=" pure-button pure-button-primary">Cancel</button><br><br>
			</div>
		</div>
		<div id='footer'><p style="float: right;">© 2016 Autocitiltd.com All rights reserved.</p></div>
		<?php if (isset($_SESSION['login_error'])) { 
				
			?>
			<script>
// 				console.log('yolo');
				$('#initial').css('display', 'none');
				$('#login_content').css('display', 'block');
				$('#info').css('display', 'none');
				$('.for_log_content').css('display', 'block');
				$('#info2').css('display', 'block');
				
			</script>
			<?php unset($_SESSION['login_error']);} ?>
			
			<?php if (isset($_SESSION['signup_error'])) { 
				
			?>
			<script>
// 				console.log('yolo');
				$('#initial').css('display', 'none');
				$('#sign_up_content').css('display', 'block');
				$('#info').css('display', 'none');
				$('.sign_up_content').css('display', 'block');
				$('#info3').css('display', 'block');
				$('.for_sign_content').show(10);
				
			</script>
			<?php unset($_SESSION['signup_error']);} ?>
		<script>
		$(document).ready(function(){
			$('#specific').click(function(){
				$('#initial').fadeOut(300, function(){
					$('#login_content').fadeIn(400);
				});
				$('#info').fadeOut(300,function(){
					$('#info2').fadeIn(300);
					$('.for_log_content').fadeIn(300);
				})
			})
			$('#cancel').click(function(){
				$('#login_content').fadeOut(300, function(){
					$('#initial').fadeIn(400);
				});
				$('#info2').fadeOut(300,function(){
					$('#info').fadeIn(300);
				})
				$('.for_log_content').fadeOut(300);
			})
			
			$('#specific_sign').click(function(){
				$('#initial').fadeOut(300, function(){
					$('#sign_up_content').fadeIn(400);
				});
				$('#info').fadeOut(300,function(){
					$('#info3').fadeIn(300);
					$('.for_sign_content').fadeIn(300);
				})
			})
			
			$('#cancel_sign').click(function(){
				$('#sign_up_content').fadeOut(300, function(){
					$('#initial').fadeIn(400);
				});
				$('#info3').fadeOut(300,function(){
					$('#info').fadeIn(300);
				})
				$('.for_sign_content').fadeOut(300);
			})
			
			$('.passwords').keyup(function() {
	 			if ($('#first_pass').val().length<6) {
 	 				$('#count').show()
	 			}
	 			else {
	 				$('#count').hide()
	 			}
	
	 			if ($('#first_pass').val() !== $('#password_confirmation').val()) {
	 				$('#match').show()
	 			}
	 			else {
	 				$('#match').hide()
	 			}
	 		})
 		function isValidEmailAddress(emailAddress) {
			    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
			    return pattern.test(emailAddress);
			};
			
			$('.checkers_register').keyup(function() {
				// $('#get_quote').val($('#quote').val())
				// console.log($('#firstname').val().replace(/ /g,'').length);
				// console.log($('#quote').val().replace(/ /g,'').length); 
				if( $('#first_name').val().replace(/ /g,'').length <2 || $('#first_email').val().replace(/ /g,'').length <2 || $('#first_pass').val().replace(/ /g,'').length <6 || $('#password_confirmation').val().replace(/ /g,'').length <6 || $('#first_pass').val() !== $('#password_confirmation').val() || !isValidEmailAddress( $('#first_email').val() )) { 
				 	document.getElementById("register").disabled = true;
				 }
			else { document.getElementById("register").disabled = false; }

			})
			
			$('.checkers_login').keyup(function() {
				// $('#get_quote').val($('#quote').val())
				// console.log($('#firstname').val().replace(/ /g,'').length);
				// console.log($('#quote').val().replace(/ /g,'').length); 
				if( $('#email').val().replace(/ /g,'').length <2 || $('#password').val().replace(/ /g,'').length <5 ) {
				 	document.getElementById("login_button").disabled = true;
				 }
			else { document.getElementById("login_button").disabled = false; 
				$( ".checkers_login" ).keydown(function( e ) {
			    if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
			        $('#login_form').submit();
			    }
			});
			}

			})
			
			$("#login_button").click( function() {
			    $('#login_form').submit();
			});
			$('#register').click(function(){
				$('#sign_form').submit();
			})
			
				$.backstretch([
      "../../assets/login_back1.jpg"
    , "../../assets/login_back2.jpg"
    , "../../assets/login_back3.jpg"
  ], {duration: 6000, fade: 750});
				  
				/*
$('#max_price').click(function(){
					$('this').css('dispaly', 'initial');
				})
*/
			
		})	
		</script>

		
	</body>
</html>