<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function inserir_produto(Request $req){

        if(empty($req->id))
        {
            \DB::table('produtos')->insert([
                'nome' => $req->nome,
                'quantidade' => $req->quantidade
            ]);

            return 'Produto cadastrado com sucesso!';
        }
        else
        {
            \DB::table('produtos')->where('id', $req->id)->update([
                'nome' => $req->nome,
                'quantidade' => $req->quantidade
            ]);

            return 'Produto atualizado com sucesso!';
        }

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
