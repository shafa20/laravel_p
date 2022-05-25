@extends('layouts.adminlayout')

@section('body')
  
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
  <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
  <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

   <!-- Session Status -->
   <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />


  <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div form-group>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" placeholder="Enter Name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email"  placeholder="Enter Email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4 form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password"  placeholder="Enter password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 form-group">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation"  placeholder="Confirm Password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>

            <div class="flex items-center justify-end mt-4">

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                
               
            </div>
        </form>
  

  
</div><!-- login-wrapper -->
</div><!-- d-flex -->

@endsection