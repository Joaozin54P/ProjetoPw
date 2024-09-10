<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crud - Divertidamente') }}
        </h2>
    </x-slot>

<style>
    body {
    background: linear-gradient(to bottom, #0a1f44, #002b7f); 
    font-family: 'Roboto', sans-serif;
    overflow: hidden;
}


</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
            </div>

            <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center mb-4 px-4">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                        {{ __('Gerenciar Desenhos') }}
                    </h3>

                    <a href="#" id="openModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                        {{ __('Adicionar Novo Desenho') }}
                    </a>
                </div>

                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <table class="w-full mt-4">
                                    <thead>
                                        <tr class="border-b border-gray-300 text-center">
                                            <th>
                                                <span style="color: #00BFFF;">I</span>
                                                <span style="color: #00FF7F;">m</span>
                                                <span style="color: #FFD700;">a</span>
                                                <span style="color: #FF8C00;">g</span>
                                                <span style="color: #FF4500;">e</span>
                                                <span style="color: #FF1493;">m</span>
                                            </th>
                                            <th>
                                                <span style="color: #3eaaa4;">N</span>
                                                <span style="color: #32CD32;">o</span>
                                                <span style="color: #FFA500;">m</span>
                                                <span style="color: #800080;">e</span>
                                                <span style="color: #008000; margin-right: 5px;"></span>
                                                <span style="color: #FF1493;">d</span>
                                                <span style="color: #FF0000;">o</span>
                                                <span style="color: #008000; margin-right: 5px;"></span>

                                                <span style="color: #00BFFF;">P</span>
                                                <span style="color: #FFD700;">e</span>
                                                <span style="color: #FFA500;">r</span>
                                                <span style="color: #FF8C00;">s</span>
                                                <span style="color: #008000;">o</span>
                                                <span style="color: #800080;">n</span>
                                                <span style="color: #FF1493;">a</span>
                                                <span style="color: #FF0000;">g</span>
                                                <span style="color: #FF8C00;">e</span>
                                                <span style="color: #708090;">m</span>
                                            </th>

                                            <th>
                                                <span style="color: #00BFFF;">N</span>
                                                <span style="color: #FFD700;">o</span>
                                                <span style="color: #FFA500;">m</span>
                                                <span style="color: #FF8C00;">e</span>
                                                <span style="color: #008000; margin-right: 5px;"></span>
                                                <span style="color: #708090;">d</span>
                                                <span style="color: #00BFFF;">o</span>
                                                <span style="color: #008000; margin-right: 5px;"></span>

                                                <span style="color: #FFD700;">D</span>
                                                <span style="color: #FFA500;">e</span>
                                                <span style="color: #FF8C00;">s</span>
                                                <span style="color: #708090;">e</span>
                                                <span style="color: #FF4500;">n</span>
                                                <span style="color: #708090;">h</span>
                                                <span style="color: #FF4500;">o</span>
                                            </th>
                                            
                                            <th>
                                                <span style="color: #00BFFF;">A</span>
                                                <span style="color: #00FF7F;">ç</span>
                                                <span style="color: #FFD700;">õ</span>
                                                <span style="color: #FF8C00;">e</span>
                                                <span style="color: #FF4500;">s</span>
                                            </th>
                                        </tr>
                                    </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach($desenhos as $desenho)
                                            <tr class="hover:bg-gray-100 text-center">
                                                <td class="border-none p-4">
                                                    <img src="{{ asset('storage/' . $desenho->imagem) }}" alt="{{ $desenho->nome_personagem }}" class="w-20 h-auto mx-auto">
                                                </td>
                                                <td class="border-none p-4">{{ $desenho->nome_personagem }}</td>
                                                <td class="border-none p-4">{{ $desenho->nome_desenho }}</td>
                                                <td class="border-none p-4 flex space-x-2 justify-center">
                                                    <a href="{{ route('desenho.edit', $desenho->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded transition duration-200 transform hover:scale-105">
                                                        {{ __('Editar') }}
                                                    </a>
                                                    <form action="{{ route('desenho.destroy', $desenho->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded transition duration-200 transform hover:scale-105" onclick="return confirm('Tem certeza que deseja excluir este desenho?');">
                                                            {{ __('Excluir') }}
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                 <!-- Modal -->
                 <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-md">
                        <h2 class="text-lg font-semibold mb-4">{{ __('Adicionar Novo Desenho') }}</h2>
                        <form id="desenhoForm" method="POST" action="{{ route('desenho.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="nome_personagem" class="block text-gray-700">{{ __('Nome do Personagem') }}</label>
                                <input type="text" id="nome_personagem" name="nome_personagem" class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>
                            <div class="mb-4">
                                <label for="nome_desenho" class="block text-gray-700">{{ __('Nome do Desenho') }}</label>
                                <input type="text" id="nome_desenho" name="nome_desenho" class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>
                            <div class="mb-4">
                                <label for="imagem" class="block text-gray-700">{{ __('Imagem') }}</label>
                                <input type="file" id="imagem" name="imagem" class="mt-1 block w-full border-gray-300 rounded-md" accept="image/*" required>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" id="closeModal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">{{ __('Cancelar') }}</button>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Salvar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>


<script>
    // Função para mostrar o toast
    function showToast(message) {
        const toast = document.getElementById('toast');
        if (toast) {
            toast.classList.remove('hidden');
            toast.innerText = message;
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000);
        }
    }
    document.getElementById('openModal').onclick = function() {
        document.getElementById('modal').classList.remove('hidden');
    };

    document.getElementById('closeModal').onclick = function() {
        document.getElementById('modal').classList.add('hidden');
    };

    document.getElementById('desenhoForm').onsubmit = function(event) {
        event.preventDefault(); 
        showToast('{{ __('Desenho adicionado com sucesso!') }}'); 
        this.submit(); 
    };
</script>
