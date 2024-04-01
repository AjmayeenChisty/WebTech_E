<html>
<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="";
session_start();

$conn=new mysqli($serverName,$userName,$password,$dbName);
if(isset($_POST['login']))
{
   $UserName=$_POST['user_name'];
   $pass=$_POST['password'];
   if(empty($UserName)|| empty($pass))
   {
     echo "Please fill up the form";
   }
   else
   {
   	$sql="select * from donor where user_name='$UserName' and password='$pass'";
   	$res=mysqli_query($conn,$sql);
   	if($res->num_rows>0)
   	{
       echo "Login !!!!";   
   		header("Profile.php");
   	}
   	else
   	{
   		echo " Enter Valid UserName & password";
   	}
   }
   
}
if(isset($_POST['reg'])){
    header("location:registration.php");

}
?>
<center>
<form  method="POST" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>

					<h3>LOGIN</h3></legend>
					User Name<br/>
					<input type="text" name="user_name"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<input type="submit" name="login" value="Login">
                    <button name="reg">Registration</button><br/>
					<a href="">Forgot Password?</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</html>
