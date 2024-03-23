@extends('layouts.signup')

@section('content')
<section class="px-6 py-5">
    <div class="flex flex-col gap-3 items-center">
        <span class="text-xl capitalize font-bold "> sign in </span>
        <span class="text-gray-600 capitalize text-sm">your social campaigns</span>
        <div class="flex flex-col gap-3 w-full">
            <span class="border mt-2 border-gray-400 w-full hover:bg-gray-600 hover:text-white cursor-pointer rounded-md text-[13px] text-gray-600 flex items-center gap-2 justify-center font-normal p-2"> <img src="/img/google.png" width="15" alt="google logo">Sign in with Google</span>
            <span class="border  border-gray-400 w-full hover:bg-gray-600 hover:text-white cursor-pointer rounded-md text-[13px] text-gray-600 flex items-center gap-2 justify-center font-normal p-2"><img src="/img/apple-logo.png" width="15" alt="google logo">Sign in with Apple</span>
        </div>
        <div class="flex items-center gap-4 w-full mt-3">
            <span class=" h-[1px] w-full flex bg-slate-200"></span><span class="w-full text-center text-gray-600 text-[13px]">Or with email</span><span class="h-[1px] w-full flex bg-slate-200"></span>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-3 mt-8">
        @csrf

        <div class="flex gap-2 flex-col">
            <label for="email" class="text-sm">{{ __('Email Address') }} <span class="text-red-500 text-lg">*</span></label>

            <div class="">
                <input id="email" type="email" class="border border-gray-200 w-full rounded-md py-2 px-4 placeholder:text-sm outline-none" name="email" required autocomplete="email" placeholder="demo@example.com" autofocus>

                @error('email')
                <span class="text-sm text-red-500 font-normal" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="flex gap-2 flex-col">
            <label for="password" class="text-sm">{{ __('Password') }} <span class="text-red-500 text-lg">*</span></label>

            <div class="">
                <span class="border border-gray-200 w-full rounded-md flex items-center px-4">
                    <input id="password" type="password" class=" py-2 placeholder:text-2xl outline-none w-full" name="password" required autocomplete="current-password" placeholder="......">
                    <span class="text-gray-600">
                        <i class="fa-light fa-eye"></i>
                    </span>
                </span>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-between mt-3">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
            <a class="text-sm text-primary font-semibold" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>

        <button type="submit" class="w-full bg-primary text-white rounded-md text-sm font-semibold p-2 mt-5">
            {{ __('Login') }}
        </button>

        <div class="font-normal text-gray-400 text-center text-sm ">
            Don't have an account? <a class="text-primary font-semibold" href="/register">Sign Up</a>
        </div>
    </form>
</section>
@endsection