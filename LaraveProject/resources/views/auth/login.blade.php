@extends('layouts.loginlayout')
@section('content')
    <!-- Outer Row -->
        <div class="row justify-content-center">
           <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user"  method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">

                                            <input type="email" class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." id="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                                              <x-input-error :messages="$errors->get('email')" style="color:red;font-size:11px" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                 placeholder="Password" id="password"  name="password" required autocomplete="current-password" />
                                              <x-input-error :messages="$errors->get('password')" style="color:red;font-size:11px" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                             <div class="custom-control custom-checkbox small">
                                               <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                               </label>

                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block">
                                            {{ __('Log in') }}
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                         @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection





