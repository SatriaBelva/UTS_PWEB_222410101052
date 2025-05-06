@extends('Layout.app')
@section('content')
<h1 class="mb-5">Daftar Mata Kuliah</h1>
<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2">
    @foreach ($matkul as $matkul)
    <article class="hover:scale-105 transition ease-in-out p-6 bg-white rounded-lg border border-gray-200 shadow-md ">
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <span class="hover:scale-110 transition text-primary-800 text-xs font-medium inline-flex items-center pl-0.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                <a href="https://ilkom.unej.ac.id/index.php/sistem-informasi/">{{ $matkul['category'] }}</a>
            </span>
            <span class="text-sm">{{ $matkul['created_at'] }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
            <a href="#">{{ $matkul['title'] }}</a>
        </h2>
        <a href="https://ilkom.unej.ac.id/index.php/sistem-informasi/">
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ \Illuminate\Support\Str::limit($matkul['body'], 200) }}</p>
        </a>
        
        <div class="flex justify-between items-center">
            <a href="https://ilkom.unej.ac.id/index.php/sistem-informasi/" class="hover:scale-110 transition inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                Read more
                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>

    </article>
    @endforeach
</div>
@endsection