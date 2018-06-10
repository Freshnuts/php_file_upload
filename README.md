# php_file_upload
Simpe PHP file upload form

Settings<br>
========<br>
Kali Linux <br>

1. Start & Configure Apache.

php5<br>
/etc/php5/apache2/php.ini
/etc/php5/cli/php.ini

file_uploads = On

php7<br>
/etc/php/7.0/apache2/php.ini
/etc/php/7.0/cli/php.ini

file_uploads = On

/etc/init.d/apache2 restart<br>   

2. Permissions/Ownership<br>

Place file ownership in appropriate groups.<br>
Set file permissions.<br>
Set permissions to upload folder for 'www-data' group.<br>
(Debian/ubuntu has group "www-data" for apache NOT "apache".)<br>
<br>
chgrp www-data upload.php && chgrp www-data form.html<br>
chmod 755 upload.php && chmod 755 form.html
chmod 766 /var/www/html/uploads<br>
<br>


