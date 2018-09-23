<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');

if (isset($_SESSION['valid_user'])) {
    header("location: member_only.php");
}
//make the database connection
$conn  = db_connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);

    //make a query to check if user login successfully
    $sql = "select * from users where email='$email' and password='$password'";
    $result = $conn -> query($sql);
    $numOfRows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    if ($numOfRows == 1) {
        $_SESSION['valid_user'] = $email;
        header("location: member_only.php");
    }else {
        $error = 'Your Login Name or Password is invalid';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <link rel="stylesheet" href="css/member.css">
    <title>ABC</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="login.php" method="post">
		<div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #0000ff solid thick">
        	<h1>Login</h1>
            <p>Please enter your email and password</p>
            <div class="row">
            	<div class="col">
                	<label for="email">Email:</label>
                	<input type="email" id="email" name="email" size="35" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">Password:</label>
                    <input type="password" id="password" name="password"
                           size="20" maxlength="20" required />
                </div>
           	</div>
			<div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear" />
                    <?php
                    if(isset($error)) {
                        echo "<p style=\"color: red;\">$error</p>";
                        unset($error);
                    }
                    ?>
                </div>
            </div>            
        </div>
        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>