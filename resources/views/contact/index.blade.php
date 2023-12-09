@extends('layouts.app')
@section('title', ' | Contact us')

@section('seo_tags')
<meta name="description" content="If you have any questions or inquiries about Deriv or DivPesa, or if you need assistance with Mpesa, USD, Kenya Shilling, or Forex Exchange, please do not hesitate to contact us. Our team is here to help you.">
<link 
rel="canonical" 
href="{{url('/contact') }}" />
@endsection

@section("body")
    <div class="py-12">
       <div class="pt-32 md:py-12 xl:container m-auto px-6 md:px-12">
            <div aria-hidden="true" class="absolute inset-0 my-auto w-96 h-32 rotate-45 bg-gradient-to-r from-primary to-secondary blur-3xl opacity-50 dark:opacity-20"></div>
            <div class="relative lg:flex lg:items-center lg:gap-12">
                <div class="text-center lg:text-left md:mt-12 lg:mt-0 sm:w-10/12 md:w-2/3 sm:mx-auto lg:mr-auto lg:w-8/12">
                    <h1 class="text-gray-900 font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl dark:text-white">
                        Contact Us
                    </h1>
                    
                    <div class="flex flex-col-reverse lg:flex-row gap-x-5 bg-white rounded-lg mt-12">
                        <div 
                        class="p-5 
                        flex flex-col gap-5  text-start rounded-b-lg lg:rounded-l-lg  bg-primary text-white">
                            <div class="flex flex-row gap-x-5 items-center justify-between">
                                <div>
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-white/50 dark:bg-teal-900/20">  
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-green-900/50  dark:text-teal-400">
                                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                        </svg>                                      
                                    </div>
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <div class="text-2xl font-bold">Address</div>
                                    <div>
                                        Haile Selasie Avenue, Nairobi,  Kenya
                                    </div>
                                </div>
                            </div>

                             <div class="flex flex-row  gap-x-5  items-center">
                                <div>
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-white/50 dark:bg-teal-900/20">  
                                        <svg  
                                        xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 24 24" 
                                        fill="currentColor" 
                                        class="w-6 h-6 m-auto text-green-900/50  dark:text-teal-400">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z"/>
                                        </svg>                                        
                                    </div>
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <div class="text-2xl font-bold">Email</div>
                                    <div>
                                        info@asantetip.com
                                    </div>
                                </div>
                            </div>

                             <div class="flex flex-row  gap-x-5 items-center">
                                <div>
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-white/50 dark:bg-teal-900/20">  
                                        {{-- <svg  
                                        xmlns="http://www.w3.org/2000/svg" 
                                        viewBox="0 0 24 24" 
                                        fill="currentColor" 
                                        class="w-6 h-6 m-auto text-green-900/50  dark:text-teal-400">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z"/>
                                        </svg>    --}}


                                        <svg 
                                        xmlns="http://www.w3.org/2000/svg"  
                                        viewBox="0 0 24 24" 
                                        fill="currentColor" 
                                        class="w-6 h-6 m-auto text-green-900/50  dark:text-teal-400">
                                        <path d="M21 5.5C21 14.0604 14.0604 21 5.5 21C5.11378 21 4.73086 20.9859 4.35172 20.9581C3.91662 20.9262 3.69906 20.9103 3.50103 20.7963C3.33701 20.7019 3.18146 20.5345 3.09925 20.364C3 20.1582 3 19.9181 3 19.438V16.6207C3 16.2169 3 16.015 3.06645 15.842C3.12515 15.6891 3.22049 15.553 3.3441 15.4456C3.48403 15.324 3.67376 15.255 4.05321 15.117L7.26005 13.9509C7.70153 13.7904 7.92227 13.7101 8.1317 13.7237C8.31637 13.7357 8.49408 13.7988 8.64506 13.9058C8.81628 14.0271 8.93713 14.2285 9.17882 14.6314L10 16C12.6499 14.7999 14.7981 12.6489 16 10L14.6314 9.17882C14.2285 8.93713 14.0271 8.81628 13.9058 8.64506C13.7988 8.49408 13.7357 8.31637 13.7237 8.1317C13.7101 7.92227 13.7904 7.70153 13.9509 7.26005L13.9509 7.26005L15.117 4.05321C15.255 3.67376 15.324 3.48403 15.4456 3.3441C15.553 3.22049 15.6891 3.12515 15.842 3.06645C16.015 3 16.2169 3 16.6207 3H19.438C19.9181 3 20.1582 3 20.364 3.09925C20.5345 3.18146 20.7019 3.33701 20.7963 3.50103C20.9103 3.69907 20.9262 3.91662 20.9581 4.35173C20.9859 4.73086 21 5.11378 21 5.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </div>
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <div class="text-2xl font-bold">Call Us / Whatsapp</div>
                                    <div>
                                        <a href="https://wa.me/message/KNNGVUK3VBJ2L1">0740569055</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form 
                        class="w-full p-5 flex flex-col gap-y-1 text-start"
                        method="POST" 
                        action="{{ route('contact') }}">
                            @csrf
                            <p class="text-gray-900 font-bold text-xl md:text-2xl dark:text-white mb-5">
                                Send us a message
                            </p>

                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="subject" :value="__('Subject')" />
                                <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required />
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="message" :value="__('Message')" />
                                <x-textarea id="subject" class="block mt-1 w-full"  name="message" :value="old('message')" required />
                                <x-input-error :messages="$errors->get('message')" class="mt-2" />
                            </div>

                          

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('Send message') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div> 
    </div>
@endsection
