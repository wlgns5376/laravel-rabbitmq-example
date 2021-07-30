# Microservice - Product

## 설치

```sh
php -r "file_exists('.env') || copy('.env.example', '.env');"

composer install
```

## 실행
```sh
docker-compose up
```

### shell 접속
```sh
docker exec -it product-service_product.test_1 /bin/sh
```

### migration
```sh
php artisan migrate --seed
```

### Run server
```sh
php artisan serve --host=0.0.0.0 --port=80
```


