<?php

    $isValidFirstname = true;
    $isValidPassword = true;

    $FirstError = "";
    $LastnameError = "";
    $passwordError = "";
    $confirmPasswordError = "";
    $emailError = "";
    $phoneNumberError = "";
    $genderError = "";
    $error = "";

    // Data collect from Sign Up Form
    $FirstName = isset($_REQUEST['fullName']) ? $_REQUEST['fullName'] : "";
    $Lastname = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $phoneNumber = isset($_REQUEST['phoneNumber']) ? $_REQUEST['phoneNumber'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    $confirmPassword = isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";


    if (isset($_POST['submit'])) {

    
        if (empty($FirstName)) {
            $FirstnameError = "Full Name cannot be empty.";
        }
        
        }
       
        if (empty($Lastname)) {
            $LastnameError = "Username cannot be empty.";
        } 
        else {
            // Check if username contains only letters, numbers, dots, or spaces
            foreach (str_split($Lastname) as $char) {
                if (!preg_match('/^[a-zA-Z0-9.\s]+$/', $char)) {
                    $LastnameError = "Username can only contain letters, numbers, dots, or spaces.";
                }
            }

            // Check if username contains more than one word
            if (count(explode(' ', $username)) > 1) {
                return "Username cannot contain more than one word.";
            } 
            
            // Check if username exceeds 15 characters
            if (strlen($username) > 15) {
                return "Username cannot exceed 15 characters.";
            }
        }
     

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
        if (strlen($phoneNumber) != 11 || $phoneNumber[0] != '0' || $phoneNumber[1] != '1') {
            $phoneNumberError = "Invalid phone number. Please enter a valid phone number.";
        }
      
        if (!isset($gender)) {
            $genderError = "Please select your gender.";
        }

    }

