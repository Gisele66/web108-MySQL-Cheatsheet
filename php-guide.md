# PHP Syntax Guide

# PHP Variables:
- are used to store information to use later. They can be text, numbers or results
- they always start with a $
- PHP figures out what they are automatically so you don't need to declare them
- they can be stored once and be reused anywhere in the program
- eg: $name = "Gisele";

# Echo and Print:
- both are used to send output to the browser but echo is faster
- echo can output multiple values at the same time but print can only do once
- most just use echo now as it easier and faster
- echo eg: 
	echo "Name: ", $name, "<br>"
	echo "Age: ", $age;
- print eg: 
	$message = "Hellow World";
	print $message;

# PHP Data Types:
- no need to declare the data type as PHP automatically determines what it is based on the value you assign
- you can do strings, integers, boolean, arrays, objects, etc
- eg: 
	integer - $age = 34; (whole numbers) or a float - $price = 19.99; (numbers with decimals)
	boolean - $isLoggedIn = true; (true or false statement)
	array - $colors = ["red", "blue", "green"];

# PHP Strings:
- strings store a sequence of characters and need to be enclosed in either single or double quotes.
- the difference between using single or double quotes is how PHP is going to handle the variables and special characters you put in the string
- Single Quotes display the text exactly as you write it. 
	- eg: $name = "Gisele";
	- echo 'Hello $name'; 
	- Hello $name is what the out put is instead of putting what the name should really be
- Double Quotations - the variables are processed.
	- eg: $name = "Gisele";
	- echo "Hello $name";
	- Hello Gisele - now it processes the variable to include it in the output.

# PHP Numbers:
- used to store integers (whole numbers) and floats (numbers with decimals).
- can do normal math - add, subtract, divide, etc.
- PHP makes it easy because it automatically handles numbers

# PHP Constants:
- a constant is a value that you can't change once you define it. 
- You want to do this for things like the name of your website or other values and things that will always be the same as long as your script is running.
- eg: define("SITE_NAME", "Bathroom Busters"); echo SITE_NAME;

# PHP Operators:
- Operators are symbols that are used for operations, to do things. You can assign, make comparisons, etc.
- eg: + - + == >=, etc.

# PHP If, Else and Elseif:
- these are conditional statement and allow your program to make decisions. 
- PHP checks to see if something is true or fals and then does what it's supposed to depending on that.
- elseif will check more conditions if the first one is false.
- PHP reads from the top to the bottom so it stops as soon as it finds the condition that's true.
- eg: 

<?php
$age = 18;

if ($age >= 18) {  //if your age is greater than 18
    echo "You are an adult."; 
} elseif ($age >= 13) {  // if you're 13 or older up to 18
    echo "You are a teenager.";
} else {
    echo "You are a child."; // else you're under 13 then you're a child.
}
?>

# PHP Functions:
- functions are blocks of code you can reuse and they perform a specific task.
- they keep your code organized and stop repetition.
- they're defined one time and then you can call them whenever you need them.
- eg:
	<?php
	function greetUser($name) {
		echo "Hello, $name!";
	}

	greetUser("Gisele");
	?>
# PHP Arrays:
- arrays allow you to to store multiple values in a single variable.
- PHP supports several types of arrays:
	- indexed arrays use numeric keys starting at 0. You can call them up by putting a number in the square brackets [2], etc.
	- associative arrays use named keys instead of numbers. They associate things like "name" => "Gisele", "email" => "gisele@mail.com", etc
	- multidimensional arrays have arrays inside of other arrays. Square bracket arrays inside another square bracket array. [[ ]].
- indexed arrays store lists
- associative arrays store key-value pairs
- multidimensional arrays organize more complex data

# PHP Loops:
- loops allow PHP to run a block of code over and over. It's good for lists or tasks that are repeated or processing data.
- For Loop - use this when you know exactly how many times the loop should run. 

	<?php
	for ($i = 1; $i <= 5; $i++) { // $i starts at 1 and the loop runs while $i is less than or equal to 5. 
    	echo $i . " "; // $i increases by one each time
	}
	?>

- the while loop runs as long as the condition is true. It stops when it's no longer true.
- the foreach loop is designed for arrays specifically. It automatically loops through each value in the array. eg: $colors = ["red", "blue", "green"];

What they do:
- For - known number of repetitions
- While - runs while a condition is true
- Foreach - easiest way to loop through arrays

# PHP Resources
- Resources are like a door handle, they let you access external systems safely.
- You want to open and close the "door" when you're finished.
- you have to create using a function like: fopen() or mysqli_connect()
- then you have to close it using fclose() or mysqli_close() to make sure you're disconnected and it's safely closed. 
- Resources are important because they allow PHP to interact with files, databases and external services. They help manage system memory and performance and properly closing prevents memory leaks and system issues.
