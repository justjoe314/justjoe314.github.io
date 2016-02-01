<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Joe mckinley Practice page</title>	
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
	
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="_blank" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="">The re-constructors</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li class="active"><a href="contact.html">Contact</a></li>
				<li><a href="products.html">Products</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>
	
	<form name="contactform" method="post" action="send_form_email.php">
		 
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
	
	</body>
	
</html>	