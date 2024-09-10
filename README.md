# Pokémon App
A web application built with Laravel that allows users to search and display information about different Pokémon using data from the PokeAPI. Favorites functionality also included.
## Images
### Main page (with favorites example)
![pokemon-1](https://github.com/user-attachments/assets/ab656dd5-9d5a-498a-b930-8b9168ecb647)
### Pagination
![pokemon-2](https://github.com/user-attachments/assets/b21990d7-3f56-47db-927d-ee4038eb484a)
### Search example
![pokemon-3](https://github.com/user-attachments/assets/41f13d77-fe09-4dbb-ad06-4e328f3378f8)


## Features
* Search Functionality: Search for Pokémon by name
* Pokémon Details: View stats, types, abilities, and images.
* Responsive Design: Optimized for both desktop and mobile devices.
* Scheduling: Schedules API calls weekly for better performance

### Responsive card design
![pokemon-4](https://github.com/user-attachments/assets/bed2ee12-cede-4233-b1be-f07a5c90906b)

## Prerequisites
* PHP = 8.x
* Composer
* PostgreSQL or another supported database
* Laravel Framework
(https://laravel.com/docs/11.x/installation)

### Pokemon Table in PgAdmin
[Laravel Installation Guide]![pokemon-5](https://github.com/user-attachments/assets/ccbb78c6-ee22-4dac-935e-209bf094cc21)

## Installation
Clone the repository:

### bash
```
git clone https://github.com/chatzakis/pokemon-app.git
```
Navigate into the project directory:
### bash
```
cd pokemon-app
```
Install PHP dependencies using Composer:
### bash
```
composer install
```
Install JavaScript dependencies using NPM:
### bash
```
npm install
```
Copy the example environment file and configure it:
### bash
```
cp .env.example .env
```

Open the .env file and update the following lines with your database credentials:
###dotenv
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
### Generate the application key:
bash
```
php artisan key:generate
```
### Run database migrations:
bash
```
php artisan migrate
```
### Compile frontend assets:
bash
```
npm run dev
```

### For production, compile assets with:
bash
```
npm run production
```
### Start the local development server:
bash
```
php artisan serve
```
### Access the application:
Open your web browser and navigate to [http://localhost:8000](http://localhost:8000).

## Usage
* Search Pokémon: Use the search bar to find Pokémon by name.
* Favorites: Press add to favorites button to add a Pokemons to your favorites

## Technologies Used
* Laravel: PHP web application framework.
* Blade Templates: For server-side rendering of views.
* PokeAPI: External API to fetch Pokémon data.
* PostgreSQL: Relational database management system.
* Bootstrap: For styling the application.

## Contributing
Contributions are welcome! Please follow these steps:

Fork the repository.

### Create a new branch:
bash
```
git checkout -b feature/your-feature-name
```
### Commit your changes:
bash
```
git commit -m 'Add some feature'
```
### Push to the branch:
bash
```
git push origin feature/your-feature-name
```
### Open a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Acknowledgements
Laravel Documentation: https://laravel.com/docs
PokeAPI: https://pokeapi.co/
Inspired by Pokémon franchise
