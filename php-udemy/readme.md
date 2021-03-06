## What is PHP.
* PHP: Hypertext pre-processor.
* Server side scripting language.
* PHP is a scripting language and not programming language.
* Designed to use with HTML.
* More flexibility for web page (add dynamic data).
* syntax is similar to C, java and perl.

## We need.
* Web server (apache).
* PHP.
* Database.
* Visual studio code (recommend).
* web browser (google chrome).

## Working with stack.
* Lamp, Linux Apache Mysql PHP.
* MAMP, Mac Apache Mysql PHP.
* WAMP, Windows Apache Mysql PHP.
* XAMP, Cross-Platform (X) Apache Mysql PHP.

## Instalation.
* read installation.md.

## Embed code in a page (Right Way).
```javascript
<?php 
// our code.
?>
```

## File Naming.
* my file.php = bad naming.
* my_file.php = right way using underscore.
* my-file.php = right way using hiphens.

## Outputting Dynamix Text.
* Echo: Printing the data to browser. <br>
example:
```javascript
<?php 
echo "Hello World";
?>
```
* Concatenation: Joining two text of functions together. <br>
Example:
```javascript
<?php 
echo "Hello"."World";
?>
```
* Calculation: <br>
Example:
```javascript
<?php 
echo 25+27;
?>
```

## Code Comments (For noted).
* Single Line Comments = //.
* Pound Sign Comments = #.
* Double Line Comments =
```javascript
/**
* This is a comment.
*/
```

## Variable Names.
* Starts with a "$".
* Followed by a letter of _underscore.
* Can contain letters, numbers underscores or dahses.
* No spaces.
* Case-sensitive.
* Example:
  - $item.
  - $Item (different than $item).
  - $myVariable (recommend).
  - $this_variable (recommend).
  - $this-variable (look like minus).
  - $product3.
  - $_book (has special meaning).
  - $__bookpage (double underscore bad meaning).

## Strings.
* Set of characters.
* Can be defined in single quotes or double quotes.
* Can include HTML.
* But don't nest quotes.
* We can include variable inside ("") double quotes.
* We can't include variable inside ('') single quotes.
* We can differentiate with {$data} inside "" double quotes.
* Use back slash to escape value.