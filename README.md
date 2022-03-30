
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
	