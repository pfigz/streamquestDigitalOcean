# StreamQuest!
> An API powered search engine for movies and t.v. shows.
> Check it out [_here_](https://thestream.quest). 

## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Setup](#setup)
* [Usage](#usage)
* [Project Status](#project-status)
* [Room for Improvement](#room-for-improvement)
* [Acknowledgements](#acknowledgements)
* [Contact](#contact)
* [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)


## General Information
- This is a full stack app to help you plan your next binge.
- This project aims to be a one-stop search for your streaming needs.

## Technologies Used
- Laravel 
- Vue.js
- Tailwind CSS 

## Features
- Register a username
- Search for movies or t.v. shows
- Discover where a selected title is streaming (U.S. only)


## Setup
This project requires composer and npm to be installed on your machine. It also requires a MYSQL database. After cloning the repo, run `composter install` to install project dependencies. Then run `npm install` and `npm run dev`. Copy the .env.example file and rename .env. Update the database credentials to match your MYSQL instance. Run `php artisan migrate` to populate the database, and then `php artisan serve` to have a local instance running on your machine.   


## Usage
After setup, you can serve the project locally or through your favorite deployment pipeline. This project is currently running on a Digital Ocean droplet. Tips on how to setup a droplet for a Laravel deployment can be found in this Medium [_article_](https://blog.devgenius.io/quick-way-to-deploy-a-laravel-app-to-digitalocean-d212f088bcc5) by Dino Cajic.

## Project Status
Project is: _in progress_


## Room for Improvement
Room for improvement:
- Tighten up responsive styling
- Add graphics and/or logos
- Use a modal to display title selection

To do:
- Setup automatic guest login for friendlier UX 
- Create favorites for registered users
- Setup links to streaming services
- Setup dashboard for registered users



## Acknowledgements
- API provided by: [Watchmode API](https://api.watchmode.com/).



## Contact
Created by [@fig_dev](https://pfigdev.xyz/) pfigdev@gmail.com
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
