#Hotlinking can be easily disabled by editing your .htaccess file. Simply add the code below to your .htaccess file.
Also replace domianname.com with your domain name

RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?domainname.com [NC]
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]
RewriteRule \.(jpg|jpeg|png|gif)$ – [NC,F,L]
