# Web_Programciligi_2Donem_1Sinav

This repository contains a simple web application for managing books using PHP and MySQL. It includes SQL scripts, PHP files for database connection, adding new records, displaying records, updating records, and deleting records.

## Features

- **Database Management**: Manage book data with ease.
- **Add Records**: Easily add new books to the database.
- **Display Records**: View all books in a structured format.
- **Update Records**: Modify existing book details.
- **Delete Records**: Remove unwanted records from the database.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/Web_Programciligi_2Donem_1Sinav.git
   ```

2. Import the SQL file into your MySQL database:
   ```sql
   mysql -u root -p dersdb < 127_0_0_1.sql
   ```

3. Configure the `baglanti.php` file with your database credentials.

## Usage

- **Adding a Book**: Navigate to `index.php` and use the form to add new books.
- **Viewing Books**: The main page (`index.php`) will display all books in a table.
- **Updating a Book**: Click on the "Update" button next to the book you want to modify, then submit the changes.
- **Deleting a Book**: Click on the "Delete" button next to the book you want to remove.

## Tech Stack

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.