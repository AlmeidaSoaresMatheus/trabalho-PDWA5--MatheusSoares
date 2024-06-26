<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action= "/cadastrar" method="post">
                        @csrf <!-- Token de formulário -->

                        <!-- Título -->
                        <div>
                            <x-input-label for="titulo" :value="__('Título')" />
                            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="titulo" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        </div>

                        <!-- Autor -->
                        <div class="mt-4">
                            <x-input-label for="autor" :value="__('Autor')" />
                            <x-text-input id="autor" class="block mt-1 w-full" type="text" name="autor" :value="old('autor')" required autocomplete="autor" />
                            <x-input-error :messages="$errors->get('autor')" class="mt-2" />
                        </div>

                        <!-- Ano de Publicação -->
                        <div class="mt-4">
                            <x-input-label for="ano_publicacao" :value="__('Ano de Publicação')" />
                            <x-text-input id="ano_publicacao" class="block mt-1 w-full" type="number" name="ano_publicacao" :value="old('ano_publicacao')" required autocomplete="ano_publicacao" />
                            <x-input-error :messages="$errors->get('ano_publicacao')" class="mt-2" />
                        </div>

                        <!-- Gênero -->
                        <div class="mt-4">
                            <x-input-label for="genero" :value="__('Gênero')" />
                            <x-text-input id="genero" class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" required autocomplete="genero" />
                            <x-input-error :messages="$errors->get('genero')" class="mt-2" />
                        </div>

                        <!-- Preço -->
                        <div class="mt-4">
                            <x-input-label for="preco" :value="__('Preço')" />
                            <x-text-input id="preco" class="block mt-1 w-full" type="number" step="0.01" name="preco" :value="old('preco')" required autocomplete="preco" />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>

                        <!-- Disponível -->
                        <div class="mt-4">
                            <x-input-label for="disponivel" :value="__('Disponível')" />
                            <div>
                                <label for="disponivel_sim" class="mr-4">
                                    <input type="radio" id="disponivel_sim" name="disponivel" value="1" {{ old('disponivel') == 1 ? 'checked' : '' }}>
                                    {{ __('Sim') }}
                                </label>
                                <label for="disponivel_nao">
                                    <input type="radio" id="disponivel_nao" name="disponivel" value="0" {{ old('disponivel') == 0 ? 'checked' : '' }}>
                                    {{ __('Não') }}
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('disponivel')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
