#!/bin/bash

cd /git/
git clone --bare $1

chown -R git:git /git/*

cd /com.docker.devenvironments.code/public/show

git clone ssh://git@localhost:/git/$2
