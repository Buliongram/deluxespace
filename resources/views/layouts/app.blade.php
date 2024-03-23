<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DeluxeSpace</title>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <script src="/icon/all.js"></script>
    <script defer src="/js/app.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="ml-0 relative md:ml-20 lg:ml-60">
        <header class="header flex flex-col gap-4 relative">

            <header id="headerNav" class="relative  flex items-center justify-between px-2 md:px-8 py-3 text-white">

                <div class=" flex gap-4 items-center">
                    <span class=" flex md:hidden items-center justify-center">
                        <img class="w-7" src="/img/logoWhite.png" alt="">
                    </span>

                    <span onclick="sideshow()" class="bg-transparent md:bg-[#ffffff1f] h-10 w-10 rounded-md  cursor-pointer flex items-center justify-center  text-xl md:text-2xl"><i class="fa-duotone fa-bars-sort"></i></span>

                    <!-- searchbar -->
                    <form action="" class="bg-[#ffffff1f] hidden pr-3 py-1 pl-2 md:flex items-center justify-between gap-2 md:w-[230px]  lg:w-[320px] rounded-lg">
                        <input class="placeholder:text-white placeholder:font-semibold bg-transparent outline-0 w-full p-2 text-sm " type="search" placeholder="Search here..."><span class="cursor-pointer"><i class="fa-duotone fa-search"></i></span>
                    </form>
                </div>

                <div class="flex items-center gap-6 ">
                    <div class="flex items-center gap-4">
                        <span class="md:hidden bg-transparent md:bg-[#ffffff1f] rounded-md h-5 w-5 md:h-10 md:w-10 flex items-center justify-center cursor-pointer text-lg "><i class="fa-duotone fa-search"></i></span>
                        <span class=" bg-transparent md:bg-[#ffffff1f] rounded-md h-5 w-5 md:h-10 md:w-10 flex items-center justify-center cursor-pointer text-lg "><i class="fa-duotone fa-moon"></i></span>
                        <span class=" bg-transparent md:bg-[#ffffff1f] rounded-md h-5 w-5 md:h-10 md:w-10 flex items-center justify-center cursor-pointer text-lg "><i class="fa-duotone fa-objects-column"></i></span>
                        <span class=" bg-transparent md:bg-[#ffffff1f] rounded-md h-5 w-5 md:h-10 md:w-10 flex items-center justify-center cursor-pointer text-lg "><i class="fa-duotone fa-bell"></i></span>

                    </div>

                    <!-- USER DETAILS SECTION ON THE HEADERNAV -->
                    <div class="flex  items-center gap-4">
                        <div class="flex-col hidden md:flex">
                            <span class="font-bold capitalize">william rodgers</span>
                            <span>@rodgerswilliams</span>
                        </div>

                        <!-- userIcon photo  -->
                        <div class="relative">
                            <span onclick="navShow()" class="cursor-pointer h-10 w-10 md:h-10 md:w-10 rounded-full flex"><img class="h-full w-full rounded-full object-cover" src="/img/user.jpg" alt=""></span>


                            <!-- DROPDOWN LINKS FOR WHEN THE USER PROFILE PHOTO IS CLICKED -->


                            <div id="nav" class="absolute hidden px-3 py-2 right-0 top-[130%] flex-col gap-3 rounded-lg h-max bg-white  z-10">

                            </div>


                        </div>
                    </div>

                </div>

            </header>

            <!-- TEXT UNDER THE HEADERNAV -->
            <div class="flex flex-col md:flex-row  relative items-start md:items-center justify-between gap-2 px-4 md:px-8 py-3 text-white">
                <span class=" flex items-center gap-3">
                    <span id="pathname" class="capitalize font-bold text-lg md:text-xl">
                        Dashboard
                    </span>
                    <span class="text-xs md:text-sm text-orange-300 capitalize">Welcome williams rodgers!</span>
                </span>
                <span class="text-sm">
                    <span><i class="fa-light fa-home"></i></span>
                    <span class="text-slate-300">DeluxeSpace</span>
                    <span><i class="fa-light fa-chevron-right"></i></span>
                    <span id="pathname" class="capitalize font-semibold">Dashboard</span>
                </span>
            </div>
            <!-- <img src="/img/bg-1.png" class="absolute top-0 left-0 w-full h-full object-cover opacity-30 -z-10" alt=""> -->



            <!-- THE SIDEBAR -->
            <section id="sidebar" class="rounded-lg md:rounded-none left-[-100%] w-60 fixed top-[10%]  md:flex md:top-0 flex-col md:left-0 md:w-20 lg:w-60 md:fixed h-full z-10 overflow-hidden">
                <div class="text-white flex px-2 py-[14.7px] flex-col justify-between bg-[#3736af] md:h-[211px] max-h-max w-full items-center">
                    <span class="hidden md:flex items-center gap-3">
                        <img class="w-10" src="/img/logoWhite.png" alt="">
                        <span class="font-bold text-2xl hidden lg:flex">{{config('app.name')}}</span>
                    </span>
                    <div class="flex md:hidden lg:flex items-center gap-3 bg-[#ffffff1f] p-2 rounded-md w-full">
                        <span class="text-5xl"><i class="fa-duotone fa-wallet"></i></span>
                        <span class="flex flex-col">
                            <span class="font-bold">$2354.23</span>
                            <span class="text-sm text-slate-400">Withdraw Money</span>
                        </span>
                    </div>
                </div>

                <div id="sideLinks" class="flex flex-col gap-3 md:items-center lg:items-start  h-full bg-white p-2 overflow-scroll">

                </div>
            </section>
        </header>



        <!-- SECTION THAT CONTAINS ALL OTHER PAGES -->
        <section class=" px-4 md:px-8 py-4 bg-[#eceeef]">
            @yield('content')
        </section>
        <!-- -------------------------------- -->


        <!-- COPYRIGHT FOOTER -->
        <div class="bg-white p-3 text-slate-400 text-sm text-center ">© {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}</div>
    </section>



    <script>
