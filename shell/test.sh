#!/bin/bash

cd ../webUI/git/test-repo

touch $1 

git add .

git config --global user.name "Hardwaregore"
git config --global user.email "hardwaregore101@gmail.com"

git commit -m "$2"

echo "done."