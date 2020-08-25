
<!DOCTYPE html>
<html>
<head>
<title>User Login and Registration</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/cleanup.css">
</head>
<body>

<div class="container">

<div class="login-box">
<div class="row">
<div class="col-md-6 signup-left">
<h2> Login Page</h2>
<form method="post" action="validation.php">
<div class="form-group">
<label>Username </label>
<input type="text" name="email" class="form-control"required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control"required>
</div>
<button type="submit" class="btn btn-success"> SignIn </button>
</form>
</div>



<div class="col-md-6 signin-right">
<h2> Registration Page</h2>
<form method="post" action="config.php">
<div class="form-group">
<label>Username </label>
<input type="text" name="email" class="form-control"required>
</div>
<div class="form-group">

<label>Password</label>
<input type="password" name="password" class="form-control"required>
</div>
<button type="submit" class="btn btn-success"> SignUp </button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>