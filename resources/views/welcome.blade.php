@extends('layout.app')

@section('content')
    <section class="w-full h-[800px]  relative overflow-hidden">
        @include('includes.navbar')

        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/peoples-advisor-hero-bg.png') }}'); filter: blur(20px);">
        </div>

        <div class="relative z-10 flex flex-col leading-[90px] items-center justify-center  h-[700px]">
            <h1 class="text-[80px] pb-1 text-center font-semibold"
                style="
        background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      ">
                Consulting solutions
            </h1>
            <h1 class="text-[80px] z-10  font-semibold pb-1 text-center">for every aspect of</h1>
            <h1 class="text-[80px] z-10  font-semibold text-center">your business</h1>

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
            class="2xl:text-5xl md:text-[42px] text-[#191B1F] font-semibold md:leading-[50px] 2xl:leading-[60px] max-w-[1250px]">
            We deliver tailored solutions that help businesses navigate challenges, capitalize on opportunities, and achieve
            their goals</h1>

        <div class="border-t-[1.5px] my-8 border-t-[#C3C4CB]"></div>

        <div class="flex items-center justify-between">
            <p class="text-[#7C7C7C] text-xl md:w-[651px]">With our deep industry expertise and client-centric approach, we
                stand out as trusted partners in your journey toward growth and excellence.</p>

            <a href="#"
                class="text-white bg-[#075097] hover:bg-[#191B1F] rounded-[32px] gap-6 flex items-center px-6 pr-4 py-2 w-fit button">
                <p class="text-lg">Know more</p>
                <div class="icon-container rounded-full w-10 h-10 flex items-center justify-center">
                    <i class="ri-arrow-right-up-line text-2xl icon"></i>
                </div>
            </a>
        </div>

        <div class="mt-20 mb-28 flex justify-between">
            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    6+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Years of
                    experience</p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    80+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Project completed</p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    20+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">
                    Trusted companies
                </p>
            </div>

            <div
                class="flex flex-col justify-end p-7 pb-12 border-[1.5px] border-[#C3C4CB] pt-28 rounded-[32px] w-[245px]">
                <h1 class="font-semibold text-4xl w-fit"
                    style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%);  -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
                    50+</h1>
                <p class="mt-2 w-[94px] text-[#191B1F] text-xl">Client
                    satisfaction</p>
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
@endsection
