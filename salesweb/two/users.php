<?php
function user_exists($username) {
	$username = sanitize(username);
	return (mysql_result(mysql_query("SELECT COUNT('id') FROM 'table_login' WHERE 'username' = '$username'"), 0) == 1) ? true : false;
}
?>