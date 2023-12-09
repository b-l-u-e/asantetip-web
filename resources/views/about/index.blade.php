@extends('layouts.app')
@section('title', ' | About us')

@section('seo_tags')
<meta name="description" content="DivPesa is a financial service offered by Deriv that allows users in Kenya to easily deposit and withdraw funds using the popular mobile payment service, M-Pesa. With DivPesa, users can convert their Kenyan Shillings to US Dollars and participate in the forex exchange market. Learn more about this convenient and secure financial solution.">
<link 
rel="canonical" 
href="{{url('/about') }}" />
@endsection

@section("body")
    <div class="py-12">
       <div class="pt-32 md:py-12 xl:container m-auto px-6 md:px-12">
            <div aria-hidden="true" class="absolute inset-0 my-auto w-96 h-32 rotate-45 bg-gradient-to-r from-primary to-secondary blur-3xl opacity-50 dark:opacity-20"></div>
            <div class="relative lg:flex lg:items-center lg:gap-12">
                <div class="text-center lg:text-left md:mt-12 lg:mt-0 sm:w-10/12 md:w-2/3 sm:mx-auto lg:mr-auto lg:w-6/12">
                    <h1 class="text-gray-900 font-bold text-4xl md:text-6xl lg:text-5xl xl:text-6xl dark:text-white">
                        About us
                    </h1>
                    {{-- <p class="mt-8 text-xl text-gray-600 dark:text-gray-300">
                        AsanteTip: A Seamless Tipping Experience.AsanteTip redefines gratitude in the digital age. Say goodbye to cash and hello to effortless appreciation. Whether it's a single tip for exceptional service or multiple tips for your favorite servers, AsanteTip makes it simple. Pay your bill with ease, monitor transactions, and even tip organizations using QR codes. Load your wallet effortlessly with various payment methods, and express your thanks the smart way. Download AsanteTip now and revolutionize the art of tipping.   </p> --}}
                </div>
                <div class="grow">
                </div>
            </div>
        </div> 
    </div>


     <div class="py-8">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-8/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        AsanteTip
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    A Seamless Tipping Experience.AsanteTip redefines gratitude in the digital age. Say goodbye to cash and hello to effortless appreciation. Whether it's a single tip for exceptional service or multiple tips for your favorite servers, AsanteTip makes it simple. Pay your bill with ease, monitor transactions, and even tip organizations using QR codes. Load your wallet effortlessly with various payment methods, and express your thanks the smart way. Download AsanteTip now and revolutionize the art of tipping.   </p> --}}
            </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-8/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        Our Mission
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    AsanteTip Mission Statement: "At AsanteTip, our mission is to empower individuals to express gratitude effortlessly and meaningfully. We believe that exceptional service deserves seamless recognition. Through innovative digital tipping solutions, we strive to simplify the act of appreciation, making it accessible to everyone. AsanteTip is committed to enhancing the way people express thanks, fostering a culture of recognition, and facilitating a positive impact on service-oriented industries. We envision a world where gratitude is effortlessly shared, making every interaction a moment of appreciation. Join us in revolutionizing the art of tipping and spreading the joy of saying 'Asante' – thank you, the AsanteTip way."  </p>
                </div>
            </div>
        </div>
    </div>


    

    <div class="py-8">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-8/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        Join the asantetip Community
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                        At Asantetip, we are more than just a tipping platform; we are a community of like-minded individuals striving for financial success. Join our community of over 2.5 million traders worldwide and embark on your forex trading journey with Divpesa. Whether you're a novice or an experienced trader, we have the tools and resources to help you achieve your financial goals.
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
