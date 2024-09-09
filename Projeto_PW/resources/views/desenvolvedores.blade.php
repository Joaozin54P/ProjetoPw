<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Desenvolvedores') }}
        </h2>
    </x-slot>

<style>
    /* Fonte Fredoka One */
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

    .container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.character-image {
    margin: 0 90px;
    position: relative; /* Permite ajustar a posição da imagem */
    top:-0px; /* Move a imagem para mais perto do card */
}

.character-image {
    margin: 0 90px;
}

.character-image img {
    width: 120px;
    height: auto;
}

.cards-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    align-items: stretch; /* Garante que todos os cards tenham a mesma altura */
}

.floating-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between; /* Certifica que os elementos dentro do card fiquem bem distribuídos */
    animation: float 4s ease-in-out infinite; /* Aplica a animação de flutuação */
}

.caixinha {
    background-color: #a42bb1;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    padding: 20px; /* Diminuí o padding para que os cards fiquem mais compactos */
    max-width: 350px; /* Ajustei a largura máxima dos cards */
    width: 100%; /* Faz com que os cards se ajustem ao contêiner pai */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    text-align: center;
}

.foto {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.foto img {
    border-radius: 45%;
    width: 150px; /* Ajustei o tamanho da imagem para ser mais proporcional */
    height: 150px;
    object-fit: cover;
    border: 1px solid #74588f;
}

.caixinha h1 {
    color: #333;
    margin-bottom: 10px;
    font-size: 22px;
}

.caixinha p {
    color: #555;
    font-size: 16px;
    margin-bottom: 10px;
}

.caixinha strong {
    color: #487aa1;
}

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    </style>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <!-- Conteúdo Adicional Pode Ser Adicionado Aqui -->
            </div>

            <div class="cards-container"> <!-- Contêiner dos cards -->
                <div class="floating-container">
                    <div class="character-image">
                        <img src="{{ asset('Foto/medo.png') }}" alt="Character">
                    </div>
                    <div class="caixinha" id="caixinha">
                        <div class="foto">
                            <img src="{{ asset('Foto/A.jpg') }}" alt="Foto de Perfil">
                        </div>
                        <h1>João Pedro</h1>
                        <p><strong>Série:</strong> 3º Ano</p>
                        <p><strong>Curso:</strong> Desenvolvimento de Sistemas</p>
                    </div>
                </div>

                <div class="floating-container">
                    <div class="character-image">
                        <img src="{{ asset('Foto/nojinho.png') }}" alt="Character">
                    </div>
                    <div class="caixinha" id="caixinha">
                        <div class="foto">
                            <img src="{{ asset('Foto/A.jpg') }}" alt="Foto de Perfil">
                        </div>
                        <h1>Mariana Ocireu</h1>
                        <p><strong>Série:</strong> 3º Ano</p>
                        <p><strong>Curso:</strong> Desenvolvimento de Sistemas</p>
                    </div>
                </div>

                <div class="floating-container">
                    <div class="character-image">
                        <img src="{{ asset('Foto/raiva.png') }}" alt="Character">
                    </div>
                    <div class="caixinha" id="caixinha">
                        <div class="foto">
                            <img src="{{ asset('Foto/A.jpg') }}" alt="Foto de Perfil">
                        </div>
                        <h1>Rebeca</h1>
                        <p><strong>Série:</strong> 3º Ano</p>
                        <p><strong>Curso:</strong> Desenvolvimento de Sistemas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>