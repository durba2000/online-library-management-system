<?php
  session_start();
?>
<!DOCTYPE html>
<html>
 <head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		nav
		{	
		float: right;
        word-spacing: 30px;
         padding: 20px;
		}
      nav li
        {
       display: inline-block;
       line-height: 90px;
       }
    </style>
 </head>
<body>

	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="9.png">
				<h1 style="color: white;">SIMPLE LITTLE LIBRARY SYSTEM</h1>
			</div>
			<?php
			  if(isset($_SESSION['login_user'])) {
				?>
				  <nav>
				    <ul>
					<li><a href="index.php"></a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				   </ul>
			     </nav>
			<?php
			}
			  else{
				?>
			      <nav>
				    <ul>
					<li><a href="index.php"></a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				   </ul>
			     </nav>
			  <?php
			  }
			?>
			<!--<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT_LOGIN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>-->
		</header>
		<section>
			<div class="sec_img">

	             <!--<div class="w3-content w3-section" style="width: 500px;">
		              <img class="mySlides w3-animate-left" src="1.jpg" style="width: 100%;">
		              <img class="mySlides w3-animate-left" src="1111.jpg" style="width: 100%">
		              <img class="mySlides w3-animate-fading" src="aa.jpg" style="width: 100%">
		              <img class="mySlides w3-animate-fading" src="4.png" style="width: 100%">
	             </div> 

	             <script type="text/javascript">
		                 var a = 0;
                         carousel();

                     function carousel() {
                       var i;
                       var x = document.getElementsByClassName("mySlides");
                       for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                           }
                        a++;
                        if (a > x.length) {a = 1}    
                        x[a-1].style.display = "block";  
                        setTimeout(carousel, 5000);    
                          }
	               </script>-->


				 <br><br><br>
				<div class="box">
					<br><br><br>
					<h1 style="text-align: center;font-size: 35px;">Welcome to Library</h1><br><br>
					<h1 style="text-align: center;font-size: 25px">Opens at: 09:00 AM </h1><br>
					<h1 style="text-align: center;font-size: 18px;">Closes at: 15:00 PM </h1><br>
				</div>
			
			</div>
		</section>
	</div>
	<?php
	  include "footer.php";
	?>
 </body>
</html>