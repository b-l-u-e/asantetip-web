@extends('layouts.app')

@section('title', ' | Flexibility to tip servers in several ways.')

@section('seo_tags')
<meta name="description" content="DivPesa is a mobile app that allows users in Kenya to conveniently convert Kenyan Shilling (KES) to USD through the popular Mpesa platform. Discover how this app simplifies forex exchange transactions and enhances financial flexibility.">
<link 
rel="canonical" 
href="{{url('/') }}" />
@endsection

@section("body")
    <div class="py-12">
       <div class="pt-32 md:py-12 xl:container m-auto px-6 md:px-12">
            <div aria-hidden="true" class="absolute inset-0 my-auto w-96 h-32 rotate-45 bg-gradient-to-r from-primary to-secondary blur-3xl opacity-30 dark:opacity-20"></div>
            <div class="relative lg:flex lg:items-center lg:gap-12 lg:justify-between">
                <div class="text-center lg:text-left md:mt-12 lg:mt-0 sm:w-10/12 md:w-2/3 sm:mx-auto lg:mr-auto lg:w-6/12">
                    <h1 class="text-gray-900 font-bold text-4xl md:text-6xl lg:text-5xl xl:text-6xl dark:text-white">
                        Flexibility to tip your servers in mulitple ways.
                    </h1>
                    <p class="text-2xl mt-8 text-gray-600 dark:text-gray-300">
                    Asante Tip is one of the hottest new Apps around, offering a simple cashless mobile service that aimed to simplify your life.</p>
                    <div
                    class="my-8 w-full flex flex-wrap items-center justify-center gap-5">
                        <a 
                        href="https://play.google.com/store/apps/details?id=ke.co.div_mpesa"
                        class="px-3 py-1.5 flex gap-2 items-center rounded-xl outline outline-2">
                            <div class="w-10">
                                <img class="h-full w-full"  src="https://www.svgrepo.com/show/394180/google-play.svg" >
                            </div>
                            <div class="px-4">
                                <div class="text-sm font-extrabold">Download on the</div>
                                <div class="text-xl">Google Play</div>
                            </div>
                        </a>

                        <a 
                        href="https://track.deriv.com/_REtaqWHjeBy2vdm9PpHVCmNd7ZgqdRLk/1/"
                        class="px-3 py-1.5 flex gap-2 items-center rounded-xl outline outline-2 bg-red-500 hover:bg-red-600 ">
                            <div class="text-gray-50">
                                <div class="text-sm font-extrabold">Don't have an account?</div>
                                <div class="text-xl text-white">Signup on Deriv.com</div>
                            </div>
                        </a>
                    </div>


                    {{-- <div class="my-12 flex gap-6 lg:gap-12 justify-between grayscale dark:grayscale-0
                    overflow-x-scroll">
                        <img src="/images/clients/gapgrasp.jpg" class="h-24 sm:h-24 w-auto lg:h-32" alt="" />
                        <img src="/images/clients/globalgap.jpg" class="h-24 sm:h-24 w-auto lg:h-32" alt="" />
                        <img src="/images/clients/avocado-association.jpg" class="h-24 sm:h-24 w-auto lg:h-32" alt="" />
                        <img src="/images/clients/kephis.jpg" class="h-24 sm:h-24 w-auto lg:h-32" alt="" />
                        <img src="/images/clients/afa.jpg" class="h-24 sm:h-24 w-auto lg:h-32" alt="" />
                    </div> --}}
                </div>
                <div class="overflow-hidden w-full lg:w-7/12 lg:-mr-16 flex items-end justify-center">
                    <div class="relative mx-auto rounded-lg bg-primary overflow-hidden">
                        <img 
                        src="{{ asset('img/screenshots/home-page.jpg')}}" 
                        alt="home page" 
                        height="" 
                        width="400">
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="py-16">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-8/12  z-1 space-y-2 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        Key Features of Asantetip
                    </h2>

                    <div class="divide-y space-y-4 divide-gray-100 dark:divide-gray-800">
                        <div class="mt-8 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>        
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-indigo-300">Tipping Made Easy</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                 AsanteTip allows you to tip with simplicity and convenience. You can choose to leave a single tip for that amazing server who went above and beyond, or you can tip multiple servers at once. It's all at your fingertips! </p>
                            </div> 
                        </div> 
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>                                        
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Paybill</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                No more hassles when it's time to settle the bill. With AsanteTip, you can easily pay your bill right from the app, simplifying the dining experience and reducing the need for cash or cards.</p>
                            </div> 
                        </div> 
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>                                         
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Transaction History</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                Keep track of your tipping history and expenses. AsanteTip provides you with a comprehensive overview of your past transactions, making it easy to manage your finances. </p>
                            </div> 
                        </div>

                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>                                         
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">QR Code Scanning</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                Our app allows you to scan the server's unique QR code to tip them directly. No more searching for cash or struggling with math – just scan, tip, and say thank you. </p>
                            </div> 
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>                                         
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Organizational Support</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                AsanteTip extends its capabilities to support organizations and businesses. Simply scan their dedicated QR code to tip the entire organization, recognizing their collective effort in providing outstanding service. </p>
                            </div> 
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                            <svg  
                            viewBox="0 0 16 16" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="currentColor" 
                            class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                                <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                            </svg>                                         
                            </div>
                            <div class="w-5/6">
                                <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Versatile Payment Methods</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                AsanteTip enables you to load your tipping wallet with a variety of payment methods. Whether it's credit cards, digital wallets, or even bank transfers, you can fund your tipping wallet your way.</p> </div> 
                        </div>
                        
                    </div>


                    
                    
                </div>
            </div>
        </div>
    </div>




    <div class="py-12">
        <h2 class="text-center text-4xl font-bold text-gray-900 md:text-5xl dark:text-white">
            How it works
        </h2>
    </div>


    <div class="">
       
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
            <div class="grow">
                <div 
                class="h-[700px] max-w-[500px] 
                relative mx-auto rounded-lg overflow-hidden">
                    {{-- <img
                    class=" w-auto object-scale-down"
                    src="images/process/harvesting.jpg"
                    alt="image"
                    loading="lazy"
                    width="500"
                    height="500"
                    /> --}}

                    <img 
                    src="{{ asset('img/screenshots/deposit.jpg')}}" 
                    alt="deposit page" 
                    height="" 
                    width="400">
                </div>
            </div>
            <div class="md:7/12 lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    Deposit
                </h2>
                <p class="my-8 text-lg text-gray-600 dark:text-gray-300">
                    Loading the wallet in the asantetip app is a straightforward and secure process designed to ensure you have enough funds to tip your servers.
                </p>
                <div class="divide-y space-y-4 divide-gray-100 dark:divide-gray-800">
                    <div class="mt-8 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                       <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>        
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-indigo-300">Sign In to Asante tip app</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Log in to your account using your credentials. If you haven't already registered, our user-friendly registration process will guide you through creating your account.
                            </p>
                        </div> 
                    </div> 
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                        
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300"> Access Wallet</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Once logged in, navigate to the "Deposit" section within your account. This section is designed for easy access and convenience.
                            </p>
                        </div> 
                    </div> 
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                         
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Enter Deposit Amount</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Specify the amount you wish to deposit into your account. Be sure to review the minimum and maximum deposit limits.
                            </p>
                        </div> 
                    </div>
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                         
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Enter Payment Details</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                            Enter the required payment details, such as your credit card information or bank account details. Rest assured, AsanteTip prioritizes the security of your financial information.    </p>
                        </div> 
                    </div>

                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                         
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Payment Confirmation</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                            Review the transaction details to ensure everything is accurate. Once you're satisfied, confirm the transaction. AsanteTip will securely process your payment and credit the corresponding amount to your wallet.  </p>
                        </div> 
                    </div>

                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                         
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Ready to Tip!</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                            With funds in your AsanteTip wallet, you're now ready to express your gratitude. Whether it's a single tip, multiple tips, or supporting an entire organization, you have the power to show appreciation seamlessly. </div> 
                    </div>
                     
                </div>
            </div>
            </div>
        </div>
    </div>


    


    <div class="py-12">
       
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
            <div class="grow">
                <div 
                class="h-[700px] max-w-[500px] 
                relative mx-auto rounded-lg overflow-hidden">
                    {{-- <img
                    class=" w-auto object-scale-down"
                    src="images/process/harvesting_1.jpg"
                    alt="image"
                    loading="lazy"
                    width="500"
                    height="500"
                    /> --}}
                    <img 
                    src="{{ asset('img/screenshots/withdraw.jpg')}}" 
                    alt="withdrawal page" 
                    height="" 
                    width="400">
                </div>
            </div>
            <div class="md:7/12 lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    Withdrawal
                </h2>
                <p class="my-8 text-lg text-gray-600 dark:text-gray-300">
                   Withdrawing your tips from your wallet is a straightforward and secure process, ensuring you have access to your earnings whenever you need them. Here's a step-by-step guide on how withdrawals work:
                </p>
                <div class="divide-y space-y-4 divide-gray-100 dark:divide-gray-800">
                    <div class="mt-8 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                       
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Log In to Asantetip</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Start by logging in to your account using your credentials.
                            </p>
                        </div> 
                    </div> 
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                        <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>          
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Access the Withdrawal Section</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Navigate to the "Withdraw" section within your home page. This section is designed for easy access and convenience.
                            </p>
                        </div> 
                    </div> 
                    
                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                       <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                        
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Enter Withdrawal Amount</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Specify the amount you wish to withdraw from your wallet. Ensure that the requested amount does not exceed your available balance and consider any minimum withdrawal requirements.
                            </p>
                        </div> 
                    </div>


                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                       <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                        
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Verify Withdrawal Details</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Review and confirm the withdrawal details, including the amount and chosen withdrawal method. Make sure all information is accurate to avoid any processing delays.
                            </p>
                        </div> 
                    </div>

                    <div class="pt-4 flex gap-4 md:items-center">
                        <div class="w-12 h-12 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">  
                       <svg  
                        viewBox="0 0 16 16" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="currentColor" 
                        class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                            <path  d="M8 3a5 5 0 100 10A5 5 0 008 3z"/>
                        </svg>                                        
                        </div>
                        <div class="w-5/6">
                            <h4 class="font-semibold text-lg text-gray-700 dark:text-teal-300">Withdrawal Confirmation</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Once your withdrawal request is approved and processed, you will receive a confirmation notification. You can also view the transaction details in your account history.
                            </p>
                        </div> 
                    </div>
                     
                </div>
            </div>
            </div>
        </div>
    </div>



    <div class="py-12">
       
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-16">
            <div class="lg:bg-primary dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="md:7/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-50 md:text-4xl dark:text-white">
                        Customer Support Assistance
                    </h2>
                    <p class="my-8 text-lg text-gray-100 dark:text-gray-300">
                        If you encounter any issues or have questions during the withdrawal process, our dedicated customer support team is available 24/7 to assist you and provide guidance.
                    </p>
                    <p class="my-8 text-lg text-gray-100 dark:text-gray-300">
                        Need help? <a href="/contact" class="font-bold text-white"> Contact us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

                                    
@endsection
