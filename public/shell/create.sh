#!/bin/bash

mkdir -p /git/$1
git init --bare /git/$1

chown -R git:git /git/*

cd ../view/show

git clone ssh://git@localhost:/git/$1
