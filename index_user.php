<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<style>
body {
	background-image: url("image/logo.jpg");
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
     
     box-shadow: 0 0 15px 10px orange;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
	color: black;
	font-family: sans-serif;
     font-weight: bold;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
     border-color: black;
}
label {
	color: black;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: skyblue;
	padding: 10px 15px;
	color: black;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	background: orange;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 
     </style>
     <form action="login_user.php" method="post">
     	<h2>USER LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup_user.php" class="ca">Create an account</a>
     </form>
</body>
</html>