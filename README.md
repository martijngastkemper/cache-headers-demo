# Cache headers demo

PHP server

```shell
php -S localhost:8080 -t .
```

Apache server

```shell
docker run -dit --name cache-headers-demo -p 8081:80 -v "$PWD":/usr/local/apache2/htdocs/ -v "$PWD/my-httpd.conf":/usr/local/apache2/conf/httpd.conf httpd:2.4
```
