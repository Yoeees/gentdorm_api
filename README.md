
# Gents Dormitory API

This is a REST API built with Laravel to manage data for the Gents Dormitory system. The API allows for creating, reading, updating, and deleting dormitory-related records.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Environment Configuration](#environment-configuration)
- [Database Setup](#database-setup)
- [Running the Server](#running-the-server)
- [Testing the API](#testing-the-api)
- [Additional Commands](#additional-commands)
- [License](#license)

## Prerequisites

Make sure you have the following installed:
- **PHP** >= 8.0
- **Composer** (dependency management)
- **PostgreSQL** or your preferred database

## Installation

1. **Clone the Repository**

   Clone this repository to your local machine:
   ```bash
   git clone https://github.com/Yoeees/gentdorm_api.git
   cd gentdorm_api
   ```

2. **Install Dependencies**

   Use Composer to install all necessary dependencies:
   ```bash
   composer install
   ```

## Environment Configuration

1. **Set Up Environment Variables**

   Copy the example environment file and set up your environment configuration:
   ```bash
   cp .env.example .env
   ```

2. **Configure Database Settings**

   Open the `.env` file in a text editor and configure your database settings as follows:

   ```plaintext
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=gents_api
   DB_USERNAME=postgres
   DB_PASSWORD=wences
   ```

3. **Generate the Application Key**

   Laravel requires an application key for encryption. Generate one by running:
   ```bash
   php artisan key:generate
   ```

## Database Setup

1. **Create the Database**

   - Open your PostgreSQL database client and create a new database called `gents_api`.
   
2. **Run Migrations**

   Run Laravel migrations to create the necessary tables:
   ```bash
   php artisan migrate
   ```

## Running the Server

Start the Laravel development server:
```bash
php artisan serve
```

By default, the API will be accessible at `http://127.0.0.1:8000`.

## Testing the API

You can test the API using tools like [Postman](https://www.postman.com/) or [curl](https://curl.se/).

### Example Request

#### Get All Dormitory Records
- **Endpoint**: `GET /api/boarders`
- **Description**: Fetches all boarders from the dormitory database.

#### Create a New boarder
- **Endpoint**: `POST /api/records`
- **Description**: Adds a new boarders.
- **Body**:
  ```json
  {
    "name": "John Doe",
    other details
  }
  ```

For a full list of endpoints, refer to the documentation provided in your code or generate API docs using tools like [Swagger](https://swagger.io/) or [Postman API documentation](https://learning.postman.com/docs/publishing-your-api/documenting-your-api/).

## Additional Commands

- **Run Migrations**: `php artisan migrate`
- **Rollback Migrations**: `php artisan migrate:rollback`
- **Run Seeder** (if applicable): `php artisan db:seed`
- **Clear Cache**: `php artisan cache:clear`
- **Serve Application**: `php artisan serve`

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
