#!/usr/bin/env bash

docker rm -f loopalikes.club
docker run -d --rm -p 8080:80 --name loopalikes.club -v "$PWD":/var/www/html:ro php:7.2-apache
