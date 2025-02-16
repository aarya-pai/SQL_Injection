# SQL Injection Project

## Overview

This repository contains a project focused on demonstrating and preventing SQL Injection attacks. SQL Injection is a code injection technique that exploits vulnerabilities in an application's software by manipulating SQL queries. This project aims to educate developers on how to identify, exploit, and fix SQL Injection vulnerabilities in PHP applications.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup](#setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- Demonstrates common SQL Injection attack vectors
- Provides examples of vulnerable PHP code
- Includes secure coding practices to prevent SQL Injection
- Detailed documentation and comments for educational purposes

## Technologies Used

- **PHP**: The primary language used for the backend logic (96.7% of the codebase)
- **CSS**: Used for basic styling of the web interface (3.3% of the codebase)

## Setup

To set up this project locally, follow these steps:

1. **Clone the repository**:
    ```sh
    git clone https://github.com/aarya-pai/SQL_Injection.git
    ```

2. **Navigate to the project directory**:
    ```sh
    cd SQL_Injection
    ```

3. **Set up a local web server** (e.g., using XAMPP, MAMP, or a similar tool):
    - Place the project files in the web server's root directory.
    - Start the web server and ensure PHP is configured correctly.

4. **Configure the database**:
    - Create a new MySQL database for the project.
    - Import the provided SQL file (`database.sql`) to set up the necessary tables.
    - Update the database connection settings in the `config.php` file.

## Usage

Once the setup is complete, you can access the project through your web browser. The project includes several pages demonstrating SQL Injection vulnerabilities and ways to prevent them.

- **Vulnerable Pages**: Contains examples of PHP code with SQL Injection vulnerabilities.
- **Secure Pages**: Provides secure versions of the vulnerable code with explanations on how to fix the issues.

## Contributing

Contributions are welcome! If you have any suggestions, bug reports, or improvements, please open an issue or submit a pull request. Follow the contributing guidelines to ensure a smooth collaboration process.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
