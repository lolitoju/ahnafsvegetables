<?php require_once 'app/header.php'; ?>
<div class="container">
	<h3 class="title">Login</h3>
	<div class="contact-form center-block">
		<center>
			<form method="post">
				<table>
					<?php
						if(!empty($data["message"]))
							echo "<tr><td><h4>" . $data["message"] . "</h4></td></tr>";
					?>
					<tr>
						<td>
							<input placeholder="Username" name="username" type="text" required="">
						</td>
					</tr>
					<tr>
						<td>
							<input placeholder="Password" name="password" type="password" required="">
						</td>
					</tr>
				</table>
				<input type="submit" name="btnSubmit" value="Submit">
			</form>
		</center>
	</div>
</div>