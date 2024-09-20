@extends('layout.app')

@section('content')
    <section class="w-full md:h-[600px] h-[500px] md:mb-10  relative overflow-hidden">
        @include('includes.navbar')

        <div class="relative z-10 flex flex-col items-center justify-center md:h-[600px] h-[500px]">
            <h1 class="md:text-[64px] text-4xl md:leading-[75px] md:w-[892px] pb-1 text-center md:font-bold font-bold">
                Let’s work together
            </h1>

            <p class="text-[#545861] z-10 text-lg  md:w-[629px] text-center mt-4 font-medium">
                Get the detailed insights you need with clear and concise answers to the most common questions about our
                services
            </p>
        </div>
    </section>

    <section class="w-full md:px-24 px-5 md:py-24 pb-24">
        <div class="flex md:flex-row flex-col justify-between">
            <div class="w-[367px]">
                <h4 class="text-[#161616] mb-5">Get in touch</h4>
                <a href="mailto:Hello@peopleadvisor.org" class="flex md:w-[367px] items-center gap-3 mb-5">
                    <img src="{{ asset('images/email.svg') }}" alt="">
                    <p class="font-bold underline">Hello@peopleadvisor.org</p>
                </a>

                <a href="tel:+2347079299548" class=" md:w-[367px] flex items-center gap-3 mb-5">
                    <img src="{{ asset('images/call.svg') }}" alt="">
                    <p class="font-bold underline">+234 707-929-9548</p>
                </a>

                <div class="flex md:w-[367px] items-center gap-3 mb-5">
                    <img src="{{ asset('images/location.svg') }}" alt="">
                    <p class="font-bold">3, Oyebamiji Street, Winners Way, Bashorun, Ibadan, Nigeria</p>
                </div>
            </div>

            <form action="">
                <div class="md:w-[600px] bg-[#F7F7F7] md:p-16 p-8 rounded-[32px]">
                    <h1 class="font-bold text-2xl text-[#161616]">Send Us a Message</h1>
                    <p class="text-[#7c7c7c] font-medium mt-2">Have a specific question, request, or need assistance with
                        professional tasks? Fill out the form below, and we'll get back to you as soon as possible</p>

                    <div class="flex flex-col gap-1 mt-16">
                        <label for="name">Name</label>
                        <input type="text"
                            class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="Full name">
                    </div>

                    <div class="flex flex-col gap-1 mt-6">
                        <label for="name">Email</label>
                        <input type="email"
                            class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="you@company.com">
                    </div>

                    <div class="flex flex-col gap-1 mt-6">
                        <label for="name">Message</label>
                        <textarea rows="3" class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="Write a message..."></textarea>
                    </div>
                </div>

                <h6 class="font-bold mb-2 mt-12">Services</h6>
                <div class="flex flex-wrap justify-between md:w-[600px]">
                    <div class="flex gap-1 md:w-52 items-start">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Human Resources Consulting
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Product Development Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Social Media Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Growth Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Accounting Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="" id="">
                        <p class="text-lg text-[#272A30] font-medium">
                            Expert Task Support
                        </p>
                    </div>
                </div>
                <button type="submit" class="px-6 py-3 bg-[#075097] rounded-[32px] w-full text-white mt-12">Send
                    message</button>
            </form>
        </div>
    </section>
@endsection()
