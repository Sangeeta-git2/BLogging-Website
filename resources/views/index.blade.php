@extends('Layouts.app')
@section('content')
<div class="grid grid-cols-1 background-image m-auto  ">
    <div class="flex pt-10 text-gray-100 ">
        
        <div class=" m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
            
            <h1 class="sm:text-yellow-400 text-5xl uppercase font-bold pb-14 ">
                Grab your technical knowledge here

            </h1>
            <a href="/blog" class="bg-gray-50 text-center text-gray-700 px-4 py-2 text-xl font-bold uppercase">
                Read More
            </a>

        </div> 
    </div>
</div>

<div class="gap-20 sm:grid grid-cols-2 mx-auto py-15 w-25 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585_960_720.jpg">
    </div>
    <div class="sm:m-auto m-auto text-left w-4/5 block">
        <h2 class="Font-extrabold text-gray-500 text-4xl">
            Is it difficult to become the web developer?
        </h2>
        <p class="text-gray-600 py-8 text-xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id omnis
             veniam dolore suscipit quibusdam adipisci perferendis maxime quasi n
        </p>
        <p class="text-gray-400 text-xl font-extrabold pb-9">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id omnis
             veniam dolore suscipit quibusdam adipisci perferendis maxime quasi 
        </p>
        <a href="/blog" class="bg-blue-600 uppercase rounded-3xl
         text-gray-200 text-s font-extrabold px-8 py-3">
            Find Out More
        </a>
    </div>
</div>

<div class="p-15 bg-black text-center text-white">
    <h2 class="pb-5 text-l text-2xl">
        I am an expert in..
    </h2>
    <span class="text-4xl py-1 font-extrabold">
        Digital Marketing<br>
    </span>
    <span class="text-4xl py-1 font-extrabold">
    UX Design <br>
    </span>
    <span class="text-4xl py-1 font-extrabold">
    Graphics Designing <br>
    </span>
    <span class="text-4xl py-1 font-extrabold">
        Web Development
    </span>

</div>
@endsection