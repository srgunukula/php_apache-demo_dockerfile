apt update
apt upgrade
apt install apache2
apt clean -r apt autoclean
service apache2 start


apt install php libapache2-mod-php
apt install php-cli
apt install php-cgi

service apache2 restart
service apache2 status 	# to check apache is running

php --version 		# to check php version
apache2 --version 	# to check apache version

First program:
create a file with belo content and save it as phpinfo.php under apache root folder /var/www/html
<?php
  phpinfo();
?>

open localhost:8080/phpinfo.php in a browser and you will the php code executed and shows all system info.


Second program:
create a file with a name helloworld.php and have below content copy to /var/www/html folder ( which is Apache root)

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
 
open localhost:8080/helloworld.php in a browser and you will the php code executed and shows all system info.
