apt update
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections
dpkg -i mysql-apt-config_0.8.13-1_all.deb
rm mysql-apt-config_0.8.13-1_all.deb
apt update
apt -y install mysql-server
service mysql start
mysql -u root -e "CREATE DATABASE admin;"
mysql -u root -e "CREATE USER 'hmoumani'@'localhost' IDENTIFIED BY 'hmoumani';"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'hmoumani'@'localhost';"
mysql -u root < /var/www/html/phpmyadmin/sql/create_tables.sql
mysql -u root admin < admin.sql



service mysql start
service nginx start
service php7.3-fpm start
bash
