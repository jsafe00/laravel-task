A pure laravel application that glues some of the built in laravel functions. 
	Login authentication
	Registration
	Forgot password with email notification
	Admin/Approve user
	Upload Image
	ToDo list with CRUD functionality

It might not be that much, but I know it can certainly help someone out there. Feel free to enhance this. 

Set your .env mail: 

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=(your_email)
MAIL_PASSWORD=(your_email_password)
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

> composer install
> php artisan migrate
