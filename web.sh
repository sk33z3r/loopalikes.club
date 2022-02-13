#!/usr/bin/env bash

name="loopalikes.club"

docker rm -f $name
docker run -d --rm -p 8080:80 --name $name -v "$PWD":/var/www/html:ro php:7.2-apache
