<?php
include "Classes/Validation.php";

$myValidation = new Validation();
//*******Mia's Validation Library Instructions*******

//These instructions take the form of a demonstration form.

//If the submit button is pushed...
if(isset($_POST['submit'])) {
    
    
            //SINGLE VALUE INTEGER VALIDATION
    //This is how to validate a single field on a form using this validation library. 
    
    //First, create a new instance of the Validation class and call the object something so that you know what you're checking. In this case, we called it "integerValidation".
    $integerValidation = new Validation();
    //Then, set the input property of the $integerValidation object to be the value of the field you want to check.
    $integerValidation->setInput($_POST['age']);
    
    //Then, run the validation method you want! In this case we used the validateInteger method. The method will check whatever is set as the input property of the integerValidation object. If the input property is not an integer, it will assign the message property to be "This must be an integer!", set the flag property to "true" (since the form has errors if a field that must be an integer has a value that is not an integer), and then return the message property (see the file "Validation.php" to look at the method itself). This emptyMessage property will then be echoed later in the code so that users can see if the data they entered is valid.
    $integerValidation->validateInteger();
    
    
    
        //MULTIPLE VALUE EMPTY VALIDATION
    //This is a quick but somewhat flawed way of validating multiple fields in a form. I'll show you how to get around the inflexibility of this way of validating multiple fields later in the instructions.
    
    //First, create an object from the Validation class and call it something related to the kind of validation you want to do. In this case, we want to check if fields in the form are empty.
    $emptyValidation = new Validation();  
    
    //Next, set the inputs array to consist of the values you want to check for. In thise case, we're checking name and age. 
    $emptyValidation->setInputs($_POST['name'], $_POST['age']);
    
    //Then you assign the inputs array as a variable so you can access it since it's a private variable
    $emptyInputs = $emptyValidation->getInputs();
    
    //For each item in the $emptyInputs array, set it as $emptyInput...
    foreach ($emptyInputs as $emptyInput) {
        //...and then set the input property of emptyValidation object to be $emptyInput...
        $emptyValidation->setInput($emptyInput);
        
        //...and then run the validation function!
        $emptyValidation->validateEmpty();
    }
    
    
        //MULTIPLE VALUE MINIMUM LENGTH VALIDATION
    //So, below is the same way of inputting multiple values through a validation function that I've shown you before with the empty validation function.  One drawback of using the library this way to input multiple values is that it doesn't give you the ability to fine tune the error messages as closely since this way of doing things only ends up giving you one instance of the message variable. 
    
    //If you look at the HTML code below you'll see that the echo statents underneath the name input and the age input both draw from the same object (emptyValidation). Because of this, if you enter in your name but not your age and try to submit the form, the message beside your name will still say that the field is empty just because the age is empty (in this case, the message reads "these fields must not be empty", but that's just kind of cheating around the code not working properly). 
    
    //The code following this will demonstrate a method of inputting multiple values that will allow you to both output messages  as well as use a function again but with a different argument
    
    $minLengthValidation = new Validation();
    $minLengthValidation->setInputs($_POST['name'], $_POST['email']);
    $minLengthInputs = $minLengthValidation->getInputs();
    
    foreach ($minLengthInputs as $minLengthInput) {
        $minLengthValidation->setInput($minLengthInput);
        $minLengthValidation->validateMinLength(2);
    }
    
    //So it's really just as simple as making a new  instance of the Validation class and specifying the name to the argument that you're passing in (in this case "five"). You could also do this with different POST variables in order to get a specific output message for that field (so that it isn't tied to the validity of another field as was the case with empty validation). For instance, if you had multiple fields that you wanted to check were integers or not, and you wanted message outputs based on the validity of that single field, you could name your objects something like "integerAgeValidation" and "integerWeightValidation". 
    
    //This also functions nicely with cases where you might want to use the same function with a different argument because you'd obviously want the message output to be different as in the case below. The messages use the arguments within the echo statement so you don't have to change anything yourself (but of course feel free to change the output messages if you like!).
    
            // MAXIMUM LENGTH VALIDATION 
    $maxLengthFiveValidation = new Validation();
    $maxLengthFiveValidation->setInput($_POST['name']);
    $maxLengthFiveValidation->validateMaxLength(15);
    
        // MAXIMUM LENGTH VALIDATION WITH A DIFFERENT ARGUMENT
    $maxLengthEightValidation = new Validation();
    $maxLengthEightValidation->setInput($_POST['email']);
    $maxLengthEightValidation->validateMaxLength(30);
    
        //EMAIL VALIDATION
    $emailValidation = new Validation();
    $emailValidation->setInput($_POST['email']);
    $emailValidation->validateEmail();
        
        //EMAIL CONFIRM VALIDATION
    //If you want to use one of the confirm methods (such as where a user has to reenter the same email address or password that they entered before), simply do the following...
    
    //Instantiate a new object from the Validation class
    $emailConfirmValidation = new Validation();
    
    //Call the setInput method of the newly created object and set the value to the POST variable you want to check
    $emailConfirmValidation->setInput($_POST['emailConfirm']);
    
    //Then, call the getInput method of the object and set it as a variable since it's a private property
    $emailToCompare = $emailValidation->getInput();
    
    //Finally, pass in the variable you just made as the argument for the confirmation function
    $emailConfirmValidation->validateEmailConfirm($emailToCompare);
    
        //PASSWORD VALIDATION
    $passwordValidation = new Validation();
    $passwordValidation->setInput($_POST['password']);
    $passwordValidation->validatePassword();
    
        //PASSWORD EMPTY VALIDATION
    //Remember how the empty error message was shown next to the input for name even if name was filled, just because age was empty? To workaround this problem simply instantiate a new object.
    
    $passwordEmptyValidation = new Validation();
    $passwordEmptyValidation->setInput($_POST['password']);
    $passwordEmptyValidation->validateEmpty();

    //The appearance of the empty error message for password is dependent only on the value of the password field now
    
        //PASSWORD CONFIRM VALIDATION
    $passwordConfirmValidation = new Validation();
    $passwordConfirmValidation->setInput($_POST['passwordConfirm']);
    $passwordToCompare = $passwordValidation->getInput();
    $passwordConfirmValidation->validatePasswordConfirm($passwordToCompare);
    
        //PHONE VALIDATION
    $phoneValidation = new Validation();
    $phoneValidation->setInput($_POST['phone']);
    $phoneValidation->validatePhone();
    
        //DATE VALIDATION
    $dateValidation = new Validation();
    $dateValidation->setInput($_POST['dob']);
    $dateValidation->validateDate();
    
        //EMPTY VALIDATION W/ RADIO BUTTON
    //This will also work with dropdowns, checkboxes, anything where you can set a value to "" basically.
    $genderEmptyValidation = new Validation();
    $genderEmptyValidation->setInput($_POST['gender']);
    $genderEmptyValidation->validateEmpty();
    

        //BOOLEAN VALIDATION
    $booleanValidation = new Validation();
    $booleanValidation->setInput($_POST['yesno']);    
    $booleanValidation->validateBoolean();
    
        //FLOAT VALIDATION
    $floatValidation = new Validation();
    $floatValidation->setInput($_POST['price']);
    $floatValidation->validateFloat();
    
    

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
            <?php if(isset($_POST['submit'])){ echo $emptyValidation->message ." " . $minLengthValidation->message . " " . $maxLengthFiveValidation->message; } ?>
            <br>
            
            <label for="age">Age:</label>
            <input type="text" name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>">
            <?php if(isset($_POST['submit'])){ echo $emptyValidation->message . " " . $integerValidation->message; } ?>
            <br>
            
            <label for ="email">Email:</label>
            <input type="text" name="email"  value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
            <?php if(isset($_POST['submit'])){ echo $minLengthValidation->message . " " . $maxLengthEightValidation->message . " " . $emailValidation->message; } ?>
            <br>
            
            <label for ="emailConfirm">Email Confirm:</label>
            <input type="text" name="emailConfirm"  value="<?php if(isset($_POST['emailConfirm'])){echo $_POST['emailConfirm'];}?>">
            <?php if(isset($_POST['submit'])){ echo $emailConfirmValidation->message; } ?>    
            <br>
            
            <label for="password">Password:</label>
            <input type="password" name="password"  value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>">
            <?php if(isset($_POST['submit'])){ echo  $passwordEmptyValidation->message . " " . $passwordValidation->message; } ?>    
            <br>
            
            <label for="passwordConfirm">Reconfirm password:</label>
            <input type="password" name="passwordConfirm" value="<?php if(isset($_POST['passwordConfirm'])){echo $_POST['passwordConfirm'];}?>">
            <?php if(isset($_POST['submit'])){ echo  $passwordConfirmValidation->message; } ?>    
            <br>

            <label for="phone">Phone number:</label>
            <input type="text" name="phone"  value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>">
            <?php if(isset($_POST['submit'])){ echo  $phoneValidation->message; } ?>                
            <br>
                        
            
            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob"  value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];}?>">
            <?php if(isset($_POST['submit'])){ echo  $dateValidation->message; } ?>                
            <br>
            
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="m"> Male
            <input type="radio" name="gender" value="f"> Female
            <input type="radio" name="gender" value="o"> Other   
            <input type="radio" name="gender" value="n"> Prefer not to say
            <?php if(isset($_POST['submit'])){ echo  $genderEmptyValidation->message; } ?>                
            <br>
            
            <label for="yesno">Yes or No?</label>
            <select name="yesno">
                <option value="select">SELECT</option>
                <option value=1>Yes</option>
                <option value=0>No</option>
            </select>
            <?php if(isset($_POST['submit'])){ echo $booleanValidation->message; } ?>                            
            <br>
            
            <label for="price">Price:</label>
            <input type="text" name="price" value="<?php if(isset($_POST['price'])){echo $_POST['price'];}?>">
            <?php if(isset($_POST['submit'])){ echo $floatValidation->message; } ?>            
            <br>
            

            <input type="submit" name="submit" value="Submit">
            
        </form>
        
    </body>
</html>