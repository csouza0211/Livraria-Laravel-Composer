<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = [
            [
                'nome' => 'Deserto dos Tartaros',
                'preco' => 30.50,
                'imagem' => 'Images/rounded.jpg'
            ],
            [
                'nome' => 'Admiravel Mundo Novo',
                'preco' => 45.50,
                'imagem' => 'Images/rounded.jpg'
            ],
            [
                'nome' => 'Lugar Nenhum',
                'preco' => 30.00,
                'imagem' => 'Images/rounded.jpg'
            ]
        ];
        return view('home')->with('produtos', $produtos);
    }
}
