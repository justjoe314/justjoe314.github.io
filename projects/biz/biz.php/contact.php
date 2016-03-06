
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Joe mckinley Practice page</title>	
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		
		<link rel="icon" href="assets/fonts/favicon.ico" type="image/x-icon">
		<!--favicon -->
	</head>
	
	<body>
	
		<?php require_once 'nav.php'; ?>
		
		
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-7">
			<!--php email form-->
			<div class="contactbox">
				
				<form name="contactform" method="post" action="sendEmail.php">			 
					<table width="450px">
					<tr>
					<td valign="top">
					<label for="first_name">First Name *</label>
					</td>
					<td valign="top">
					<input  type="text" name="first_name" maxlength="50" size="30">
					</td>
					</tr>
					<tr>
					<td valign="top"">
					<label for="last_name">Last Name *</label>
					</td>
					<td valign="top">
					<input  type="text" name="last_name" maxlength="50" size="30">
					</td>
					</tr>
					<tr>
					<td valign="top">
					<label for="email">Email Address *</label>
					 </td>
					<td valign="top">
					 <input  type="text" name="email" maxlength="80" size="30">
					</td>
					</tr>
					<tr>
					<td valign="top">
					<label for="telephone">Telephone Number</label>	 
					</td>
					<td valign="top">
					<input  type="text" name="telephone" maxlength="30" size="30">
					</td>
					</tr>
					<tr>
					 <td valign="top">
					 <label for="comments">Comments *</label>
					 </td>
					 <td valign="top">
					 <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
					</td>
					</tr>
					<tr>
					 <td colspan="2" style="text-align:center">
					<input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
					</td> 
					</tr>
					</table> 
					</form> 
						<?php
						echo "<h2>Your Input:</h2>";
						echo $name;
						echo "<br>";
						echo $email;
						echo "<br>";
						echo $website;
						echo "<br>";
						echo $comment;
						echo "<br>";
						echo $gender;
						?>	
					</div>
				</div>
			<div class="col-xs-12 col-lg-5"><p></p></div>
		</div>	
	</div>
	</body>
	
</html>	