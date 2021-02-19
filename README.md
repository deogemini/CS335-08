
<p align="center">
<a href="#"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### ONLINE BUS TICKETING(OBT)
-----------------

### INTRODUCTION:
The purpose of the project is to ease or simplify the whole process of booking bus tickets so as to enable the customers to book the tickets from wherever they are and at any time.
The project aims to automate the manual procedures of reversing a bus ticket which is the use of modern techniques due to the advancement of science and technology. 


 💡 **For deep dive and organized processes of this project development, please look up on our Wiki page.**

### PROBLEM STATEMENTS:
Working hours consuption and false bus agents problems

### MAIN OBJECTIVES:
The project aims to automate the manual procedures of reversing a bus ticket which is the use of modern techniques due to the advancement of science and technology. 

### SPECIFIC OBJECTIVES:
* To find out requirements for the system
* To design a web app for easy automated bus ticketing
* To impliment the bus ticketing web app
* To test functionality of the app

### SIGNIFANCE OF PROJECT:
* Save significance time for passengers booking tickets
* To provide assurance to passengers about their tickets

### PROJECT SCOPE:
* The project will base on the buses that transfers from one region to another.
* The project will not include small buses (daladala).
* Customers will be able to book tickets from special created website the owners of the buses should be able to see the orders.


--------------------
### INSTALLATION REQUIREMENTS:
In order to install this system on your computer you need to have the following dependencies.
1. Composer (download on https://getcomposer.org/ or run `sudo apt install composer` on debian based linux)
1. NodeJS (download on https://nodejs.org/en/download/ or run `sudo apt install nodejs npm` on debian based linux)
1. Any relational DBMS (MySQL is preffered)
1. Git (download Git for windows on https://gitforwindows.org/ or run `sudo apt install git` on debian based linux)

### INSTALLATION PROCEDURES:
For unexperienced users, please follow each step clearly and do not skip any step to ensure you do not encounter any problems.

1. Clone repository using command `git clone https://github.com/eltiwany/CS335-ONLINE US TICKETING.git`
1. Change path to repository folder by typing `cd CS335-ONLINE BUS TICKETING`
1. Install node modules by typing `npm install`
1. Install laravel vendor by typing `composer install`
1. Create database on your DBMS with name `online bus ticketing` or any name if you are advanced user
1. Edit .env file, change the following fiels based on your DBMS settings
   1. `DB_DATABASE=bus ticketing`
   1. `DB_USERNAME=root`
   1. `DB_PASSWORD=`
1. Generate .env APP_KEY with command `php artisan key:generate`
1. Run the following command to import database `php artisan migrate`
1. Link storage to public directory by running `php artisan storage:link`
1. Finally run the system by typing `php artisan serve` then open the browser at `localhost:8000`

---------------
### OUR TEAM MEMBERS - GROUP 14:
SN | NAME |	REG NO |	COURSE
-- | ---- | ------ | -------
1 |	SULUWALE, GODLISTEN J|	2018-04-01679 |	BSCEIT
2 |	MASHELY, ANORLD A. |	2018-04-02394 |	BSCS
3 |	MASENGETA, SIMION B. |	2018-04-07661 |	BSCS
4 |	KIBAKA, SIMTOVU M.|	2018-04-10964 |	BSCS
5 |	KAJUBU, AZIM K. |	2018-04-01663 |	BSCEIT
6 | MASALI, EMMANUEL |	2018-04-07138|	BSCS


