<?php

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awesome Sports</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Custom CSS Style-->
<link href="assets/stylesheets/admin.css" rel="stylesheet">
<!-- jquery always goes before the bootstrap java script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <form class='login' action="admin" method="post" >
        <h2 class='heading'>Please sign in</h2>
        <label class='input_label' for='email'>Email</label>
        <input type='email' name='email' placeholder='Email Address' <?=set_value('email')?>required>
        <label class='input_label' for='password'>Password</label>
        <input type='password' name='password' placeholder='Password' required>
        <input type='hidden' name='action' value='login'>
        <div class='checkbox'>
            <label>
                <input type='checkbox' value='remember_me'> Remember Me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type='submit'> Sign In</button>
        <a href="/">Go to store</a>
     </form>
</div> <!-- container end -->

</body>
</html>
