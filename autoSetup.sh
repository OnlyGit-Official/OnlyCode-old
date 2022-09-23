#!/bin/bash

sudo apt install git

mkdir .ssh

chmod 700 .ssh

touch .ssh/authorized_keys

chmod 600 .ssh/authorized_keys

echo "" | tee .ssh/authorized_keys
