<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

# connect mysql db


if ($_SERVER['HTTP_X_REQUESTED_WITH']) {
	if (isset($_POST['postid']) AND isset($_POST['action'])) {
		$postId = (int) mysql_real_escape_string($_POST['postid']);
		# check if already voted, if found voted then return

		if (isset($_SESSION['vote'][$postId])) return;

		# query into db table to know current voting score
		$query = mysql_query("
			SELECT vote
			from voting
			WHERE id = '{$postId}'
			LIMIT 1" );

		# increase or dicrease voting score
		if ($data = mysql_fetch_array($query)) {
			if ($_POST['action'] === 'up'){
				$vote = ++$data['vote'];
			} //else {
		//		$vote = --$data['vote'];
		//	}
			# update new voting score
			mysql_query("
				UPDATE voting
				SET vote = '{$vote}'
				WHERE id = '{$postId}' ");

			# set session with post id as true
			$_SESSION['vote'][$postId] = true;
			# close db connection
		}
	}
}

# db connection close

?>