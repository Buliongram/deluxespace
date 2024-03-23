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

<body class="bg-gray-200">

    <section class="rounded-md bg-white max-w-[27rem] w-full mx-auto p-4  flex flex-col gap-6 fixed top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%]">
        <header class=" flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-3 font-bold text-3xl">
                <span><img class="w-[50px]" src="/img/logoMain.png" alt="icon"></span><span><a href="">{{config('app.name')}}</a></span>
            </div>
            <div class="font-bold text-lg capitalize">sign up your account</div>
        </header>
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-1">
            @csrf

            <div class="flex gap-2 flex-col">
                <label for="name" class="text-sm">{{ __('Name') }} <span class="text-red-500 text-lg">*</span></label>

                <div class="col-md-6">
                    <input id="name" type="text" class="border border-gray-200 w-full rounded-md py-2 px-4 placeholder:text-sm outline-none" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="text-sm text-red-500 font-normal" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex gap-2 flex-col">
                <label for="email" class="text-sm">{{ __('Email Address') }} <span class="text-red-500 text-lg">*</span></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="border border-gray-200 w-full rounded-md py-2 px-4 placeholder:text-sm outline-none" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="text-sm text-red-500 font-normal" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="flex gap-2 flex-col">
                <label for="password" class="text-sm">{{ __('Password') }} <span class="text-red-500 text-lg">*</span></label>

                <span class="border border-gray-200 w-full rounded-md flex items-center px-4">
                    <input id="password" type="password" class="py-2 placeholder:text-2xl outline-none w-full" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="text-sm text-red-500 font-normal" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                    <span class="text-gray-600">
                        <i class="fa-light fa-eye"></i>
                    </span>
                </span>
            </div>

            <div class="flex gap-2 flex-col">
                <label for="password-confirm" class="text-sm">{{ __('Confirm Password') }} <span class="text-red-500 text-lg">*</span></label>

                <span class="border border-gray-200 w-full rounded-md flex items-center px-4">
                    <input id="password-confirm" type="password" class=" py-2 placeholder:text-2xl outline-none w-full" name="password_confirmation" placeholder="......" required autocomplete="new-password">
                    <span class="text-gray-600">
                        <i class="fa-light fa-eye"></i>
                    </span>
                </span>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="w-full bg-primary text-white rounded-md text-sm font-semibold p-2 mt-5">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
            <div class="font-normal text-gray-400 text-center text-sm ">
                Already have an account? <a class="text-primary font-semibold" href="/login">Sign In</a>
            </div>
        </form>
    </section>
</body>

</html>