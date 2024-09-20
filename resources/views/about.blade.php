@extends('layout.app')

@section('content')
    <section class="w-full md:h-[800px] h-[700px]  relative overflow-hidden">
        @include('includes.navbar')

        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/about-hero.svg') }}'); filter: blur(20px);">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center md:h-[700px] h-[500px]">
            <h1 class="md:text-[64px] text-4xl md:leading-[75px] md:w-[892px] pb-1 text-center md:font-bold font-bold">
                Your partner in crafting tailored strategies that propel <span
                    style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    business success
                </span>
            </h1>

            <p class="text-[#545861] z-10 text-lg  md:w-[892px] text-center mt-4 font-medium">
                At the forefront of excellence with unmatched expertise and a commitment to your vision, we lead the way in
                turning ambitions into reality
            </p>
        </div>

    </section>

    <section class="md:px-24 px-5 md:py-24 pt-24">
        <div class="flex md:flex-row flex-col  justify-between">
            <div class="md:w-[470px] flex flex-col items-center justify-center md:items-start md:justify-start">
                <h4 class="font-bold text-4xl md:text-left text-center">About us</h4>
                <p class="text-[#545861] font-medium pt-3 pb-8 md:text-left text-center">At People Advisor, we are a general
                    consulting company based
                    in Nigeria, dedicated to offering comprehensive advisory services across Human Resources, Social Media,
                    Product Development, Accounting, and Growth.
                    We play a vital role in providing expert guidance and support to businesses at various stages of their
                    operations.
                    With our extensive experience and deep understanding of different industries, we help businesses
                    navigate challenges, capitalize on opportunities, and achieve their strategic goals effectively</p>

                <a href="#"
                    class="text-white bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-1 w-fit button">
                    <p class="text-lg">Explore our services</p>
                    <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-right-up-line text-2xl icon"></i>
                    </div>
                </a>
            </div>

            <div class="flex flex-wrap mt-20 md:mt-0 md:w-1/2 gap-10">
                <div class="md:w-[45%]">
                    <div class="my-5 border md:w-[90%] border-[#C3C4CB]"></div>
                    <h4 style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                        class="font-bold text-2xl md:w-fit mb-4 text-center md:text-left">Our Mission</h4>
                    <p class="text-[#545861] font-medium text-center md:text-left">To offer affordable consulting that
                        fosters growth, inclusivity,
                        and fair work opportunities</p>
                </div>

                <div class="md:w-[45%]">
                    <div class="my-5 border md:w-[90%] border-[#C3C4CB]"></div>
                    <h4 style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                        class="font-bold text-2xl md:w-fit mb-4 text-center md:text-left">Our Vision</h4>
                    <p class="text-[#545861] font-medium text-center md:text-left">
                        To lead in providing accessible expertise that drives sustainable progress and decent work for all
                    </p>
                </div>

                <div class="md:w-[45%]">
                    <div class="my-5 border md:w-[90%] border-[#C3C4CB]"></div>
                    <h4 style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                        class="font-bold text-2xl md:w-fit mb-4 text-center md:text-left">
                        Our Approach
                    </h4>
                    <p class="text-[#545861] font-medium text-center md:text-left">
                        At People Advisor, we prioritize a client-centric approach, working closely with businesses to
                        understand their unique needs and challenges
                    </p>
                </div>

                <div class="md:w-[45%]">
                    <div class="my-5 border md:w-[90%] border-[#C3C4CB]"></div>
                    <h4 style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                        class="font-bold text-2xl md:w-fit mb-4 text-center md:text-left">
                        Why Choose Us?
                    </h4>

                    <p class="text-[#545861] font-medium text-center md:text-left">
                        We stand out as a trusted partner for businesses seeking to optimize their processes, enhance
                        performance, and drive sustainable growth
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-5">
        <div class="mt-20 mb-28 flex md:flex-row flex-col md:justify-between gap-5">
            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-full md:w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    6+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Years of
                    experience</p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-full md:w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    80+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Project completed</p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-full md:w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    20+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">
                    Trusted companies
                </p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-full md:w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    50+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Client
                    satisfaction</p>
            </div>
        </div>
    </section>

    @include('includes.cta')


    @include('includes.testimonial')
@endsection()
