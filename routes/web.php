<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Cliente;
use App\Models\Endereco;

Route::get('/clientes', function () {
    $clientes = cliente::all();
    foreach ($clientes as $c) {
        echo "<p>ID: " . $c->id . "</p>";
        echo "<p>Nome: " . $c->nome . "</p>";
        echo "<p>Telefone: " . $c->telefone . "</p>";
        //$e = Endereco::where('cliente_id', $c->id)->first();
        echo "<p>Rua: " . $c->endereco->rua . "</p>";
        echo "<p>Número: " . $c->endereco->numero . "</p>";
        echo "<p>Bairro: " . $c->endereco->bairro . "</p>";
        echo "<p>CIDADE: " . $c->endereco->cidade . "</p>";
        echo "<p>UF: " . $c->endereco->uf . "</p>";
        echo "<p>CEP: " . $c->endereco->cep . "</p>";
        echo "<hr>";
        echo "<hr>";

    }
});

Route::get('/enderecos', function () {
    $ends = Endereco::all();
    foreach ($ends as $e) {
        echo "<p>ID do cliente: " . $e->cliente_id . "</p>";
        echo "<p>Rua: " . $e->rua . "</p>";
        echo "<p>Número: " . $e->numero . "</p>";
        echo "<p>Bairro: " . $e->bairro . "</p>";
        echo "<p>CIDADE: " . $e->cidade . "</p>";
        echo "<p>UF: " . $e->uf . "</p>";
        echo "<p>CEP: " . $e->cep . "</p>";
        echo "<hr>";

    }
});
