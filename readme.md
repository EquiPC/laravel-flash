# Easy Flash Messages for Your Laravel App

This package offers a flash messaging setup for your Laravel applications.

## Installation

```
composer require equipc/flash
```

## Usage

### Using the Laravel Facade

* `Flash->message(‘Message’, ‘info);`
* `Flash->info(‘Message’);`

### Using the Helper

* `flash(‘Message’);`
* `flash(‘Message’, ‘error’);`

### Display the message

This package doesn’t provide any way to display the flash message. It only provides helpers to store the message to the session.

To retrieve the message and the level, simply use the laravel session helper: 
```
// Message
session(‘flash.message’); 

// Level
session(‘flash.level’);
```