# Docker Samples

## apache with php and redis

Project structure:
```
.
├── docker-compose.yml
├── Dockerfile
├── src
    └── index.php
    └── send.php
    └── receive.php
├── .gitignore
├── php.ini

```

## Deploy with docker compose

```
docker compose up -d
```

Run you application, navigate to in your web browser:
```
http://localhost:8000
```

Stop and remove the containers
```
$ docker compose down
```