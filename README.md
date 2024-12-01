Our team plans to create a blog style site that will communicate with our database to display UTD students’ favorite restaurants, menu items, and more. The database system will solve the issue by acting as an organized, centralized storage space for the local restaurant data students wish to share. Users will utilize a form to add information about their favorite restaurants, and this data will then be displayed on the site. Users can also search for the most popular places within the site and this data will be retrieved from our database. Our site aims to bring UTD students together with good food and good conversation.
## **Installation**
clone our repository onto your local machine.

![1](https://github.com/user-attachments/assets/7d5c3ce1-7e16-4a4f-a6a3-4858bdd52ef0)

![2](https://github.com/user-attachments/assets/aa42e91c-2465-4916-91c4-fdea69962e65)

Now, you should have our code on your local machine. Next, we need to set up our database. You will need to download XAMPP at the linked website.

![3](https://github.com/user-attachments/assets/52af5d94-7946-491c-a186-61905d45981a)

Select the appropriate version of XAMPP and follow all download instructions until you have the XAMPP Control Panel open on your device. Then, click the Start button next to Apache, followed by the Start button next to MySQL. Once both have been successfully started, your control panel should look like this:

![4](https://github.com/user-attachments/assets/c4951cd4-ea21-4c39-a1ef-40975ed5803e)

Now, click on Admin for MySQL, which brings you to phpmyadmin. Here, go to the Databases tab, and create a new database called “ratatutd”.

![5](https://github.com/user-attachments/assets/cc3a1535-6cf9-45e3-907b-db974614eeba)

Once you do, ratatutd should appear as an option in the hierarchy on the left. Click on it, then click on the Import tab. From there, upload all of our .csv files as included in our Appendix to create our tables. After you do so, your database should look like this:

![6](https://github.com/user-attachments/assets/b44ec9d2-8907-46e1-911d-24decaeded61)

Now, our MySQL database is set up and ready to use on our app. To open our webpage, find the folder where you cloned our Git repository into, and copy paste it into the htdocs folder, which is in the xampp folder which comes with your XAMPP download. Once you do, the folder should look like this:

![7](https://github.com/user-attachments/assets/b1b28bac-ca4b-4720-aac7-9e47100873f7)

Once you have copied our folder into htdocs, click into the folder and locate index.html. Once you do, right-click index.html and open it in your browser of choice (personally, we prefer Google Chrome), which will successfully open our app on your device. 

![8](https://github.com/user-attachments/assets/7dd73257-cece-4873-addd-102f3b1827cb)
