# Credit-Card-Payment-Simulator
A web page which replicates a real world scenario of an online transaction, including verifying the credit card information
and storing the information to the database.
#
The directory named 'Coursework 3' is the main soure code which contains all the html/php pages and javascript etc. However, having access to
the source code alone will do you no good as the web pages must be hosted somewhere. Hence, I have decided to use the web server program called XAMPP which
allows you to host web pages locally. I have also included a copy of the XAMPP (Standalone) program file in this repository which I have used to host my web pages.
#
-------------------------------------------------- -----------------INSTRUCTIONS------------------------------------------------------------------------------------
In order to get the source code up and running you must follow some steps...note: if you struggle with any steps please take a look at 'credit card report'
which contains screenshots and a walkthrough of the web program which may aid you.

1) As mentioned above I have included the xampp program file which you must download in order to host the web pages on your local server.
2) Find the sub-directory 'htdocs' inside 'xampp' directory
3) Download and move the 'Coursework 3' directory into 'htdocs'
4) You must now switch on the xampp server...Run the program named 'xampp-control.exe' located in the same directory as 'htdocs' 
5) Press start for the modules: 'Apache' and 'MySQL', then wait till both the modules turn green (indicating successful connection).
6) Head to your internet browser and type the following url which should take you directly on to our hosted pages: localhost:80/Coursework 3

That's all thats required to access the credit card simulator, however if you want to further explore the database where the credit card information
gets stored please follow the steps below...

1) Access the main page of the xampp server by entering url: localhost:80
2) locate the top menu and click on 'phpMyAdmin'
3) Click on the 'creditcard' database
4) And finally click on the 'card' table...here, you will be able to view any recent card details that gets added.
