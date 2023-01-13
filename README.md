# Projectenbureau

Projectenbureau is a digital environment created by **Fedde van Gils**, is maintained by **Fedde van Gils** and **Curio students**, and is made in a PHP framework named **Laravel**.

Clients can place assignments that are intended for students. Students can choose these projects that are intended for school.

## Installation in a few steps
**_beforehand_**
> - You must have an installation of PHP, MySQL and phpMyAdmin (e.g. XAMPP).
> - You must have composer and npm installed

**_Get ready in a few steps_**
1. Fork the given repository (or receive a repo through GitHub Education).
2. Clone your copy from the repository. Don't save your repo in your Xampp map, but in a map where it's easy to find.
3. Open phpMyAdmin and create a empty database with the same name as the app.
4. Go to the repository map. Copy the file ".env.example" to ".env" (making of a configurationfile).
5. Open the whole map in your editor. And open the ".env"-file.
6. Check the values for the DB_DATABASE, DB_USERNAME, DB_PASSWORD. At DB_DATABASE you fill in the name of the database you just created. When your working local the username is 'root' and is the password empty.
7. Open a terminal in your editor and run the following commands in sequence:
* **Composer install** (with this, composer installs all necessary packages)
* **php artisan key:generate** (this creates an encryption key)
* **php artisan migrate** (this will create the tables)
* **npm install** (this will install packages needed for the front-end)
* **npm run dev** (with this npm will compile all CSS and JavaScript files)
8. For test data run the command: **php artisan db:seed**
9. And last but not least, start the server through your terminal (**php artisan serve**) and go to *http://127.0.0.1:8000/*. or "projectname".test

**_One of the commands doesn't work._**
- Read the error message carefully. Scroll up, you can often skip the stack trace.
- Double check data in your .env at the DB_DATABASE, DB_USERNAME, and DB_PASSWORD.
- Is Xampp running? Have you created a database in phpMyAdmin? Is the name correct?

## Definition of Done

The definition of done defines when a userstory is done.

**Definition of Done checklist**

- [ ] Unit test passed
- [ ] Code Review done by other developer
- [ ] Functional tests passed
- [ ] tested on other device


