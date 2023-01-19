@extends('layout.layout')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2 py-16 ">
            <div class="bg-blue-300 px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="userName"
                        placeholder="Full Name" />
                    @if ($errors->has('userName'))
                        <span class="text-danger">{{ $errors->first('userName') }}</span>
                    @endif
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" />
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                        placeholder="Password" />
                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password" placeholder="Confirm Password" />
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <button type="submit"
                        class="w-full text-center py-3 rounded bg-green-400 text-white hover:bg-green-100 focus:outline-none my-1">Create
                        Account</button>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
            </div>
            </form>
            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="../login/">
                    Log in
                </a>.
            </div>
        </div>
    </div>
    </main>
@endsection
