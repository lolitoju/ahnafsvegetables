<?php
	include_once("app/header.php");
?>
	<div class="contact">
		<div class="container">
			<h3 class="title">Register</h3>
			<div class="contact-form center-block">
				<center>
					<form method="post">
						<table>
							<tr>
								<td>
									<input name="username" placeholder="Username" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="password" placeholder="Password" type="password" required=""><?= $data["message"] ?>
								</td>
							</tr>
							<tr>
								<td>
									<input name="passwordCheck" placeholder="Re-type your password" type="password" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="fname" placeholder="First name" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="lname" placeholder="Last name" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="email" placeholder="Email" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="phone" placeholder="Phone" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="streetAddress" placeholder="Street Address" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="postalCode" placeholder="Postal Code" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<input name="city" placeholder="City" type="text" required="">
								</td>
							</tr>
							<tr>
								<td>
									<select class="dropdown select" id="province" name="province">
										<option value="Ontario">Ontario</option>
										<option value="Quebec">Quebec</option>
										<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
										<option value="Alberta">Alberta</option>
										<option value="Nova Scotia">Nova Scotia</option>
										<option value="New Brunswick">New Brunswick</option>
										<option value="Nunavut">Nunavut</option>
										<option value="Northwest Territories">Northwest Territories</option>
										<option value="Yukon">Yukon</option>
										<option value="British Columbia">British Columbia</option>
										<option value="Manitoba">Manitoba</option>
										<option value="Saskatchewan">Saskatchewan</option>
										<option value="Prince Edward Island">Prince Edward Island</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="newsletter" value="YES" /> Subscribe to the newsletter
								</td>
							</tr>
						</table>
						<input type="submit" name="action" value="Submit">
					</form>
				</center>
			</div>			
		</div>
	</div>
	<!--//register-->	
	<!-- footer -->
<?php
		//include_once("app/footer.php");
?>