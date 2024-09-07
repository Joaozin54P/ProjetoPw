<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Desenho') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container-fluid">
                        <div class="containerr">
                            <div class="form-container">
                                <div class="imagem">
                                    <img src="{{ asset('storage/' . $desenho->imagem) }}" alt="Imagem do Desenho" width="100">
                                </div>
                                <div class="form">
                                    <div class="form-header">
                                        <h1>Editar Desenho</h1>
                                    </div>
                                    <form method="POST" action="{{ route('desenho.update', $desenho->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-4">
                                        <label for="nome_personagem" class="block text-gray-700">Nome do Personagem:</label>
                                        <input type="text" id="nome_personagem" name="nome_personagem" value="{{ $desenho->nome_personagem }}" required class="mt-1 block w-full border-gray-300 rounded-md">
                                    </div>
                                    <div class="mb-4">
                                        <label for="nome_desenho" class="block text-gray-700">Nome do Desenho:</label>
                                        <input type="text" id="nome_desenho" name="nome_desenho" value="{{ $desenho->nome_desenho }}" required class="mt-1 block w-full border-gray-300 rounded-md">
                                    </div>
                                    <div class="mb-4">
                                        <label for="imagem" class="block text-gray-700">Imagem:</label>
                                        <input type="file" id="imagem" name="imagem" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
                                    </div>
                                    <div>
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Salvar
                                        </button>
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
</x-app-layout>
