@extends('layouts.app')
@section('title', ' | Terms and Conditions')

@section('seo_tags')
<meta name="description" content="DivPesa is a financial service offered by Deriv that allows users in Kenya to easily deposit and withdraw funds using the popular mobile payment service, M-Pesa. With DivPesa, users can convert their Kenyan Shillings to US Dollars and participate in the forex exchange market. Learn more about this convenient and secure financial solution.">
<link 
rel="canonical" 
href="{{url('/terms-and-conditions') }}" />
@endsection

@section("body")

<div class="py-12">
       <div class="pt-32 md:py-12 xl:container m-auto px-6 md:px-12">
            <div aria-hidden="true" class="absolute inset-0 my-auto w-96 h-32 rotate-45 bg-gradient-to-r from-primary to-secondary blur-3xl opacity-50 dark:opacity-20"></div>
            <div class="relative lg:flex lg:items-center lg:gap-12">
                <div class="text-center lg:text-left md:mt-12 lg:mt-0 sm:w-10/12 md:w-2/3 sm:mx-auto lg:mr-auto lg:w-6/12">
                    <h1 class="text-gray-900 font-bold text-4xl md:text-6xl lg:text-5xl xl:text-6xl dark:text-white">
                        TERMS AND CONDITIONS
                    </h1>
                    {{-- <p class="mt-8 text-xl text-gray-600 dark:text-gray-300">
                        The Products transacted through the Service are licensed, not sold,
                        to You for use only under the terms of this license, unless a Product is accompanied by a separate license agreement, 
                        in which case the terms of that separate license agreement will govern, 
                        subject to Your prior acceptance of that separate license agreement. The licensor (“Application Provider”) reserves all rights not expressly granted to You. The Product that is subject to this license is referred to in this license as the “Licensed Application.”
                        </p> 
                    --}}
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
                <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        A: Scope of License
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    This license granted to You for the Licensed Application by Application Provider is limited to a non-transferable license to use the Licensed Application on any mobile device, such as an iPhone, iPad or Android device 
                    that You own or control and as permitted by the Usage Rules set forth in the “Usage Rules” Section of the App Store Terms and Conditions. 
                    This license does not allow You to use the Licensed Application on any mobile device that You do not own or control, and You may not distribute or make the Licensed Application available over a network where it could be used by multiple devices at the same time. 
                    You may not rent, lease, lend, sell, redistribute or sublicense the Licensed Application. You may not copy (except as expressly permitted by this license and the Usage Rules), decompile, reverse engineer, disassemble, attempt to derive the source code of, modify, or create derivative works of the Licensed Application, any updates, or any part thereof (except as and only to the extent any foregoing restriction is prohibited by applicable law or to the extent as may be permitted by the licensing terms governing use of any open sourced components included with the Licensed Application). Any attempt to do so is a violation of the rights of the Application Provider and its licensors. If You breach this restriction, You may be subject to prosecution and damages. The terms of the license will govern any upgrades provided by Application Provider that replace and/or supplement the original Product, unless such upgrade is accompanied by a separate license in which case the terms of that license will govern.</p>
                   </p>
                </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        B: Consent to Use of Data.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    You agree that Application Provider may collect and use technical data and related information, including but not limited to technical information about Your device, system and application software, and peripherals, that is gathered periodically to facilitate the provision of software updates, product support and other services to You (if any) related to the Licensed Application. Application Provider may use this information, as long as it is in a form that does not personally identify You, to improve its products or to provide services or technologies to You, with the exceptions covered in our privacy policy (https://asantetip.com/privacy), such as suspected fraud when a transaction is disputed as covered in section j) below. </p>
                </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        C: Termination.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    The license is effective until terminated by You or Application Provider. Your rights under this license will terminate automatically without notice from the Application Provider if You fail to comply with any term(s) of this license. Upon termination of the license, You shall cease all use of the Licensed Application, and destroy all copies, full or partial, of the Licensed Application.  </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                       D: Services; Third Party Materials.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                        The Licensed Application may enable access to Application Provider’s and third party services and web sites (collectively and individually, "Services"). Use of the Services may require Internet access and that You accept additional terms of service.
                        You understand that by using any of the Services, You may encounter content that may be deemed offensive, indecent, or objectionable, which content may or may not be identified as having explicit language, and that the results of any search or entering of a particular URL may automatically and unintentionally generate links or references to objectionable material. Nevertheless, You agree to use the Services at Your sole risk and that the Application Provider shall not have any liability to You for content that may be found to be offensive, indecent, or objectionable.
                        Certain Services may display, include or make available content, data, information, applications or materials from third parties (“Third Party Materials”) or provide links to certain third party web sites. By using the Services, You acknowledge and agree that the Application Provider is not responsible for examining or evaluating the content, accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect of such Third Party Materials or web sites. The Application Provider does not warrant or endorse and does not assume and will not have any liability or responsibility to You or any other person for any third-party Services, Third Party Materials or web sites, or for any other materials, products, or services of third parties. Third Party Materials and links to other web sites are provided solely as a convenience to You. Financial information displayed by any Services is for general informational purposes only and is not intended to be relied upon as investment advice. Before executing any securities transaction based upon information obtained through the Services, You should consult with a financial professional. Location data provided by any Services is for basic navigational purposes only and is not intended to be relied upon in situations where precise location information is needed or where erroneous, inaccurate or incomplete location data may lead to death, 
                        personal injury, property or environmental damage. Neither the Application Provider, nor any of its content providers, guarantees the availability, accuracy, completeness, reliability, or timeliness of stock information or location data displayed by any Services.
                        You agree that any Services contain proprietary content, information and material that is protected by applicable intellectual property and other laws, including but not limited to copyright, and that You will not use such proprietary content, information or materials in any way whatsoever except for permitted use of the Services. No portion of the Services may be reproduced in any form or by any means. You agree not to modify, rent, lease, loan, sell, distribute, or create derivative works based on the Services, in any manner, and You shall not exploit the Services in any unauthorized way whatsoever, including but not limited to, by trespass or burdening network capacity. You further agree not to use the Services in any manner to harass, abuse, stalk, threaten, defame or otherwise infringe or violate the rights of any other party, and that the Application Provider is not in any way responsible for any such use by You, nor for any harassing, threatening, defamatory, offensive or illegal messages or transmissions that You may receive as a result of using any of the Services.
                        In addition, third party Services and Third Party Materials that may be accessed from, displayed on or linked to from the iPhone or iPod touch are not available in all languages or in all countries. The Application Provider makes no representation that such Services and Materials are appropriate or available for use in any particular location. To the extent You choose to access such Services or Materials, You do so at Your own initiative and are responsible for compliance with any applicable laws, including but not limited to applicable local laws. The Application Provider, and its licensors, reserve the right to change, suspend, remove, or disable access to any Services at any time without notice. In no event will the Application Provider be liable for the removal of or disabling of access to any such Services. The Application Provider may also impose limits on the use of or access to certain Services, in any case and without notice or liability.
                    </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    F. No Warranty.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    YOU EXPRESSLY ACKNOWLEDGE AND AGREE THAT USE OF THE LICENSED APPLICATION IS AT YOUR SOLE RISK AND THAT THE ENTIRE RISK AS TO SATISFACTORY QUALITY, PERFORMANCE, ACCURACY AND EFFORT IS WITH YOU. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, THE LICENSED APPLICATION AND ANY SERVICES PERFORMED OR PROVIDED BY THE LICENSED APPLICATION ("SERVICES") ARE PROVIDED "AS IS" AND “AS AVAILABLE”, WITH ALL FAULTS AND WITHOUT WARRANTY OF ANY KIND, AND APPLICATION PROVIDER HEREBY DISCLAIMS ALL WARRANTIES AND CONDITIONS WITH RESPECT TO THE LICENSED APPLICATION AND ANY SERVICES, EITHER EXPRESS, IMPLIED OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES AND/OR CONDITIONS OF MERCHANTABILITY, OF SATISFACTORY QUALITY, OF FITNESS FOR A PARTICULAR PURPOSE, OF ACCURACY, OF QUIET ENJOYMENT, AND NON-INFRINGEMENT OF THIRD PARTY RIGHTS. APPLICATION PROVIDER DOES NOT WARRANT AGAINST INTERFERENCE WITH YOUR ENJOYMENT OF THE LICENSED APPLICATION, THAT THE FUNCTIONS CONTAINED IN, OR SERVICES PERFORMED OR PROVIDED BY, THE LICENSED APPLICATION WILL MEET YOUR REQUIREMENTS, THAT THE OPERATION OF THE LICENSED APPLICATION OR SERVICES WILL BE UNINTERRUPTED OR ERROR-FREE, OR THAT DEFECTS IN THE LICENSED APPLICATION OR SERVICES WILL BE CORRECTED. NO ORAL OR WRITTEN INFORMATION OR ADVICE GIVEN BY APPLICATION PROVIDER OR ITS AUTHORIZED REPRESENTATIVE SHALL CREATE A WARRANTY. SHOULD THE LICENSED APPLICATION OR SERVICES PROVE DEFECTIVE, YOU ASSUME THE ENTIRE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS ON APPLICABLE STATUTORY RIGHTS OF A CONSUMER, SO THE ABOVE EXCLUSION AND LIMITATIONS MAY NOT APPLY TO YOU. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    G. Limitation of Liability.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    TO THE EXTENT NOT PROHIBITED BY LAW, IN NO EVENT SHALL APPLICATION PROVIDER BE LIABLE FOR PERSONAL INJURY, OR ANY INCIDENTAL, SPECIAL, INDIRECT OR CONSEQUENTIAL DAMAGES WHATSOEVER, INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF PROFITS, LOSS OF DATA, BUSINESS INTERRUPTION OR ANY OTHER COMMERCIAL DAMAGES OR LOSSES, ARISING OUT OF OR RELATED TO YOUR USE OR INABILITY TO USE THE LICENSED APPLICATION, HOWEVER CAUSED, REGARDLESS OF THE THEORY OF LIABILITY (CONTRACT, TORT OR OTHERWISE) AND EVEN IF APPLICATION PROVIDER HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATION OF LIABILITY FOR PERSONAL INJURY, OR OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THIS LIMITATION MAY NOT APPLY TO YOU. In no event shall Application Provider’s total liability to you for all damages (other than as may be required by applicable law in cases involving personal injury) exceed the amount of fifty dollars ($50.00). The foregoing limitations will apply even if the above stated remedy fails of its essential purpose. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    H. Export.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    You may not use or otherwise export or re-export the Licensed Application except as authorized by International law and the laws of the jurisdiction in which the Licensed Application was obtained. In particular, but without limitation, the Licensed Application may not be exported or re-exported (a) into any U.S. embargoed countries or (b) to anyone on the U.S. Treasury Department's list of Specially Designated Nationals or the U.S. Department of Commerce Denied Person’s List or Entity List. By using the Licensed Application, you represent and warrant that you are not located in any such country or on any such list. You also agree that you will not use these products for any purposes prohibited by International law, including, without limitation, the development, design, manufacture or production of nuclear, missiles, or chemical or biological weapons. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    I. Commercial Items.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    The Licensed Application and related documentation are "Commercial Items", as that term is defined at 48 C.F.R. §2.101, consisting of "Commercial Computer Software" and "Commercial Computer Software Documentation", as such terms are used in 48 C.F.R. §12.212 or 48 C.F.R. §227.7202, as applicable. Consistent with 48 C.F.R. §12.212 or 48 C.F.R. §227.7202-1 through 227.7202-4, as applicable, the Commercial Computer Software and Commercial Computer Software Documentation are being licensed to U.S. Government end users (a) only as Commercial Items and (b) with only those rights as are granted to all other end users pursuant to the terms and conditions herein. Unpublished-rights reserved under the International copyright. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    J. Transaction Fees.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    You are advised that a transaction fee of 2% above the credit card and banking institutions transaction fees is charged only to the person who loads a tip wallet or offloads a tip wallet of funds to cover service, infrastructure and development costs, and we are working to reduce these costs. </p>
                 </div>
            </div>
            
            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    K. Disputes.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    In the case a dispute (also known as a chargeback) occurs, when a cardholder questions your payment with their card issuer, the issuer creates a formal dispute which will reverse the payment. The payment amount, along with a separate $15.00 dispute fee (for users in the United States) levied by the card network, will be deducted from your account balance. You can initiate a dispute resolution process by emailing disputes@asantetip.com, and submit evidence to make your case that the payment was valid. If the dispute is found in your favor, the disputed amount and fee will be returned back to you. If a dispute is upheld, the card issuer’s decision is final and the cardholder’s payment remains refunded. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    L. All Rights Reserved.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    We reserve the right, at any time, to update and change any or all of these Terms, in our sole discretion, including but not limited to the fees and charges associated with the use of the Service, without notice to you. If we do so, we will post the modified Terms of Service on https://asantetip.com (the “Site”), though we will notify you of any changes that, in our sole discretion, materially impact these Terms. Continued use of the Service after any such changes have been made shall constitute your consent to such changes. If a change has a material adverse impact on you, and you have contracted and prepaid for a certain term, you may notify us within 30 days after being informed of that change that you do not agree with the change. If you do so, we will delay applying the change to you until your prepaid term ends, or, at our sole and absolute discretion, allow you to cancel your account, and we will refund any prepaid amount pro rata to you. If you use our Service after your prepaid term ends, all changes will apply to you. You are responsible for regularly reviewing the most current version of these Terms, which are currently available at: https://asantetip.com/terms. When we change these Terms, we will modify the "Last Modified" date above. </p>
                 </div>
            </div>

            <div class="mt-5 lg:bg-gray-50 dark:lg:bg-darker lg:p-16 rounded-[4rem] space-y-6 md:flex flex-row-reverse md:gap-6 justify-center md:space-y-0 lg:items-center">
                <div class="grow"></div>
                  <div class="md:7/12 lg:w-9/12 z-1 mr-5">
                    <h2 class="text-4xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    M: Governing Laws.
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 dark:text-gray-300">
                    The laws of Mauritius govern this license and your use of the Licensed Application. Your use of the Licensed Application may also be subject to other local, state, national, or international laws. </p>
                 </div>
            </div>

        </div>
</div>
@endsection