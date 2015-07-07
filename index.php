<html>
<head>
<title>Envmetrics</title>
</head>
<body>

<?php 

include 'oauth.php';

?>
<a href="https://api.envato.com/authorization?response_type=code&client_id=<?php echo $oauth_id; ?>&redirect_uri=<?php echo $redirect_uri; ?>" type="button">Authenticate</a>
</body>
</html>
