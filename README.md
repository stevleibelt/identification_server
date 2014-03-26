REST Identification Server
==========================

php rest application server for idenfitication management

Security Hints
--------------

Add following to lines after 'RewriteEngine On' in your 'public/.htaccess'.
This will redirect all http requests to https.

    RewriteCond   %{SERVER_PORT}  !^443$
    RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}

