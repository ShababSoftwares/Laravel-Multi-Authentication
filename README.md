## Multiple Authentication

This is simple Laravel Project to enable Multiple Authentication, you can you following 3 different Urls to use Logins from 3 different Tables.

## How to Use it

Just Download and run 

    - setup database in .env file
    - import multiple-auth-db.sql file into database, File Located under database/multiple-auth-db.sql
    - 

## How to RUN

    php artisan serve

    - http://localhost:8000/login
    - http://localhost:8000/register

        - Login Details:
        Email - user@multiauth.com
        Pass: - Abc12345
        
        Email - user2@multiauth.com
        Pass: - Abc12345

    - http://localhost:8000/login/admin
    - http://localhost:8000/register/admin

        - Login Details:
        Email - admin@multiauth.com
        Pass: - Abc12345

    - http://localhost:8000/login/client
    - http://localhost:8000/register/client

        - Login Details:
        Email - client@multiauth.com
        Pass: - Abc12345
        
        Email - client2@multiauth.com
        Pass: - Abc12345

## License

This is Open Source you can download and use it.

## Shabab Softwares

<p align="center"><a href="https://www.shababsoftwares.com" target="_blank">www.shababsoftwares.com</a></p>

Shabab Softwares