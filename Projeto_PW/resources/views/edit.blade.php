<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Desenho') }}
        </h2>
    </x-slot>

    <style>
    /* Fonte Fredoka One */
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

    body {
    background: linear-gradient(to bottom, #0a1f44, #002b7f); 
    font-family: 'Roboto', sans-serif;
    overflow: hidden;
    }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container-fluid">
                        <div class="containerr">
                            <div class="form-container">
                                <div class="form">
                                        <form method="POST" action="{{ route('desenho.update', $desenho->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            
                                            <div class="imagem">
                                                @if($desenho->imagem)
                                                    <img src="{{ asset('storage/' . $desenho->imagem) }}" alt="Imagem do Desenho" class="w-20 h-auto mx-auto">
                                                @else
                                                    <p>Nenhuma imagem disponível.</p>
                                                @endif
                                            </div>
                                                <div class="mb-4">
                                                    <label for="nome_personagem" class="block text-black">Nome do Personagem:</label>
                                                    <input type="text" id="nome_personagem" name="nome_personagem" value="{{ $desenho->nome_personagem }}" required class="mt-1 block w-full border-black-900 rounded-md text-black">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="nome_desenho" class="block text-black">Nome do Desenho:</label>
                                                    <input type="text" id="nome_desenho" name="nome_desenho" value="{{ $desenho->nome_desenho }}" required class="mt-1 block w-full border-black-900 rounded-md text-black">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="imagem" class="block text-black">Imagem:</label>
                                                    <input type="file" id="imagem" name="imagem" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
                                                </div>
                                            <div class="continue-button">
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
