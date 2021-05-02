# Sonar Platform Test

This repo is a test requirement.

## Stacks

- **[Laravel](https://laravel.com/)**
- **[Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/)**
- **[SortableJS](https://sortablejs.github.io/Sortable/)**
- **[MySQL](https://www.mysql.com/)**
- **[Docker](https://www.docker.com/)**

## How to run

Please follow these instruction:
1. Clone this repo to your local working directory.
2. (optional) Install laravel sail or you can just using docker.
3. run `cp .env.example .env`, then fill up your environment file, for example:
    ```
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:HLeMyYI7TSiv0Z5p9yLgD6Em/LuYYiupuGHnilD+GSI=
    APP_DEBUG=true
    APP_URL=http://sonarplatform-test.test
    APP_PORT=8088
    
    LOG_CHANNEL=stack
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=sonarplatform_test
    DB_USERNAME=sail
    DB_PASSWORD=password

    FORWARD_DB_PORT=4306

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=memcached

    REDIS_HOST=redis
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=mailhog
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

    SCOUT_DRIVER=meilisearch
    MEILISEARCH_HOST=http://meilisearch:7700

    AUTH_USER="Sonar Admin"
    AUTH_EMAIL=sonaradmin@sonar.id
    AUTH_PASS=sonarplatform123
    ```

4. run `./vendor/bin/sail up -d`
5. run `./vendor/bin/sail artisan migrate`
6. run `./vendor/bin/sail artisan db:seed DemoSeeder`
7. run `npm run dev`
8. Open `http://localhost:<port>`


## License

[MIT license](https://opensource.org/licenses/MIT).
