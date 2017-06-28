
<html>
<body>
<form method="post">
	<input name="redirurl" type="hidden" value="">
	<input name="zone" type="hidden" value="os3">
	<center>
	<table cellpadding="6" cellspacing="0" width="550" height="380" style="border:1px solid #000000">
	<tr height="10" style="background-color:#990000">
		<td style="border-bottom:1px solid #000000">
			<font color='white'>
			<b>
				DATAAAAAAA
			</b>
			</font>
		</td>
	</tr>
	<tr>
		<td>
			<div id="mainlevel">
			<center>
			<table width="100%" border="0" cellpadding="5" cellspacing="0">
			<tr>
				<td>
					<center>
					<div id="mainarea">
					<center>
					<table width="100%" border="0" cellpadding="5" cellspacing="5">
					<tr>
						<td>
							<div id="maindivarea">
							<center>
								<div id='statusbox'>
									<font color='red' face='arial' size='+1'>
									<b>
										
									</b>
									</font>
								</div>
								<br />
								<div id='loginbox'>
								<table>
									<tr><td colspan="2"><center>CHALA LONAVALA LA JAU</td></tr>
									<tr><td>&nbsp;</td></tr>
									<tr><td class="text-right">HO:</td><td><input name="auth_user" type="text" style="border: 1px dashed;"></td></tr>
									<tr><td class="text-right">NAHI:</td><td><input name="auth_pass" type="password" style="border: 1px dashed;"></td></tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
										<td colspan="2"><center><input name="accept" type="submit" value="Continue"></center></td>
									</tr>
								</table>
								</div>
							</center>
							</div>
						</td>
					</tr>
					</table>
					</center>
					</div>
					</center>
				</td>
			</tr>
			</table>
			</center>
			</div>
		</td>
	</tr>
	</table>
	</center>
</form>
</body>
</html>
<br><br><br><br><br><br>


 <?php
$servername = "127.0.0.1";
$username = "openuser";
$password = "openpass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
