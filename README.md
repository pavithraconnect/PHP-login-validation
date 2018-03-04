# PHP-login-validation

Goal:
Validate a login page and welcome the user with their respevctive account page.

Files:

1.	login.html:

Create a form that contains two input fields on it: username and password. When the form is submitted, it should go to login.php. 

2.	login.php:

Check if both username and password are provided.  If user input is missing in one of these fields, redirect user to login.html. 
If both is given, then check if the user exists in the database and password matches with the stored password. If the user exists and password matches, store user information (username) in session variable and redirect user to welcome.php. Otherwise, redirect user to login.html. You don’t need to display any error messages.


3.	welcome.php:

Check if the user has signed in to the system: check if the session variable for ‘username’ is set. If it is set, welcome user by user’s fullname. Show the avatar for the user. Display the list of favorite books for the user.
Otherwise redirect user to login.html.


Database name:
PW5

Tables:

Users (username, password, fullname, email, avatar)
Books (bookid, title, author)
FavoriteBooks (username, bookid)






