# Readme how to run app using docker

## Installation
make sure your machine have Docker and docker-compose

## Run BoxBilling
1. go to directory boxB/docker/php
2. build for image php using command :
```sh
docker build . -t boxbilling:1.4
```
3. back to directory boxB and run docker compose using command : 
```sh
docker-compose up -d
```
4. after container running well with status UP, restore the database boxbilling
```sh
47d4c9bcb8d5   nginx:alpine               "/docker-entrypoint.…"   36 hours ago   Up 30 minutes   0.0.0.0:8004->80/tcp               bb-nginx
2e744a140c39   boxbilling:1.4             "docker-php-entrypoi…"   36 hours ago   Up 30 minutes   9000/tcp                           bb-fpm
02f0bf26e8a9   mysql:5.7.22               "docker-entrypoint.s…"   36 hours ago   Up 30 minutes   0.0.0.0:3306->3306/tcp             bb-db
fd78e5a025e8   atmoz/sftp:latest          "/entrypoint userbox…"   36 hours ago   Up 30 minutes   0.0.0.0:2112->22/tcp               bb-ftp
```
5. create database name boxbilling from apps database management
6. go to directory boxB/docker/mysql, and run docker compose using command : 
```sh
docker-compose up
```
7. if this proccess failed, use other step restore database using sh file. go to directory boxB/docker/mysql/init/ and run command : 
```sh
. docker-mysql.sh
```
8. to access boxbilling, go to url : 
```sh
http://localhost:8004
```
9. to login, go to url : 
```sh
http://localhost:8004/index.php?_url=/bb-admin/staff/login
```
```sh
'access staff login / admin'

email : azzamazizi09@gmail.com
password : S3mangat
```


## Run Frontend Test
1. go to directory boxB/docker/php
2. build image for niagahoster frontend test using command : 
```sh
docker build -t niagahoster/frontend:1.1 . -f Dockerfile_7.3-fpm
```
3. now go to directory boxB/niagahoster and run docker compose using command : 
```sh
docker-compose up -d
```
4. after container running well with status UP, restore database niagahoster frontend test
```sh
eb9d16b77393   nginx:alpine               "/docker-entrypoint.…"   36 hours ago   Up 38 minutes   0.0.0.0:80->80/tcp                 nginx_frontend
273613cd26be   niagahoster/frontend:1.1   "docker-php-entrypoi…"   36 hours ago   Up 39 minutes   9000/tcp                           app_frontend
6d10fbcbd1ce   mysql:5.7.22               "docker-entrypoint.s…"   36 hours ago   Up 39 minutes   0.0.0.0:3307->3306/tcp             db_frontend
```
5. create database name niagahoster from apps database management
6. go to directory boxB/niagahoster/docker/mysql, and run command :
```sh
. docker-mysql.sh
```
7. go to page frontend test in url :
```sh
http://localhost
```