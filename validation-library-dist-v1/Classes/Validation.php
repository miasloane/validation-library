<?php

/*
THIS IS A LIBRARY FOR VALIDATION FUNCTIONS CONTAINING VALIDATION FOR:
    - Empty validation
    - Integer validation
    - Minimum length validation
    - Maximum length validation
    - Email validation
    - Email confirmation validation
    - Password validation (min. 8 chars, req. 1 capital letter, req. 1 number)
    - Password confirmation validation
    - Phone
    - Date
    - Boolean
    - Float
*/

class Validation
{
    //VARIABLES
        private $emptyInputs = [];
        private $emptyInput = "";
        public $emptyMessage = "";
        private $emptyFlag = false;

        private $integerInputs = [];
        private $integerInput = "";
        public $integerMessage = "";
        private $integerFlag = false;
    
        private $minLengthInputs = [];
        private $minLengthInput = "";
        public $minLengthMessage = "";
        private $minLengthFlag = false;

        private $maxLengthInputs = [];
        private $maxLengthInput = "";
        public $maxLengthMessage = "";
        private $maxLengthFlag = false;    
    
        private $emailInputs = [];
        private $emailInput = "";
        public $emailMessage = "";
        private $emailFlag = false;
    
        private $emailConfirmInputs = [];
        private $emailConfirmInput = "";
        public $emailConfirmMessage = "";
        private $emailConfirmFlag = false;
    
        private $passwordInputs = [];
        private $passwordInput = "";
        public $passwordMessage = "";
        private $passwordFlag = false;
    
        private $passwordConfirmInputs = [];
        private $passwordConfirmInput = "";
        public $passwordConfirmMessage = "";
        private $passwordConfirmFlag = false;

        private $phoneInputs = [];
        private $phoneInput = "";
        public $phoneMessage = "";
        private $phoneFlag = false;

        private $dateInputs = [];
        private $dateInput = "";
        public $dateMessage = "";
        private $dateFlag = false;
    
        private $booleanInputs = [];
        private $booleanInput = "";
        public $booleanMessage = "";
        private $booleanFlag = false;
    
        private $floatInputs = [];
        private $floatInput = "";
        public $floatMessage = "";
        private $floatFlag = false;
        
    
    //CONSTRUCTOR FOR VALIDATION OBJECT
        public function __construct(){
            $this->emptyInputs = [];
            $this->emptyInput = "";
            $this->emptyMessage = "";
            $this->emptyFlag = false;

            $this->integerInputs = [];
            $this->integerInput = "";
            $this->integerMessage = "";
            $this->integerFlag = false;
            
            $this->minLengthInputs = [];
            $this->minLengthInput = "";
            $this->minLengthMessage = "";
            $this->minLengthFlag = false;
            
            $this->maxLengthInputs = [];
            $this->maxLengthInput = "";
            $this->maxLengthMessage = "";
            $this->maxLengthFlag = false;            
            
            $this->emailInputs = [];
            $this->emailInput = "";
            $this->emailMessage = "";
            $this->emailFlag = false;
            
            $this->emailConfirmInputs = [];
            $this->emailConfirmInput = "";
            $this->emailConfirmMessage = "";
            $this->emailConfirmFlag = false;
        
            $this->passwordInputs = [];
            $this->passwordInput = "";
            $this->passwordMessage = "";
            $this->passwordFlag = false;

            $this->passwordConfirmInputs = [];
            $this->passwordConfirmInput = "";
            $this->passwordConfirmMessage = "";
            $this->passwordConfirmFlag = false;

            $this->phoneInputs = [];
            $this->phoneInput = "";
            $this->phoneMessage = "";
            $this->phoneFlag = false;

            $this->dateInputs = [];
            $this->dateInput = "";
            $this->dateMessage = "";
            $this->dateFlag = false;
            
            $this->booleanInputs = [];
            $this->booleanInput = "";
            $this->booleanMessage = "";
            $this->booleanFlag = false;
            
            $this->floatInputs = [];
            $this->floatInput = "";
            $this->floatMessage = "";
            $this->floatFlag = false;            
        }
    
    //SET METHODS: 
            //EMPTY SET METHODS
        public function setEmptyInputs(...$valueIn){
            $this->emptyInputs = $valueIn;
        }

        public function setEmptyInput($valueIn){
            $this->emptyInput = $valueIn;
        }

        public function setEmptyMessage($valueIn){
            $this->emptyMessage = $valueIn;
        }

        public function setEmptyFlag() {
            $this->emptyFlag = true;
        }
        
            //INTEGER SET METHODS
        public function setIntegerInputs(...$valueIn){
            $this->integerInputs = $valueIn;
        }
    
