<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra Symposium-2023</title>

        <!-- Primary Meta Tags -->
        <meta name="title" content="e-Yantra: Engineering a better tomorrow">
        <meta name="description" content="e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay. The goal is to harness the talent of young engineers to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defence, home, smart-city maintenance and service industries.">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.e-yantra.org/">
        <meta property="og:title" content="e-Yantra: Engineering a better tomorrow">
        <meta property="og:description" content="e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay. The goal is to harness the talent of young engineers to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defence, home, smart-city maintenance and service industries.">
        <meta property="og:image" content="https://www.e-yantra.org/img/logo.svg">

        <!-- extra -->
        <meta name="description" content="e-Yantra Robotics Competition (eYRC) is a unique annual competition for undergraduate students in Engineering/ Science/ Polytechnic colleges." /> 
        <meta name="description" content="e-Yantra Robotics Compeititon">
        <meta name="description" content="Innovation Challenge">
        <meta name="description" content="Robotics Compeititon">
        <meta name="description" content="IIT Bombay">
        <meta name="description" content="Robotics">
        <meta name="description" content="Technical">
        
        <meta name="author" content="e-Yantra">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <!-- header -->  
        <header class="relative z-50 pb-11 lg:pt-11">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-center sm:justify-between lg:flex-nowrap">
                <div class="mt-10 lg:mt-0 lg:grow lg:basis-0">
                    <div class="flex items-center flex-shrink-0 text-gray-600 mr-6">                        
                        <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase" href="{!!route('eys.home')!!}">
                            <img src="{!! asset('img/logo.svg') !!}" alt="e-Yantra" class="w-48 md:w-56" />
                        </a>                        
                    </div>
                </div>

                <div class="order-first -mx-4 flex flex-auto basis-full overflow-x-auto whitespace-nowrap border-b border-blue-600/10 py-4 font-mono text-sm text-red-600 sm:-mx-6 lg:order-none lg:mx-0 lg:basis-auto lg:border-0 lg:py-0">
                    <div class="mx-auto flex items-center gap-4 px-4">
                        <p><time datetime="2022-04-04">05</time>-<time datetime="2022-04-06">06 of April, 2023</time></p>
                        <svg aria-hidden="true" viewBox="0 0 6 6" class="h-1.5 w-1.5 overflow-visible fill-current stroke-current">
                            <path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                        <p>IIT Bombay, Mumbai</p>
                    </div>
                </div>
                <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end">
                    <a class="inline-flex justify-center rounded-2xl bg-red-600 p-4 text-base font-semibold text-white hover:bg-red-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:text-white/70" href="/#">Book Your Seat</a>
                </div>
            </div>
        </header>
        <!-- end -->

        <!-- main -->
        <main>
            <!-- hero -->
            <div class="relative pt-10 pb-20 sm:py-24">
                <div class="absolute inset-x-0 -top-48 -bottom-14 overflow-hidden bg-indigo-50">
                    <!-- <img alt="" src="/_next/static/media/background.6c3571e0.jpg" decoding="async" data-nimg="1" style="color:transparent" class="absolute top-10 right-10 translate-y-[-10%] translate-x-[-55%] -scale-x-100 sm:left-1/2 sm:translate-y-[-6%] sm:translate-x-[-98%] lg:translate-x-[-106%] xl:translate-x-[-122%]" width="918" height="1495"> -->
                    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white"></div>
                    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
                </div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl lg:px-12">
                        <h2 class="font-display text-3xl font-bold tracking-tighter text-red-400 sm:text-4xl">
                            e-Yantra Symposium
                        </h2>
                        <h1 class="font-display text-5xl font-bold tracking-tighter text-red-600 sm:text-7xl">
                            Bridging the gap between design and engineering
                        </h1>
                        <div class="mt-6 space-y-6 font-display text-2xl tracking-tight text-red-900">
                            <p>The e-Yantra Symposium is a celebration of innovation activities around the family of e-Yantra Labs across the country.
                            </p>
                            <ul class="list-disc">
                                The Symposium is a platform for our stakeholders to:
                                <li class="ml-6 mt-4">Network with teachers and students  from colleges having e-Yantra labs,</li>
                                <li class="ml-6">Share best practices</li>
                                <li class="ml-6">Learn how best to make use of e-Yantra labs (and benchmark oneself  against the other 440+ labs in the e-Yantra universe)</li>
                                <li class="ml-6">Most importantly to be inspired to take your labs to the next level</li>
                            </ul>
                            <p>This year at symposium you’ll learn to Innovate. Create. Design through top design speakers and eYIC projets exibition.
                            </p>
                        </div>
                        
                        <a class="inline-flex justify-center rounded-2xl bg-blue-600 p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden" href="/#">Book Your Seat
                        </a>

                        <dl class="mt-10 grid grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-10 sm:gap-x-16 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                            <div>
                                <dt class="font-mono text-sm text-red-600">Speakers</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">5</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-sm text-red-600">Projects Exibiting</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">15</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-sm text-red-600">Venue</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">VMCC</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-sm text-red-600">Location</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">IIT Bombay, Mumbai</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

            <!-- speaker -->
            <section class="py-20 sm:py-32">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="font-display text-4xl font-medium tracking-tighter text-red-600 sm:text-5xl"> 
                            Project Exibition & Speakers 
                        </h2>
                        <p class="mt-4 font-display text-2xl tracking-tight text-red-900">
                            Best from enginnering colleges showcasing their Projects. Come join us to cheers them....
                        </p>
                    </div>

                    <!-- days -->
                    <dl class="mt-10 grid grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-10 sm:gap-x-16 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                        <div>
                            <dt class="font-mono text-sm text-red-600">
                                <span class="font-bold">Day 1</span> <br>
                                Opening Day & eYIC Project Exibition
                            </dt>
                            <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">
                                <time datetime="2022-04-04" class="mt-1.5 block text-2xl font-semibold tracking-tight text-red-900">
                                April 5 <sup>th</sup>
                                </time>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-mono text-sm text-red-600">
                                <span class="font-bold">Day 2</span><br>
                                Speakers, Workshops & Pannel Discussion
                            </dt>
                            <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-red-900">
                                <time datetime="2022-04-04" class="mt-1.5 block text-2xl font-semibold tracking-tight text-red-900">
                                April 6 <sup>th</sup>
                            </time>
                            </dd>
                        </div>                        
                    </dl>

                    <!-- speakers photo -->
                    <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 mt-8">
                        <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Kavi Arya
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    PI, e-Yantra
                                </p>
                            </div>                            
                        </div>
                        <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Sudhanshu Mani
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Vande Bharat
                                </p>
                            </div>                            
                        </div>
                        <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Dinesh Singh
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    PI, e-Yantra
                                </p>
                            </div>                            
                        </div>
                        <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Vivek Pawar
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Founder
                                </p>
                            </div>                            
                        </div>
                        <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Devdip Puryakayastha
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    MoE
                                </p>
                            </div>                            
                        </div>
                        <!-- <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-32 w-32 rounded-full mx-auto" src="https://via.placeholder.com/150">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Kavi Arya
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    PI, e-Yantra
                                </p>
                            </div>                            
                        </div> -->
                        <!-- Add more team members as needed -->
                    </div>
                </div>                  
            </section><!-- end -->    
            <!-- schedule -->
            <section class="py-20 sm:py-32">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-4xl lg:pr-24">
                        <h2 class="font-display text-4xl font-medium tracking-tighter text-red-600 sm:text-5xl">
                            Two day schedule
                        </h2>
                        <p class="mt-4 font-display text-2xl tracking-tight text-red-900">
                            We will make sure you will not get bore during this two days. It's packed with fun activities which motivates you to Innovate. Create. Design.
                        </p>
                    </div>
                </div>

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                        <!-- day 1 -->
                        <div class="p-4 bg-white shadow rounded-lg">
                            <h2 class="text-lg font-semibold mb-4 text-red-600 text-center">
                                Day 1 <br>
                                Wednesday, April 5 <sup>th</sup>
                            </h2>
                            <ul>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        09:00 AM <br> 10:00 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">Registration and Breakfast</div>
                                </li>

                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        10:00 AM <br> 10:30 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Inauguration of the event</h3>
                                        <p>Address: Director (IITB) + Head (CSE)</p>
                                    </div>
                                </li>

                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        10:30 AM <br> 11:15 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <p><span class="font-semibold">Introduction:</span> Prof. Kavi Arya, e-Yantra project</p> 
                                        <p><span class="font-semibold">Address:</span> Introduction to Inclusivity, Prof. Gaurav Raheja</p>   
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        11:15 AM <br> 01:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">eYIC Exhibition</h3>
                                        <p>Top prejects chose to showcase ...</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-green-600 items-center bg-green-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-green-600 ml-4">
                                        01:15 PM <br> 02:00 PM
                                    </div>
                                    <div class="w-3/4 text-green-900">
                                        <h3 class="font-semibold">Lunch</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        02:00 PM <br> 04:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">eYIC Exhibition</h3>
                                        <p>Top prejects chose to showcase ...</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        04:00 PM <br> 05:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <ul class="list-disc">
                                            Workshop/Event by DesignUp
                                            <li class="ml-8">Designers and Engineers Conclave</li>
                                            <li class="ml-8">Team to decide the event</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-green-600 items-center bg-green-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-green-600 ml-4">
                                        05:00 PM <br> 05:30 PM
                                    </div>
                                    <div class="w-3/4 text-green-900">
                                        <h3 class="font-semibold">Tea Break</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        05:30 PM <br> 07:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <ul class="list-disc">
                                            Workshop/Event by DesignUp
                                            <li class="ml-8">Designers and Engineers Conclave</li>
                                            <li class="ml-8">Team to decide the event</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-green-600 items-center bg-green-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-green-600 ml-4">
                                        07:00 PM <br> Onwards
                                    </div>
                                    <div class="w-3/4 text-green-900">
                                        <h3 class="font-semibold">Dinner</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- day 2 -->
                        <div class="p-4 bg-white shadow rounded-lg">
                            <h2 class="text-lg font-semibold mb-4 text-red-600 text-center">
                                Day 2 <br>
                                Thursday, April 6 <sup>th</sup>
                            </h2>
                            <ul>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        09:00 AM <br> 10:00 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">Registration and Breakfast</div>
                                </li>

                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        10:00 AM <br> 10:15 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Welcome</h3>
                                        <p>Address: Associate Dean R&D, IIT Bombay</p>
                                    </div>
                                </li>

                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        10:15 AM <br> 11:00 AM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <p><span class="font-semibold">e-Yantra Status Report</span> </p> 
                                        Prof. Kavi Arya   
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        11:00 AM <br> 12:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Keynote: Building Vandebharat</h3>
                                        <p>Sudhanshu Mani</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        12:00 AM <br> 01:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Panel Discussion</h3>
                                        <p>Role of e-Yantra Labs in Industry/Academia interaction</p>
                                        <p>Discussion between Academics and Industry with the audience.
                                        Panellists: Prof. Dinesh Singh, Vivek Pawar, 
                                        Prof. Devdip Puryakayastha, (MoE person)</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-green-600 items-center bg-green-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-green-600 ml-4">
                                        01:00 PM <br> 02:00 PM
                                    </div>
                                    <div class="w-3/4 text-green-900">
                                        <h3 class="font-semibold">Lunch</h3>
                                        <p>(Alongwith Poster Presentation and Exhibition)</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        02:00 PM <br> 03:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Innovative Projects from eLSI</h3>
                                        <p>eLSI Presentation by Top 5 Colleges
                                            Speakers: Shubha Pandit, etc. (based on survey)
                                        </p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        03:00 PM <br> 03:45 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Awards Ceremony and Valedictory function</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-red-600 items-center bg-red-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-red-600 ml-4">
                                        03:45 PM <br> 04:00 PM
                                    </div>
                                    <div class="w-3/4 text-red-900">
                                        <h3 class="font-semibold">Vote of Thanks</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-l-2 border-green-600 items-center bg-green-100 py-2">
                                    <div class="w-1/4 font-mono text-gray-600 text-green-600 ml-4">
                                        04:00 PM <br> Onwards
                                    </div>
                                    <div class="w-3/4 text-green-900">
                                        <h3 class="font-semibold">High Tea</h3>
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                    </div> 
                </div>    
            </section>
        </main><!-- end -->
    </body>
</html>