Description
---------------

The code will load the html from any given url and then finds out the "a" tags in the DOM. 
It will print out Url, as well as text of the link that has text simmilar to "Privacy Policy".

How to execute the file
-----------------------

The given index.php can be executed from the command line.
Command C:\path-of-the-php>php.exe "path-of-the-file\index.php"

Result
-------
It will print an array that will contain following:-

a) Url of the link
b) text of the link

Approach followed
-----------------

I have followed couple of approaches to get the desired result some of them are as following:

a) Apprpach that Worked:-
	I have used the DOMDocument class that is predefined in php. I loaded the html source of the given url.After that I iterated the anchor tag elements i.e "a".
	While iterating I checked the string for which i had to print the url and on basis of it i printed the result.
	
b) Other approach:-
	b.1) I used @file_get_contents($url) to get the source of the given url.
		Than I used DomDocument class as I used in 1st approach.
	b.2) I also tried to get the result with the help of  @file_get_contents($url) and regular expression also to get the links and text arrays.
		but it didmt ;ead me to the desired result.
		
Note:- The Approach "a)" is the one i have used for creating the result. I have written the code to get the url of the text "Privacy Policy". The reason of not producing the 
		url for the "submit paper" is, that because I havent got the "submit paper" text in any of the approach. So fo sake of the approach and program execution I have generated the 
		desired functionalty for other link i.e "Privacy Policy". 
		
Thanks
	