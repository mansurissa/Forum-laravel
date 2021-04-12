@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 p-6 bg-white rounded">
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <div class="mb-4">
                    <textarea type="text" name="body" id="name" placeholder="Enter your Post body"
                        value="{{ old('body') }}"
                        class="bg-gray-100 h-60 border-2 w-full p-4 rounded @error('body')border-red-500 @enderror"></textarea>
                    @error('body')
                        <div class=" text-red-500 text-sm mt-2">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="submit" name="submit" id="submit"
                        class="bg-blue-500 border-2  p-4 rounded text-white text-xl" value="Post">
                </div>
            </form>
            <div>
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-3">
                            <div class="flex items-center">
                                <a href="" class=" mr-4 font-bold">{{ $post->user->name }}</a>
                                <span class="text-gray-400 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="mb-1">{{ $post->body }}</p>
                            <div class="flex items-center">
                                <form action="" method="POST">
                                    <button type="submit" class="text-blue-500">like</button>
                                </form>
                                <form action="" method="POST" class="ml-2">
                                    <button type="submit" class="text-blue-500">Unlike</button>
                                </form>
                            </div>
                        </div>
                    @endforeach


                    {{ $posts->links() }}
                @else
                    <p>No post yet</p>
                @endif
            </div>
        </div>
    </div>

@endsection
