<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class CadastrarController extends Controller
{
    public function salvar(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|min:3|max:50',
            'autor' => 'required|string|min:3|max:50',
            'ano_publicacao' => 'required|integer|min:1900|max:' . date('Y'),
            'genero' => 'required|string|min:3|max:30',
            'preco' => 'required|numeric|min:0|max:999999.99',
            'disponivel' => 'required|boolean',
        ], [
            'titulo.required' => 'O campo título deve ser preenchido',
            'titulo.string' => 'O campo título deve ser uma string',
            'titulo.min' => 'O campo título deve ter no mínimo 3 caracteres',
            'titulo.max' => 'O campo título deve ter no máximo 50 caracteres',

            'autor.required' => 'O campo autor deve ser preenchido',
            'autor.string' => 'O campo autor deve ser uma string',
            'autor.min' => 'O campo autor deve ter no mínimo 3 caracteres',
            'autor.max' => 'O campo autor deve ter no máximo 50 caracteres',

            'ano_publicacao.required' => 'O campo ano de publicação deve ser preenchido',
            'ano_publicacao.integer' => 'O campo ano de publicação deve ser um número inteiro',
            'ano_publicacao.min' => 'O campo ano de publicação deve ser no mínimo 1900',
            'ano_publicacao.max' => 'O campo ano de publicação não pode ser maior que o ano atual',

            'genero.required' => 'O campo gênero deve ser preenchido',
            'genero.string' => 'O campo gênero deve ser uma string',
            'genero.min' => 'O campo gênero deve ter no mínimo 3 caracteres',
            'genero.max' => 'O campo gênero deve ter no máximo 30 caracteres',

            'preco.required' => 'O campo preço deve ser preenchido',
            'preco.numeric' => 'O campo preço deve ser um número',
            'preco.min' => 'O campo preço deve ser no mínimo 0',
            'preco.max' => 'O campo preço deve ser no máximo 999999.99',

            'disponivel.required' => 'O campo disponível deve ser preenchido',
            'disponivel.boolean' => 'O campo disponível deve ser verdadeiro ou falso',
        ]);
        $livro = new Livro();
        $livro ->fill($request->all());
        $livro ->save();

        //dd($request->all());
        return view('cadastrosalvo');
    }
}