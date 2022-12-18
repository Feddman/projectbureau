# laravel-nl
Easy to install Dutch language to be used with [Laravel localization](https://laravel.com/docs/5.7/localization).  
This language pack contains the most frequently used translations for your Laravel application. 

## Installation
### Install script
An install script can be used for your convenience. Run the following command in the root project folder of your Laravel application.  
```
curl -s https://raw.githubusercontent.com/musa11971/laravel-nl/master/install.sh | bash
```
### Manually
If you prefer to not use the install script, you can install the language manually. 
1. [Download](https://github.com/musa11971/laravel-nl/archive/master.zip) or clone the contents of this repository.
2. Move the contents to `(your-laravel-app)/resources/lang/nl` (create the folders if they aren't present).
3. *(optional)* For cleanliness sake you may delete any files that don't have the `.php` extension.

## Usage
Set the locale of your Laravel application to "nl". This option can be found in the `config/app.php` configuration file.
```php
'locale' => 'nl',
```
Your application will now use the Dutch language. If you need to change the locale dynamically, please read up on the [Laravel localization](https://laravel.com/docs/5.7/localization) documentation.

## Credits
- [Musa Semou](https://github.com/musa11971)
- [caouecs/Laravel-lang](https://github.com/caouecs/Laravel-lang)
