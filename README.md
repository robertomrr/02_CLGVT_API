## Esta aplicação foi criada para servir de base para novas aplicações api utilizando os mesmos recursos:
- **[Composer version 2.5.7 2023-05-24 15:00:39](https://getcomposer.org//)**
- **[Laravel 10](https://laravel.com//)**
- **[git version 2.45.1.windows.1](https://github.com//)**
- **[Swagger](https://app.swaggerhub.com/)**

## Criar aplicação 
    > composer create-project --prefer-dist laravel/laravel:^10.* 02_CLGVT_API
    > cd 02_CLGVT_API
    > git init
    > git add .
    > git commit -m "First commit" 
    > npm install
    > git add .
    > git commit -m "npm install" 

## Instalar do Breeze (blade)
        Laravel Breeze é uma implementação mínima e simples de todos os recursos de autenticação do Laravel , incluindo login, registro, redefinição de senha, verificação de e-mail e confirmação de senha.
        Além disso, o Breeze inclui uma página simples de “perfil” onde o usuário pode atualizar seu nome, endereço de e-mail e senha.
        > composer require laravel/breeze --dev
        > git add .
        > git commit -m "composer require laravel/breeze --dev"
        > php artisan breeze:install
        Which Breeze stack would you like to install?
        Blade with Alpine ........................................................................................................ blade
        Livewire (Volt Class API) with Alpine ................................................................................. livewire
        Livewire (Volt Functional API) with Alpine ................................................................. livewire-functional
        React with Inertia ....................................................................................................... react
        Vue with Inertia ........................................................................................................... vue
        API only ................................................................................................................... api
        > api
        Would you like dark mode support? (yes/no) [no]
        > yes
        Which testing framework do you prefer? [PHPUnit]
        PHPUnit ...................................................................................................................... 0
        Pest ......................................................................................................................... 1
        > 0
        > git add .
        > git commit -m "php artisan breeze:install"

## Instaler Tailwind <<-- Não se aplica a uma api -->>

## > code .
        Configurar Idioma/Timezone
                link
                        https://github.com/lucascudo/laravel-pt-BR-localization
                > php artisan lang:publish
                        > git add .
                        > git commit -m "php artisan lang:publish" 
                > composer require lucascudo/laravel-pt-br-localization --dev
                        > git add .
                        > git commit -m "composer require lucascudo/laravel-pt-br-localization --dev" 
                > php artisan vendor:publish --tag=laravel-pt-br-localization
                        > git add .
                        > git commit -m "php artisan vendor:publish --tag=laravel-pt-br-localization" 
                Alterar \config\app.php para: (Linha 86 do arquivo )
                        De > 'locale' => 'en',
                        P/ > 'locale' => 'pt_BR'
                Alterar \config\app.php para: (Linha 73 do arquivo )
                        De 'timezone' => 'UTC',
                        P\ 'timezone' => 'America/Sao_Paulo',
                                > git add .
                                > git commit -m "Configurar Idioma/Timezone" 

        Apontar banco de dados no arquivo .env ( De laravel P/ db_name )
                .env
                        DB_CONNECTION=mysql
                        DB_HOST=127.0.0.1
                        DB_PORT=3306
                        DB_DATABASE=db_name
                        DB_USERNAME=root
                        DB_PASSWORD=

        Criar do banco de dados padrão ( users, ...)
                > php artisan migrate:fresh
        Descomentar database\seeders\DatabaseSeeder.php
                \App\Models\User::factory(10)->create();
        Popular tabela users
                > php artisan db:seed

## Publicar GitHub
        git remote add origin https://github.com/robertomrr/02_CLGVT_API.git
        git branch -M main
        git push -u origin main

## Ativação a aplicação Laravel
        > CMD 
            > npm run dev
            > php artisan serve
        > Browser
            > localhost:8000  

## _____________________________________________________________________________

## Criação do Controller
        > php artisan make:controller Api/v1/UserController --resource
        use App\Models\User;
        public function index()
            return User::all();

## Criação de Rotas
        routes/api.php
        Route::get(uri:'/users',action:[UserController::class,'index']);

## Retornar conteúdo padronizado utilizando Resources
        > php artisan make:resource v1/UserResource
        > git add .
        > git commit -m "php artisan make:resource v1/UserResource"

## _____________________________________________________________________________

## The Original README content
        <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

        <p align="center">
        <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
        <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
        <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
        <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
        </p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
