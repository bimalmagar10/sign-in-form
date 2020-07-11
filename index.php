<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
     	<h1>&nbsp;&nbsp;Sign In</h1>
     	<div class="icon">
     		<i class="fa fa-user-circle-o" aria-hidden="true"></i>
     	</div>
     	<form action="">
     		<div class="input-box">
     		 <input type="email" onkeyup="this.setAttribute('value',this.value);" value="" required>
     		 <label for="">Username</label>
     		</div>
     		<div class="input-box">
 				<input type="password" onkeyup="this.setAttribute('value',this.value)" value="" required>
     			<label for="">Password</label>
     		</div>
     		<input type="submit" value="Sign In">
     	</form>
     </div>

</body>
</html>