<?php

    require_once("../controller/registrationCheck.php");

?>

<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <table border = "1" cellspacing="0" width= 100%>
        <tr>
            <td align = "right">
                <a href="">Home</a>
                | <a href="">Login</a>
                | <a href="">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <center>
                    <form action="" method="POST" enctype="">


                        <h3>SIGN UP</h3>
                        <hr>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <label for="">First Name</label> 
                                </td>
                                <td> : 
                                    <input type="text" name="" value="<?= $FirstName ?>"/> 
                                    <span><?= $FirstnameError ?></span> 
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="">Last name</label> 
                                </td>
                                <td> : 
                                    <input type="text" name="" value="<?= $Lastname ?>"/> 
                                    <span><?= $LastameError ?></span> </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Email</label> 
                                </td>
                                <td> : 
                                    <input type="email" name="" value="<?= $email ?>"/> 
                                    <span><?= $emailError ?></span> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="">Phone Number</label> 
                                </td>
                                <td> : <input type="text" name="" value="<?= $phoneNumber ?>"/> 
                                <span><?= $phoneNumberError ?></span> 
                            </td>

                            </tr>
                            <tr>
                                <td>
                                    <label for="">Password</label> 
                                </td>
                                <td> : 
                                    <input type="" name="" value="<?= $password ?>"/> 
                                    <span><?= $passwordError ?></span> 
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="">Confirm Password</label> 
                                </td>
                                <td> : 
                                    <input type="" name="" value="<?= $confirmPassword ?>"/> 
                                    <span><?= $confirmPasswordError ?></span> 
                                </td>
                            </tr>

                            <tr>
                                <td>
                                 <label for="dob">Date of Birth:</label>
                                </td>
                              <td> : 
                                  <select id="dob" name="dob" required>
                                    <option value="">-- Select DOB --</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                  </select>
                              </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="gender">Gender</label> 
                                </td>
                                <td> :
                                    <input type="radio" name="gender" value="Male" <?= ($gender && $gender == "") ?
                                                                                        '"' : "";
                                                                                    ?> /> Male
                                    <input type="radio" name="gender" value="Female" <?= ($gender && $gender == "") ?
                                                                                            '"' : "";
                                                                                        ?> /> Female
                                    <input type="radio" name="gender" value="Other" <?= ($gender && $gender == "") ?
                                                                                        '"' : "";
                                                                                    ?> /> Other
                                    <span><?= $genderError ?></span>
                                </td>
                            </tr>
                            
                        </table>
                        <div>
                            <p><?= $error ?></p>
                            <br>
                            <input type="submit" value="Sign Up" name="submit" />
                            <input type="reset" value="Reset" name="reset" />
                        </div>
                    </form>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <p>Copyright © 2024</p>
            </td>
        </tr>
    </table>
</body>

</html>