<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h2>Very basic CRUD aplication made for <a href="http://bit.lt"> BIT.LT </a> PHP Laravel course sprint 5 task.</h2>

To install:
<li>get AMPPS</li>
<li>install composer package manager <a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a></li>
<li>navigate to your WWW directory and clone repository: <pre>git clone https://github.com/valdasguzys/car_service.git</pre>


<li>in repository folder initialise (considering composer it's installed localy in www folder) <pre>php ../composer.phar install</pre></li>
<li>create database called car_service</li>
<li>rename <b>.env.example</b> to <b>.env</b>
<li>run <pre>php artisan key:generate</pre>
 
<li>edit .env file following lines to:
<pre>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=car_service
    DB_USERNAME=root
    DB_PASSWORD=mysql
</pre> 
<li>this will generate database structure and add some dummy data. run:<pre>php artisan migrate:refresh --seed</pre> </li>
<li> to be abble to open project with http://127.0.0.1:8000 in your browser run: <pre>php artisan serve</pre>
<li>register with any username and passw</li>
<li>don't judge :)