        public function setIntegerInput($valueIn){
            $this->integerInput = $valueIn;
        }
        
        public function setIntegerMessage($valueIn){
            $this->integerMessage = $valueIn;
        }

        public function setIntegerFlag() {
            $this->integerFlag = true;
        }
    
            //MINIMUM LENGTH SET METHODS
        public function setMinLengthInputs(...$valueIn){
            $this->minLengthInputs = $valueIn;
        }
    
        public function setMinLengthInput($valueIn){
            $this->minLengthInput = $valueIn;
        }
        
        public function setMinLengthMessage($valueIn){
            $this->minLengthMessage = $valueIn;
        }

        public function setMinLengthFlag() {
            $this->minLengthFlag = true;
        }
    
            //MAXIMUM LENGTH SET METHODS
        public function setMaxLengthInputs(...$valueIn){
            $this->maxLengthInputs = $valueIn;
        }
    
        public function setMaxLengthInput($valueIn){
            $this->maxLengthInput = $valueIn;
        }
        
        public function setMaxLengthMessage($valueIn){
            $this->maxLengthMessage = $valueIn;
        }

        public function setMaxLengthFlag() {
            $this->maxLengthFlag = true;
        }
        
            //EMAIL SET METHODS
        public function setEmailInputs(...$valueIn){
            $this->emailInputs = $valueIn;
        }
    
        public function setEmailInput($valueIn){
            $this->emailInput = $valueIn;
        }
        
        public function setEmailMessage($valueIn){
            $this->emailMessage = $valueIn;
        }

        public function setEmailFlag() {
            $this->emailFlag = true;
        }

            //EMAIL CONFIRM SET METHODS
        public function setEmailConfirmInputs(...$valueIn){
            $this->emailConfirmInputs = $valueIn;
        }
    
        public function setEmailConfirmInput($valueIn){
            $this->emailConfirmInput = $valueIn;
        }
        
        public function setEmailConfirmMessage($valueIn){
            $this->emailConfirmMessage = $valueIn;
        }

        public function setEmailConfirmFlag() {
            $this->emailConfirmFlag = true;
        }
    
            //PASSWORD SET METHODS
        public function setPasswordInputs(...$valueIn){
            $this->passwordInputs = $valueIn;
        }
    
        public function setPasswordInput($valueIn){
            $this->passwordInput = $valueIn;
        }
        
        public function setPasswordMessage($valueIn){
            $this->passwordMessage = $valueIn;
        }

        public function setPasswordFlag() {
            $this->passwordFlag = true;
        }
  
            //PASSWORD CONFIRM SET METHODS
        public function setPasswordConfirmInputs(...$valueIn){
            $this->passwordConfirmInputs = $valueIn;
        }
    
        public function setPasswordConfirmInput($valueIn){
            $this->passwordConfirmInput = $valueIn;
        }
        
        public function setPasswordConfirmMessage($valueIn){
            $this->passwordConfirmMessage = $valueIn;
        }

        public function setPasswordConfirmFlag() {
            $this->passwordConfirmFlag = true;
        }

            //PHONE SET METHODS
        public function setPhoneInputs(...$valueIn){
            $this->phoneInputs = $valueIn;
        }
    
        public function setPhoneInput($valueIn){
            $this->phoneInput = $valueIn;
        }
        
        public function setPhoneMessage($valueIn){
            $this->phoneMessage = $valueIn;
        }

        public function setPhoneFlag() {
            $this->phoneFlag = true;
        }
    
            //DATE SET METHODS
        public function setDateInputs(...$valueIn){
            $this->dateInputs = $valueIn;
        }
    
        public function setDateInput($valueIn){
            $this->dateInput = $valueIn;
        }
        
        public function setDateMessage($valueIn){
            $this->dateMessage = $valueIn;
        }

        public function setDateFlag() {
            $this->dateFlag = true;
        }
    
            //BOOLEAN SET METHODS
        public function setBooleanInputs(...$valueIn){
            $this->booleanInputs = $valueIn;
        }
    
        public function setBooleanInput($valueIn){
            $this->booleanInput = $valueIn;
        }
        
        public function setBooleanMessage($valueIn){
            $this->booleanMessage = $valueIn;
        }

        public function setBooleanFlag() {
            $this->booleanFlag = true;
        }
    
            //FLOAT SET METHODS
        public function setFloatInputs(...$valueIn){
            $this->floatInputs = $valueIn;
        }
    
        public function setFloatInput($valueIn){
            $this->floatInput = $valueIn;
        }
        
