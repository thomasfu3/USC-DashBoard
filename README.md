USC-DashBoard
=============

dashboard for usc project

apache VirtualHost

<VirtualHost *:80>
     ServerName usc-admin.dev
     DocumentRoot /path/USC-DashBoard/code/public
     SetEnv APPLICATION_ENV "development"
     <Directory /path/USC-DashBoard/code/public>
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
    ErrorLog "/var/log/apache2/usc-admin-error_log"
    CustomLog "/var/log/apache2/usc-admin-access_log" common
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^.*$ /index.php
 </VirtualHost>
 
Add the following line to your ‘/etc/hosts‘
127.0.0.1  usc-admin.dev