# Symfony API Boilerplate

Boilerplate setup to run a Symfony API application. 

## Getting Started

### Prerequisites 

- [Docker](https://www.docker.com/get-started/)
- [Symfony CLI](https://symfony.com/doc/current/setup/symfony_cli.html)

### Running locally

Install composer packages

```bash
composer install
```

Run via docker compose

```bash
docker compose up
```

## Development

Code quality

```bash
vendor/bin/rector process --dry-run
vendor/bin/php-cs-fixer fix --dry-run
vendor/bin/phpstan analyse
```

Testing

```bash
bin/phpunit
bin/phpunit --filter MainController
```

## Licence

MIT License

## Credits

https://github.com/dunglas/symfony-docker?tab=readme-ov-file



## TODO

Why no Mercure