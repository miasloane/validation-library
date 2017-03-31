README: MIA’S VALIDATION LIBRARY (last edited: March 31st, 2017)

Included in this .zip file are all the files for the validation library.

This is the second edition of Mia’s Validation Library. This library will validate data but does not feature sanitization. (NOTE FOR NOMADIC TEAM: As of March 31st 2017, we’ve collectively decided to include sanitization within your feature specific functions since this will ensure that the data goes through the sanitization process. It’s easy to incorporate this validation library with your code so that you can do stuff like redirecting the user to a specific page if all the fields are valid by using the error flag variables. So you can write something like the following:

$emptyFlag = $emptyValidation->getFlag();
$emailFlag = $emailValidation->getFlag();
$emailConfirmFlag = $emailConfirmValidation->getFlag();
$phoneFlag = $phoneValidation->getFlag();

if($emptyFlag == false && $emailFlag == false && $emailConfirmFlag == false && $phoneFlag == false) {

$myForm->newForm($_POST['f_name'], $_POST['l_name'], $_POST['address'], $_POST['country'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['comment']);   
            
echo "form submitted";

} else {

echo "Invalid form";

}
 

Within the form.php file, there is a list of step by step instructions (with the relevant code below each instructions) but this README file has a list of general instructions as well.

The idea behind this validation library is that you can plug values into the input or inputs property of an instance of the Validation class and then run validation methods against the value (or values). Then, if a value that is being checked is invalid, the flag property is tripped, and the appropriate message is assigned to the message property. Please see the form.php file for a more in-depth explanation. It's very easy to add more methods too! The purpose of all these functions will make more sense once you read the form.php file.

- Mia