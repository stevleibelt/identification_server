# REST Identification Server

php rest application server for idenfitication management

# Security Hints

Add following to lines after 'RewriteEngine On' in your 'public/.htaccess'.
This will redirect all http requests to https.

    RewriteCond   %{SERVER_PORT}  !^443$
    RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}

# Thanks

* [Mozilla Persona - de.wikipedia.org](http://de.wikipedia.org/wiki/Mozilla_Persona)
* [Mozilla Persona - github.com](https://github.com/mozilla/persona)
* [Mozilla Persona - mozilla.org](https://developer.mozilla.org/en-US/Persona?redirectlocale=en-US&redirectslug=Persona)
* [Mozilla Persona Cookbook - github.com](https://github.com/mozilla/browserid-cookbook/tree/master/php)
* [X.1252 - recommendation for identity management](http://www.itu.int/rec/T-REC-X/recommendation.asp?lang=en&parent=T-REC-X.1252)
* [Identification Management - de.wikipedia.org](http://de.wikipedia.org/wiki/Identit%C3%A4tsmanagement)
