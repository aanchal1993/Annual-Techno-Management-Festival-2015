<?php

	session_start();
	$linkdb = mysql_connect("localhost","aanchal", "123") or die("unable to connect mysql");
	mysql_select_db('techfest',$linkdb) or die("unable to connect to database");
	if($_POST['Submit'] == "Submit")
	{
		
		$Fn = $_POST['FN'];
		$ln=$_POST['LN'];
		$Email = $_POST['email'];
		$Birthday=$_POST['Birthday'];
		$Birthmonth=$_POST['Birthmonth'];
		$Birthyear=$_POST['Birthyear'];
		$Gender=$_POST['gender'];
		$Country=$_POST['country'];
		$Phn=$_POST['phn'];
		$queries=$_POST['queries'];
		$Cn = $_POST['CN'];
		$Ca=$_POST['CA'];
		$Acc = $_POST['acc'];
		$result = mysql_query("select * from tab where Emailid= '$Email'",$linkdb);
		$rows = mysql_num_rows($result);
			if($rows > 0)
			{
		
			echo "Try again..this EMAIL is already registered !!";
			
			}

		else
		{
			$query = "insert into tab set Firstname='$Fn',Lastname='$ln',Emailid='$Email',Birthday='$Birthday',Birthmonth='$Birthmonth',
			Birthyear='$Birthyear',Gender='$Gender',Country='$Country',Phone='$Phn',queries='$queries',DateOfReg=now(),Collegename='$Cn',Collegeaddress='$Ca',Accommodation='$acc'";
			$result = mysql_query($query,$linkdb);
				if($result)
				{
				//header("Refresh:0");
				

				echo "<center><h1> <p> CONGRATULATIONS </p> </h1></center>";
				echo "<center><h1>:) :) :) :) :) :) :)  </h1></center>";
				echo "<center><h1> You have been registered successfully..!! </h1></center>";
				echo "<center><h1> Have fun. </h1></center>";
				
				location.reload();
				
				}
				else
				{
				echo mysql_error($linkdb);
				}
		

		}
	}
	
?>
<html>

<head>

<title>Register</title>

<link type="text/css" rel="stylesheet" href="style1.css">

</head>
<body>
<center>
<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInLeft">
			  			<a href="index.html" ><img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
						</a>
			  			<p>G.N.D.U. Regional Campus Jalandhar's Annual TechFest.</p>
			  		</div>
<!-- WIDGET -->




	

<div id="bj">
	<div  class="form" action="<?php print $_SERVER['PHP_SELF']?>">
	<form method="POST" > 
					
					<b><font color="sky blue" size="10">Register Here</b></font><br><br>
					
					<b><i><font>Total number of registrations till now: </i></b></font>
		<?php
		$num= mysql_query("select * from tab");
		$num_rows = mysql_num_rows($num);
		echo $num_rows;
		?>
		
    			<br><br><p class="contact"><label for="name">First Name :</label></p> 
				<input type="text" name="FN" size="34" placeholder="enter first name" required="required">
				
				<br><p class="contact"><label for="name">Last Name :</label></p> 
				<input type="text" name="LN" size="34" placeholder="enter last name" required="required">
				
				<br><p class="contact"><label for="email">Email ID :</label></p> 
				<input type="email" name="email" size="34" placeholder="your@email.com" required="Required"><br>
				
	
<fieldset>
                <label>Birthday: </label><br>
                <label class="month"> 
                <select class="select-style" name="Birthday">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</label>
</select>
 
                  <label class="month"> 
<select class="select-style" name="Birthmonth">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
	</label>
 
                  <label class="month"> 
<select name="Birthyear" class="select-style">
<option value="-1">Year:</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>  </label>
	</fieldset><br>
              
	<p class="contact"><label for="name">Gender :</label></p>
	<select class="select-style gender" name="gender">
    <option value="select">i am..</option>
    <option value="m">Male</option>
    <option value="f">Female</option>
	<option value="o">Other</option>
	</select><br><br>
	
	<p class="contact"><label for="name">Country :</label></p>
	<select name="country" required="required" class="select-style">
	<option value="Select a Country" name="country">Select a Country..</option>
	<option value="India" name="country">India</option>
	<option value="Other" name="country">Other</option>
	</select>
	
	<br><br><p class="contact"><label for="name">Phone No :</label></p> 
	<input type="text" name="phn" size="34" placeholder="enter phone number" required="required">
	
	<br><br><p class="contact"><label for="name">College Name :</label></p> 
	<input type="text" name="CN" size="34" placeholder="enter college name" required="required">
	
	<br><br><p class="contact"><label for="name">College Address :</label></p> 
	<input type="text" name="CA" size="34" placeholder="enter college address" required="required">
	
	<br><br><p class="contact"><label for="name">Accommodation :</label></p>
	<select class="select-style gender" name="acc">
    <option value="select">needed..</option>
    <option value="y">Yes</option>
    <option value="n">No</option>
	</select><br><br>
	
	<br><p class="contact"><label for="name">Comments and Suggestions :</label></p>
	<textarea name="queries" rows="5" cols="50" placeholder="don't forgot to feedback us :) :)"></textarea>
	
	<br><input type="Submit" name = "Submit" value = "Submit" class="buttom" tabindex="5" >
	
	<input type="Reset" name = "Reset" value = "Reset" class="buttom" tabindex="5">
	
</form>
</div>

</div>
</div>

<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>Contact Us</h4>
						<ul>
				  			<li style="list-style:none" class="contact-address">Piyush Kochhar </li>
				  			<li style="list-style:none"class="contact-phone">+918146979198</li>
				  			<li style="list-style:none" class="contact-address">Aanchal Sharma </li>
				  			<li style="list-style:none" class="contact-phone">+91964688997</li>
			  			</ul>
</div>
</center>
</body>
</html>