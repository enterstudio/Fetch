<?php


require_once(__DIR__ . '/../Shared/Config.php');
require_once(__DIR__ . '/../Shared/Util/Database.php');

$dbconn = open_database_connection();

if (isset($_GET['latest']))
{
	// TODO: cache this (Memcached?)
	$data = $dbconn->query('SELECT `ProjectId`,`ProjectName`,`CreatorId` FROM `projects` DESCENDING LIMIT 6');

	$output = array();
	foreach ($data as $row)
	{
		$creatorId = $row['CreatorId'];
		$creatorInfo = get_user($creatorId);
		array_push($output, array(
			'id' => $row['ProjectId'],
			'name' => $row['ProjectName'],
			// TODO: generate image
			'image'=> 'http://lorempixel.com/400/200/cats', // this site is like the best
			'creator' => array(
				'id' => $creatorId,
				'name' => $creatorInfo['Username']
			)
		));
	}

	header('Content-type: text/plain');
	die(json_encode($output));
}


echo('[]');