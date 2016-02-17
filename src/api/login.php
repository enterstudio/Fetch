<?php

require_once(__DIR__ . '/../Shared/Config.php');
require_once(__DIR__ . '/../Shared/Util/Database.php');
require_once(__DIR__ . '/../Shared/Util/Exceptions.php');

// TODO: memcache this?
$FETCH_PASSWORD_OPTIONS = array(
	'cost' => FETCH_PASSWORD_COST
);

$db_conn = open_database_connection();
$update_pass_query = $db_conn->prepare('UPDATE `users` SET PasswordHash = ? WHERE UserId = ?');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if (isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$info = get_user_by_name($username);

		if ($info === false)
		{
			die(json_encode(array(
				'OK' => false,
				'error' => 'Invalid username or password'
			)));
		}
		else
		{
			$hash = $info["PasswordHash"];

			if (password_verify($hash, $password))
			{
				if (password_needs_rehash($hash, FETCH_PASSWORD_HASHING, $FETCH_PASSWORD_OPTIONS))
				{
					$newHash = password_hash($password, FETCH_PASSWORD_HASHING, $FETCH_PASSWORD_OPTIONS);

					$update_pass_query->execute(array($newHash, $info["UserId"]));
					$update_pass_query->closeCursor(); // free resources
				}
			}
			else
			{
				die(json_encode(array(
					'OK' => false,
					'error' => 'Invalid username or password'
				)));
			}
		}
	}
	else
	{
		http_response_code(400);
		die(json_encode(array(
			'OK' => false,
			'error' => 'Missing username or password fields'
		)));
	}
}
else
{
	throw new HttpPostRequiredException();
}