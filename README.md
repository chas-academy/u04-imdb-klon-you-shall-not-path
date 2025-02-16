# IMDb Clone

This project is an IMDb-inspired web application built with Laravel and MariaDB. The application allows users to browse and review movies, create watchlists, and manage content through an admin panel. The project follows an agile workflow and is responsive.

# Features
- Laravel
- MariaDB
- Sanctum
- Blade
- Docker
- Tailwind

## Public Users
Browse and view movie details
Watch trailers and read reviews

## Registered Users
Create their own movie reviews
Create and manage personal watchlists

## Administrators
Approve or remove inappropriate reviews
Add new Admin
Perform CRUD operations on movies and users

**Getting Started**
- Prerequisites
- Make sure you have the following installed:
- PHP
- Composer
- Laravel
- MariaDB
- Node.js & npm
- Git
- Tailwind Css

**Installation**
Clone the repository:
git clone: https://github.com/chas-academy/u04-imdb-klon-you-shall-not-path.git
cd u04-imdb-klon-you-shall-not-path

**Install dependencies:**
- composer install
- npm install & npm run build
- npm run dev

Copy the environment file and set up the database:
cp .env.example .env
php artisan key:generate

Update .env with your database credentials.

Run migrations and seed the database:
php artisan migrate --seed

Start the development server:
Docker compose up

## Documentation

[Documentation](https://docs.google.com/document/d/1Qg42IW79C_6eY-DWCDwOeKSLo62S3tApt_0o01oB02w/edit?tab=t.0)

**OBS**
Sence thier is a slight issue with the db-seeders regarding images, to ensure that the images are displayed for movies and actors, do the following:

Download each png file that are listed down below:

1. [Actor.png](storage\app\public\uploads\Actor.png)

2. [Movie.png](storage\app\public\uploads\Movie.png)

When the application is up and running, go to "/images", in the url. 
Upload said images with thier respective names "Actor" & "Movie".

Deployment
To deploy the application, follow standard Laravel deployment practices, including setting up a production database, configuring environment variables, and using a web server like Apache.



## Things that could have been done better

There are a few issues that arises during the projects process, one main thing was that the group struggled with CRUD functions regarding this project.
That led to scrummaster having too wear more than one hat, and focus on almost every crud function just to have a functional project.
Sence the workload got alot bigger it lead to a few features that were not either correctly implemented, or was not implemented at all.

One ex. of a feature that wasnt implemented because of time restraints, was vote_avr and vote_count regarding movies. Currently all the vote_avr will display 0/10,
there is logic so the function can be implementen futhur along, if we had the time.

One feature that wasnt implemented correctly was the image viewing, we planned on using local files, instead of an url of another website. We chose this approach beacuse if 
you use another image hostings url and they update thier website, your application than break.
We managed to constructed an image encoder and decoder to reduce file-size so that the 100MB limit regarding github-repo wouldn't be an issue, we managed to reduce the size of images to around 300kb instead of >1MB, The problem was including the local files into a db-seeder to than automaticlly upload every image thru render.com and aiven.io

This was not solved correctly.