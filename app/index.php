<?php
include 'inc/users.php';

$user = new Users;
if (isset($_POST['login'])) {
  $res = $user->login($_POST);
  if ($res) {
    $user->usertype_redirect($res['type']);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>FoodEx</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no ">

	<!-- style plugins -->
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- main css -->
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="homepage">
	<div class="header_section">
		<div class="box">
			<div class="box_row borderBottom">
				<div class="logo">
					<h2>Food<span style="color:#EF8500">Ex</span></h2>
				</div>
				<ul class="social">
					<li><span class="fa fa-facebook"></span></li>
					<li><span class="fa fa-twitter"></span></li>
					<li><span class="fa fa-instagram"></span></li>
					<li><span class="fa fa-linkedin-square"></span></li>
				</ul>
			</div>

		</div>
	</div>
	<div class="content_section">
		<section class="section main-section">
			<div class="container">
				<div class="box">
					<h1>Are you Hungry?</h1>
					<p class="subcontent">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, aut a labore. Ullam rerum voluptates, saepe maiores dolore dolorum reiciendis perspiciatis, recusandae cumque autem voluptatibus officia. 
					</p>
					<form id="register_student" action="">
						<div class="form_row">
							<div class="form-group">
            					<label>First Name</label>
            					<input type="text" class="form-control" name="user[fname]" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" name="user[lname]" placeholder="Last Name" required>
							</div>
						</div>
						<div class="form-group">
						  <label>Email</label>
						  <input type="email" class="form-control" name="user[email_address]" placeholder="Email Address" required>
						</div>
						<div class="form-group">
						  <label>Contact Number</label>
						  <input type="text" class="numbersonly form-control" name="user[cont_no]" placeholder="Contact Number" maxlength="10" required>
						</div>						
						<div class="form-group">
						  <label>Username</label>
						  <input type="text" class="form-control" name="user[username]" placeholder="Username" required>
						</div>
						<div class="form-group">
						  <label>Password</label>
						  <input type="password" class="password form-control" name="user[password]" placeholder="Password" required>
						</div>																			
						<div class="form-group select">
						  <label>Type</label>
						  <select class="form-control" name="user[type]" required>
						    <option value ="0">-Please select-</option>
						    <option value ="1">ADMIN</option>
						    <option value ="2">OWNER</option>
						    <option value ="3">STAFF</option>
						    <option value ="4">STUDENT</option>
						    <option value ="5">FACULTY/EMPLOYEE</option>
						  </select>
						</div>
					</form>
				</div>	

			</div>
		</section>		
	</div>
	<!-- scripts -->
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type='text/javascript'>

	</script>
</body>
</html>