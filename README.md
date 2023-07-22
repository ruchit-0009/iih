## Setup Steps

```
composer install
```

Create .env file & set Database details
```
cp .env.example .env
```

Generate Application Key
```
php artisan key:generate
```

Create Required Tables
```
php artisan migrate
```

Add Required Data in Table
```
php artisan db:seed
```

Storage Link
```
php artisan storage:link
```




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
