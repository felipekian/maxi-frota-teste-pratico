# Maxi Frotas teste prático

## Ferramentas a serem baixar e instaladas

- Baixar o servidor XAMPP [https://www.apachefriends.org/xampp-files/8.1.5/xampp-windows-x64-8.1.5-0-VS16-installer.exe]
- Baixar o composer [https://getcomposer.org/Composer-Setup.exe]
- Baixar o NodeJS [https://nodejs.org/dist/v16.15.0/node-v16.15.0-x64.msi]
- Baixar o GIT [https://git-scm.com/download/win]

## Baixar o projeto no repositório GIT e instalar dependências
```
git clone git@github.com:felipekian/maxi-frota-teste-pratico.git myApp
```

```
cd myApp
```

```
composer install
```

```
npm install
```

```
npm run prod
```

## Criar banco de dados no PhpMyAdmin

- abra o navegador e cole o link abaixo

```
http://localhost/phpmyadmin/index.php
```

- clique em novo ao lado esquedo

- crie um banco de dados com o seguinte nome

```
myApp
```

## Agora vamos configurar o projeto em Laravel 9

- acesse a pasta do projeto
- copie e cole o arquivo *.env.exemplo* e a cópia deixe como:

```
.env
```

- Agora coloque seu endereço de email do Gmail nos seguintes campos do arquivo .env:

```
MAIL_USERNAME=SEU_EMAIL
MAIL_PASSWORD=SUA_SENHA
```

## Agora vamos para as configurações do Laravel

- Gerar a chave de segurança da aplicação

```
php artisan key:generate
```

- Criar as tabelas no banco de dados

```
php artisan migrate
```

- Rodar o servidor WEB para acessar a aplicação:

```
php artisan serve
```

## Agora vamos acessar o sistema prático myApp

- Abra seu navegador e cole o seguinte link

```
http://127.0.0.1:8000
```

- pronto agora é só acessar!

---

# Espero que tenha gostado! 
