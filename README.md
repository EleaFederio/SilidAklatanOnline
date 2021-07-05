
<p align="center"><img src="public/logo/SilidAklatan.svg" width="400"></p>

## About this Project

A simple laravel base library management  system that is intended to help librarian in:

- Managing Books.
- Managing Students/User of the Library.
- Generating Data such as (Book Records, Student Records, Student Log).
- API Integration.
    * registration
    * sign-in
    * borrowing book
    * etc...

## Requirements
- Composer
- Laravel 8
- PHP 8
- enable your gd extension in your php.ini file

## How to Install
* Clone this repo by running this commands 
    *   git clone https://github.com/EleaFederio/SilidAklatanOnline.git
    *   composer install
    *   copy .env.example .env (then configure your database)
    *   php artisan key:generate
    *   php artisan db:seed
    *   php artisan serve

## API Support
* User
    * login (post) => "api/login"
    * register (post) => "api/register"
    * session check (get) => "api/student"
* Books
    * show books (get) => "api/books"
    * search book (post) => "api/books/search"
    * borrow book (post) => "api/book/borrow"
    * users borrowed books (post) => "api/books/borrowed"

##### This Projects is not yet done, 

## License

[MIT license](https://opensource.org/licenses/MIT).
