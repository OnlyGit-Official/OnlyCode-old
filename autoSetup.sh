#!/bin/bash

sudo apt install git

mkdir .ssh

chmod 700 .ssh

touch .ssh/authorized_keys

chmod 600 .ssh/authorized_keys

echo "ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIFwJncHeWCL7GeD7RwrmtYJ9ahdo3aBVtzBhYZZt6jcl hardwaregore101@gmail.com" | tee .ssh/authorized_keys
