# Tutorial Auth Codeigniter 4 With JWT

Please follow my instructions:

Step 1 - Clone Project

[code]git clone https://github.com/wildanfuady/codeigniter-4-auth-with-jwt.git[/code]

Step 2 - Create Database

Please create a database named [code]ci4_auth_jwt[/code]

Step 3 - Config Environment

Rename the .env.example file to .env

Step 4 - Migrate Table Users

Follow this command through the terminal:

[code]php spark migrate[/code]

Step 5 - Testing

Follow this command through the terminal:

[code]php spark serve[/code]

Register:

[code]localhost:8080/auth/register[/code]

Login:

[code]localhost:8080/auth/login[/code]

Home:

[code]localhost:8080/home[/code]

When accessing home must include a token in the header.

Enjoy!

Tutorial by [https://ilmucoding.com]https://ilmucoding.com/
