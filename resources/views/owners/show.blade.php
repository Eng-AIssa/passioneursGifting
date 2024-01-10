<x-app-layout>

    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Information') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <fieldset>

                        <legend class="fw-bold">{{ __('Employee Information') }}</legend>
                        <hr class="separator mb-3"/>

                        <div class="row my-2">
                            <div class="col-md-5 mb-3">
                                <x-custom-input-label for="name" :value="__('Employee Name')"/>

                                <x-custom-text-input id="name" name="name"
                                                     type="text" placeholder="Name"
                                                     value="{{ $owner->name }}"
                                                     disabled="true"/>
                            </div>
                            <div class="col-md-5 mb-3 offset-md-1">
                                <x-custom-input-label for="id-number" :value="__('Employee ID')"/>

                                <x-custom-text-input id="id-number" name="id_number"
                                                     type="text" placeholder="Id Number"
                                                     value="{{ $owner->id_number }}"
                                                     disabled="true"/>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mt-4">

                        <legend class="fw-bold">{{ __('Contact Information') }}</legend>
                        <hr class="separator mb-3"/>

                        <div class="row my-2">
                            <div class="col-md-5 mb-3">
                                <x-custom-input-label for="phone" :value="__('Phone')"/>

                                <x-custom-text-input id="phone" name="phone"
                                                     pattern="[0]{1}[5]{1}[0-9]{8}"
                                                     type="tel" placeholder="05xxxxxxxx"
                                                     value="{{ $owner->phone }}"
                                                     disabled="true"/>
                            </div>
                            <div class="col-md-5 mb-3 offset-md-1">
                                <x-custom-input-label for="email" :value="__('Email')"/>

                                <x-custom-text-input id="email" name="email"
                                                     type="email" placeholder="Email Address"
                                                     value="{{ $owner->email }}"
                                                     disabled="true"/>
                            </div>
                        </div>
                    </fieldset>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
