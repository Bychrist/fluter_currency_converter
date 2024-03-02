@extends('layouts.adminlayout')

@section('content')




<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Profile Information</h1>
                                <h3 class="h4 text-black-500 mb-4" style="font-size:13px">Update your account's profile information and email address.</h3>
                            </div>
                            <form class="user" method="post" action="{{ route('profile.update') }}">
                                <div class="form-group row">
                                   @csrf
                                    @method('patch')
                                    <div class="col-sm-12">
                                        <x-text-input type="text" class="form-control form-control-user"
                                            placeholder=" Name"  name="name"   :value="old('name', $user->name)"   />
                                               <x-input-error class="mt-2" style="color: red;font-size:11px" :messages="$errors->get('name')" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <x-text-input type="text" class="form-control form-control-user"
                                        placeholder="Email Address" id="email" name="email"  :value="old('email', $user->email)"  />
                                         <x-input-error class="mt-2" style="color: red;font-size:11px" :messages="$errors->get('email')" />
                                </div>

                                <button class="btn btn-primary btn-user btn-block">
                                    Save Info
                                </button>



                            </form>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Password</h1>
                                <h3 class="h4 text-black-500 mb-4" style="font-size:13px">Ensure your account is using a long, random password to stay secure.</h3>
                            </div>
                            <form method="post" class="user" action="{{ route('password.update') }}">
                                     @csrf
                                     @method('put')
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <x-text-input type="text" class="form-control form-control-user"
                                            placeholder=" current password" id="current_password" name="current_password" type="password"  autocomplete="current-password"/>
                                             <x-input-error class="mt-2" style="color: red;font-size:11px" :messages="$errors->get('current_password')" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <x-text-input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="new password" id="password" name="password" autocomplete="new-password"/>
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" style="color: red;font-size:11px" />
                                </div>
                                <div class="form-group">
                                    <x-text-input class="form-control form-control-user"
                                        placeholder="confirm password" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" style="color: red;font-size:11px" />
                                </div>

                                <button class="btn btn-primary btn-user btn-block">
                                    Save Password
                                </button>


                            </form>
                            <hr>

                        </div>
                    </div>

                     <div class="col-lg-5 d-none d-lg-block bgg-register-image"></div>
                </div>
            </div>
        </div>

</div>
















            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div> --}}


@endsection
