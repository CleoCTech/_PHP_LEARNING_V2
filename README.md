
# Laracast Episode 5 
## Separation of concerns: 
	-You can think of concerns as responsibilities.
	-Have one section where you prepare your data. 
	-Another section where you render/display your data
    -We created a new file called `index.view.php` responsible for rendering data. `index.php` will responsible of receive data. 

# Laracast Episode 6
## Understanding Arrays:	
	-Creat array by assigning a value to a variable i.e $names = []; and within you can have any number of items. 
	-Then we loop the items in html element list. First method is shorthand method which makes your code cleaner. 

# Laracast Episode 7
## Associative Arrays:	
	-Here, each item has a key and when we point to the key, we can get it's value. 

```
$person = [
	'age' =>26,
	'color' =>'black',
];

```
	-We also learn a debug like method using die(var_dump('something to check')). 

# Laracast Episode 8
## Associative Arrays with Booleans:	
	-Casting out a boolean value(true/false) into html, we may not see anything(1) and we do, it doesn't make sense. 
	-Php will give you more control over the array, rather than filtering through the array, you can do it one at a time if you want to control of what the keys are. 
	-$task['completed'] is a boolean, therefore we can check if it's true or false then proceed to echo something in html that is more informative and understandable. We use ternay operator as a shorthand of if (){---} else {----}
	-Learnt php helper functions like ucwords(), strtoupper(). You can learn this functions by lot of reading or googling when the need arises in you coding career. 
