# Events API #

This repo creates a JSONAPI interface for the Milken Events MSSQL database. It must be run from a container that has access to the database or a development DB can be loaded into the MSSQL instance in the docker-compose file.

1. copy .env to .env.local
2. edit .env to include the correct Database URL
3. ```composer update && composer install```
4. ```docker-compose -f docker-compose-production.yml up -d```