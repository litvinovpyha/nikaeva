@extends('layouts.main')

@section('content')
    <div class="bg-white">
        <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 mt-6 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($courses as $course)
                    <a href="{{ route('mycourses.show', $course->id) }}" class="relative group">
                        <h3 class="text-2xl text-center text-gray-900 mb-2"> {{ $course->name }} </h3>

                        <div class="relative">
                            <img src="{{ asset('storage/' . $course->image) }}" 
                                alt="{{ $course->name }}"
                                class="object-cover w-full bg-gray-200 rounded-md no-modal aspect-square lg:aspect-auto lg:h-80">

                            {{-- Полупрозрачный фон + кнопка по центру --}}
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="px-5 py-2 text-white bg-indigo-600 rounded-lg shadow-lg text-sm">
                                    Перейти
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
