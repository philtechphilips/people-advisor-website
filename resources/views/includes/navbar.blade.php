<nav class="relative z-10 flex items-center justify-between py-7 md:px-24 px-5">
    <img src="{{ asset('images/people-advisor.svg') }}" alt="">

    <ul style="box-shadow: -4px 4px 6px 0px #C6C6C64D;" class="md:flex hidden items-center gap-7 text-[#191B1F] text-lg font-medium bg-white py-3 px-6 rounded-[32px]">
        <li class="menu-item">
            <a href="/">Home</a>
        </li>

        <li class="menu-item">
            <a href="/services">Service</a>
        </li>

        <li class="menu-item">
            <a href="/about-us">About us</a>
        </li>

        <li class="menu-item">
            <a href="/faqs">FAQs</a>
        </li>
    </ul>

    <a href="/contact-us" class="bg-[#075097] hidden md:block text-white w-[129px] h-[43px] rounded-[32px] py-2 px-6 hover:border-2 hover:bg-[#0962B9] hover:border-white">Consult us</a>
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