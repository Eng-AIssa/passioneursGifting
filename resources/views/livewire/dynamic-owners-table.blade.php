<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:flex md:items-center md:justify-between mb-5 mx-1">
            <div
                class="inline-flex overflow-hidden bg-white shadow-md border divide-x rounded-lg rtl:flex-row-reverse">
            </div>

            <div class="relative flex items-center shadow-md mt-4 md:mt-0">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                        </svg>
                    </span>

                <input wire:model="search" type="text" placeholder="{{__('Search, name | id | status')}}"
                       class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>
        <!-- component -->
        <div class=" overflow-y-hidden w-auto rounded-lg border border-gray-200 shadow-md my-5 mx-1">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="pl-6 py-4 font-medium text-gray-900">#</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Name')}}</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Id Number')}}</th>
                    {{--<th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Email')}}</th>--}}
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Status')}}</th>
                    {{--<th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Units')}}</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">{{__('Last Contract')}}</th>--}}
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
                </thead>
                <tbody wire:loading.class="opacity-20" class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach($owners as $owner)
                    <tr class="hover:bg-gray-50">
                        <th class=" pl-6 py-4 font-normal text-gray-900">
                            {{$owner->id}}
                        </th>
                        <td class="px-6 py-4 font-normal text-gray-900">
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{$owner->name}}</div>
                                {{--<div class="text-gray-400">{{$owner->email}}</div>--}}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap	">
                            <span
                                class="inline-flex items-center text-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600 hover:bg-gray-200">
                            {{$owner->id_number}}
                            </span>
                        </td>
                        <td class="px-6 py-4 ">
                            {{$owner->phone}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="p-1 ">{{ $owners->links() }}  </div>
        </div>

        <div wire:loading.delay role="status" class="absolute -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2">
            <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>
