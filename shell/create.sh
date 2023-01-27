#!/bin/bash

mkdir -p git/$1
git init --bare git/$1
cd git/$1
touch README.md
echo "
# This is a bare repo. Please clone this repo on your dev env to make changes.
" >> README.md
git add .
git config --global user.name "SelfHostedGIT"
git config --global user.email "Self@hosted.git"
git commit -am "Initial Commit"
