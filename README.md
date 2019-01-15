# laradock
For studying Laravel

## Environment
[ref]https://qiita.com/J_Shell/items/695a30fd38444d065ae5

## boot
docker-compose up -d nginx mysql redis beanstalkd

## halt
docker-compose stop

## For ssh
docker exec -it laradock_workspace_1 bash
cd /var/www/myapp

### create test file
php artisan make:test EmployeeTest --unit

### start testing
./phpunit

## check
docker-compose ps


