@extends('layout.app')

@section('content')
    <section class="w-full md:h-[800px] h-[700px] relative overflow-hidden">
        @include('includes.navbar')

        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/peoples-advisor-hero-bg.png') }}'); filter: blur(20px);">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center md:h-[700px] h-[500px]">
            <h1 class="md:text-[80px] text-4xl md:leading-[90px] pb-1 text-center md:font-semibold font-bold"
                style="
        background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      ">
                Consulting solutions
            </h1>
            <h1 class="md:text-[80px] md:leading-[90px] text-4xl z-10 md:font-semibold font-bold pb-1 text-center">for every
                aspect of</h1>
            <h1 class="md:text-[80px] md:leading-[90px] text-4xl z-10 md:font-semibold font-bold text-center">your business
            </h1>

            <p data-aos="fade-up" data-aos-duration="500"
                class="text-[#545861] z-10 text-xl md:w-[700px] text-center mt-4 font-medium">We deliver customized
                consulting services that elevate your business and help you navigate challenges with confidence</p>
        </div>

        <div class="absolute hidden z-0 md:block bottom-0 left-0 w-full h-[800px]">
            <img id="animatedImage" class="fade-in z-0 w-full h-[800px]" src="{{ asset('images/Name=05.png') }}"
                alt="" style="transition: opacity 1s;">
        </div>
    </section>

    <section class="w-full flex flex-col gap-6 py-32">
        <div class="marquee-container">
            <div class="marquee">
                <div class="marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>

                <!-- Duplicate content for a seamless loop -->
                <div class="ml-6 marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="marquee-container">
            <div class="marquee-2">
                <div class="marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>

                <!-- Duplicate content for a seamless loop -->
                <div class="ml-6 marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="marquee-container">
            <div class="marquee">
                <div class="marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>

                <!-- Duplicate content for a seamless loop -->
                <div class="ml-6 marquee-content">
                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Performance Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Compensation and Job Grading</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Payroll Management</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">HR Policy and Strategy</p>
                    </div>

                    <div class="py-2 px-6 rounded-[32px]"
                        style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                        <p class="text-white font-medium text-xl">Learning and Development</p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="md:px-24 px-5">
        <h1
            class="2xl:text-5xl text-center md:text-left md:text-[42px] text-2xl text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px] max-w-[1250px]">
            We deliver tailored solutions that help businesses navigate challenges, capitalize on opportunities, and achieve
            their goals</h1>

        <div class="border-t-[1.5px] my-8 border-t-[#C3C4CB]"></div>

        <div class="flex md:flex-row flex-col items-center justify-between">
            <p class="text-[#7C7C7C] text-xl md:w-[651px] text-center md:text-left">With our deep industry expertise and
                client-centric approach, we
                stand out as trusted partners in your journey toward growth and excellence.</p>

            <a href="/about-us"
                class="text-white bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Know more</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>

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

    <section class="md:px-24 relative px-5 bg-gray-50 py-28">
        <h1
            class="2xl:text-5xl text-center md:text-left md:text-[42px] text-2xl text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px] max-w-[500px]">
            We offer several services to meet your needs
        </h1>
        <div class="flex md:flex-row z-10 relative flex-col mt-6 items-center justify-between">
            <p class="text-[#7C7C7C] text-xl md:w-[651px] text-center md:text-left">
                Comprehensive consulting services designed to elevate your business operations and drive sustainable growth
            </p>

            <a href="/services"
                class="text-white z-10 relative bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Explore our services</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>

        <div class="relative pt-28 z-10">
            <div
                class="flex md:flex-row flex-col z-10 cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
                <h1 class="text-[#191B1F] font-bold text-2xl text-center md:text-left md:w-[400px]">01. Human Resources
                    Consulting</h1>

                <p class="md:w-[470px] text-[#545861] font-medium text-center md:text-left">Enhancing workforce efficiency
                    with tailored HR Solutions,
                    from Payroll Management to Employee Engagement, ensuring your team thrives in a supportive environment
                </p>
                <a href="#"
                    class="mt-5 hidden md:mt-0 rounded-[32px] gap-6 md:flex items-center px-6 pr-4 py-2 w-fit">
                    <div
                        class="arrow-container border border-[#3B3C45] w-12 rounded-full h-12 flex items-center justify-center hover:bg-[#075097] hover:border-none">
                        <i class="ri-arrow-right-up-line text-2xl arrow-icon"></i>
                    </div>
                </a>
            </div>

            <div
                class="flex md:flex-row flex-col cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
                <h1 class="text-[#191B1F] font-bold text-center md:text-left text-2xl md:w-[400px]">02. Social Media
                    Advisory</h1>

                <p class="md:w-[470px] text-[#545861] text-center md:text-left font-medium">
                    Maximizing your online presence with strategic social media management, custom content creation, and
                    community engagement to amplify your brand's voice and reach
                </p>
                <a href="#"
                    class="mt-5 md:mt-0 hidden rounded-[32px] gap-6 md:flex items-center px-6 pr-4 py-2 w-fit">
                    <div
                        class="arrow-container border border-[#3B3C45] w-12 rounded-full h-12 flex items-center justify-center hover:bg-[#075097] hover:border-none">
                        <i class="ri-arrow-right-up-line text-2xl arrow-icon"></i>
                    </div>
                </a>
            </div>

            <div
                class="flex flex-col md:flex-row cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
                <h1 class="text-[#191B1F] text-center md:text-left font-bold text-2xl md:w-[400px]">03. Accounting Advisory
                </h1>

                <p class="md:w-[470px] text-center md:text-left text-[#545861] font-medium">
                    Empowering financial success with expert accounting guidance, from tax planning and compliance to
                    financial reporting, tailored to your business needs
                </p>
                <a href="#"
                    class="mt-5 hidden md:mt-0 rounded-[32px] gap-6 md:flex items-center px-6 pr-4 py-2 w-fit">
                    <div
                        class="arrow-container border border-[#3B3C45] w-12 rounded-full h-12 flex items-center justify-center hover:bg-[#075097] hover:border-none">
                        <i class="ri-arrow-right-up-line text-2xl arrow-icon"></i>
                    </div>
                </a>
            </div>


            <div
                class="flex md:flex-row flex-col cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
                <h1 class="text-[#191B1F] font-bold text-2xl text-center md:text-left md:w-[400px]">04. Product Development
                    Advisory</h1>

                <p class="md:w-[470px] text-center md:text-left text-[#545861] font-medium">
                    Driving innovation with comprehensive product development services, from market research to launch
                    planning, ensuring your products meet market demands and exceed expectations
                </p>
                <a href="#"
                    class="mt-5 hidden md:mt-0 rounded-[32px] gap-6 md:flex items-center px-6 pr-4 py-2 w-fit">
                    <div
                        class="arrow-container border border-[#3B3C45] w-12 rounded-full h-12 flex items-center justify-center hover:bg-[#075097] hover:border-none">
                        <i class="ri-arrow-right-up-line text-2xl arrow-icon"></i>
                    </div>
                </a>
            </div>

            <div
                class="flex md:flex-row flex-col cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
                <h1 class="text-[#191B1F] text-center md:text-left  font-bold text-2xl md:w-[400px]">05. Growth Advisory
                </h1>

                <p class="md:w-[470px] text-center md:text-left text-[#545861] font-medium">
                    Unlocking business potential with customized growth strategies, data-driven insights, and strategic
                    partnerships to propel your company toward sustainable expansion and success
                </p>
                <a href="#"
                    class="mt-5 md:mt-0 rounded-[32px] gap-6 hidden md:flex items-center px-6 pr-4 py-2 w-fit">
                    <div
                        class="arrow-container border border-[#3B3C45] w-12 rounded-full h-12 flex items-center justify-center hover:bg-[#075097] hover:border-none">
                        <i class="ri-arrow-right-up-line text-2xl arrow-icon"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="absolute hidden z-0 md:block top-0 left-0 w-full ">
            <img id="serviceAnimated" class="fade-in z-0 w-full" src="{{ asset('images/bg-1.png') }}" alt=""
                style="transition: opacity 1s;">
        </div>
    </section>


    {{-- CTA --}}
    @include('includes.cta')
    {{-- CTA --}}


    <section class="md:px-24 px-5 z-10 relative  pb-28">
        <div class="flex md:flex-row flex-col mt-6 items-center justify-between md:mb-20 mb-16">
            <h1
                class="2xl:text-5xl text-center md:text-left md:text-[42px] text-2xl text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px]">
                Frequently asked questions
            </h1>

            <a href="/faqs"
                class="text-white bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Learn more</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>

        <div class="faq-container">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What services does your company offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our company specializes in providing advisory services across several key areas, including Human
                        Resources, Accounting, Growth Strategy, Product Development, and Social Media Management.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">What makes your company unique?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We are distinguished by our team of seasoned experts who bring diverse experience and specialized
                        knowledge, enabling us to help businesses tackle complex challenges and achieve sustainable growth.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30 font-bold md:text-xl">How do I get started with your consulting services?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Getting started is simple—just contact us to schedule a consultation where we can discuss your
                        business needs and tailor our services accordingly.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30 font-bold md:text-xl">What is the typical engagement process like?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We collaborate closely with our clients to thoroughly understand their needs, develop customized
                        solutions, and implement strategies that drive success.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30]  font-bold md:text-xl pr-5">How do you charge for your services?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our pricing structure is tailored to the specific service, scope, and duration of each project.
                        Please contact us to receive a custom quote that meets your needs.
                    </p>
                </div>
            </div>
        </div>

    </section>

    {{-- Testiomonial --}}
    @include('includes.testimonial')
    {{-- Testiomonial --}}
