# A3_Mobile-World-Station
A website for everything mobile phones

### Built for assignment 2 and 3, nothing more or less

This website is a basic styled website built for assignment 3 in digital technolegy

## Viewing the website
Use any apache server in order to serve the files and create a root file named `.htaccess` this is used for the routing component,

In this file, paste the following 
```
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php [NC,L,QSA]
```

alternatativly you can use the vs code `PHP Server` extention, found here <a href='https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver'>Php Server</a>
 

## View my buisness and work profile
For advanced projects, please visit <a href='https://github.com/JD544'>JD522</a>
