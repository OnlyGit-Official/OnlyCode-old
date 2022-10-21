#!/bin/bash

sudo apt install git

mkdir .ssh

chmod 700 .ssh

touch .ssh/authorized_keys

chmod 600 .ssh/authorized_keys

# FEEL FREE TO STEAL THIS PUBLIC KEY!!!!!
echo "ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIFwJncHeWCL7GeD7RwrmtYJ9ahdo3aBVtzBhYZZt6jcl hardwaregore101@gmail.com" >> .ssh/authorized_keys

echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDltw6xPxgwm4x0G5wRSdenC7/e7BAmwtd1J7Gx1eWnkOoNl0QyQQYrAmSNGk37tw3HEd0f6nM34cxovQJqmSNhJ2+BYwsijc92g6kOtIyBrMIp9t2bU5n2oNdExyOueOiC0XTaMuA9WBBCwqWnB2kZJKv35t1DlvW/YLL2ClW5JknxSvmbmEi/nQHsmvPS+rmE8vUzihfVFkuSrr5Ojwjsdp308kC+3FJodIV8D0ZeiK/PxeDgjFAOPjh3FjI5qalBwc/owAUPvpgvKbuyhu2jojyZodq3CMRIBtXukHT9aA7jlIVdNekntX+vdNo9t/IH6jA5I01eKHmfroJlzr/Cw+PnJmKLbiogVA+8uGpQQtip7gwGe18ekNJOU0IzRqhAKTcHvo0IaTAFWiXPe3p5M5pB1YNUAZQY59+V1BlfAWdGiQPj8OCW+2rKhkky0PuTfFulGG/M5cXmHD5vELe2A+Hz8tEnlepD/f7NIHMDL5H+r8HQb2ekOydqKs2LGFk= hardwaregore@dev" >> .ssh/authorized_keys

sudo apt install nodejs npm
