#!/usr/bin/env bash

s=$1
e=$2

range() {
    if [ -z $e ]; then
        echo "Missing ending ID"
        exit 1
    fi
    while [ $s -lt $e ]; do
        echo "Resizing #$s..."
        find $s/vars -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
        ((s++))
    done
}

list() {
    for l in $(cat .id_list); do
        find $l/vars -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
    done
}

case $s in
    list) list;;
    *) range;;
esac
