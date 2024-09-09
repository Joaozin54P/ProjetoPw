<x-guest-layout>
    <style>
        body {
            background: linear-gradient(to bottom, #0a1f44, #002b7f); 
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .main-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            text-align: center; 
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .card-image {
            position: absolute;
            left: -70px;
            top: 76%;
            width: 1000px;
            height: auto;
            transform: translateY(-50%) rotate(-90deg); 
            transform-origin: left center;
            z-index: 0;
            object-fit: cover;
        }

        form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1;
            display: flex; 
            flex-direction: column; 
        }

        form div {
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #5477f5;
            outline: none;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flex a {
            color: #5477f5;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .flex a:hover {
            color: #73a5ff;
        }

        .flex button {
            background-color: #0a1f44; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; 
        }

        .flex button:hover {
            background-color: #0d2a6e; 
        }

        .red { color: red; }
        .yellow { color: yellow; }
        .green { color: green; }
        .purple { color: purple; }
        .light-blue { color: lightblue; }
        .blue { color: #5477f5; }
        .orange { color: orange; }
        .pink { color: pink; }
        .teal { color: teal; }

        .fun-text {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 2rem;
        }

        .footer-text {
            font-size: 0.8rem; 
            margin-top: 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer-text span {
            display: inline-block;
            font-size: 0.8rem; 
            margin: 0 2px;
            font-weight: bold;
        }

        .custom-label {
            color: black;
        }
    </style>

    <div class="main-container">
        <div class="container">
            <img src="{{ asset('Foto/personagens.png') }}" alt="Card Image" class="card-image" />
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Digite Seu Name:')" class="custom-label"/>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Digite Seu Email:')" class="custom-label"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Digite Sua Password:')" class="custom-label"/>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirme Sua Password:')" class="custom-label"/>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('login') }}">
                        {{ __('Já está cadastrado?') }}
                    </a>
                    <x-primary-button class="ml-4">
                        {{ __('Cadastrar') }}
                    </x-primary-button>
                </div>

                <!-- Footer Text -->
                <div class="footer-text">
                    <span class="red">C</span>
                    <span class="orange">a</span>
                    <span class="yellow">d</span>
                    <span class="green">a</span>
                    <span class="blue">s</span>
                    <span class="teal">t</span>
                    <span class="purple">r</span>
                    <span class="light-blue">e</span>
                    <span class="pink">-</span>
                    <span class="red">s</span>
                    <span class="orange">e</span>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
