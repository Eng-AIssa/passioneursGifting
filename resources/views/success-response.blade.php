<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row flex justify-center items-center">
                        <img src="{{url('/check.png')}}" width="175px" height="175px" alt="success sticker"
                             style="padding-right: 20px"/>
                        <p style="font-size: 40px;">{{ Session::get('message') ?? __('Succeeded') }}</p>
                    </div>

                    <div class=" row flex justify-center items-center mt-4">
                        <fieldset class="mt-4 px-3">
                            <div class="row">
                                <div class="col-md-7 d-flex justify-content-start">
                                    <a href="{{route('employee.create')}}">
                                        <x-primary-button type="button" style="height: 38px">{{ __('Add new employee') }}</x-primary-button>
                                    </a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mt-4 px-3">
                            <div class="row">
                                <div class="col-md-7 d-flex justify-content-start">
                                    <a href="{{route('employee.index')}}">
                                        <x-primary-button type="button" style="height: 38px">{{ __('Show added employees') }}</x-primary-button>
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
