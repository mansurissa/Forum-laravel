@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 p-6 bg-white rounded">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}"
                        class="bg-gray-100 border-2 w-full p-4 rounded @error('name') border-red-500 @enderror">
                    @error('name')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="name" placeholder="Enter your email" value="{{ old('email') }}"
                        class="bg-gray-100 border-2 w-full p-4 rounded @error('email') border-red-500 @enderror">
                    @error('email')
                        <div class=" text-red-500 text-sm mt-2">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="name" placeholder="Enter your Username"
                        value="{{ old('username') }}"
                        class="bg-gray-100 border-2 w-full p-4 rounded @error('username')border-red-500 @enderror">
                    @error('username')
                        <div class=" text-red-500 text-sm mt-2">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded @error('password')border-red-500 @enderror">
                    @error('password')
                        <div class=" text-red-500 text-sm mt-2">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_comfirmation" class="sr-only">Passwor again</label>
                    <input type="password" name="password_comfirmation" id="password_comfirmation"
                        placeholder="Repeat your Password " class="bg-gray-100 border-2 w-full p-4 rounded">
                </div>
                <div class="mb-4">
                    <input type="submit" name="submit" id="submit"
                        class="bg-blue-500 border-2 w-full p-4 rounded text-white text-xl" value="Register">
                </div>
            </form>
        </div>
    </div>

@endsection
