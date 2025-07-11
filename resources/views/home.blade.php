@extends('layout')

@section('title', 'Home Page')

@section('content')

    <section
        class="section-1 outline-1 flex flex-col gap-8 px-8 lg:px-24 2xl:px-96 justify-center items-center text-center w-full h-[560px]">
        <div>
            <h1 class="font-bold text-3xl xs:text-4xl sm:text-5xl md:text-7xl">Discover Your Dream <br class=" ">
                Property in Pattaya</h1>
            <p class="text-sm lg:text-lg mt-2 lg:mt-4">Explore a diverse selection of stunning properties in the heart of Pattaya. Whether you're
                looking for a
                vacation
                home or a permanent residence, we have the perfect options for you.
            </p>
        </div>


        <div class="flex gap-2">
            <a href="#"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Explore
            </a>
            <a href="#"
                class="rounded-md text-sm px-3.5 py-2.5 font-semibold text-indigo-500 hover:underline">
                 Learn More
            </a>
        </div>
    </section>


@endsection
