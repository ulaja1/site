<html>
    <head></head>
    <body>
        <form>
<input name="username" type="text">
<input name="password" type="text">
<input name="tel" type="text">
<input type="submit">
</form>
<?php
$u= $_GET["username"];
$t= $_GET["tel"];
$p= $_GET["password"];
$servername = "u0156265.mysql";
$username = "u0156265_web";
$password = "Qwerty123";
$dbname = "u0156265_webb";

$conn = mysqli_connect($servername, 
		$username, $password, $dbname);

echo $sql = "INSERT INTO 
`users` (`name`, `password`, `phone`) 
VALUES (\"$u\", \"$p\", \"$t\")";

mysqli_query($conn,$sql);

?>
    </body>
</html>