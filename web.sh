#!/usr/bin/env bash

case $1 in
    down) docker-compose down;;
    local) docker-compose up -d;;
    server) docker-compose up -d mongo;;
    *) echo "Invalid command: $0 [down|local|server]"; exit 1;;
esac
