# crud - laravel

Laravel 5.8

### Instalação

1. Clone o repositório 
````
git clone https://github.com/jadilson12/crud_laravel
cd crud_laravel
````  

2. Instalar as  dependências

````
composer install

````
3. Criar o banco de dados em sqlite

```
touch database/crud.sqlite
```

4. Copiar o arquivo  .env

```
cp .env.example .env
```

5. Criar as tabelas no banco e 

```
php artisan migrate

```
6. Inserir os dados da seed

```
php artisan seed

```
7. Gerar a chave da aplicação:

````
php artisan key:generate
````

8. Iniciar a aplicação

````
php artisan serve

````