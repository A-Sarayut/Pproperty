@extends('layout')

@section('title', 'Home Page')

@section('content')
    <div>
        <section
            class="section-1 relative flex flex-col gap-8 px-4 sm:px8 lg:px-24 2xl:px-96 justify-center items-center text-center w-full h-[560px]">
            <div class="absolute bg-cover bg-center inset-0 z-0 blur-xs brightness-75"
                style="background-image: url('{{ asset('images/pattaya-view.jpg') }}')">
            </div>

            <div class="z-10 text-white">
                <h1 class="font-bold text-3xl xs:text-4xl sm:text-5xl md:text-7xl">Discover Your Dream <br class=" ">
                    Property in Pattaya</h1>
                <p class=" text-sm lg:text-lg mt-2 lg:mt-4 sm:px-16">Explore a diverse selection of stunning properties in
                    the
                    heart of Pattaya. Whether you're
                    looking for a
                    vacation
                    home or a permanent residence, we have the perfect options for you.
                </p>
            </div>

            <div class="flex gap-2 z-10">
                <a href="#"
                    class="rounded-md bg-primary-600 bg-gradient-to-t px-3.5 py-2.5 text-sm font-semibold shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
                    Explore
                </a>
                <a href="#"
                    class="rounded-md text-sm px-3.5 py-2.5 font-semibold text-white outline-1 outline-white hover:underline">
                    Learn More
                </a>
            </div>
        </section>

        <section
            class="section-2 bg-primary-400 relative flex flex-col gap-4 sm:gap-8 p-4 md:p-16 justify-center items-center text-center w-full">
            <div class="px-4 sm:px8 lg:px-24 2xl:px-96">
                <h2 class="font-bold text-2xl xs:text-3xl sm:text-4xl md:text-5xl">Discover Our Top 3 Featured Properties
                    in Stunning Pattaya </h2>
            </div>

            <div class="grid grid-flow-col grid-rows-3 lg:px-16 lg:grid-rows-1 gap-8 mt-8">
                <x-card-icon icon="heroicon-o-squares-2x2"
                    title="Explore Luxurious Living Spaces Tailored for Your Lifestyle"
                    description="Experience the perfect blend of comfort and elegance in these exclusive homes."
                    urlText="Discover" url="#" />

                <x-card-icon icon="heroicon-o-home-modern"
                    title="Stunning Oceanfront Villa with Breathtaking Views and Modern Amenities"
                    description="This exquisite villa offers unparalleled luxury and a serene coastal lifestyle."
                    urlText="Discover" url="#" />

                <x-card-icon icon="heroicon-o-building-office-2"
                    title="Chic Urban Apartment in the Heart of Pattaya's Vibrant Community"
                    description="Enjoy modern living with easy access to shopping, dining, and entertainment."
                    urlText="Discover" url="#" />
            </div>
        </section>

        <section
            class="section-3 bg-secondary-400 relative flex flex-col gap-4 sm:gap-8 p-4 md:p-16 justify-center items-center text-center w-full">
            <div class="px-4 sm:px8 lg:px-24 2xl:px-96">
                <h2 class="font-bold text-2xl xs:text-3xl sm:text-4xl md:text-5xl">Discover the Simple Steps to Buying Your
                    Dream Property in Pattaya </h2>
            </div>

            <div class="grid grid-flow-col grid-rows-3 lg:px-16 lg:grid-rows-1 gap-8 mt-8">
                <x-card-icon icon="heroicon-o-bookmark-square" title="Your Guide to a Seamless Property Purchase Experience"
                    description="Follow our straightforward process to secure your ideal property effortlessly."
                    urlText="Learn More" url="#" />

                <x-card-icon icon="heroicon-o-magnifying-glass-circle"
                    title="Step 1: Explore Our Listings to Find Your Perfect Match"
                    description="Browse through our curated selection of properties tailored to your needs."
                    urlText="Browse" url="#" />

                <x-card-icon icon="heroicon-o-clock"
                    title="Step 2: Schedule a Viewing to Experience the Property Firsthand"
                    description=" Book an appointment to visit and explore your potential new home."
                    urlText="Schedule" url="#" />
            </div>
        </section>
    </div>
@endsection
