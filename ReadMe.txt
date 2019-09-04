---------------Follow the instructions to use the system-----------------------
----
--
/********Login Credentials for Admin********/
				User id: 276
				Password: Nepal@123
/*****************************************/

1. Go to the browser and open '[url]/sql'. (example: localhost/ems/sql)
--- This will create database and hash the admin's password in the database

2. Then goto the main folder 'ems'-> then to 'application' folder-> 'config' folder -> then open database.php

3. In the file 'database.php', go to  line 81.
   There, change 'database' => '' to 'database' => 'ems' .

4. The setup is complete.

5. Open the login page and login with the provided user id and password in the beginning.
	The password needs to be changed to be able to use the EMS.





---------------Follow the instructions to use the email-----------------------
----
--
1. Go to Task Scheduler on windows

2. On the right side under "Actions" tab, click on import Task.
	Select the xml file and click on Ok.

#How to Start Task
Either log out and log in or right click on task and select run.


#Details
It runs on every 10 mins once the task is started.
At one time, 10 pending emails are sent.

