# Laraschool
[![CircleCI](https://circleci.com/bb/convergenceworks/ebmsp-processo-seletivo.svg?style=svg&circle-token=083a81cf7bb695d33b564e4858fdccec7a4b8183)](https://circleci.com/bb/convergenceworks/ebmsp-processo-seletivo)


## Server Requirements
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension

Directories within the ***storage*** and the ***bootstrap/cache*** directories should be writable by your web server.

Create your own ***.env*** file based in the ***.env.example*** (don't forget to set `APP_ENV` and `APP_DEBUG` to `production` and `false` respectively if required).

Create your own ***laradock/.env*** file based in the ***laradock/.env.example***.


## Creating Database
```sql
CREATE SCHEMA `DB_DATABASE` DEFAULT CHARACTER SET utf8mb4;
GRANT ALL ON DB_DATABASE.* TO DB_USERNAME@'%' IDENTIFIED BY 'DB_PASSWORD';
```


## Starting Containers
Run (if you haven't a local database, you can include "mysql" to the end of the line):
```sh
cd laradock && docker-compose up -d workspace nginx
```


## Installing
Run:
```sh
sh scripts/install.sh
```


## Testing
```sh
rm storage/testing.sqlite -f
touch storage/testing.sqlite
docker exec -t ebmspps_workspace_1 composer test
```


## Backing up
```sh
docker exec -t ebmspps_workspace_1 php artisan backup:run
```


## Default Routes
/log-viewer
/decompose
