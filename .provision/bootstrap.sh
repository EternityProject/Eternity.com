#!/usr/bin/env bash
#nginx

# set up nginx server
sudo cp /var/www/.provision/nginx/nginx.conf /etc/nginx/conf/conf.d/eternity.conf
sudo service nginx reload

# setting up mysql
sudo mysql -uroot -proot < /var/www/.provision/database.sql

#setting up composer
cd
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo chmod +x composer.phar
sudo mv composer.phar /usr/bin/composer