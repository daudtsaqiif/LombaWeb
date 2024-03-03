@extends('admin.parent')

@section('content')
    <div class=" p-4 w-full max-w-lg max-h-full mx-auto mt-20">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Sign in to our platform
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('signin.create') }}">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">User Name</label>
                        <input type="name" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-purple-600 hover:bg-purple-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                        in your account</button>
                </form>
            </div>
        </div>
    </div>
@endsection
