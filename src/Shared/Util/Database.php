<?php

$db_conn = NULL;
$user_select = NULL;

function open_database_connection()
{
	global $db_conn;
	require __DIR__ . '/../Config.php';

	if (!isset($db_conn))
	{
		$db_conn = new PDO("mysql:host=$FETCH_SQL_SERVER;port=$FETCH_SQL_PORT;dbname=$FETCH_SQL_DATABASE",
			$FETCH_SQL_USER, $FETCH_SQL_PASS);
	}

	return $db_conn;
}

function get_user($id)
{
	global $db_conn;
	global $user_select;
	require __DIR__ . '/../Config.php';

	if (!isset($user_select))
	{
		$user_select = open_database_connection()->prepare('SELECT `UserId`,`Username`,`ScratchUser`,`ImageHash`,`EMailAddress`,`VerifiedEMail`,`VerifiedScratch` FROM `users` WHERE UserId=?');
	}

	$user_select->execute(array($id));
	return $user_select->fetch();
}