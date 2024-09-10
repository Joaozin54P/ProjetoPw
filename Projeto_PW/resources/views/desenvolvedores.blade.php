<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Desenvolvedores') }}
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

/* Card 1 */
.caixinha {
    background-image: url('{{ asset('Foto/1.png') }}'); /* Imagem de fundo do primeiro card */
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    padding: 20px;
    max-width: 350px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    text-align: center;
    color: white;
}

/* Card 2 */
.caixinhaa {
    background-image: url('{{ asset('Foto/2.png') }}'); /* Imagem de fundo do segundo card */
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    padding: 20px;
    max-width: 350px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    text-align: center;
    color: white;
}

/* Card 3 */
.caixinhaaa {
    background-image: url('{{ asset('Foto/3.png') }}'); /* Imagem de fundo do terceiro card */
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    padding: 20px;
    max-width: 350px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    text-align: center;
    color: white;
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
                <div class="caixinha"> <!-- Primeiro card -->
                    <div class="foto">
                        <img src="{{ asset('Foto/Joee.jpeg') }}" alt="Foto de Perfil">
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
                <div class="caixinhaa"> <!-- Segundo card -->
                    <div class="foto">
                        <img src="{{ asset('Foto/Mari.jpeg') }}" alt="Foto de Perfil">
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
                <div class="caixinhaaa"> <!-- Terceiro card -->
                    <div class="foto">
                        <img src="{{ asset('Foto/Beca.jpeg') }}" alt="Foto de Perfil">
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