<section class="bg-gray-50 md:hidden px-5 py-20 mb-28 block">
    <div class="rounded-[32px] w-full  flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold text-center leading-[40px]">Ready to navigate challenges and capitalize on
            opportunities</h1>
        <p class="pt-5 text-[#7c7c7c] text-lg text-center">Partner with us today to achieve your business goals
            effectively</p>

        <div class="bg-[#075097] hover:!bg-[#0962B9] mt-8 w-fit text-white px-5 py-3 rounded-[32px]">
            <a href="/contact-us" class="text-lg font-medium">Consult us now</a>
        </div>
    </div>
</section>

<section class="md:px-24 px-5 mb-10 relative">
    <div class="hidden md:block rounded-[32px] p-16 w-full h-[400px]"
        style="background: url('{{ asset('images/bg-conta.png') }}') no-repeat center center / contain;">
        <h1 class="text-white text-6xl pr-20 pt-10 font-semibold leading-[70px]">Ready to navigate challenges and
            capitalize on opportunities</h1>
        <p class="text-[#F7F7F7] pt-5 text-xl">Partner with us today to achieve your business goals effectively</p>

        <a href="/contact-us"
            class="bg-[#075097] hover:!bg-[#0962B9]  w-fit absolute 2xl:bottom-[28px] 2xl:right-[130px]  md:bottom-[54px] md:right-[100px] text-white px-5 py-3 rounded-[32px]">
            <p class="text-lg font-medium">Consult us now</p>
        </a>
    </div>
</section>

<div class="md:px-24 px-5 ">
    <div class="border border-[#C3C4CB]"></div>

    <footer class="w-full py-28 flex md:flex-row flex-col md:justify-between">
        <div class="md:w-[420px]">
            <img src="{{ asset('images/people-advisor.svg') }}" alt="">
            <p class="text-[#7C7C7C] mt-3 ">We are a Nigerian consulting firm offering expert HR, social media, product
                development, accounting, and growth advisory services.</p>
        </div>

        <div class="flex md:flex-row flex-col mt-10 md:mt-0 md:gap-16 gap-10 w-fit">
            <div>
                <h6 class="text-xl font-bold">Navigations</h6>
                <ul class="text-[#7C7C7C] font-medium flex flex-col mt-3 gap-3">
                    <li>
                        <a href="">Home</a>
                    </li>

                    <li>
                        <a href="">Service</a>
                    </li>

                    <li>
                        <a href="">About us</a>
                    </li>

                    <li>
                        <a href="">FAQs</a>
                    </li>
                </ul>
            </div>

            <div class="w-12">
                <h6 class="text-xl font-bold">Legal</h6>
                <ul class="text-[#7C7C7C] font-medium flex flex-col mt-3 gap-3">
                    <li>
                        <a href="">Privacy policy</a>
                    </li>
                </ul>
            </div>

            <div class="w-28">
                <h6 class="text-xl font-bold">Address</h6>
                <p class="text-[#7C7C7C] font-medium flex flex-col mt-3 gap-3">3, Oyebamiji Street, Winners Way,
                    Bashorun,
                    Ibadan.</p>
            </div>
        </div>
    </footer>

    <div class="flex justify-between mb-8">
        <p class="font-medium md:text-base text-sm text-[#7C7C7C]">All rights reserved</p>
        <p class="font-medium md:text-base text-sm text-[#7C7C7C]">Copyright {{ date('Y') }} People Advisor</p>
    </div>
</div>
