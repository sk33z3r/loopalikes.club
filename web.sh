#!/usr/bin/env bash

case $1 in
    down) docker-compose down;;
    up) docker-compose up -d;;
    *) echo "Invalid command: $0 [up|down]"; exit 1;;
esac
