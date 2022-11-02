<html>
<head>
<title><?php echo $_REQUEST["c"]; ?> | Tamil Movies</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="https://play-lh.googleusercontent.com/A0UZO-jMqgtkSZ29w8xUbU0g55JLBa65zZX3QpFUB9sOjz9a7kLcb3do2Sg-pHIH4w0=w240-h480">
<?php 
$variable='python movie.py ';
$channel_name=$_REQUEST["q"];
$command=$variable.$channel_name;
$output = shell_exec($command);
echo $output
?>

</body>
</html>
