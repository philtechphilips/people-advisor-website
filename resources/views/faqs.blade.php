@extends('layout.app')

@section('content')
    <section class="w-full md:h-[600px] h-[500px] mb-10  relative overflow-hidden">
        @include('includes.navbar')

        <div class="relative z-10 flex flex-col items-center justify-center md:h-[600px] h-[500px]">
            <h1 class="md:text-[64px] text-4xl md:leading-[75px] md:w-[892px] pb-1 text-center md:font-bold font-bold">
                Frequently asked questions
            </h1>

            <p class="text-[#545861] z-10 text-lg  md:w-[629px] text-center mt-4 font-medium">
                Get the detailed insights you need with clear and concise answers to the most common questions about our
                services
            </p>
        </div>
    </section>


    <section class="w-full md:px-24 px-5 pb-24">
        <h6 class="text-lg font-medium text-[#161616] mb-12">General Information</h6>

        <div class="faq-container mb-16">
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
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Human Resource Advisory</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What HR services do you offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">How can your HR advisory services benefit my business?
                    </h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Accounting Advisory</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What accounting services do you offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">How can your accounting advisory services benefit my
                        business?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Growth Advisory</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What growth services do you offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">How can your growth advisory services benefit my
                        business?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Product Advisory</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What product services do you offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">How can your product advisory services benefit my
                        business?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Social Media Advisory</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">What social media services do you offer?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">How can your social media advisory services benefit my
                        business?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Engagement</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">How do I get started with your consulting services?
                    </h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>

            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 mt-6 rounded-2xl" data-faq="2">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] font-bold md:text-xl">What is the typical engagement process like?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        Our HR expertise is designed to optimize your HR functions, enhance employee engagement, and
                        mitigate potential risks, contributing to overall business success.
                    </p>
                </div>
            </div>
        </div>

        <h6 class="text-lg font-medium text-[#161616] mb-12">Fees and Pricing</h6>

        <div class="faq-container mb-12">
            <div class="faq-item border border-[#C3C4CB] md:px-10 px-6 py-4 rounded-2xl" data-faq="1">
                <div class="flex justify-between items-center cursor-pointer">
                    <h1 class="text-[#272A30] md:text-xl font-bold">How do you charge for your services?</h1>
                    <div class="arrow-container bg-[#E6E6E699] rounded-lg p-2 w-10 h-10 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line text-2xl"></i>
                    </div>
                </div>
                <div class="faq-content md:pr-20 pr-2 mt-2 hidden">
                    <p class="text-[#7c7c7c]">
                        We offer a comprehensive range of HR services, including HR consulting, recruitment, talent
                        management, benefits administration, and compliance support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    @include('includes.testimonial')
    {{-- Testimonial --}}
@endsection()
