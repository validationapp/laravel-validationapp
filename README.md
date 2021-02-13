## A Laravel wrapper for the Validation.app SDK

### Installation

```sh
composer require validationapp/laravel-validationapp
```

### Configuration

1. Get your team API key from https://validation.app/
2. Set it in your `.env` file as `VALIDATIONAPP_KEY`
3. Add the configuration to the list of services in your `config/services.php` file:
    ```php
    'validationapp' => [
        'key' => env('VALIDATIONAPP_KEY'),
    ],
    ```
