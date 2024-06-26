<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class XmlController extends Controller
{
    // pegar todos os dados e gerar um xml a partir deles
    public function gerarXml()
    {
        // buscar registros no banco de dados
        $dados = Livro::all(); // SELECT * FROM tabela
        print_r($dados);
        
        // Gerar a resposta XML
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