const sideBarLinks = [
    {
        id: "111",
        name: "Dashboard",
        icon: `<i class="fa-duotone fa-objects-column"></i>`,
        path: "/home",
        active: false,
    },
    {
        id: "112",
        name: "Trading",
        icon: `<i class="fa-duotone fa-chart-mixed-up-circle-dollar"></i>`,
        path: "/trading",
        active: false,
    },
    {
        id: "113",
        name: "crypto",
        icon: `<i class="fa-duotone fa-circle-dollar"></i>`,
        path: "/crypto",
        active: false,
    },
    {
        id: "116",
        name: "wallet",
        icon: `<i class="fa-duotone fa-wallet"></i>`,
        path: "/wallet",
        active: false,
    },
    {
        id: "114",
        name: "history",
        icon: `<i class="fa-duotone fa-clock-rotate-left"></i>`,
        path: "/history",
        active: false,
    },
    {
        id: "115",
        name: "profile",
        icon: `<i class="fa-duotone fa-user"></i>`,
        path: "/profile",
        active: false,
    },
    {
        id: "116",
        name: "settings",
        icon: `<i class="fa-duotone fa-gear"></i>`,
        path: "/settings",
        active: false,
    },
];

sideBarLinks.forEach((link) => {
    if (link.path === window.location.pathname) {
        link.active = true;
        const pathname = document.querySelectorAll("#pathname");
        for (let i = 0; i < pathname.length; i++) {
            pathname[i].innerHTML = link.name;
        }
    }
    const { id, name, icon, path, active } = link;
    document.getElementById(
        "sideLinks"
    ).innerHTML += ` <a href="${path}" class=" px-4 py-2 rounded-md gap-2  capitalize flex  items-center font-normal w-full md:w-10  md:justify-center lg:justify-start lg:w-full ${
        active === true
            ? "bg-[#3736af] text-white"
            : "text-gray-500 hover:bg-slate-100 "
    }  ">
<span  class="">${icon}</span>
<span class=" flex md:hidden lg:flex">${name}</span>
</a>`;
});

    </script>
</body>

</html>