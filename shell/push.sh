#!/bin/bash

cd ../webUI/git/$1
git push -u https://$3@github.com/$2/$1
sleep 1