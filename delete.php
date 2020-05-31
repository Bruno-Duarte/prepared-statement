<?php  

	require_once('./db.php');
	
	// template
	$sql = 'DELETE FROM users WHERE user_id = ?';

	// creating prepared statement
	$stmt = mysqli_stmt_init($conn);

	// preparation
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Failed";
	} else {
		$user_id = 6;

		// binding parameters
		mysqli_stmt_bind_param($stmt, 'i', $user_id);

		// execute
		mysqli_stmt_execute($stmt);
	}

?>