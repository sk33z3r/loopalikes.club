#!/usr/bin/env bash

s=$1
e=$2

while [ $s -lt $e ]; do
    echo "Resizing #$s..."
    find $s/vars -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
    ((s++))
done