        public function setFloatMessage($valueIn){
            $this->floatMessage = $valueIn;
        }

        public function setFloatFlag() {
            $this->floatFlag = true;
        }
    
    
    
    
    //GET METHODS: 
            //EMPTY GET METHODS
        public function getEmptyInputs() {
            return $this->emptyInputs;
        }

        public function getEmptyInput() {
            return $this->emptyInput;
        }

        public function getEmptyMessage() {
            return $this->emptyMessage;
        }

        public function getEmptyFlag() {
            return $this->emptyFlag;
        }
    
            //INTEGER GET METHODS
        public function getIntegerInputs() {
            return $this->integerInputs;
        }
    
        public function getIntegerInput() {
            return $this->integerInput;
        }
        
        public function getIntegerMessage() {
            return $this->integerMessage;
        }

        public function getIntegerFlag() {
            return $this->integerFlag;
        }
    
            //MINIMUM LENGTH GET METHODS
        public function getMinLengthInputs() {
            return $this->minLengthInputs;
        }
    
        public function getMinLengthInput() {
            return $this->minLengthInput;
        }
        
        public function getMinLengthMessage() {
            return $this->minLengthMessage;
        }

        public function getMinLengthFlag() {
            return $this->minLengthFlag;
        }
    
            //MAXIMUM LENGTH GET METHODS
        public function getMaxLengthInputs() {
            return $this->maxLengthInputs;
        }
    
        public function getMaxLengthInput() {
            return $this->maxLengthInput;
        }
        
        public function getMaxLengthMessage() {
            return $this->maxLengthMessage;
        }

        public function getMaxLengthFlag() {
            return $this->maxLengthFlag;
        }
    

            //EMAIL GET METHODS
        public function getEmailInputs() {
            return $this->emailInputs;
        }
    
        public function getEmailInput() {
            return $this->emailInput;
        }
        
        public function getEmailMessage() {
            return $this->emailMessage;
        }

        public function getEmailFlag() {
            return $this->emailFlag;
        }
    
            //EMAIL CONFIRM GET METHODS
        public function getEmailConfirmInputs() {
            return $this->emailConfirmInputs;
        }
    
        public function getEmailConfirmInput() {
            return $this->emailConfirmInput;
        }
        
        public function getEmailConfirmMessage() {
            return $this->emailConfirmMessage;
        }

        public function getEmailConfirmFlag() {
            return $this->emailConfirmFlag;
        }
    
            //PASSWORD GET METHODS
        public function getPasswordInputs() {
            return $this->passwordInputs;
        }
    
        public function getPasswordInput() {
            return $this->passwordInput;
        }
        
        public function getPasswordMessage() {
            return $this->passwordMessage;
        }

        public function getPasswordFlag() {
            return $this->passwordFlag;
        }

            //PASSWORD CONFIRM GET METHODS
        public function getPasswordConfirmInputs() {
            return $this->passwordConfirmInputs;
        }
    
        public function getPasswordConfirmInput() {
            return $this->passwordConfirmInput;
        }
        
        public function getPasswordConfirmMessage() {
            return $this->passwordConfirmMessage;
        }

        public function getPasswordConfirmFlag() {
            return $this->passwordConfirmFlag;
        }

                //PHONE GET METHODS
        public function getPhoneInputs() {
            return $this->phoneInputs;
        }
    
        public function getPhoneInput() {
            return $this->phoneInput;
        }
        
        public function getPhoneMessage() {
            return $this->phoneMessage;
        }

        public function getPhoneFlag() {
            return $this->phoneFlag;
        }

                //DATE GET METHODS
        public function getDateInputs() {
            return $this->dateInputs;
        }
    
        public function getDateInput() {
            return $this->dateInput;
        }
        
        public function getDateMessage() {
            return $this->dateMessage;
        }

        public function getDateFlag() {
            return $this->dateFlag;
        }
    
                //BOOLEAN GET METHODS
        public function getBooleanInputs() {
            return $this->booleanInputs;
        }
    
        public function getBooleanInput() {
            return $this->booleanInput;
        }
        
        public function getBooleanMessage() {
            return $this->booleanMessage;
        }

        public function getBooleanFlag() {
            return $this->booleanFlag;
        }

                //FLOAT GET METHODS
        public function getFloatInputs() {
            return $this->floatInputs;
        }
    
        public function getFloatInput() {
            return $this->floatInput;
        }
        
        public function getFloatMessage() {
            return $this->floatMessage;
        }

        public function getFloatFlag() {
            return $this->floatFlag;
        }
    
    
    
