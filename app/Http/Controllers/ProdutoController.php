<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function inserir_produto(){


    }

    public function buscar_produto(Request $req){

        $produtos = \DB::table('produtos')->where('id', $req->id)->get();

        return $produtos;
    }

    public function excluir_produto(Request $req){

        \DB::table('produtos')->where('id', $req->id)->delete();

        return 'Produto excluído com sucesso!';
    }
}
