<x-guest-layout>
    <style>
        /* fonte Fredoka One */
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
            top: -230px;
            left: 50%;
            transform: translateX(-50%); 
            z-index: 0;
        }

        .character-image img {
            width: 150px; 
            height: auto;
        }

        /* botão*/
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
            padding: 0.3rem 0.3rem; 
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
                <img src="{{ asset('Foto/alegria.png') }}" alt="Character">
            </div>

            <div class="login-card">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Digite Seu Email:')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Digite Sua Senha:')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar Login') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-black-600 hover:text-black-900" href="{{ route('password.request') }}">
                                {{ __('Esqueçeu sua senha?') }}
                            </a>
                        @endif

                        <x-primary-button class="login-button ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Texto abaixo do card -->
        <div class="fun-text">
            <span class="red">F</span>
            <span class="yellow">a</span>
            <span class="light-blue">ç</span>
            <span class="purple">a</span>
            <span class="light-blue"> </span>
            <span class="red">s</span>
            <span class="yellow">e</span>
            <span class="green">u</span>
            <span class="purple"> </span>
            <span class="light-blue">l</span>
            <span class="red">o</span>
            <span class="yellow">g</span>
            <span class="green">i</span>
            <span class="purple">n</span>
        </div>
    </div>
</x-guest-layout>
