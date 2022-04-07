#1/usr/bin/env bash

i=$1

while [ $i -lt 2101 ]; do
    find $i/vars -type f -name "*.png" -exec convert "{}" -resize 250x250 "{}" \;
    $((i++))
done
