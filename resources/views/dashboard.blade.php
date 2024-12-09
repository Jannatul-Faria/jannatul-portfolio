<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex justify-between">
                <div class="w-1/2 p-3">
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
                        <div>
                            <x-input-label for="education_year_end_date" :value="__('education_year_end_date')" />
                            <x-text-input id="education_year_end_date" name="education_year_end_date" type="date" class="mt-1 block w-full" :value="old('education_year_end_date', $user->education_year_end_date)" required autofocus autocomplete="education_year_end_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('education_year_end_date')" />
                        </div>
                        <div>
                            <x-input-label for="experience_title" :value="__('experience_title')" />
                            <x-text-input id="experience_title" name="experience_title" type="text" class="mt-1 block w-full" :value="old('experience_title', $user->experience_title)" required autofocus autocomplete="experience_title" />
                            <x-input-error class="mt-2" :messages="$errors->get('experience_title')" />
                        </div>
                        <div>
                            <x-input-label for="experience_company_name" :value="__('experience_company_name')" />
                            <x-text-input id="experience_company_name" name="experience_company_name" type="text" class="mt-1 block w-full" :value="old('experience_company_name', $user->experience_company_name)" required autofocus autocomplete="experience_company_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('experience_company_name')" />
                        </div>
                        <div>
                            <x-input-label for="experience_description" :value="__('experience_description')" />
                            <x-text-input id="experience_description" name="experience_description" type="text" class="mt-1 block w-full" :value="old('experience_description', $user->experience_description)" required autofocus autocomplete="experience_description" />
                            <x-input-error class="mt-2" :messages="$errors->get('experience_description')" />
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
                   
                    </section>
                </div>
                <div class="w-1/2 p-3">
                    <form method="" action="" class="mt-6 space-y-6">
                       
                       
                        <div>
                            <x-input-label for="experience__start_date" :value="__('experience__start_date')" />
                            <x-text-input id="experience__start_date" name="experience__start_date" type="date" class="mt-1 block w-full" :value="old('experience__start_date', $user->experience__start_date)" required autofocus autocomplete="experience__start_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('experience__start_date')" />
                        </div>
                        <div>
                            <x-input-label for="experience__end_date" :value="__('experience__end_date')" />
                            <x-text-input id="experience__end_date" name="experience__end_date" type="date" class="mt-1 block w-full" :value="old('experience__end_date', $user->experience__end_date)" required autofocus autocomplete="experience__end_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('experience__end_date')" />
                        </div>
                        <div>
                            <x-input-label for="Skill_title" :value="__('Skill_title')" />
                            <x-text-input id="Skill_title" name="Skill_title" type="text" class="mt-1 block w-full" :value="old('Skill_title', $user->Skill_title)" required autofocus autocomplete="Skill_title" />
                            <x-input-error class="mt-2" :messages="$errors->get('Skill_title')" />
                        </div>
                        <div>
                            <x-input-label for="service_title" :value="__('service_title')" />
                            <x-text-input id="service_title" name="service_title" type="text" class="mt-1 block w-full" :value="old('service_title', $user->service_title)" required autofocus autocomplete="service_title" />
                            <x-input-error class="mt-2" :messages="$errors->get('service_title')" />
                        </div>
                        <div>
                            <x-input-label for="service_description" :value="__('service_description')" />
                            <x-text-input id="service_description" name="service_description" type="text" class="mt-1 block w-full" :value="old('service_description', $user->service_description)" required autofocus autocomplete="service_description" />
                            <x-input-error class="mt-2" :messages="$errors->get('service_description')" />
                        </div>
                        <div>  
                            <x-input-label for="portfolio_image" :value="__('portfolio_image')" />
                            <x-text-input id="portfolio_image" name="portfolio_image" type="file" class="mt-1 block w-full" :value="old('portfolio_image', $user->portfolio_image)" required autofocus autocomplete="portfolio_image" />
                            <x-input-error class="mt-2" :messages="$errors->get('portfolio_image')" />
                        </div>
                        <div>
                            <x-input-label for="portfolio_link" :value="__('portfolio_link')" />
                            <x-text-input id="portfolio_link" name="portfolio_link" type="text" class="mt-1 block w-full" :value="old('portfolio_link', $user->portfolio_link)" required autofocus autocomplete="portfolio_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('portfolio_link')" />
                        </div>
                        <div>
                            <x-input-label for="social_logo" :value="__('social_logo')" />
                            <x-text-input id="social_logo" name="social_logo" type="file" class="mt-1 block w-full" :value="old('social_logo', $user->social_logo)" required autofocus autocomplete="social_logo" />
                            <x-input-error class="mt-2" :messages="$errors->get('social_logo')" />
                        </div>
                        <div>
                            <x-input-label for="social_link" :value="__('social_link')" />
                            <x-text-input id="social_link" name="social_link" type="text" class="mt-1 block w-full" :value="old('social_link', $user->social_link)" required autofocus autocomplete="social_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('social_link')" />
                        </div>
                        <div>
                            <x-input-label for="site_logo" :value="__('site_logo')" />
                            <x-text-input id="site_logo" name="site_logo" type="file" class="mt-1 block w-full" :value="old('site_logo', $user->site_logo)" required autofocus autocomplete="site_logo" />
                            <x-input-error class="mt-2" :messages="$errors->get('site_logo')" />
                        </div>
                        <div>
                            <x-input-label for="site_link" :value="__('site_link')" />
                            <x-text-input id="site_link" name="site_link" type="text" class="mt-1 block w-full" :value="old('site_link', $user->site_link)" required autofocus autocomplete="site_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('site_link')" />
                        </div>
                        <div>
                            <x-input-label for="site_name" :value="__('site_name')" />
                            <x-text-input id="site_name" name="site_name" type="text" class="mt-1 block w-full" :value="old('site_name', $user->site_name)" required autofocus autocomplete="site_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('site_name')" />
                        </div>
                        <div>
                            <x-input-label for="hire_link" :value="__('hire_link')" />
                            <x-text-input id="hire_link" name="hire_link" type="text" class="mt-1 block w-full" :value="old('hire_link', $user->hire_link)" required autofocus autocomplete="hire_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('hire_link')" />
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

