# Tutorial Auth Codeigniter 4 With JWT

Please follow my instructions:

Step 1 - Clone Project

git clone https://github.com/wildanfuady/codeigniter-4-auth-with-jwt.git

Step 2 - Create Database

Please create a database named ci4_auth_jwt

Step 3 - Config Environment

Rename the .env.example file to .env

Step 4 - Migrate Table Users

Follow this command through the terminal:

php spark migrate

Step 5 - Testing

Follow this command through the terminal:

php spark serve

Then open the postman software with the post method.

Register URL:

localhost:8080/auth/register

Login:

localhost:8080/auth/login

Home:

localhost:8080/home

When accessing home must include a token in the header and use get method.

Enjoy!

Tutorial by https://ilmucoding.com/
