# eVCourses-DeployLessons

## 1. Programas necessários na sua máquina local:

* Node.js [Acessar aqui](https://nodejs.org/en/download);
* Xampp [Baixar aqui](https://www.apachefriends.org/xampp-files/7.4.10/xampp-windows-x64-7.4.10-0-VC15-installer.exe);
* Composer [Baixar aqui](https://getcomposer.org/download/);
* Github desktop (para poder clonar esse repositório) [Baixar aqui](https://desktop.github.com/)

## 2. Instalação do projecto:

### Primeiro clonar este repositório

```
// Entrar no sua pasta dos projectos
Abrir a pasta no terminal

// Executar o comando a seguir:
$ git clone https://github.com/joseseie/eVCourses---Deploy-Lessons.git

// Ou pode clonar usando github desktop.

```

```
Composer install
npm install
```

### Base de dados

> Crie uma base dados no mysql, depois insira as credenciais de acesso no .env

```
php artisan migrate
```

### Geração de chave

```
php artisan key:generate
```


## 3. Para você testar localmente:

> Correr em terminais separados os dois comandos a seguir

```
php artisan serve
```

```
npm run watch
```

## 4. Para colocar esse projecto online:

> Siga os procedimentos dos videos do curso: https://video-platform.tk/courses/1 