    //VALIDATION METHODS
        //EMPTY
    public function validateEmpty () {
        if(empty($this->emptyInput)) {
            $this->emptyMessage = "None of these fields can be empty!";
            $this->setEmptyFlag();
            return $this->emptyMessage;
        } else {
            $this->emptyMessage = "Valid!";
            return $this->emptyMessage;
        }
    }
        
        //INTEGER
    public function validateInteger () {
        if(!filter_var($this->integerInput, FILTER_VALIDATE_INT)==true) {
            $this->integerMessage = "This must be an integer!";
            $this->setIntegerFlag();
            return $this->integerMessage;
        } else {
            $this->integerMessage = "Valid!";
            return $this->emptyMessage;
        }
    }
    
        //MINIMUM LENGTH (OF A STRING)
    public function validateMinLength ($minLength) {
        if(strlen($this->minLengthInput) < $minLength) {
            $this->minLengthMessage = "The minimum length of this string is " . $minLength . " characters!";
            $this->setMinLengthFlag();
            return $this->minLengthMessage;
        }
    }
    
        //MAXIMUM LENGTH (OF A STRING)
    public function validateMaxLength ($maxLength) {
        if(strlen($this->maxLengthInput) > $maxLength) {
            $this->maxLengthMessage = "The maximum length of this string is " . $maxLength . " characters!";
            $this->setMaxLengthFlag();
            return $this->maxLengthMessage;
        }
    }
    
    
        //EMAIL
    public function validateEmail () {
        if(!filter_var($this->emailInput, FILTER_VALIDATE_EMAIL)==true) {
            $this->emailMessage = "This must be a valid email address!";
            $this->setEmailFlag();
            return $this->emailMessage;
        } else {
            $this->emailMessage = "Valid!";
            return $this->emailMessage;
        }
    }
    
        //EMAIL CONFIRM
    public function validateEmailConfirm () {
        if($this->emailConfirmInput !== $this->emailInput) {
            $this->emailConfirmMessage = "This must be the same email address!";
            $this->setEmailConfirmFlag();
            return $this->emailConfirmMessage;
        }
    }
    
        //PASSWORD
    public function validatePassword () {
        if(!preg_match('/^(?=.*\d)(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,30}$/', $this->passwordInput)) {
            $this->passwordMessage = "Your password must contain one number, one capital letter, and must be between 8-30 characters!";
            $this->setPasswordFlag();
            return $this->passwordMessage;
        } else {
            $this->passwordMessage = "Valid password";
            return $this->passwordMessage;
        }
    }
    
        //PASSWORD CONFIRM
    public function validatePasswordConfirm () {
        if($this->passwordConfirmInput !== $this->passwordInput) {
            $this->passwordConfirmMessage = "This must be the same password!";
            $this->setPasswordConfirmFlag();
            return $this->passwordConfirmMessage;
        }
    }
    
        //PHONE
    public function validatePhone () {
        if(!preg_match('/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i', $this->phoneInput)) {
            $this->phoneMessage = "This is not a valid phone number!";
            $this->setPhoneFlag();
            return $this->phoneMessage;
        } else {
            $this->phoneMessage = "Valid!";
            return $this->phoneMessage;
        }
    }
    
        //DATE
    public function validateDate () {
        $dateInputArray = explode('/', $this->dateInput);
        if (count($dateInputArray) == 3) {
            if (checkdate($dateInputArray[0], $dateInputArray[1], $dateInputArray[2])) {
                $this->dateMessage = "This is a valid date!";
                return $this->dateMessage;
            } else {
                $this->dateMessage = "Your date must consist of day, month, and year in a DD/MM/YYYY format!";
                $this->setDateFlag();
                return $this->dateMessage;
            }
        } else {
            $this->dateMessage = "Your date must consist of day, month, and year in a DD/MM/YYYY format!";
            $this->setDateFlag();
            return $this->dateMessage;
        }
    }
    
    
        //BOOLEAN
    public function validateBoolean() {
        if(!filter_var($this->booleanInput, FILTER_VALIDATE_BOOLEAN)==true) {
            $this->booleanMessage = "This must be a true or false value!";
            $this->setBooleanFlag();
            return $this->booleanMessage;
        } else {
            $this->booleanMessage = "Valid!";
            return $this->booleanMessage;
        }
    }
    
        //FLOAT
    public function validateFloat () {
        if(!filter_var($this->floatInput, FILTER_VALIDATE_FLOAT)==true) {
            $this->floatMessage = "This must be a float!";
            $this->setFloatFlag();
            return $this->floatMessage;
        } else {
            $this->floatMessage = "Valid!";
            return $this->floatMessage;
        }
    }
    
    
}

?>