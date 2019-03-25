PHP Command-Line Tool Example
=============================

A simple example of a custom command-line tool built in PHP.  
The application can be run in project form or build a stand-alone PHAR file.

The application requirements specify only three basic geometric functions:
 - Confirm a specific point is contained within a circle
 - Detect if two line segments intersect
 - Detect if two circles intersect

Requires PHP 7.1+ and [Composer](https://getcomposer.org/).
Built with [Laravel Zero](https://laravel-zero.com/).

Supports 
[PSR-1](https://www.php-fig.org/psr/psr-1/), 
[PSR-2](https://www.php-fig.org/psr/psr-2/), 
[PSR-4](https://www.php-fig.org/psr/psr-4/), and 
[PSR-12](https://github.com/php-fig/fig-standards/blob/master/proposed/extended-coding-style-guide.md).


Setup/Usage
-----------

#### Installation
```
composer install
```

#### Usage
```
php-cli-example <command> [options] [arguments]
```
Running the tool without a command will print the commands list.  
Use `help <command>` to see more details about a command.

#### Testing
```
vendor/bin/phpunit
```

#### PHAR Build
```
composer build
```
Runs `app:build`, which generates a stand-alone PHAR executable of the app.
The PHAR can be run in place of the main root executable.

#### Examples

Check if a point @ `[3,3]` is within a circle centered at `[0,0]` w/ a radius of `8`:
```
php php-cli-example circle:contains [[0,0],8] [3,3]
```

Check if 5-radius circle centered at `[0,0]` intersects with one centered at `[2,2]`:
```
php php-cli-example circle:intersects [[0,0],5] [[2,2],5]
```

Check if a line from `[0,0]` to `[5,5]` intersects with a line from `[0,5]` to `[5,0]`:
```
php php-cli-example line:intersects [[0,0],[5,5]] [[0,5],[5,0]]
```

Note that spaces can be used but the arguments must be quoted properly:
```
php php-cli-example line:intersects "[[0, 0], [5, 5]]" "[[0, 5], [5, 0]]"
```


TODOs / Areas of Improvement
----------------------------

 - Additional command tests, and bad input tests
 - Unit tests for the math functions/algorithms
 - Commit to some strict typing (requires some AbstractCommand cleanup)
 - More flexible geometric functions
    - e.g. allow intersects() to take any Geometry object
 - Further improve help and error documentation
    - Possibly even consider a refactor of how geo data is passed in
    - Add interactive menus for better UX
