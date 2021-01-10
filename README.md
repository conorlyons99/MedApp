# How to Install this Repository #

1. Download GIT Bash or another terminal e.g PowerShell
2. Open the terminal and navigate to where you would like the project to go
3. Next run the command git clone followed by the URL for this repo. 
    In this case the command would be `git clone https://github.com/conorlyons99/MedApp.git`
4. After the repository has been cloned, cd into the project folder
5. Now we need to install Composer, run the command `composer install`. This will install all the necessary files for the project
6. Now we need to turn the .env.example file into a .env file. To do this on Windows run `cp .env.example .env` and on MAC or Linux use `copy .env.example .env`
7. Then run `php artisan key:generate`
8. Finally configure your .env file in the project folder to set it up with the right DB, add the project URL to your hosts file in C:\Windows\System32\drivers\etc\hosts and you're ready to go!
