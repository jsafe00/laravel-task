A pure laravel application that joins some of the built in laravel features. <br>
	Login authentication <br>
	Registration <br>
	Forgot password with email notification <br>
	Admin/Approve user <br>
	Upload Image <br>
	ToDo list with CRUD functionality <br>

It might not be that much, but I know it can certainly help someone out there. Feel free to enhance this. 

Set your .env mail: 

MAIL_MAILER=smtp <br>
MAIL_HOST=smtp.gmail.com <br>
MAIL_PORT=465 <br>
MAIL_USERNAME=(your_email) <br>
MAIL_PASSWORD=(your_email_password) <br>
MAIL_ENCRYPTION=ssl <br>
MAIL_FROM_ADDRESS=null <br>
MAIL_FROM_NAME="${APP_NAME}" 

 composer install <br>
 php artisan migrate