@endsection

@section('script')
    <script>
        const images = [
            // "{{ asset('images/Name=01.png') }}",
            // "{{ asset('images/Name=02.png') }}",
            "{{ asset('images/Name=03.png') }}",
            "{{ asset('images/Name=04.png') }}",
            "{{ asset('images/Name=05.png') }}"
        ];
        let currentIndex = 0;
        const animatedImage = document.getElementById('animatedImage');

        function switchImage() {
            animatedImage.style.opacity = 0;
            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length;
                animatedImage.src = images[currentIndex];
                animatedImage.style.opacity = .5;
            }, 1000);
        }

        setInterval(switchImage, 4000);
    </script>


    <script>
        const serviceImages = [
            "{{ asset('images/bg-1.png') }}",
            "{{ asset('images/bg-2.png') }}",
            "{{ asset('images/bg-3.png') }}",
            "{{ asset('images/bg-4.png') }}",
            "{{ asset('images/bg-5.png') }}"
        ];
        let serviceIndex = 0;
        const serviceAnimatedImage = document.getElementById('serviceAnimated');

        function switchServiceImage() {
            serviceAnimatedImage.style.opacity = 0;
            setTimeout(() => {
                serviceIndex = (serviceIndex + 1) % serviceImages.length;
                serviceAnimatedImage.src = serviceImages[serviceIndex];
                serviceAnimatedImage.style.opacity = 1;
            }, 1000);
        }

        setInterval(switchServiceImage, 4000);
    </script>


    <script>
        const hoverContainers = document.querySelectorAll('.hover-parent');

        hoverContainers.forEach(container => {
            const arrowIcon = container.querySelector('.arrow-icon');

            container.addEventListener('mouseenter', () => {
                arrowIcon.classList.remove('ri-arrow-right-up-line');
                arrowIcon.classList.add('ri-arrow-right-line');
            });

            container.addEventListener('mouseleave', () => {
                arrowIcon.classList.remove('ri-arrow-right-line');
                arrowIcon.classList.add('ri-arrow-right-up-line');
            });
        });
    </script>
@endsection
