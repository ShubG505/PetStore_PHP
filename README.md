Pet Store
==========

**How to use**

* System Requirement: Apache2, PHP (7.1.x or higher), MySQL (5.x or higher), composer
* unzip code and copy extracted data to you www/htdocs folder of apache
* create an empty database named `petstore` or something else of your choice
* update `app/database.php` file with your database details
* run `composer update` from your root directory 
* Setup of Virtual Host (Mandatory)
    * For OSX, Linux
        * from you terminal `sudo vim /etc/hosts`
    * For Windows
        *  right-click Notepad and select Run as administrator. From Notepad, open the following file `C:\Windows\System32\Drivers\etc\hosts`
    * add a new line the end of it `127.0.0.1       loc.petstore.com`
    * now edit your apache2.conf or httpd.conf or  httpd-vhosts.conf and add in last of it
        
    ```
        <VirtualHost *:80>
            DocumentRoot /full/path/of/your/petstore/
            ServerName loc.petstore.com
            ErrorLog logs/loc.petstore.com-error_log
            CustomLog logs/loc.petstore.com-access_log common
        </VirtualHost>
    ```

* now hit the url in browser http://loc.petstore.com/
* you can see Pet Store. :-)
