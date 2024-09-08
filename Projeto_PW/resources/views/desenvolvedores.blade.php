<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Desenvolvedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
            </div>

    <div class="container">
        <div class="caixinha" id="caixinha">
            <div class="foto">
                <img src="{{ asset('Foto/A.jpg') }}" alt="Foto de Perfil">
            </div>
            <h1>João Pedro</h1>
            <p><strong>Série:</strong> 3º Ano</p>
            <p><strong>Curso:</strong> Desenvolvimento de Sistemas</p>
        </div>
    </div>

</x-app-layout>

<style>
    /* Container principal */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    /* Estilo da caixinha */
    .caixinha {
        position: relative; /* Necessário para posicionar a borda giratória */
        background-color: #a42bb1;
        border: 1px;
        border-image-slice: 1;
        border-radius: 12px; /* Mantenha o arredondamento da borda */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        padding: 60px;
        text-align: center;
        max-width: 400px;
        width: 295px;
    }

    /* Estilo da foto */
    .foto {
        display: flex; /* Adicionado para centralizar */
        justify-content: center; /* Centraliza horizontalmente */
        margin-bottom: 15px;
    }

    .foto img {
        border-radius: 45%;
        width: 190px; /* Ajuste o tamanho conforme necessário */
        height: 180px; /* Ajuste o tamanho conforme necessário */
        object-fit: cover;
        border: 1px solid #74588f; /* Cor da borda ao redor da foto */
    }

    /* Estilo do título */
    .caixinha h1 {
        color: #333;
        margin-bottom: 15px;
        font-size: 24px;
    }

    /* Estilo do parágrafo */
    .caixinha p {
        color: #555;
        font-size: 18px;
        margin-bottom: 10px;
    }

    /* Estilo do texto em negrito */
    .caixinha strong {
        color: #487aa1;
    }
</style>

<script>
    window.onload = function() {
        const caixinha = document.getElementById('caixinha');
        setTimeout(() => {
            caixinha.classList.add('rotate');
        }, 3000); // Adiciona a classe após 3 segundos
    };
</script>
