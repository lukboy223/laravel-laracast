<x-layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
                    <x-form-field>
                        <x-form-label for="email">email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="something@mail.com" type="email"></x-form-input>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" placeholder="12345" type="password"></x-form-input>
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>

            </div>



            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Log in</x-form-button>
                 </div>
    </form>

</x-layout>