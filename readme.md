# PHP Helpers

This package contains some useful functions and dependencies which can help you to work with some data more simple

## Installation

You have to run following command to add a dependency to your project

```bash
composer require manchenkov/php-helpers
```

or you can add this line to `require` section of `composer.json`

```
"manchenkov/php-helpers": "*"
```

## Extensions

- **Carbon**: A simple PHP API extension for DateTime // [Github](https://github.com/briannesbitt/Carbon) 
- **Stringy**: A PHP OOP string manipulation library // [Github](https://github.com/danielstjules/Stringy) 
- **Arrayzy**: The wrapper for all PHP built-in array functions and easy, object-oriented array manipulation library // [Github](https://github.com/bocharsky-bw/Arrayzy) 

## Usage


| Function      | Description |
| ------------- | ----------- |
| `alert()`     | simple `echo` with **PHP_EOL** in the end |
| `dd()`        | dump variable and die |
| `env()`       | get or set new environment variable (getenv, putenv used), also type casting usage (bool, string, numbers) |
| `is_json()`   | helper for checking is a string in JSON format |
| `arrayzy()`   | create a new Arrayzy instance from **array | object | string | json** (type checking) |
| `stringy()`   | create a new Stringy instance from string (can be empty) |
| `now()`       | create a new Carbon instance from now |

See [src/helpers.php](https://github.com/manchenkoff/php-helpers/blob/master/src/helpers.php) or each extension docs for more details
