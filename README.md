# Job Search

>[!CAUTION]
>Please read all the points of the README in order to make good use of the project. Thank you. 

Job_Search is a web application developed in Laravel 11 that allows you to manage job offers and their related follow-ups. It uses MVC and Faker pattern to generate test data. The system allows users to view, create, update and delete job offers through an intuitive web interface and a fully functional REST API. Each job posting can be linked to one or more tracking records, which provide related updates or news.

## Guide

In this quick guide you will learn about the main functionalities of  project "Job_Search":

1. On the main page you have information about the list of job offers that we will apply and that we will be able to follow up on.
   
![Website](https://github.com/user-attachments/assets/7e8b0f62-91c4-4c57-bdb7-c3f1fbdd9261)

- In each row there is a “Show” button that when clicked we will see the job offer with the related table of the news of the offer that we applied.
  
![Show](https://github.com/user-attachments/assets/87b8ecd4-8c8e-4fd5-af12-83594f79cbe4)

- In the show view we also have a "back" button to return to the main page

2. If you want to add offer news, edit or delete, you can do it from postman.


## Installation Requirements

In order to run this project locally, you need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. A modern web browser

3. VSC Terminal

4. Composer

5. Node.js (install npm)

6. xdebug (for tests coverage)

7. Postman (or any other platform to use for API)

## Installation

1. Install project with git clone

```bash
  git clone https://github.com/mrene42/Job-Search.git
```

2. Install composer:

```
composer install
``` 

3. Install NPM:

```
npm install
``` 

4. Create an .env by taking the example .env.example file and modify:

- DB_CONNECTION=mysql
- DB_DATABASE=job_search

5. Create a database in MySQL
-  In the database manager “phpMyAdmin” of MySQL create only the database without tables.
- Generate the tables and the data fakers with migrate.

6. Migrate the tables:

```
php artisan migrate:fresh --seed
```

7. Install dependencies:

-   Run NPM in one terminal:
```
npm run dev
```
-   Run Laravel in another terminal:
```
php artisan serve
```
    
##  Diagrams made (BBDD)
We have our database called "job search" from which we add two tables that are related: "jobs" are the job offers and "follows" are the follow-ups of each job offer.

![Tables](https://github.com/user-attachments/assets/fe222dd2-552b-4cf5-a5bc-8a711c423d59)

## EndPoints
We have two tables: jobs and follows you can create, edit, delete or read a job or follow from Postman.

### Jobs
GET    (read all jobs): 
```
http://127.0.0.1:8000/api/jobs
```
GET     (read one job): 
```
http://127.0.0.1:8000/api/jobs/{id}
```
POST    (create a new job offer): 
```
http://127.0.0.1:8000/api/jobs
```
PUT     (edit one job): 
```
http://127.0.0.1:8000/api/job/{id}
```
DELETE  (delete an job offer): 
```
http://127.0.0.1:8000/api/job/{id}
```
### Follow
GET (read all jobs):
```
http://127.0.0.1:8000/api/follows 
```
GET (read one follow):
```
http://127.0.0.1:8000/api/follows/{id}
```
POST (create a news follow):
```
http://127.0.0.1:8000/api/jobs/{id}/follows
```

PUT (edit one follow):
```
http://127.0.0.1:8000/api/follows{id}
```
DELETE (delete a follow):
```
http://127.0.0.1:8000/api/follow/{id}
```

##  Execution of the tests

This project has a **81,5%** of test coverage.
![Test](https://github.com/user-attachments/assets/436ddae5-9deb-4170-9436-2a2ac9bdfb59)

To run the project tests, use the following command:
```
    php artisan test --coverage
```
You can also see the coverage in a web browser using:
```
  php artisan test --coverage-html=coverage-report
```
![tests](https://github.com/user-attachments/assets/6b90896e-683a-40b3-96ac-96fb0a680067)

## Tech and tools

<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>
<a href='#FF2D20' target="_blank"><img alt='LARAVEL' src='https://img.shields.io/badge/LARAVEL-100000?style=for-the-badge&logo=LARAVEL&logoColor=white&labelColor=F05340&color=F05340'/></a>
<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub Pages' src='https://img.shields.io/badge/GitHub_Pages-100000?style=for-the-badge&logo=GitHub Pages&logoColor=white&labelColor=222222&color=222222'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=8f6447&color=8f6447'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='node.js' src='https://img.shields.io/badge/Node.js-100000?style=for-the-badge&logo=node.js&logoColor=white&labelColor=82cc27&color=82cc27'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>

## Autor

[@René](https://github.com/mrene42)

>[!NOTE]
>I'm learning.
