# StreamQuest!
> An API powered search engine for movies and t.v. shows.
> Check it out [_here_](https://mymarketplace-app.herokuapp.com/). 

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
This project requires composer to be installed on your machine. After cloning the repo, run `composter install` to install project dependencies. The config.php file is setup for a Heroku deployment. Set your Heroku Config Vars to match the config.php file and deploy. Otherwise, update the config.php file with your own database and S3 bucket variables as necessary. Check /includes/init.php line 9 to ensure the correct config.php filepath is being used for your config variables.  


## Usage
After setup, you can serve the project locally or through your favorite deployment pipeline. The live version of this project is hosted via Heroku. Should you choose Heroku, you will need to use the ClearDB MYSQL addon or migrate your database to Postgres.  

## Project Status
Project is: _in progress_


## Room for Improvement
Room for improvement:
- Add pagination to view products page and comments on product page 
- Make short and long descriptions for products
- Add icons (stars) for product rating within comment
- Include product image in the product->update() function
- Continue to separate logic from view files / general project organization improvements
- Style/UI improvements, too many to list

To do:
- Incorporate Stripe API as checkout option 
- Add AWS S3 Bucket for product image uploads
- Update database to include created_at date for product sorting
- Update database to include created_at date for comment sorting
- Build Dockerfile 
- Build proper dev pipeline 
- Create separate admin and customer panels 


## Acknowledgements
- Much of the boilerplate for this project comes from: [this tutorial](https://www.udemy.com/course/php-for-beginners-/).



## Contact
Created by [@fig_dev](https://www.figgy.monster/) pfigdev@gmail.com
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
