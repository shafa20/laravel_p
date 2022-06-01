@extends('layouts.adminlayout')

@section('body')




<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
  <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> <span class="tx-info">Registration</span> <span class="tx-normal">]</span></div>
  

   <!-- Session Status -->
   <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />


  <form method="POST" action="{{ route('register') }}">
            @csrf
            
             <!-- Full Name -->
             <div form-group>
                <x-label for="fname" :value="__('Full Name')" />

                <x-input id="fname" placeholder="Enter full Name" class="form-control block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus />
            </div>
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

             <!-- For Role -->
             <div class="mt-4 form-group">
                <x-label for="role" :value="__('Role')" />
                <select name="role" id="role" class="form-control" required>
                    <option value="0">---Select Role Type---</option>
                    <option value="1">---Admin---</option>
                    <option value="2">---Vendor---</option>
                    <option value="3">---User---</option>
                </select>
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