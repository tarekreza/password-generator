# Password Generator
A password generator that generates a random password based on user-specified criteria. The user can choose to include uppercase letters, lowercase letters, numbers, and/or special characters in the password.
## Requirements
- PHP 8.0 or above
- Composer
## Installation
- Clone the repository: `git clone https://github.com/tarekreza/password-generator.git`
- Change into the project directory: `cd password-generator`
- Install the dependencies: `composer install`
- Set up the environment variables: `cp .env.example .env`
- Change default credentials in the .env file
- Generate an application key: `php artisan key:generate`
- Run the server: `php artisan serve`
## Usage
- Choose the criteria for the password: uppercase letters, lowercase letters, numbers, and/or special characters.
- Specify the length of the password.
- Click the "Generate Password" button to generate a random password.
- The generated password will be displayed on the page.

## Contributing
If you'd like to contribute to the project, feel free to submit a pull request.