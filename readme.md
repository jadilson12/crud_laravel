# crud - laravel

Laravel 5.8
### Instalação direta
````
git clone https://github.com/jadilson12/crud_laravel
cd crud_laravel
composer install
touch database/crud.sqlite
cp .env.example .env  
php artisan migrate:refresh --seed
php artisan key:generate
php artisan serve


````

### Instalação pasa a passso 

1. Clone o repositório 
````
git clone https://github.com/jadilson12/crud_laravel ~/
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
Obs. Depois de copiar o .env acessa ele e adiciona o caminho completo do  sqlite para que funciona perfeitamente 
````
Exemplo para linux
DB_DATABASE=/home/nomeusuario/crud_laravel/database/crud.sqlite 
````

5. Criar as tabelas no banco

```
php artisan migrate
```
6. Inserir os dados no banco predefinido no seed

```
php artisan db:seed
```
7. Gerar a chave da aplicação:

````
php artisan key:generate
````

8. Iniciar a aplicação

````
php artisan serve
````
