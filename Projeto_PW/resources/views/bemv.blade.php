<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-white-200 leading-tight">
            {{ __('Bem vindo') }}
        </h2>
    </x-slot>

    <style>
        /* Fonte Fredoka One */
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

        body {
            background: linear-gradient(to bottom, #0a1f44, #002b7f); 
            font-family: 'Roboto', sans-serif;
            overflow: hidden;
            color: white; /* Define a cor do texto padrão para branco */
        }

        /* Toast styling */
        #toast {
            background: rgba(34, 193, 195, 0.8); /* Um pouco mais escuro para o toast */
            color: white; /* Texto branco no toast */
        }

        /* H1 styling dentro do p-6 div */
        .p-6 h1 {
            color: white; /* Define a cor do texto do h1 para branco */
        }
    </style>
     
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-white dark:text-white">
                <!-- Conteúdo Adicional Pode Ser Adicionado Aqui -->
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-6 text-white dark:text-white bg-cover bg-center" 
                        style="background-image: url('Foto/126.png'); background-size: cover; background-repeat: no-repeat; min-height: 680px;">
                        <h1 class="text-4xl font-bold">Bem vindo! Esse é o CRUD de Divertidamente</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@if (session('login_success'))
    <div id="toast" class="fixed bottom-5 right-5 px-4 py-2 rounded shadow">
        {{ session('login_success') }}
    </div>

    @php
        session()->forget('login_success'); // Remover o valor da sessão para evitar que o toast apareça novamente
    @endphp
@endif

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

    @if (session('login_success'))
        window.onload = function() {
            showToast('{{ session('login_success') }}');
        };
    @endif
</script>
