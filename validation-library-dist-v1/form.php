<?php
include "Classes/Validation.php";

$myValidation = new Validation();

//*******!!!INSTRUCTIONS FOR HOW TO USE THE LIBRARY START HERE!!!*******

//If the submit button is pushed...
if(isset($_POST['submit'])) {
    
    
        //(VALIDATING FOR EMPTY)
    
    //...set the inputs array to consist of the values you want check for empty (this array is called emptyInputs)...
    $myValidation->setEmptyInputs($_POST['name'], $_POST['age'], $_POST['email'], $_POST['gender']);
    
    //...and assign it as a variable so you can access it since it's a private variable. Then...
    $emptyInputs = $myValidation->getEmptyInputs();
        
    //...for each item in the $emptyInputs array, set it as $emptyInput...
    foreach ($emptyInputs as $emptyInput) {
        
        //... and then set the emptyInput property of the Validation class to be $emptyInput...
        $myValidation->setEmptyInput($emptyInput);
        
        //...and then run the validateEmpty method. The method will check whatever is set as the emptyInput property of the Validation class. If the emptyInput property is empty, it will assign the emptymessage property to be "None of these fields can be empty", set the emptyFlag property to "true" (since the form has errors if a required field is empty), and then return the emptyMessage property. This emptyMessage property will then be echoed later in the code so that users can see what the message is.
        $myValidation->validateEmpty();
    }
    
        //(VALIDATING FOR INTEGER)
    //Validating a single value is even simpler, simply set the input of the method you want (in this case, we're calling the setIntegerInput method) to the value you want to check.
    $myValidation->setIntegerInput($_POST['age']);
    
    //Then, run the method that you want. You can then echo the output message wherever you want, in this case we echo it underneath the input for age (within the HTML section of the code).
    $myValidation->validateInteger();
        
    
    //Below are instances of running each validation method, for the most part using the code for inputting multiple values.
    
        //VALIDATING FOR MIN LENGTH
    $myValidation->setMinLengthInputs($_POST['name']);
    $minLengthInputs = $myValidation->getMinLengthInputs();
    
    foreach ($minLengthInputs as $minLengthInput) {
        $myValidation->setMinLengthInput($minLengthInput);
        $myValidation->validateMinLength(2);
    }
    
        //VALIDATING FOR MAX LENGTH
    $myValidation->setMaxLengthInputs($_POST['name']);
    $maxLengthInputs = $myValidation->getMaxLengthInputs();
    
    foreach ($maxLengthInputs as $maxLengthInput) {
        $myValidation->setMaxLengthInput($maxLengthInput);
        $myValidation->validateMaxLength(5);
    }
    
    
    
        //VALIDATING FOR EMAIL
    $myValidation->setEmailInputs($_POST['email']);
    $emailInputs = $myValidation->getEmailInputs();
    
    foreach ($emailInputs as $emailInput) {
        $myValidation->setEmailInput($emailInput);
        $myValidation->validateEmail();
    }
    
    
        //VALIDATING FOR EMAIL CONFIRMATION
    $myValidation->setEmailConfirmInputs($_POST['emailConfirm']);
    $emailConfirmInputs = $myValidation->getEmailConfirmInputs();
    
    foreach ($emailConfirmInputs as $emailConfirmInput) {
        $myValidation->setEmailConfirmInput($emailConfirmInput);
        $myValidation->validateEmailConfirm();
    }
    
    
        //VALIDATING FOR PASSWORD
    $myValidation->setPasswordInputs($_POST['password']);
    $passwordInputs = $myValidation->getPasswordInputs();
    
    foreach ($passwordInputs as $passwordInput) {
        $myValidation->setPasswordInput($passwordInput);
        $myValidation->validatePassword();
    }
    
        //VALIDATING FOR PASSWORD CONFIRMATION
    $myValidation->setPasswordConfirmInputs($_POST['passwordConfirm']);
    $passwordConfirmInputs = $myValidation->getPasswordConfirmInputs();
    
    foreach ($passwordConfirmInputs as $passwordConfirmInput) {
        $myValidation->setPasswordConfirmInput($passwordConfirmInput);
        $myValidation->validatePasswordConfirm();
    }
    
        //VALIDATING FOR PHONE NUMBERS
    $myValidation->setPhoneInputs($_POST['phone']);
    $phoneInputs = $myValidation->getPhoneInputs();
    
    foreach ($phoneInputs as $phoneInput) {
        $myValidation->setPhoneInput($phoneInput);
        $myValidation->validatePhone();
    }
    
        //VALIDATING FOR DATE
    $myValidation->setDateInputs($_POST['dob']);
    $dateInputs = $myValidation->getDateInputs();
    
    foreach ($dateInputs as $dateInput) {
        $myValidation->setDateInput($dateInput);
        $myValidation->validateDate();
    }
    
        //VALIDATING FOR BOOLEAN
    $myValidation->setBooleanInput($_POST['yesno']);
    $myValidation->validateBoolean();
    
        //VALIDATING FOR FLOAT
    $myValidation->setFloatInput($_POST['price']);
    $myValidation->validateFloat();
    
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TEST</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Register!</h1>
        <form method="post" action="form.php">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
            <!--You can also echo a combination of output messages. In this instance, because we're validating name for empty, minimum length, and maximum length, we simply echo all the messages that we want to see-->
            <?php if(isset($_POST['submit'])){ echo $myValidation->emptyMessage . " " . $myValidation->minLengthMessage . " " . $myValidation->maxLengthMessage; } ?>
            <br>
            
            <label for="age">Age:</label>
            <input type="text" name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->emptyMessage . " " . $myValidation->integerMessage; } ?>
            <br>
            
            <label for ="email">Email:</label>
            <input type="text" name="email"  value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->emptyMessage . " " . $myValidation->emailMessage; } ?>
            <br>
            
            <label for ="emailConfirm">Email Confirm:</label>
            <input type="text" name="emailConfirm"  value="<?php if(isset($_POST['emailConfirm'])){echo $_POST['emailConfirm'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->emailConfirmMessage;  } ?>            
            <br>
            
            <label for="password">Password:</label>
            <input type="password" name="password"  value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->passwordMessage; } ?>
            <br>
            
            <label for="passwordConfirm">Reconfirm password:</label>
            <input type="password" name="passwordConfirm">
            <?php if(isset($_POST['submit'])){ echo $myValidation->passwordConfirmMessage; } ?>
            <br>

            <label for="phone">Phone number:</label>
            <input type="text" name="phone"  value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->phoneMessage; } ?>
            <br>
            
            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob"  value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];}?>">
            <?php if(isset($_POST['submit'])){ echo $myValidation->dateMessage; } ?>            
            <br>
            
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="m"> Male
            <input type="radio" name="gender" value="f"> Female
            <input type="radio" name="gender" value="o"> Other   
            <input type="radio" name="gender" value="n"> Prefer not to say
            <?php if(isset($_POST['submit'])){ echo $myValidation->emptyMessage; } ?>            
            <br>
            
            <label for="yesno">Yes or No?</label>
            <select name="yesno">
                <option value="select">SELECT</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <?php if(isset($_POST['submit'])){ echo $myValidation->booleanMessage; } ?>            
            <br>
            
            <label for="price">Price:</label>
            <input type="text" name="price">
            <?php if(isset($_POST['submit'])){ echo $myValidation->floatMessage; } ?>
            <br>
            

            <input type="submit" name="submit" value="Submit">
        </form>
        
    </body>
</html>