@extends('Layouts.app')
@section('content')

<div class="m-auto text-center w-4/5">
    <div class="border-b border-gray-300 py-15">
        <h1 class="text-5xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="gap-20 w-4/5 mx-auto py-15 sm:grid grid-cols-2 border-gray-50 border-b">
    <div>
        <img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585_960_720.jpg" width="500">
   </div>
   <div>
            <h2 class="text-5xl pb-4 text-gray-900 font-bold">
                Learn to code PHP
            </h2>
            <span class="text-gray-600">
                By <span class="text-gray-800 font-bold italic">Code with Us</span>, 3 day ago
            </span>
            <p class="text-gray-800 pt-8 pb-10 font-light text-xl leading-7"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa recusandae alias 
                architecto doloribus praesentium deserunt? Voluptatum eligendi illum corporis
                 quidem voluptatem voluptate quod praesentium alias velit! Minima architecto 
            </p>
            <a href="" class="uppercase text-gray-50 bg-blue-600 text-lg py-4 px-8 font-extrabold rounded-3xl">
                Keep Reading
            </a>
        </div>
    

</div>

@endsection