<?php
if (isset($_POST['submit'])) {
    /*Change this code*/
    echo '<table border="1px"style="text-align:center;"><tr>';
    echo "<td><b>Username </b></td><td>".$_POST['username']."</td></tr>";
    echo "<tr><td><b>Password </b></td><td>".$_POST['password']."</td></tr></table>";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=320; user-scalable=no; initial-scale=1.0; maximum-scale=1.0" />
    <title>PHP Login with Pattern Lock</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/patternlock.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    $("#pattern").hide();
    $("#username").show();
     $("#btncontinue").click(function () {
     $("#username").hide();//hide username field
     $("#pattern").fadeIn(500);//show pattern
  });

  });
</script>
</head>
<body>
<div class="formstyle">
<h1>Login Form with Android like Pattern</h1>
<form method="post" onsubmit="" >
    <div id="username">
        <input type="text"  name="username" placeholder="Username" />
        <input type="button" id="btncontinue" value="Continue" />
    </div>
<div id="pattern">
    <div>
        <input type="password" id="pattern" name="password" class="patternlock" />
    </div>
    <br>
    <input name="submit" type="submit" value="Login"/>
</div>
</form>
</div>
</body>
</html>
