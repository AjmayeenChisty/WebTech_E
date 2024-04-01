<html>
    <head>
        <title>Employee Registration</title>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="0" width="800" align="center">
            <tr>
                <td>
                <p style="text-align: right;">
                    <a href="" align="right">Home</a> | 
                    <a href="" align="right">Login</a> |
                    <a href="registration.php" align="right">Registration</a>
                <p>
                </td>
            </tr>
            <tr>
                <td height="200" align="center">
                <form method="post" action="registration.php" enctype="">
                    <fieldset style="width: 400px;" align="left">
                        <legend>Employee Registration</legend>
                        Name: <input type="text" name="name" value="" /> <hr>
                        Contact_No: <input type="text" name="Contact_No" value="" /> <hr>
                        User Name: <input type="text" name="username" value="" /> <hr>
                        Password: <input type="password" name="password" value="" /> <hr>
                        Confirm Password: <input type="password" name="confirmpassword" value="" /> <hr>
                        <fieldset>
                            <legend> Gender </legend>
                            <input type="radio" name="gender" value="Male" /> Male
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Other" /> Other
                        </fieldset> <hr>                       
                            <input type="submit" name="submit" value="Submit" />
                            <input type="reset" name="reset" value="Reset" />
                    </fieldset>
                </form>
                </td>
            </tr>
            <tr>
                <td height="50" align="center">Copyright 2024</td>
            </tr>
        </table>			
    </body>
</html>
<?php
    session_start();
    
    if(isset($_POST['name'],$_POST['Contact_No'],$_POST['username'],$_POST['password'],$_POST['confirmpassword'],$_POST['day'],$_POST['month'],$_POST['year']))
    {
        $name = $_POST['name'];
        $Contact_No = $_POST['Contact_No'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        if(!isset($_POST['gender']))
        {
            $gender="";
            
        }
        else{
            $gender=$_POST['gender'];
        }
        
        $day = $_POST['day'];
        $month= $_POST['month'];
        $year = $_POST['year'];

        
        if($name == "" || $Contact_No == "" || $username == "" || $password=="" || $confirmpassword=="" || $gender=="" || $day=="" || $month=="" || $year==""){
            echo "null value";
        }
        elseif(!($password==$confirmpassword))
        {
            echo "confirm password did not match";
        }
        else
        {
            $user = ['name'=> $name, 'Contact_No'=>$Contact_No,'username'=>$username, 'password'=>$password, 'confirmpassword'=>$confirmpassword,'gender'=>$gender,'day'=>$day,'month'=>$month,'year'=>$year];
            $_SESSION['user'] = $user;
            header('location: login.php');
        }
    }
    
?>