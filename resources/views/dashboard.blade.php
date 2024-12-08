<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Profile Information') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </header>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>
                    <div class="flex justify-between ">
                        
                    </div>
                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>


                    <form method="" action="" class="mt-6 space-y-6">
                        <div>
                            <x-input-label for="position_title" :value="__('position_title')" />
                            <x-text-input id="position_title" name="position_title" type="text" class="mt-1 block w-full" :value="old('position_title', $user->position_title)" required autofocus autocomplete="position_title" />
                            <x-input-error class="mt-2" :messages="$errors->get('position_title')" />
                        </div>
                        <div>
                            <x-input-label for="About_section_heading" :value="__('About_section_heading')" />
                            <x-text-input id="About_section_heading" name="About_section_heading" type="text" class="mt-1 block w-full" :value="old('About_section_heading', $user->About_section_heading)" required autofocus autocomplete="About_section_heading" />
                            <x-input-error class="mt-2" :messages="$errors->get('About_section_heading')" />
                        </div>
                        <div>
                            <x-input-label for="About_section_description" :value="__('About section description')" />
                            <x-text-input id="About_section_description" name="About_section_description" type="text" class="mt-1 block w-full" :value="old('About_section_description', $user->About_section_description)" required autofocus autocomplete="About_section_description" />
                            <x-input-error class="mt-2" :messages="$errors->get('About_section_description')" />
                        </div>
                        <div>
                            <x-input-label for="About_section_row" :value="__('About_section_row')" />
                            <x-text-input id="About_section_row" name="About_section_row" type="text" class="mt-1 block w-full" :value="old('About_section_row', $user->About_section_row)" required autofocus autocomplete="About_section_row" />
                            <x-input-error class="mt-2" :messages="$errors->get('About_section_row')" />
                        </div>
                        <div>
                            <x-input-label for="education_title" :value="__('education_title')" />
                            <x-text-input id="education_title" name="education_title" type="text" class="mt-1 block w-full" :value="old('education_title', $user->education_title)" required autofocus autocomplete="education_title" />
                            <x-input-error class="mt-2" :messages="$errors->get('education_title')" />
                        </div>
                        <div>
                            <x-input-label for="education_institude" :value="__('education_institude')" />
                            <x-text-input id="education_institude" name="education_institude" type="text" class="mt-1 block w-full" :value="old('education_institude', $user->education_institude)" required autofocus autocomplete="education_institude" />
                            <x-input-error class="mt-2" :messages="$errors->get('education_institude')" />
                        </div>
                        <div>
                            <x-input-label for="education_year_start_date" :value="__('education_year_start_date')" />
                            <x-text-input id="education_year_start_date" name="education_year_start_date" type="date" class="mt-1 block w-full" :value="old('education_year_start_date', $user->education_year_start_date)" required autofocus autocomplete="education_year_start_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('education_year_start_date')" />
                        </div>

                    </form>
                   
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

