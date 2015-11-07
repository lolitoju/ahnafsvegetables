<html>
<head><title>User Registration</title>
</head>
<body>
<?= $data['message'] ?>
<form action='' method='post'>
	First name: <input type='text' name='fname' /><br />
	Middle name: <input type='text' name='mname' /><br />
	Last name: <input type='text' name='lname' /><br />
	Email: <input type='text' name='email' /><br />
	<input type='submit' name='action' value='Add user' />
</form>

<table>
<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>DELETE</th></tr>
<?php
	foreach($data['users'] as $user)
		echo "<tr><td>$user->fname</td><td>$user->lname</td><td>$user->email</td>
	<td>
	<form method='post' action='UserRegistration/delete'><input type='hidden' name='ID' value='$user->ID' />
	<input type='submit' name='action' value='Delete' /></form></td></tr>";
?>
</table>
</body>
</html>