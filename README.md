# lamp-stack
Create a multi container service using mysql, php and nginx



in php 
restart tag 
network tag



in nginx 
restart  unless-stopped
ports  
network


mysql
network



mysql 
set mysql_native_password for the user
and add lines in the container of mysql path /etc/my.cnf 
[mysqld]
default_authentication_plugin= mysql_native_password
user admin
pass academy!2345

root 
secret
