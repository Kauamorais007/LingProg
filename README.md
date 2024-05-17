# LingProg# LP
    #Instalação Laravel
docker context use default
curl -s "https://laravel.build/example-app?with=mysql,redis" | bash
   
    #iniciando
    cd {pasta}
 
     ./vendor/bin/sail up    - iniciar o container
     ./vendor/bin/sail artisan migrate  -iniciar o BD

    
     instalar o plugin Docker

     instalar o pacote breeze
     
     composer require laravel/breeze --dev
     php artisan breeze:install
 
        php artisan migrate

Configurar Vendor para rota localhost
vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php

   protected $proxies='*';


    #Views (layouts de páginas)
       nome.blade.php

    #Routes - rotas - fluxos da aplicação
     com/sem parâmetros ( enviar/ receber dados )


    #Migrations - Banco de dados
    cria e gerencia o banco de dados da aplicação


php artisan make:model -mrc produto


Este comando criará três arquivos para você:

app/Models/produto.php- O modelo Eloquente.
database/migrations/<timestamp>_create_produto_table.php- A migração do banco de dados que criará sua tabela de banco de dados.
app/Http/Controller/ProdutoController.php- O controlador HTTP que receberá solicitações recebidas e retornará respostas.

Migrations


Criar



php artisan make:migration create_users_table

php artisan make:migration create_users_table --create=users

executar

php artisan migrate

Ver o status

php artisan migrate:status



Reverter
php artisan migrate:rollback
php artisan migrate:rollback --step=5 reverterá as últimas cinco migrações
php artisan migrate:rollback --batch=3 everterá todas as migrações do lote três
php artisan migrate:reset   reverterá todas as migrações do seu aplicativo


Reverter e migrar em um único comando
php artisan migrate:refresh
php artisan migrate:refresh --seed

php artisan migrate:fresh
php artisan migrate:fresh --seed


Criando Tabelas
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});

Criando Colunas
Schema::table('users', function (Blueprint $table) {
    $table->string('email');
});


Atualizando Tabelas
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
Schema::table('users', function (Blueprint $table) {
    $table->integer('votes');
});

Renomeando tabelas
Schema::rename($from, $to);
