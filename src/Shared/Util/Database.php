<?php

require_once(__DIR__ . "/../Config.php");

// Cache some important DB queries here
$db_conn = NULL; // Database connection
$user_select = NULL; // Querying for users by id

// Opens a database connection
function open_database_connection()
{
	global $db_conn;
	global $FETCH_SQL_SERVER;
	global $FETCH_SQL_PORT;
	global $FETCH_SQL_DATABASE;

	if (!isset($db_conn))
	{
		$db_conn = new PDO("mysql:host=$FETCH_SQL_SERVER;port=$FETCH_SQL_PORT;dbname=$FETCH_SQL_DATABASE",
			FETCH_SQL_USER, FETCH_SQL_PASS);
	}

	return $db_conn;
}

// Queries user information by ID
function get_user($id)
{
	global $db_conn;
	global $user_select;
	global $FETCH_SQL_SERVER;
	global $FETCH_SQL_PORT;
	global $FETCH_SQL_DATABASE;

	if (!isset($user_select))
	{
		$user_select = open_database_connection()->prepare('SELECT `UserId`,`Username`,`ScratchUser`,`ImageHash`,`EMailAddress`,`VerifiedEMail`,`VerifiedScratch` FROM `users` WHERE UserId=?');
	}

	$user_select->execute(array($id));
	return $user_select->fetch();
}