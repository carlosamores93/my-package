# Example package for Laravel project

## This package has a command than write in log laravel

For add this package in your laravel project:
 1. Add in your composer.json:
 
 ```sh
    "require": {
        "carlos/my-package": "dev-master"
    }

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/carlosamores93/my-package"
        }
    ] 
 ```

 2. Update composer

 ```sh
 composer update
 ```

 3. Move to project

 ```sh
 cd home/path_project
 ```

 4. Check this command-> carlos:writelog

 ```sh
 php artisan
 ```