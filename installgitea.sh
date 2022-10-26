apt update
apt install sqlite3 git

sudo adduser \
   --system \
   --shell /bin/bash \
   --gecos 'Git Version Control' \
   --group \
   --disabled-password \
   --home /home/git \
   git

VERSION=1.17.3
sudo wget -O /tmp/gitea https://dl.gitea.io/gitea/${VERSION}/gitea-${VERSION}-linux-amd64

sudo mv gitea /usr/local/bin
sudo chmod +x /usr/local/bin/gitea
sudo mkdir -p /var/lib/gitea/{custom,data,log}
sudo chown -R git:git /var/lib/gitea/
sudo chmod -R 750 /var/lib/gitea/
sudo mkdir /etc/gitea
sudo chown root:git /etc/gitea
sudo chmod 770 /etc/gitea

sudo wget https://raw.githubusercontent.com/go-gitea/gitea/main/contrib/systemd/gitea.service -P /etc/systemd/system/

sudo systemctl daemon-reload
sudo systemctl enable --now gitea

sudo systemctl status gitea

sudo ufw allow 3000/tcp
