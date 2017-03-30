README: NOMADIC VALIDATION LIBRARY (last edited: March 28th, 2017)

Included in this .zip file are all the files for the validation library.

The library itself is quite long and repetitious, but that was done with the hopes that the library would be as modular and adjustable as possible. As of March 28th, 2017, the library still needs data sanitization (which I'm planning to put in the set functions of each validation method) so updates to this library will follow. As well, I'm planning to figure out an easy way to check all the error flag variables so that you can code something like "if all of the error flag variables are false then redirect to page x". But for now, this is what there is.

Within the form.php file, there is a list of step by step instructions (with the relevant code below each instructions) but this readme file has a list of general instructions as well.

The idea behind this validation library is that you can plug any number of values into each validation function's individual input array and then run the function against the array of values. Then, if a value that is being checked is invalid, the flag variable for that validation method is tripped, and the appropriate message is assigned to that validation method's message variable. Please see the form.php file for a more in-depth explanation.

It's pretty easy to add more methods too, just keep in mind that each validation method has an "inputs" variable, an "input" variable, a "message" variable, and a "flag" varible (as well as get and set methods for each variable). The purpose of all these functions will make more sense once you read the form.php file.

- Mia