<x-guest-layout>
    <style>
        /* Fonte Fredoka One */
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #0a1f44, #002b7f); 
            overflow: hidden; 
        }

        /* Container para card e imagem */
        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            text-align: center; 
        }

        .floating-container {
            position: relative;
            animation: float 4s ease-in-out infinite;
            margin-top: 150px; 
        }

        .login-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1;
            display: flex; 
            flex-direction: column; 
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Imagem na parte superior do card */
        .character-image {
            position: absolute;
            top: -195px;
            left: 50%;
            transform: translateX(-50%); 
            z-index: 0;
        }

        .custom-label {
            color: black;
        }

        .character-image img {
            width: 160px; 
            height: auto;
        }

        /* botão */
        .login-button {
            background-color: #0a1f44; 
            color: white; 
            border: none; 
            padding: 0.75rem 1.5rem; 
            border-radius: 5px;
            cursor: pointer; 
            font-size: 1rem; 
            transition: background-color 0.3s; 
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #0d2a6e; 
        }

        /* Estilo para o texto */
        .fun-text {
            font-family: 'Fredoka One', cursive; /* Fonte Fredoka One */
            font-size: 1.25rem; 
            text-align: center; 
            margin-top: 40px; 
            display: inline-block; 
        }

        .fun-text span {
            display: inline-block;
            padding: 0.3rem 0.2rem; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
            margin: 0; 
        }

        .red { color: red; }
        .yellow { color: yellow; }
        .green { color: green; }
        .purple { color: purple; }
        .light-blue { color: lightblue; }
    </style>

    <div class="container">
        <div class="floating-container">
            <div class="character-image">
                <img src="{{ asset('Foto/vergonha.png') }}" alt="Character">
            </div>

            <div class="login-card">
                <div class="mb-4 text-sm text-Black-600 dark:text-black-400">
                    {{ __('Esqueceu sua senha? Não tem problema. Apenas nos informe seu endereço de e-mail e nós enviaremos um link para redefinir sua senha.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Digite Seu Email:')" class="custom-label"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <x-primary-button class="login-button">
                            {{ __('Enviar Link de Redefinição de Senha') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Texto abaixo do card -->
        <div class="fun-text">
            <span class="red">S</span>
            <span class="yellow">e</span>
            <span class="light-blue">n</span>
            <span class="purple">h</span>
            <span class="green">a</span>
            <span class="purple"> </span>
            <span class="light-blue">R</span>
            <span class="red">e</span>
            <span class="yellow">d</span>
            <span class="green">e</span>
            <span class="purple">f</span>
            <span class="red">i</span>
            <span class="yellow">n</span>
            <span class="green">i</span>
            <span class="purple">ç</span>
            <span class="red">ã</span>
            <span class="yellow">o</span>
        </div>
    </div>
</x-guest-layout>
