<p align="center">
    <h1 align="center">Sistema de Gestão de Convites</h1>
    <br>
</p>

<p align="center">
  <a href="#tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#INSTALAÇÃO">Instalação</a>&nbsp;&nbsp;&nbsp;
</p>

## Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net/)
- [Yii Framework](https://www.yiiframework.com/)
- [MySQL](https://www.mysql.com/)

## 💻 Projeto

O SGC é um sistema para gestão de convites


REQUIREMENTS
------------
O requisito mínimo para este modelo de projeto é que seu servidor Web suporte PHP >= 5.6.0.


INSTALAÇÃO
------------

### Instalação via Composer

Se você não tiver o [Composer](http://getcomposer.org/), você pode instalá-lo seguindo as instruções
em [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Você pode então instalar este projeto usando o seguinte comando:

~~~
composer install
~~~

Crie o banco de dados com o seguinte nome:

~~~
sgc
~~~

Na pasta do projeto execute os seguintes comandos para inicialização do banco de dados

~~~
php yii migrate --migrationPath=@yii/rbac/migrations

php yii migrate
~~~

### Executando o projeto

Em ambiente de desenvolvimento o projeto pode ser executado a partir do seguinte comando a partir da raiz do repositório. A partir disso o sistema poderá ser acessado no seguinte endereço `localhost:8080`

~~~
php yii serve
~~~


Em produção é necessário configurar o servidor apache

### Linux

Crie um arquivo smp.conf no seguinte caminho /etc/apache2/sites-avaliable/
~~~
sudo nano /etc/apache2/sites-avaliable/smp.conf
~~~

Insira a seguinte configuração no arquivo: 
~~~
# DocumentRoot  e Directory devem receber o caminho do projeto/web
DocumentRoot "/var/www/html/sgc/web" #padrão Ubuntu 16.4

<Directory "/var/www/html/sgc/web">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    
    # if $showScriptName is false in UrlManager, do not allow accessing URLs with script name
    RewriteRule ^index.php/ - [L,R=404]
    
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # ...other settings...
</Directory>
~~~

Reinicie o servidor Apache

~~~
service apache2 restart
~~~


### Windows + xampp

Insira a seguinte configuração no arquivo httpd.conf
~~~
<Directory "C:/xampp/htdocs/sgc/web">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    
    # if $showScriptName is false in UrlManager, do not allow accessing URLs with script name
    RewriteRule ^index.php/ - [L,R=404]
    
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # ...other settings...
</Directory>
~~~

Reinicie o servidor

Acesse o sistema pelo seguinte endereço 

~~~
localhost/smp
~~~
