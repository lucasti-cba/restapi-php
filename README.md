# restapi-php
Criando uma uma Api Rest com php symphony

Criando Esqueleto Esqueleto

composer create-project symfony/skeleton RestApi-PHP

<--Saida Inicio-->

 symfony/framework-bundle  instructions:

  * Run your application:
    1. Go to the project directory
    2. Create your code repository with the git init command
    3. Download the Symfony CLI at https://symfony.com/download to install a development web server

  * Read the documentation at https://symfony.com/doc
  
  <--Saida Fim-->

1. Criado classe Caixa

1. Metodos Getter's and Setter's.
1. Atributo  $name em Caixa
1. Criado Factory para Caixa.
1. composer require symfony/orm-pack
1. composer require --dev symfony/maker-bundle
1. Criado Controller Classe Caixa.
1. Criado Método asArray em Caixa.
1. Extenção de CaixaController para AbstractController
1. composer require symfony/orm-pack
1. Parametrização do .env informações de conexão ao banco
1. add em .env DATABASE_URL="postgresql://"$USER_DB_NAME":"$PASSWORD_DB"@"$HOST_DB":"$PORT_DB"/"$DB_NAME"?serverVersion="$VERSION_DB"&charset="$CHARSET_DB"
1. php bin/console make:docker:database
