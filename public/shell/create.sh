#!/bin/bash

mkdir -p /git/$1
git init --bare /git/$1

chown -R git:git /git/*

cd ./show

git clone ssh://git@localhost:/git/$1

cd $1

echo '
# This README is tempory. The next time you open this project, it will dissapear.

## To add code to this project, simplly run these commands:

`git clone ssh://git@<server IP>:/git/'"$1"'`

`cd '"$1"'`

`touch README.md`

`git add .`

`git commit -am "Initial Commit"`


' > README.md
