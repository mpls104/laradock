# laradock
For studying Laravel
DDDの練習用

## Environment
[ref]https://qiita.com/J_Shell/items/695a30fd38444d065ae5

## boot
docker-compose up -d nginx mysql redis beanstalkd workspace

## halt
docker-compose stop

## For ssh
docker exec -it laradock_workspace_1 bash
cd /var/www/myapp

## initial setting
cp .env.example .env
php artisan key:generate
composer update

### create test file
php artisan make:test EmployeeTest --unit

### start testing
./phpunit

## check
docker-compose ps


