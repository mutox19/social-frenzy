<!-- Body Section here -->

<div id="body_section">
	
	<p style="font-family: verdana; font-weight: bold; color: green; position: relative; top: 35px; left: 155px;">Join the largest social network. Connect with <br> friends and family from school, college, university<br> and around the world.
	</p>

	<div id="img">
		<img src="images/CodingCafe.jpg" height="300px;" width="600px">
	</div>

	<!-- Left side of content page -->

	<!-- Right side of content page -->

	<div id="right">
		
		<p style="font-size: 32px; color:green; font-weight: bold;">Create an Account</p>
		<p style="color:green;"><strong>Its free and always will be</strong></p>
		<div id="form">
			<form id="signup_form" method="post">
				<table>
					<tr>
						<td>
							<input type="text" name="u_name" required="required" placeholder="full name">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="u_pass" required="required" placeholder="Enter Your password">
						</td>
					</tr>
					<tr>
						<td>
							<input type="email" name="u_email" required="required" placeholder="Enter Your email">
						</td>
					</tr>
					<tr>
						<td>
							<select name="u_country">
								<option>Select a Country</option>
								<option>Canada</option>
								<option>China</option>
								<option>United States of America</option>
								<option>UK</option>
								<option>France</option>
								<option>Jamaica</option>
								<option>India</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Gender
						</td>
					</tr>
					<tr>
						<td><select name="u_gender">
							<option>Select a Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select></td>
					</tr>
					<tr>
						<td>
							Birthday
						</td>
					</tr>
					<tr>
						<td>
							<input type="date" name="u_birthday" required="required">
						</td>
					</tr>

				</table>
			</div>
			<input style="width: 200px; height: 45px; font-weight: bold; background: #228B22; border-radius: 5px; border: 0.5px solid #7FFF00; color: white;" type="submit" name="sign_up" value="Create an Account">
			<div>
				<?php include ('insert_user.php'); ?>
			</div>
			</form>
		
	</div>

</div>