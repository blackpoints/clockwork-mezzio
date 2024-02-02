# [Clockwork](https://underground.works/clockwork/) integration for [Mezzio](https://docs.mezzio.dev/) application

## Installation

```
composer require blackpoints/clockwork-mezzio
```

## Setup

Just pipe the middleware ` Blackpoints\Clockwork\Mezzio\ClockworkMiddleware` early in your pipeline:

```php
 $app->pipe(ClockworkMiddleware::class);
```

## Web 
The clockwork WEB UI is enabled by default and is accessible to http://yourapp/clockwork