#!/bin/bash

if [ $4 -eq "1" ]; then
    cd /git/$1
    git push -u https://$2:$3@github.com/$2/$1 --force
    sleep 1
else
    cd /git/$1
    git push -u https://$2:$3@github.com/$2/$1 
    sleep 1
fi