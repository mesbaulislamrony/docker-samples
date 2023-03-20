# Docker Samples

## apache with php 

Project structure:
```
.
├── docker-compose.yml
├── Dockerfile
├── src
    └── index.php
├── .gitignore

```

## Deploy with docker compose

```
docker compose up -d
```

Run you application, navigate to in your web browser:
```
http://localhost:80
```

Stop and remove the containers
```
$ docker compose down
```