<?php

namespace App\Http\Controllers;

use App\Models\Desenho;
use Illuminate\Http\Request;

class DesenhoController extends Controller
{
    // Exibir a lista de desenhos
    public function index(Request $req)
    {
        $desenhos = Desenho::all();
        return view('dashboard')->with('desenhos', $desenhos);
    }

    // Armazenar um novo desenho
public function armazenar(Request $req)
{
    $req->validate([
        'nome_personagem' => 'required|string|max:255',
        'nome_desenho' => 'required|string|max:255',
        'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Armazena a imagem no diretório de imagens
    $imagemPath = $req->file('imagem')->store('imagens', 'public');

    $desenho = new Desenho;
    $desenho->nome_personagem = $req->nome_personagem;
    $desenho->nome_desenho = $req->nome_desenho;
    $desenho->imagem = $imagemPath; // Armazena o caminho da imagem
    $desenho->save();

    return redirect()->route('dashboard')->with('success', 'Desenho adicionado com sucesso!');
}


    // Mostrar o formulário para editar um desenho
    public function editar($id)
    {
        $desenho = Desenho::findOrFail($id);
        return view('edit')->with('desenho', $desenho);
    }

    // Atualizar um desenho existente
    // Atualizar um desenho existente
public function atualizar(Request $req, $id)
{
    // Encontrar o desenho pelo ID
    $desenho = Desenho::findOrFail($id);
    
    // Atualiza os dados do desenho
    $desenho->nome_personagem = $req->nome_personagem;
    $desenho->nome_desenho = $req->nome_desenho;

    // Verifica se uma nova imagem foi enviada
    if ($req->hasFile('imagem')) {
        // Armazena a nova imagem e atualiza o caminho no objeto $desenho
        $imagePath = $req->file('imagem')->store('imagens', 'public');
        $desenho->imagem = $imagePath;
    }

    // Salva as alterações no banco de dados
    $desenho->save();
    
    // Redireciona para a lista de desenhos com uma mensagem de sucesso
    return redirect()->route('dashboard')->with('success', 'Desenho atualizado com sucesso!');
}


    // Excluir um desenho
    public function excluir($id)
    {
        $desenho = Desenho::findOrFail($id);
        $desenho->delete();

        return redirect()->route('dashboard')->with('success', 'Desenho excluído com sucesso!');
    }
}
