@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 p-6 bg-white rounded">
            @if (session('status'))
                {{ session('status') }}
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
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
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded @error('password')border-red-500 @enderror">
                    @error('password')
                        <div class=" text-red-500 text-sm mt-2">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="submit" name="submit" id="submit"
                        class="bg-blue-500 border-2 w-full p-4 rounded text-white text-xl" value="Login">
                </div>
            </form>
        </div>
    </div>

@endsection
