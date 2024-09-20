@extends('layout.app')

@section('content')
    <section class="w-full z-10 md:h-[600px] h-[500px] mb-10  relative overflow-hidden">
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

        <div class="absolute hidden z-0 md:block top-0 left-0 w-full ">
            <img id="faqAnimated" class="fade-in z-0 w-full" src="{{ asset('images/bg-1.png') }}" alt=""
                style="transition: opacity 1s;">
        </div>
    </section>


    <section class="w-full z-10 md:px-24 px-5 pb-24">
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
                        Our accounting advisory services include financial planning, budgeting, auditing, financial
                        reporting, and tax consulting.
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
                        We help you manage your finances effectively, ensure compliance with regulations, and make informed
                        decisions to drive business growth.
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
                        Our growth advisory services encompass strategic planning, market research, competitive analysis,
                        and the development of growth strategies
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
                        Our expertise enables you to identify growth opportunities, formulate strategies, and achieve
                        long-term success.
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
                        We provide comprehensive product advisory services, including product development, launch planning,
                        product positioning, and life cycle management.
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
                        We assist in creating and launching successful products that align with market demands, ensuring
                        that your product offerings are competitive and well-received.
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
                        Our social media advisory services include strategy development, content creation, social media
                        management, and analytics.
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
                        Our services help you build a strong online presence, engage with your target audience effectively,
                        and achieve tangible business results through social media.
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
                        Getting started is simple—just contact us to schedule a consultation where we can discuss your
                        business needs and tailor our services accordingly.
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
                        We collaborate closely with our clients to thoroughly understand their needs, develop customized
                        solutions, and implement strategies that drive success.
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
                        Our pricing structure is tailored to the specific service, scope, and duration of each project.
                        Please contact us to receive a custom quote that meets your needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    @include('includes.testimonial')
    {{-- Testimonial --}}
@endsection()


@section('script')
    <script>
        const serviceImages = [
            "{{ asset('images/bg-1.png') }}",
            "{{ asset('images/bg-2.png') }}",
            "{{ asset('images/bg-3.png') }}",
            "{{ asset('images/bg-4.png') }}",
            "{{ asset('images/bg-5.png') }}"
        ];
        let serviceIndex = 0;
        const serviceAnimatedImage = document.getElementById('faqAnimated');

        function switchServiceImage() {
            serviceAnimatedImage.style.opacity = 0;
            setTimeout(() => {
                serviceIndex = (serviceIndex + 1) % serviceImages.length;
                serviceAnimatedImage.src = serviceImages[serviceIndex];
                serviceAnimatedImage.style.opacity = .5;
            }, 1000);
        }

        setInterval(switchServiceImage, 4000);
    </script>
@endsection()
