<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'trace.ph') }}</title>

        <style>
        .btn {
            isolation: isolate;
        }

        #count {
            isolation: isolate;
        }

        .darkmode--activated header{
            border-color: black black #CE7D31 black;
        }

        .darkmode--activated #bg{
            background-color: #DDDFE0;
        }

        .darkmode--activated #casesCard{
            background-color: blue;
        }


        </style>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
        @livewireStyles

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 ">

            <!-- Side Panel -->
            <div>
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                
                <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
                
                    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                        <div class="flex items-center justify-center mt-8">
                            <div class="flex items-center">
                                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="../../images/tracedark.png" alt="">
                    </div>
                </div>
    
            <nav class="mt-10">
                <a class="active:bg-green-700 hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold" 
                href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
    
                    <span class="mx-3">Dashboard</span>
                </a>
    
                <a class="hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold"
                href="{{ route('patients.index') }}" :active="request()->routeIs('patients.index')">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">Patients</span>
                </a>
    
                <a class="hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold"
                href="{{ route('contacts.index') }}" :active="request()->routeIs('contacts.index')">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">Close Contacts</span>
                </a>

                <a class="hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold"
                href="{{ route('doctors.index') }}" :active="request()->routeIs('doctors.index')">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">Doctors</span>
                </a>
                <a class="hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold"
                href="{{ route('pdf.preview') }}" :active="request()->routeIs('pdf.preview')">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">Export Data</span>
                </a>
                <a class="hover:no-underline flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-200 hover:bg-opacity-80 hover:text-blue-800 font-bold"
                href="{{ route('information.index') }}" :active="request()->routeIs('information.index')">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
    
                    <span class="mx-3">Information</span>
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden"> 
            <header class="darkmode--activated flex justify-between items-center py-4 px-6 bg-white border-b-4 border-blue-600">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
    
                <div class="flex items-center">
    
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        @livewire('navigation-dropdown')
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        

        <script>
        window.addEventListener("openShowModal", event ->{
            $("#modalShow").modal("show");
        })
        window.addEventListener("closeShowModal", event ->{
            $("#modalShow").modal("hide");
        })
        </script>
        
        <!-- scripts -->
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

<script>

  const options = {
  bottom: '32px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();

  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
    </body>
</html>
