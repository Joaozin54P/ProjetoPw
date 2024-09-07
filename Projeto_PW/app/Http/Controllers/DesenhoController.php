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
    public function atualizar(Request $req, $id)
    {
        $req->validate([
            'nome_personagem' => 'required|string|max:255',
            'nome_desenho' => 'required|string|max:255',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $desenho = Desenho::findOrFail($id);

        if ($req->hasFile('imagem')) {
            // Lê o conteúdo da nova imagem e armazena como binário
            $imagem = file_get_contents($req->file('imagem')->getRealPath());
            $desenho->imagem = $imagem;
        }

        $desenho->nome_personagem = $req->nome_personagem;
        $desenho->nome_desenho = $req->nome_desenho;
        $desenho->save();

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
