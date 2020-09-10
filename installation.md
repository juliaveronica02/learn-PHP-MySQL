* sudo apt-get update.
* goto xampp installer and downloads for apache friends on website.
* choose linux.
* cd Downloads.
* sudo chmod 755 xampp-linux-x64-7.3.0-0-installer.run.
* sudo ./xampp-linux-x64-7.3.0-0-installer.run.
* fix problem on xampp:
  - apache server is not running: open terminal - cd /opt/lamp - sudo ./manager-linux-x64.run - go to manager servers - click on apache web server and click start - still not working - terminal - sudo apachectl stop - done.
  - mysql database is not running: terminal - sudo service mysql stop - click start on xampp - finish.

## Run XAMPP.
* cd /opt/lampp.
* sudo ./manager-linux-x64.run.
* if mysql not run: see on fix problem solutions.

## Create folder on /opt/lampp/htdocs.
* open terminal - /opt/lampp/htdocs - mkdir learn-php - permission denied.
* write: sudo chmod -R 777 /opt/lampp/htdocs.
* ls -ld /opt/lampp/htdocs: drwxrwxrwx 5 root root 4096 Sep 10 12:01 /opt/lampp/htdocs.
* mkdir /opt/lampp/htdocs/learn-php.
* ls: learn-php.
* cd learn-php.
* done.

## Push to github.
* git init.
* git commit -m "done".
* git remote add origin https://github.com/juliaveronica02/learn-PHP-MySQL.git.
* git push -u origin master.