@extends('layout.app')

@section('content')
    <section class="w-full h-[800px]  relative overflow-hidden">
        @include('includes.navbar')

        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/peoples-advisor-hero-bg.png') }}'); filter: blur(20px);">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center  h-[700px]">
            <h1 class="md:text-[80px] text-4xl md:leading-[90px] pb-1 text-center md:font-semibold font-bold"
                style="
        background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      ">
                Consulting solutions
            </h1>
            <h1 class="md:text-[80px] md:leading-[90px] text-4xl z-10  md:font-semibold font-bold pb-1 text-center">for every
                aspect of</h1>
            <h1 class="md:text-[80px] md:leading-[90px] text-4xl z-10  md:font-semibold font-bold text-center">your business
            </h1>

            <p class="text-[#545861] z-10 text-xl  md:w-[700px] text-center mt-4 font-medium">We deliver customized
                consulting services that elevate your business and help you navigate challenges with confidence</p>
        </div>

        <div class="absolute hidden z-0 md:block bottom-0 left-0 w-full h-[800px]">
            <img id="animatedImage" class="fade-in z-0 w-full h-[800px]" src="{{ asset('images/Name=01.png') }}"
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

            <a href="#"
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

    <section class="md:px-24 px-5 bg-gray-50 py-28">
        <h1
            class="2xl:text-5xl text-center md:text-left md:text-[42px] text-2xl text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px] max-w-[500px]">
            We offer several services to meet your needs
        </h1>
        <div class="flex md:flex-row flex-col mt-6 items-center justify-between">
            <p class="text-[#7C7C7C] text-xl md:w-[651px] text-center md:text-left">
                Comprehensive consulting services designed to elevate your business operations and drive sustainable growth
            </p>

            <a href="#"
                class="text-white bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Explore our services</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>

        <div class="pt-28">
            <div
                class="flex md:flex-row flex-col cursor-pointer hover:bg-[#F16823] rounded-lg items-center justify-between md:px-4 md:py-6 2xl:px-8 2xl:py-12 mb-8 hover-parent">
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
    </section>

    <section class="md:px-24 px-5  py-28">
        <div class="flex md:flex-row flex-col mt-6 items-center justify-between">
            <h1
                class="2xl:text-5xl text-center md:text-left md:text-[42px] text-2xl text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px]">
                Frequently asked questions
            </h1>

            <a href="#"
                class="text-white bg-[#075097] mt-5 md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Learn more</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>


        </div>
    </section>

    <section class="md:px-24  px-5 py-28 mb-28" style="background: url('{{ asset('images/home-contact-bg.png') }}'); background-repeat: no-repeat; background-size: cover;">
        <div class="md:w-[600px] flex flex-col items-center justify-center md:items-start md:justify-start text-white">
            <h1 class="md:text-5xl text-3xl md:text-left text-center font-bold md:leading-[60px]">Ready to take your
                business to the next level?</h1>
            <p class="mt-4 mb-12 md:text-left text-center">Contact us to learn how our expert advisory services can help
                you achieve your goals. Explore new growth opportunities, People Advisor is here to guide you every step of
                the way.</p>

            <a href="#"
                class="text-white bg-[#075097] md:mt-0 hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Send us a message</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>
    </section>

    <section class="md:px-24 px-5 mb-10 relative">
        <div class="hidden md:block rounded-[32px] p-16 w-full h-[400px]"
            style="background: url('{{ asset('images/bg-conta.png') }}') no-repeat center center / contain;">
            <h1 class="text-white text-6xl pr-20 pt-10 font-semibold leading-[70px]">Ready to navigate challenges and capitalize on opportunities</h1>
            <p class="text-[#F7F7F7] pt-5 text-xl">Partner with us today to achieve your business goals effectively</p>
    
            <div class="bg-[#075097] w-fit absolute 2xl:bottom-[28px] 2xl:right-[130px]  md:bottom-[54px] md:right-[100px] text-white px-5 py-3 rounded-[32px]">
                <a href="#" class="text-lg font-medium">Consult us now</a>
            </div>
        </div>
    </section>
    
    <section class="bg-gray-50 md:hidden px-5 py-20 mb-28 block">
        <div class="rounded-[32px] w-full  flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold text-center leading-[40px]">Ready to navigate challenges and capitalize on opportunities</h1>
            <p class="pt-5 text-[#7c7c7c] text-lg text-center">Partner with us today to achieve your business goals effectively</p>
    
            <div class="bg-[#075097] mt-8 w-fit text-white px-5 py-3 rounded-[32px]">
                <a href="#" class="text-lg font-medium">Consult us now</a>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const img = document.getElementById('animatedImage');
        let imgIndex = 1;
        const totalImages = 5;
        const imgFolder = '{{ asset('images/') }}';

        function animateImage() {
            img.style.opacity = 1;

            setTimeout(() => {
                imgIndex++;
                if (imgIndex > totalImages) {
                    imgIndex = 1;
                }

                img.src = `${imgFolder}/Name=0${imgIndex}.png`;

                img.style.opacity = 0.1;
            }, 1000);
        }
        setInterval(animateImage, 2000);
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
