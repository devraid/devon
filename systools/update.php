<?php
// parameters
$username = array_key_exists("username", $_REQUEST)? $_REQUEST["username"]: NULL;
$password = array_key_exists("password", $_REQUEST)? $_REQUEST["password"]: NULL;

// variables
$output = array();

function processPostRequest() {
	global $username, $password, $output;

        $command = "./update ".escapeshellarg($username)." ".escapeshellarg($password)." 2>&1";
	exec($command, $output, $status);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	processPostRequest();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Update Tool</title>
</head>

<body>
	<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]) ?>" method="post">
		<table>
			<tr><td><label for="username">Username: </label></td><td><input type="text" name="username" id="username" value="<?php echo htmlentities($username) ?>" size="30" /></td></tr>
			<tr><td><label for="password">Password: </label></td><td><input type="password" name="password" id="password" size="30" /></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" value="Update Site" /></td></tr>
		</table>
	</form>
	<pre><?php echo htmlentities(implode("\n", $output)) ?></pre>
</body>
</html>
