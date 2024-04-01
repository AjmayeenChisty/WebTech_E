<php>
<html>
<center>
	<form method="POST" action="../controller/registrationCheck.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>REGISTRATION</h3>
						</legend>
						Name<br /><input type="text" name="name"><br />
						E-mai<br/><input type="email" name="e-mail"/><br/>
						User Name<br /><input type="text" name="user_name"><br />
						Password<br /><input type="password" name="password"><br />
						Confirm Password<br /><input type="password" name="confirmPassword"><br />
						Gender<input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value="" /> Female
                        <input type="radio" name="gender" value="" /> Other <br>
						Date Of Birth<br/><input type="date" name="" value="" /> <br/>
						
						<hr />
						<input type="submit" name="" value="Submit" />
                        <input type="reset" name="" value="Reset" />
						<hr />
						<input type="submit" name="submit"value="Sign Up">
						<a href="login.php">Sign In</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>
</html>
<?