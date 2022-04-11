<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors  class="mb-4" :titulo="session('titulo','Whoops! Algo deu errado.')" :mensagem="session('mensagem','Erro no registo! Verifique os teus campos e tente novamente.')" />

        <main class="form-signin">
            <form method="POST" action="{{ route('register') }}">
                <h1 class="h3 mb-3 fw-normal">CADASTRAR</h1>
                @csrf

                <!-- Name -->
                <div class="form-floating">
                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Didite o seu nome" required autofocus />
                    <x-label for="name" :value="__('Nome')" />
                </div>

                <!-- Email Address -->
                <div class="form-floating">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="nome@exemplo.com" required />
                    <x-label for="email" :value="__('Email')" />
                </div>

                <!-- Lista de Genero -->
                <div class="form-floating">
                    <select name="genero" class="form-control" id="genero">
                        <option value="masculino" selected>Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <x-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    placeholder="Digite a sua senha"
                                    required autocomplete="new-password" />
                    <x-label for="password" :value="__('Senha')" />
                </div>

                <!-- Confirm Password -->
                <div class="form-floating">
                    <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    placeholder="Confirme a sua senha"
                                    name="password_confirmation" required />
                    <x-label for="password_confirmation" :value="__('Confirmar a Senha')" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já estás cadastrado?') }}
                    </a>

                    <x-button class="w-100 btn btn-lg btn-primary">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
            </form>
        </main>
    </x-auth-card>
</x-guest-layout>
