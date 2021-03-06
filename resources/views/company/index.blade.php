@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            <div class="flex flex-col break-words bg-white rounded">

                <div class="font-semibold bg-grey-lightest text-grey-darkest py-3 px-6 mb-0">
                    <h1>Entreprises</h1>
                </div>

                <div class="w-full p-6">
                    <p class="text-lg">Ci dessous vous trouverez la liste des entreprises utilisant notre ERP, selectionnez une !</p>
                </div>

                <div class="w-full p-6 flex flex-row flex-wrap justify-center">
                    @foreach($companies as $company)
                        <div class="p-4 flex flex-col max-w-half">
                            <a href="/companies/{{ $company->id }}" class="no-underline text-midnight flex flex-col">
                            @if($company->filename)
                                <img class="mb-2" src="/img/{{ $company->filename }}" alt="">
                            @else   
                                <img class="mb-2" src="/img/placeholder{{ random_int(1,4) }}.jpg" alt="">
                            @endif
                                <span class="text-2xl no-underline">{{ $company->name }}</span>
                                <div class="flex flex-row my-2">
                                    <i class="fas fa-globe-americas"></i>
                                    <span class="pl-2">{{ $company->location }}</span>
                                </div>
                            </a>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
