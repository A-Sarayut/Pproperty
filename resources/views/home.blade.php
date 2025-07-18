@extends('layout')

@section('title', 'Pproperty')

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
                    class="rounded-md text-sm px-3.5 py-2.5 font-semibold text-white outline-1 outline-white hover:bg-gray-400">
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

        <section class="section-3 grid lg:grid-flow-col lg:grid-cols-2 xl:grid-cols-5 gap-8 p-4 md:p-16">
            <div class="flex flex-col gap-8 lg:px-16 xl:col-span-3">
                <h3 class="text-lg font-bold">Invest</h3>
                <h2 class="text-2xl lg:text-4xl ">Discover the Benefits of Pattaya Properties</h2>
                <p class="text-neutral-600">Pattaya offers a prime location with stunning beaches and vibrant culture.
                    Investing here not only
                    secures a beautiful home but also a promising financial future.
                </p>
                <div class="grid grid-flow-col grid-rows-2 lg:grid-rows-1 lg:flex-row gap-4 lg:gap-8">
                    <div>
                        <h2 class="text-2xl lg:text-4xl ">Lifestyle</h2>
                        <p class="text-neutral-600">Enjoy a vibrant community and endless activities.</p>
                    </div>
                    <div>
                        <h2 class="text-2xl lg:text-4xl ">Investment</h2>
                        <p class="text-neutral-600">Secure your future with high property value growth.</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <a href="#"
                        class="rounded-md text-sm px-3.5 py-2.5 font-semibold  outline-1 outline-gray-500 hover:bg-gray-300">
                        Learn More
                    </a>
                    <a href="#" class="rounded-md text-sm px-3.5 py-2.5 font-semibold  hover:underline">
                        Sign Up
                    </a>
                </div>

            </div>
            <div class="lg:px-16 xl:col-span-2 bg-cover bg-center rounded-sm mask-alpha mask-l-from-black mask-l-from-50% mask-l-to-transparent"
                style="background-image: url('{{ asset('images/happy-man.jpg') }}')">
            </div>
        </section>

        <section
            class="section-4 bg-secondary-400 relative flex flex-col gap-4 sm:gap-8 p-4 md:p-16 justify-center items-center text-center w-full">
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

                <x-card-icon icon="heroicon-o-clock" title="Step 2: Schedule a Viewing to Experience the Property Firsthand"
                    description="Book an appointment to visit and explore your potential new home." urlText="Schedule"
                    url="#" />
            </div>
        </section>

        <section class="section-5 grid gap-16 p-4 md:p-16">
            <div class="flex flex-col lg:flex-row gap-8 lg:px-16 items-center">
                <h2 class="text-2xl lg:text-4xl">Explore Our Comprehensive Services for Your Property Needs in Pattaya</h2>
                <p class="text-neutral-600 2xl:pe-16">We offer tailored property tours to help you find your dream home. Our
                    expert
                    legal assistance ensures a smooth transaction process. Additionally, we provide investment advice to
                    maximize your returns in the Pattaya real estate market.
                </p>
            </div>
            <div class="grid grid-flow-col grid-rows-3 lg:grid-rows-1 gap-8 lg:px-16">
                <x-card-icon icon="heroicon-o-flag"
                    title="Personalized Property Tours to Discover Your Ideal Home in Pattaya"
                    description="Experience the best properties with our guided tours." urlText="Learn More" url="#"
                    align="start" />

                <x-card-icon icon="heroicon-o-question-mark-circle"
                    title="Expert Legal Assistance for Hassle-Free Property Transactions in Pattaya"
                    description="Our legal team is here to protect your interests." urlText="Sign Up" url="#"
                    align="start" />

                <x-card-icon icon="heroicon-o-document-text"
                    title="Investment Advice to Help You Succeed in Pattaya Real Estate"
                    description="Let us guide you to profitable investment opportunities." urlText="Contact Us"
                    url="#" align="start" />
            </div>
        </section>

        <section class="section-6 grid gap-16 p-4 md:p-16">
            <div class="flex flex-col lg:flex-row gap-8 lg:px-16">
                <h2 class="text-2xl lg:text-4xl">Discover Our Impressive Achievements in Property Sales and Customer
                    Satisfaction</h2>
                <div class="flex flex-col gap-8">
                    <p class="text-neutral-600 2xl:pe-16">We have successfully sold over 1,000 properties, showcasing our
                        expertise in the Pattaya market. Our customer satisfaction rate stands at an impressive 98%,
                        reflecting our commitment to excellence.
                    </p>

                    <div class="flex flex-wrap gap-8 lg:flex-nowrap">
                        <div>
                            <h2 class="text-2xl lg:text-4xl"> 1,000</h2>
                            <p class="text-neutral-600 2xl:pe-16">Properties sold with a proven track record.</p>
                        </div>

                        <div>
                            <h2 class="text-2xl lg:text-4xl"> 98%</h2>
                            <p class="text-neutral-600 2xl:pe-16">Customer satisfaction rate that speaks volumes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:px-16">
                <div class="px-16 bg-cover bg-center rounded-sm h-[160px] w-[100%]  lg:h-[440px] mask-alpha mask-x-from-75% mask-x-to-transparent"
                    style="background-image: url('{{ asset('images/advice.jpg') }}')">
                </div>
            </div>
        </section>

        <section
            class="section-7 bg-primary-400 relative flex flex-col gap-4 sm:gap-8 p-4 md:p-16 justify-center items-center text-center w-full">
            <div class="px-4 sm:px8 lg:px-24 2xl:px-96">
                <h2 class="text-xl xs:text-2xl sm:text-3xl md:text-4xl">"Buying my dream home was a breeze
                    thanks to this company! Their team was incredibly supportive and knowledgeable throughout the entire
                    process."</h2>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-16 h-16 rounded-4xl bg-cover bg-center"
                    style="background-image: url('{{ asset('images/ex-reviewer.jpg') }}')">
                </div>
                <h3 class="text-lg font-bold">Benjamin Hergan</h3>
                <p class="text-neutral-600">Investor, ABC Corp</p>
            </div>
        </section>

        <section
            class="section-8 bg-primary-400 relative flex flex-col gap-4 sm:gap-8 p-4 md:p-16 justify-center items-center text-center w-full">
            <h2 class="text-xl xs:text-2xl sm:text-3xl md:text-4xl">Discover Your Dream Property Today</h2>
            <p class="text-neutral-600">Contact us now to learn more or schedule a personalized tour of our stunning
                properties.</p>
            <div class="flex gap-2">
                <a href="#"
                    class="rounded-md bg-primary-600 bg-gradient-to-t px-3.5 py-2.5 text-sm font-semibold shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
                    Inquire
                </a>
                <a href="#"
                    class="rounded-md text-sm px-3.5 py-2.5 font-semibold  outline-1 outline-gray-500 hover:bg-gray-300">
                    Tour
                </a>
            </div>
        </section>

        <section class="section-9 grid gap-16 p-4 md:p-16">
            <div class="flex flex-col lg:flex-row gap-8 lg:px-16">
                <h2 class="text-2xl lg:text-4xl">Stay Updated on New Properties</h2>
                <div class="flex flex-1 flex-col gap-4">
                    <p class="text-neutral-600 2xl:pe-16">Join our newsletter to receive the latest updates on new
                        properties and market trends in Pattaya. Don't miss out on your dream home!
                    </p>

                    <div>
                        <div class="flex flex-wrap gap-x-4 xl:flex-nowrap">
                            <div class="mt-2">
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-primary-600 sm:text-sm/6" />
                            </div>
                            <div class="mt-3">
                                <a href="#"
                                    class="rounded-md text-nowrap bg-primary-600 bg-gradient-to-t px-3.5 py-2.5 text-sm font-semibold shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                        <p class="text-neutral-600 mt-2 text-xs">By clicking Sign Up, you agree to our Terms and
                            Conditions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-10 p-4 md:p-16">
            <div class="flex flex-col gap-x-8 gap-y-2 lg:px-16 xl:col-span-3">
                <h3 class="text-lg font-bold">Meet</h3>
                <h2 class="text-2xl lg:text-4xl">Our Team</h2>
                <p class="text-neutral-600">
                    Dedicated professionals committed to your success.
                </p>
            </div>
            <div class="grid lg:px-16 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <x-card-profile img-path="images/k-john-doe.jpg" name="John Doe" position="Sales manager"
                    description="Expert in property sales with over 10 years of experience in Pattaya." linked-in-url="#"
                    x-url="#" />
                <x-card-profile img-path="images/k-jane-smith.jpg" name="Jane Smith" position="Marketing Director"
                    description="Creative strategist specializing in digital marketing for real estate." linked-in-url="#"
                    x-url="#" />
                <x-card-profile img-path="images/k-michael-lee.jpg" name="Michael Lee" position="Customer Support"
                    description="Passionate about helping clients navigate their property journeys smoothly."
                    linked-in-url="#" x-url="#" />
                <x-card-profile img-path="images/k-emily-chen.jpg" name="Emily Chen" position="Finance Analyst"
                    description="Ensuring financial accuracy and transparency in all transactions." linked-in-url="#"
                    x-url="#" />
                <x-card-profile img-path="images/k-david-kim.jpg" name="David Kim" position="IT Specialist"
                    description="Maintaining our website and ensuring a seamless user experience." linked-in-url="#"
                    x-url="#" />
                <x-card-profile img-path="images/k-sarah-johnson.jpg" name="Sarah Johnson" position="Operations Manager"
                    description="Streamlining processes to enhance efficiency and client satisfaction." linked-in-url="#"
                    x-url="#" />
            </div>
        </section>

        <section class="section-11 p-4 md:p-16">
            <div class="flex flex-col gap-x-8 gap-y-2 lg:px-16 xl:col-span-3">
                <h2 class="text-2xl lg:text-4xl">We're hiring!</h2>
                <p class="text-neutral-600">
                    Join our dynamic team and grow with us!
                </p>

                <div class="mt-4">
                    <a href="#"
                        class="rounded-md text-sm px-3.5 py-2.5 font-semibold  outline-1 outline-gray-500 hover:bg-gray-300">
                        Open positions
                    </a>
                </div>

            </div>
        </section>

        <section class="section-12 p-4 md:p-16">
            <div class="flex flex-col gap-x-8 gap-y-2 lg:px-16 xl:col-span-3">
                <h2 class="text-2xl lg:text-4xl">FAQs</h2>
                <p class="text-neutral-600">
                    Here are some common questions about buying properties in Pattaya and our services.
                </p>

                <div class="mt-4 flex flex-col gap-4">
                    <x-card-faqs title="What services do you offer?"
                        description="We provide a comprehensive range of services including property listings, market analysis,
                                and legal assistance. Our team is dedicated to guiding you through every step of the buying
                                process. We ensure a seamless experience tailored to your needs." />
                    <x-card-faqs title="Is buying property safe?"
                        description="Yes, buying property in Pattaya is generally safe. We assist you in navigating local laws and regulations to protect your investment. Our expert team will help you understand all necessary precautions." />
                    <x-card-faqs title="What are the fees?"
                        description="Fees can vary based on property type and location. Typically, buyers should expect to pay transfer fees, taxes, and legal costs. We provide a transparent breakdown of all potential expenses." />
                    <x-card-faqs title="How do I start?"
                        description="Starting your property journey is easy! Simply contact our team for a consultation. We’ll discuss your needs and guide you through available options." />
                    <x-card-faqs title="Can I get financing?"
                        description="Yes, financing options are available for foreign buyers in Thailand. We can connect you with trusted financial institutions. Our team will help you understand your financing options." />
                </div>

            </div>
        </section>

        <section class="section-13 p-4 md:p-16">
            <div class="flex flex-col gap-x-8 gap-y-2 lg:px-16 xl:col-span-3">
                <h2 class="text-2xl lg:text-4xl">Still have questions?</h2>
                <p class="text-neutral-600">
                    We're here to help you!
                </p>

                <div class="mt-4">
                    <a href="#"
                        class="rounded-md text-sm px-3.5 py-2.5 font-semibold  outline-1 outline-gray-500 hover:bg-gray-300">
                        Contact
                    </a>
                </div>

            </div>
        </section>
    </div>
@endsection
