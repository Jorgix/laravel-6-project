<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $produtos = ['Produto 01','Produto 02', 'Produto 03', ];
        return $produtos;
    }

    public function show($id){
        return "O ID do produto é: {$id}";
    }

    public function create(){
        return "Criar um novo produto";
    }

    public function editar($id){
        return "Form que vai editar o produto: {$id}";
    }
}
