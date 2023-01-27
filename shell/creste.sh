#!/bin/bash

mkdir -p git/$1
git init git/$1
cd git/$1
touch README.md
git add .
git config --global user.name "SelfHostedGIT"
git config --global user.email "Self@hosted.git"
git commit -am "Initial Commit"
