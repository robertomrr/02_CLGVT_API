<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExempleController extends Controller
{
    /**
     * Link of exemple
     * https://laravel.com/docs/10.x/collections#introduction
     */
    // A classe Illuminate\Support\Collection fornece um wrapper conveniente para trabalhar com matrizes de dados. 
    // Por exemplo, verifique o código a seguir. 
    // Usaremos o helper collect para criar uma nova instância de coleção a partir do array, 
    // executar a função strtoupper em cada elemento e, em seguida, remover todos os elementos vazios.
    // Como se pode ver, a classe Collection permite encadear seus métodos para realizar mapeamento fluente e redução do array subjacente. 
    // Em geral, as coleções são imutáveis, o que significa que cada método Collection retorna uma instância Collection inteiramente nova.

    public function CollectionEx_01(){

        $collection = collect(['taylor', 'abigail', null])->map(function (?string $name) {
            return strtoupper($name);
        })->reject(function (string $name) {
            return empty($name);
        });
        
        return $collection;
    }
}
