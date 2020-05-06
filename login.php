<html>
<head>
<title>
    Login Page
</title>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6">
        <h2>Login</h2>
        <form action="validation.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>



<div class="col-md-6">
        <h2>Register</h2>
        <form action="registration.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
   

    </div>
    </div>
</div>

<form action="home.php" method="GET">
    <button type="submit" class="block2">Return to Homepage</button>
</form>

</body>
</html>