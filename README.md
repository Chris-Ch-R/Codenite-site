# Todolist API

## First clone

```bash
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install
cp .env.example .env
```

## [Sail](https://laravel.com/docs/9.x/sail)

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

### Execute Composer Command

```bash
sail composer require <package>
```

### Execute Artisan Command

```bash
sail artisan
sail artisan key:generate
sail artisan migrate
```

### Executing Node / NPM Commands

```bash
sail node --version
sail npm run prod
```

## Docker

```bash
sail up -d
sail down
```

## Default Ports

| Service     | Port  |
|-------------|-------|
| MySQL       | 3306  |
| Redis       | 6379  |
| Meilisearch | 7700  |
| MailHog     | 8025  |
| MongoDB     | 27017 |
