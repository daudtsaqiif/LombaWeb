@extends('admin.parent')

@section('content')

@if ($errors->any())
            <div class=" mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <div class=" p-4 w-full max-w-lg max-h-full mx-auto mt-20">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Login to our platform
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="POST" action="{{route('login.store')}}">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 form-label">Your email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 form-control"
                            placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 form-label">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 form-control"
                            required />
                    </div>
                    <button type="submit" name="submit"
                        class="w-full text-white bg-purple-600 hover:bg-purple-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="{{ route('signin.index') }}" class="text-blue-700 hover:underline ">Create
                            account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
