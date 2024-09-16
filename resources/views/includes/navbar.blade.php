<nav class="relative z-10 flex items-center justify-between py-7 md:px-24 px-5">
    <img src="{{ asset('images/people-advisor.svg') }}" alt="">

    <ul class="md:flex hidden items-center gap-7 text-[#191B1F] text-lg font-medium bg-white py-3 px-4 rounded-[32px]">
        <li class="border-[1.5px] rounded-[32px] px-6 border-[#C3C4CB] py-1">
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

    <a href="" class="bg-[#075097] hidden md:block text-white rounded-[32px] py-2 px-6">Consult us</a>
    <i class="ri-menu-2-line text-[28px] flex md:hidden menuButton"></i>
</nav>


<nav id="menu"
    class="w-full p-5 md:hidden bg-gray-100 h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform z-[1000]">
    <div class="flex items-center justify-between mb-20">
        <a href="/">
            <img src="{{ asset('images/people-advisor.svg') }}" alt="">
        </a>

        <div class="w-10 h-10 menuButton flex items-center justify-center">
            <i class="ri-close-line text-3xl"></i>
        </div>
    </div>

    <ul class="flex flex-col gap-12 items-center list">
        <li>
            <a href="/" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
        </li>

        <li>
            <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Service</a>
        </li>

        <li>
            <a href="/about-us" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">About us</a>
        </li>

        <li>
            <a href="/faqs" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">FAQs</a>

        </li>

        <li class="flex gap-2 items-center bg-[#075097] px-6 py-2 rounded-[32px]">
            <a href="/contact-us">
                <p class="text-[#ffffff] font-medium md:text-xl">Consult us</p>
            </a>
        </li>
    </ul>

</nav>