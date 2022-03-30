@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            <div class="flex flex-col break-words bg-white rounded">

                <div class="font-semibold bg-grey-lightest text-grey-darkest py-3 px-6 mb-0">
                    <h1>{{ $company->name }}</h1>
                    <div class="flex flex-row my-2">
                        <i class="fas fa-globe-americas"></i>
                        <span class="pl-2">{{ $company->location }}</span>
                    </div>
                </div>

                <div class="w-full p-6">
                    <div class="flex flex-row items-center px-6">
                        <i class="far fa-envelope text-2xl mr-2"></i>
                        <h2>Envoyez votre message de reclamation à votre fournisseur d'eau</h2>
                    </div>
                    <div>
                        <div class="w-full">
                            <form class="bg-white rounded p-6 pb-8" method="post" action="/messages">
                                @csrf
                                <div class="mb-4">
                                    <label
                                            class="block text-grey-darker text-sm font-bold mb-2 text-charcoal"
                                            for="sender">
                                        Numero Client
                                    </label>
                                    <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                                            id="sender" name="sender" type="text" placeholder="Ecrire votre IDENTIFIANT (Ex: MARS153666XD0">
                                </div>
                                <div class="mb-4">
                                    <label
                                            class="block text-grey-darker text-sm font-bold mb-2 text-charcoal"
                                            for="title">
                                        Titre
                                    </label>
                                    <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                                            id="title" name="title" type="text" placeholder="Titre de votre message">
                                </div>
                                <div class="mb-4">
                                    <label
                                            class="block text-grey-darker text-sm font-bold mb-2 text-charcoal"
                                            for="body">
                                        Message
                                    </label>
                                    <textarea
                                            class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                            id="body" name="body" type="text" placeholder="Entrer votre message ici">
                                    </textarea>
                                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                                </div>
                                <div class="flex items-center justify-between">
                                    <button
                                            type="submit"
                                            class="bg-ink hover:shadow-lg text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                            type="button">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="w-full p-6">
                        
                    </div>
                </div>
            </div>
        </div>
@endsection
