<?php

// Initializing variables for numbers and message as empty strings
$numbers = "";
$message = "";

// Gets result of which radio button to determine whether list of odd numbers should be reversed or not using "isset" (method taken from: https://www.simplilearn.com/tutorials/php-tutorial/isset-in-php)
$reversed = isset($_POST['order']) && $_POST['order'] === 'reversed';


// Getting the user input for the starting number and ending number
$startNumber = $_POST["start-number"];
$endNumber = $_POST["end-number"];

// If statement checks to verify that user input is valid using is_numeric (method from: https://www.w3schools.com/php/func_va r_is_numeric.asp)
if ((!is_numeric($startNumber)) || (!is_numeric($endNumber))) {
    $message = "Please enter both a starting integer and an ending integer.";
}

// Otherwise, if startNumber > endNumber (there is an error), display that starting number must be lower
elseif ($startNumber > $endNumber) {
    $message = "Please be sure that the starting integer is less than the ending integer.";
}

// Else, continue to the selection of loop to create list of the even numbers
else {

    // If the user chooses for the numbers to be displayed in reverse order, use a Do..While loop
    if ($reversed) {

        // Initializing the counter to the ending number
        $counter = $endNumber;

        // Do..While loop that specifies that the code within the loop executes as long as the counter is greater than or equal to the starting number
        do {

            // If statement checks for the even numbers while loop runs(counter % 2 == 0 checks that remainder is 0, meaning that number is divisible by 2 (even number))
            // Method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript
            if ($counter % 2 == 0) {
                $numbers = $numbers . $counter . "<br>";
            }

            // Decrement the counter by 1 each time the loop executes
            $counter = $counter - 1;

            // Creating the list of even numbers
            $message = "Here is a list of all the even numbers between " . $endNumber . " and " . $startNumber . ":<br><br>" . $numbers;
        } while ($counter >= $startNumber);
    }

    // Otherwise, use a While loop to create the list of numbers
    else {

        // Initializing the counter to the starting number
        $counter = $startNumber;

        // While loop that specifies that the code within the loop executes as long as the counter is less than or equal to the ending number
        while ($counter <= $endNumber) {

            // If statement checks for the even numbers while loop runs(counter % 2 == 0 checks that remainder is 0, meaning that number is divisible by 2 (even number))
            // Method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript
            if ($counter % 2 == 0) {
                $numbers = $numbers . $counter . "<br>";
            }

            // Increment the counter by 1 each time the loop executes
            $counter = $counter + 1;

            // Creating the list of even numbers
            $message = "Here is a list of all the even numbers between " . $startNumber . " and " . $endNumber . ":<br><br>" . $numbers;
        }
    }
}

// Displaying the range of even numbers back to the user
echo $message;

?>
