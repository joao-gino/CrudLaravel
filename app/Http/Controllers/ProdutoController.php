<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function inserir_produto(){


    }

    public function buscar_produto(){

        $produtos = \DB::table('produtos')->get();

        return $produtos;

    }

    public function excluir_produto(Request $req){

        \DB::table('produtos')->where('id', $req->id)->delete();

        return 'Produto excluído com sucesso!';
    }
}
