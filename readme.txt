
*********************************
*********************************								
*********************************								
********	READ ME!	*********			
*********************************								
*********************************							
*********************************

Hello reader. This readme file is seperated into three sections:
• Project Description
	• Contains general information about 
• How to Run
	• Contains information about how to run, also contains the username and password of 
	present users in the admur13.sql file
• Testing


Sections are divided by a title covered in forwardslashes. 
This readme file was written in sublime 2. 

//////////////////////////////////
//		Project Description		//
//////////////////////////////////

This project is based on the required features as shown below. I have also tried to follow an optional 
feature (PSR-2). Furthermore, I have gone with a MVC like structure (public, view, App)

//The Structure
• public
	• Public folder - contains my assets and the index.php file.
		• Assets folder contains my javaScripts and CSS files.
• view
	• View folder - contains all of my pages, error messages and header/footer.
• App
	• App folder - contains the Controller, Kernel and Model folders.
		• Controller folder - contains all the controllers. The controllers decide what function to be 
		used when a specific action is performed.
		• Kernel folder - contains the Autoloader related filed.
		• Model folder - contains the different functions which are being called in the different
		controllers.
• server.php - routes any php/html request to the index file, which is then handles by the routes in index.
• readme.txt - this read me file.
• admur13.sql - the required database file, you will need this to be able to compile the database.

Required features:
• Login system
• The password should be stored security
• Upload, store, delete, and display images with titles
• Add, remove, and edit users
• Images should only be available to logged in users
• At least be one ajax call in the application
• The site should be protected against XSS and SQL injection
• All classes should be loaded by a PSR-4 compliant autoloader

Optional features:
• Follow PSR-2 (highly recommended)
• Change the order the images are displayed in
• Arrange the images in folders or by tags
• Images can be either public accessable og protected by password
• Make the design responsive (look good on both desktop and mobile)
• Edit images (scale, crop, ....)
• Internal messaging system between users
• Feel free to come up with your own ideas


What has been completed:

• Login system
	• When you run webpage, this will be the first thing you are met with. You cannot navigate to the other pages 
	unless you have logged in.
• The password should be stored security
	• It is stored securely but I am using sha256, and sha256 is very sensitive about its weight and everybody 
	knows about it
• Upload, store, delete, and display images with titles
	• Yes, this is possible, is it pretty? Well beauty is in the eye of the beholder. 
• Add, remove, and edit users
	• Also done. You can add remove or edit the users username.
• Images should only be available to logged in users
	• Yes, I have implemented session control, sessions are unset and destroyed when logged out. 
• At least be one ajax call in the application
	• My login function is an ajax call.
• The site should be protected against XSS and SQL injection
	• I have tried senetizing inputs and outputs as much as possible, also used prepared statements to seperate sql 
	calls, but I must add that this part has been confusing me a lot.
• All classes should be loaded by a PSR-4 compliant autoloader
	• Yes, I am using routes to load my different things.
• Follow PSR-2 (highly recommended)
	• I have tried following as much of this as possible, like for example if it is a php only file then don't use ?> 
	at the end of the file.



//////////////////////////////////
//			How to Run			//
//////////////////////////////////

Database:

	• Start by compiling the database by using the provided sql file (admur13.sql). 
	WARNING! Images are saved as blobs inside the database therefore opening the SQL file in an editor might 
	slow your computer down.

	• You will also need to navigate to App -> Controller -> dbConnecterController.php and change the following:
		
		$host = "localhost";		<-- If you are using something else, you might need to change this.	
		$user = "root";				<-- Same, change it to whatever you are using				
		$pass = "toor";				<-- Again, change it to whatever password you are using for your database administator
		$dbname = "mygallerydb";	<-- Don't have to change that, once you build the database using admur13.sql,
										it will create the database for you and with that name.

Windows:

	• Start by opening the command prompt (WINDOWS Button + R)
	• A small window called Run will pop up, type cmd and then press OK
	• The commandprompt will open. Now navigate to the location of this readme file.
		• Example: cd Documents\GitHub\IIT_1st_Assignment -> This will take you to this directory
	• To be sure you can type DIR (Views the files in a directory), if you can see the server.php file, then 
	you did it correct!

	• Now simply execute the following command:
		• php -S localhost:8000 -t public server.php  alternative  php -S 127.0.0.1:8080 -t public server.php
			• This will set the root to be the public folder and the server.php file will be run.
		• You will get the following message if executed correctly:
			PHP 5.6.19 Development Server started at Mon Apr 04 08:30:39 2016
			Listening on http://localhost:8000
			Document root is C:\Users\spider\Documents\GitHub\IIT_1st_Assignment\public
			Press Ctrl-C to quit.

Linux:

	• Pretty much the same steps as above, however I had a weird configuration bug, where I had to use sudo, other
	than that it is pretty much the same.

Webpage: 

	• Once you got the above steps correct, you can now navigate to your favourite browser (it is Google chrome) and type in
	the address, you supplied in the previous step.
		• Example: localhost:8000
	• For this next step I have provided some images (Safe For Work), which are located on imgur. Links can be found below.
	• This will navigate you to the login page (See 1), the following username and passwords can be used: 
				______________________
				|Username | Password |
				|_________|__________|
				|  admin  |   root   |
				|_________|__________|
				|  hanna  |    lee   |
				|_________|__________|

	• Typing the wrong password or username will simply send you back to the login page.
	• Once login is successful you will be greeted with the Gallery page (See 2).
	• From here you have a couple of options:
		• Upload Image
		• Users
		• Logout
		• Delete existing images

	• Clicking the Users will direct you to the User List page (See 4). Here you are able to add or delete existing users
		• Notice that the admin user is not present, this is on purpose!
		• Update button simply refreshes the user list.
		• Clicking Add User button will redirect you to the Add User page (See 5)
			• Simply type in the name and password of the user you want to add, Typing an existing name will not work, and 
			you will be told to return back to the user list page. 
			• Once you have clicked the Add User button you will be moved back to the User List page. 
			• You can also delete users by simply clicking on the DELETE button in the same row as the user you want to remove.

	• If we go back to the gallery, here you can click the Upload Image button. This will move you to the Upload Image page (See 3)
		• Notice that all fields must be filled out, failing to do so will simply tell you to try again. 
		• However, there is a current bug that adds a " if no file has been selected, which makes it possible to upload something with 
		just a title. I have not been able to see where the " is being added.
		• You can remove an image by simply clicking the Delete Image button under the game you want to delete.

	• You can logout via the Logout button, this will unset all sessions and destroy them.

	IMGUR Links of my webpage:

		1 Login 				: http://imgur.com/3gfGVxG
		2 Gallery				: http://imgur.com/OiDhspP
		3 Upload Image 			: http://imgur.com/xrTTCO9
		4 Users (User List)		: http://imgur.com/8hVh9Si
		5 Add User 				: http://imgur.com/GagdZ4M
		6 Edit User 			: http://imgur.com/52fnmd2



//////////////////////////////////
//			  Testing			//
//////////////////////////////////

• The webpage has been tested on Linux (Ubuntu Gnome) and Windows 10.
• admur13.sql file has been tested and works on both machines. 
• Website was tested in Chrome, Chromium, Firefox. 
• PHP 5.6.19 has been used for development
• MariaDB 10.1 Series has been used for the database.
• phpmyadmin and HeidiSQL have been used as GUI for the database.