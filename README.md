A pure laravel application that joins some of the built in laravel features. <br>
	Login authentication <br>
	Registration <br>
	Reset password with email notification <br>
	Admin/Approve user <br>
	Upload Image <br>
	ToDo list with CRUD functionality <br>
	Account Lockout if 3 consecutive incorrect login data with email notification <br>
	Update data in Profile Page with sometimes validation <br>

user: admin@admin.com
password: admin

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
