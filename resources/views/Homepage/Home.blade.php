<x-guest-layout>
    <!doctype html>
    <html lang="ar">
    <!-- Blue, black, and white -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <title>Maak HomePage</title>
    </head>

    <body class="bg-primary">

        <nav class="bg-cyan-50 pb-3 pt-3">

            <div class="max-w-7xl mx-auto px-4">
                <div class="relative flex h-16 items-center">



                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    

                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-sm  text-black hover:text-sky-500 ">انشاء حساب</a>
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-sm  text-black hover:text-sky-500">تسجيل دخول</a>


                    <div class="relative m-3">
                        <input type="text" name="search" id="search" autocomplete="given-name"
                            placeholder="Search..."
                            class="py-2 pl-10 pr-4 border border-gray-300 rounded-3xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L15.803 15.803M15.803 15.803C17.2096 14.3964 17.9998 12.4887 17.9998 10.4995C17.9998 8.51029 17.2096 6.60256 15.803 5.19599C14.3964 3.78941 12.4887 2.99921 10.4995 2.99921C8.51031 2.99921 6.60258 3.78941 5.196 5.19599C3.78943 6.60256 2.99922 8.51029 2.99922 10.4995C2.99922 12.4887 3.78943 14.3964 5.196 15.803C6.60258 17.2096 8.51031 17.9998 10.4995 17.9998C12.4887 17.9998 14.3964 17.2096 15.803 15.803Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>


                    </div>
                    <!-- the vav bar information-->

                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-6">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-black-300 hover:bg-gray-400 hover:text-white">اسأل
                                معاك</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-black-300 hover:bg-gray-400 hover:text-white">المقالات</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-black-300 hover:bg-gray-400 hover:text-white">جلسات
                                معاك</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-black-300 hover:bg-gray-400 hover:text-white">ماهو
                                معاك؟</a>
                        </div>
                    </div>

                    <!--logo-->

                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-end text-center ">
                        <div class="flex shrink-0 items-center">
                            <svg class="h-12 w-auto pl-10 ">
                                <path class="cls-1"
                                    d="M19.28,23.73c.11,0,.22-.01.32-.04.11-.03.3-.12.57-.28,1.03-.43,2.21-.65,3.56-.65h10.94c.54,0,.81-.27.81-.81v-.41c0-.97-.31-1.77-.93-2.39-.62-.62-1.55-.93-2.79-.93h-2.83c-1.3,0-2.24-.38-2.83-1.13-.59-.76-.89-1.48-.89-2.19,0-2.05,1.16-3.08,3.48-3.08,1.13,0,2.19.24,3.16.73.59.38,1,.57,1.21.57.43,0,.65-.43.65-1.3,0-1.24-.57-2.29-1.7-3.16-1.13-.86-2.57-1.27-4.29-1.21-1.67,0-3.29.63-4.86,1.9-1.57,1.27-2.35,3.12-2.35,5.55,0,1.19.43,2.43,1.3,3.73-1.08.32-1.93.91-2.55,1.74-.62.84-.77,1.85-.45,3.04.05.22.22.32.49.32Z" />
                                <path class="cls-1"
                                    d="M52.73,0h-.89c-2.38,0-4.2.61-5.47,1.82-1.27,1.21-1.9,3.15-1.9,5.79v22.11c0,1.84-.42,3.31-1.26,4.42-.84,1.11-2.12,1.66-3.85,1.66H15.63c-2.27,0-4.1-.57-5.51-1.7-1.4-1.13-2.11-2.86-2.11-5.18,0-1.46.26-2.7.77-3.73.51-1.03,1.04-1.94,1.58-2.75.11-.21.22-.46.32-.73.11-.27.16-.51.16-.73,0-.27-.08-.53-.24-.77-.16-.24-.49-.36-.97-.36-.32,0-.73.08-1.21.24-2.54.92-4.58,2.48-6.12,4.7-1.54,2.21-2.31,4.67-2.31,7.37s.65,4.86,1.94,6.8,3.09,3.44,5.39,4.5c2.29,1.05,4.9,1.58,7.82,1.58h23.98c4.7,0,8.32-1.38,10.85-4.13,2.54-2.75,3.81-6.43,3.81-11.02V.97c0-.65-.35-.97-1.05-.97Z" />
                                <path class="cls-1"
                                    d="M163.99,25.07c-.46-1.97-1.24-3.85-2.35-5.63-1.11-1.78-2.59-3.24-4.46-4.37-1.86-1.13-4.2-1.7-7.01-1.7-2.59,0-4.78.68-6.56,2.02-1.78,1.35-3.36,3.19-4.74,5.51-1.38,2.32-2.77,4.94-4.17,7.86-.81,1.78-1.51,3.19-2.11,4.21-.59,1.03-1.27,1.76-2.03,2.19-.76.43-1.81.65-3.16.65h-14.01l4.86-6.48c.65-.92,1.07-1.79,1.26-2.63.19-.84.28-1.63.28-2.39.05-2.16-.78-4.05-2.51-5.67-1.73-1.62-3.9-2.9-6.52-3.85-2.62-.94-5.33-1.42-8.14-1.42s-5.46.46-8.1,1.38c-2.65.92-4.82,2.2-6.52,3.85s-2.55,3.55-2.55,5.71c0,.76.08,1.55.24,2.39.16.84.59,1.71,1.3,2.63l4.86,6.48h-15.55c-1.67,0-2.94-.55-3.81-1.66-.86-1.11-1.3-2.58-1.3-4.42V1.05c0-.7-.35-1.05-1.05-1.05h-.81c-2.43,0-4.28.61-5.55,1.82-1.27,1.21-1.9,3.15-1.9,5.79v22.27c0,4.59,1.26,8.26,3.77,11.02,2.51,2.75,6.14,4.13,10.89,4.13h19.68c2.65,0,4.78-.57,6.4-1.7,1.62,1.13,3.73,1.7,6.32,1.7h17.33v.08h1.38c1.89,0,3.6-.2,5.14-.61s2.93-1.09,4.17-2.07c2.32,1.19,4.5,2.05,6.52,2.59,2.02.54,4.2.81,6.52.81,4.64,0,8.25-1.36,10.81-4.09,2.56-2.73,3.85-6.47,3.85-11.22,0-1.67-.23-3.5-.69-5.47ZM108.62,26.85c-.16.3-.35.58-.57.85l-5.1,6.8c-.22.27-.46.27-.73,0l-5.02-6.8c-.22-.27-.4-.55-.57-.85-.16-.3-.24-.63-.24-1.01,0-.86.5-1.69,1.5-2.47,1-.78,2.58-1.17,4.74-1.17s3.74.39,4.74,1.17c1,.78,1.5,1.61,1.5,2.47,0,.38-.08.72-.24,1.01ZM153.94,35.28c-.78.95-1.93,1.47-3.44,1.58-.87.05-1.96-.04-3.28-.28s-2.98-.85-4.98-1.82c.21-.38.46-.82.73-1.34.27-.51.59-1.15.97-1.9,1.08-2.43,2.17-4.59,3.28-6.48,1.11-1.89,2.25-2.83,3.44-2.83,1.4,0,2.5.7,3.28,2.11.78,1.41,1.17,3.43,1.17,6.08,0,2.32-.39,3.96-1.17,4.9Z" />


                            </svg>
                        </div>
                    </div>

                </div>
                <div>

                </div>






            </div>

        </nav>

        <!-- hero section-->

        <div class="bg-cover bg-no-repeat bg-center h-screen clip-path m " style="background-image: url('/images/nature_couple.jpg')">
        <div class="blur-md"></div>
        <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 xl:p-12 md:pt-12 ">
            <div class="text-right mt-80">
                <h1 class="text-5xl text-white font-bold">ديما معاك</h1>
                <p class="text-2xl text-white mt-4"> احجز الآن مع أحسن المرشدين النفسيين في ليبيا من بيتك، ووفر على نفسك الوقت ، مع الحفاظ على خصوصيتك ، ديما معاك عشان صحتك النفسية.</p>

            </div>
            
        </div>

        </div>





    </body>

    </html>

</x-guest-layout>
