#!/bin/bash

cd ./show/$1

commit=$(git log -n 1 master | grep commit) > /dev/null

committrim=$(echo $commit | sed s/"commit "//) > /dev/null

git rev-parse --short $committrim 

commit2=$(git log -n 1 main | grep commit) > /dev/null

committrim2=$(echo $commit2 | sed s/"commit "//) > /dev/null

git rev-parse --short $committrim2
