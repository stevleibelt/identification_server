# REST Identification Server

This project will provide a php based identification management with an rest api.

# Security Hints

Add following to lines after 'RewriteEngine On' in your 'public/.htaccess'.
This will redirect all http requests to https.

    RewriteCond   %{SERVER_PORT}  !^443$
    RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}

# Milestones

* 0.0.1 -   hello world with rest api
* 0.0.2 -   support dbms and file based database (simple, plain arrays)
* 0.1.0 -   simple validation if email address and password is valid
* 0.2.0 -   basic html form to insert/update/delete identities
* 0.3.0 -   support for application based identification validation (secured by token)
* 0.4.0 -   dynamically token updates with application
* 0.5.0 -   applications can have a "valid until" date
* 0.6.0 -   basic html administration backend
* 0.7.0 -   provide scripts to setup application
* 0.8.0 -   everything is shaped up in a restfull way
* 0.9.0 -   everything is up and working
* 1.0.0 -   first release, tests are running, documentation is available, api is stable

# Future Plans

* provide database switch scripts (from dbms to file and vice versa)
* manage multiple identities (prepared datasets that the identification server can deliver to allowed applications to speed up user account setup, like username, email-address, whatever you want to share)

# Todo

* read
    * https://github.com/peej/tonic
    * https://github.com/Respect/Rest
    * https://github.com/Luracast/Restler/blob/master/ANNOTATIONS.md
* return is json
* implement payload return
    * general payload return (also handling exceptions, or errors)
* only https allowed
* database
    * simple text file
    * sqllite
    * dbms
* secured by application key [valid until date]
    * http://restler3.luracast.com/examples/_005_protected_api/readme.html
    * http://restler3.luracast.com/examples/_010_access_control/readme.html
    * http://restler3.luracast.com/examples/_015_oauth2_server/readme.html
* secure against attacks
    * http://restler3.luracast.com/examples/_009_rate_limiting/readme.html
* implement client/server encryption (to prevent man in the middle attack), if needed (read about ssl attack vectors)
* implement setup script (create database and so one)

# Thanks

* [Mozilla Persona - de.wikipedia.org](http://de.wikipedia.org/wiki/Mozilla_Persona)
* [Mozilla Persona - github.com](https://github.com/mozilla/persona)
* [Mozilla Persona - mozilla.org](https://developer.mozilla.org/en-US/Persona?redirectlocale=en-US&redirectslug=Persona)
* [Mozilla Persona Cookbook - github.com](https://github.com/mozilla/browserid-cookbook/tree/master/php)
* [X.1252 - recommendation for identity management](http://www.itu.int/rec/T-REC-X/recommendation.asp?lang=en&parent=T-REC-X.1252)
* [Identification Management - de.wikipedia.org](http://de.wikipedia.org/wiki/Identit%C3%A4tsmanagement)
