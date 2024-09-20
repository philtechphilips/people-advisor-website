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
        <div class="absolute hidden z-0 md:block top-0 left-0 w-full ">
            <img id="contactAnimated" class="fade-in z-0 w-full" src="{{ asset('images/bg-1.png') }}" alt=""
                style="transition: opacity 1s;">
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

            <form method="POST" id="send-a-message" action="/send-a-message">
                @csrf
                <div class="md:w-[600px] bg-[#F7F7F7] md:p-16 p-8 rounded-[32px]">
                    <h1 class="font-bold text-2xl text-[#161616]">Send Us a Message</h1>
                    <p class="text-[#7c7c7c] font-medium mt-2">Have a specific question, request, or need assistance with
                        professional tasks? Fill out the form below, and we'll get back to you as soon as possible</p>

                    <div class="flex flex-col gap-1 mt-16">
                        <label for="name">Name</label>
                        <input type="text" name="name"
                            class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="Full name">
                    </div>

                    <div class="flex flex-col gap-1 mt-6">
                        <label for="name">Email</label>
                        <input type="email" name="email"
                            class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="you@company.com">
                    </div>

                    <div class="flex flex-col gap-1 mt-6">
                        <label for="name">Message</label>
                        <textarea rows="3" name="messages"
                            class="font-medium bg-transparent outline-none px-3 py-1 border-b border-b-[#7C7C7C]"
                            placeholder="Write a message..."></textarea>
                    </div>
                </div>

                <h6 class="font-bold mb-2 mt-12">Services</h6>
                <div class="flex flex-wrap justify-between md:w-[600px]">
                    <div class="flex gap-1 md:w-52 items-start">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]"
                            value="Human Resources Consulting">
                        <p class="text-lg text-[#272A30] font-medium">
                            Human Resources Consulting
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]"
                            value="Product Development Advisory">
                        <p class="text-lg text-[#272A30] font-medium">
                            Product Development Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]" value="Social Media Advisory">
                        <p class="text-lg text-[#272A30] font-medium">
                            Social Media Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]" value="Growth Advisory">
                        <p class="text-lg text-[#272A30] font-medium">
                            Growth Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]" value="Accounting Advisory">
                        <p class="text-lg text-[#272A30] font-medium">
                            Accounting Advisory
                        </p>
                    </div>

                    <div class="flex gap-1 md:w-52 items-start mt-3">
                        <input class="bg-[#1671D9] mt-2" type="checkbox" name="services[]" value="Expert Task Support">
                        <p class="text-lg text-[#272A30] font-medium">
                            Expert Task Support
                        </p>
                    </div>
                </div>

                <button type="submit" id="submit-btn"
                    class="px-6 py-3 bg-[#075097] hover:bg-[#0962B9] rounded-[32px] w-full text-white mt-12">
                    <p>Send message</p>
                </button>
            </form>
        </div>
    </section>
@endsection()


@section('script')
    <script>
        $(document).ready(function() {
            $('#send-a-message').on('submit', function(e) {
                e.preventDefault();

                const button = $("#submit-btn");
                button.prop("disabled", true);
                button.find('p').text("Submitting...");

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        toastr.success("Message submitted sucessfully!");
                        button.prop("disabled", false);
                        button.find('p').text("Send message");
                    },
                    error: function(xhr, status, error) {
                        button.prop("disabled", false);
                        button.find('p').text("Send message");
                        if (error === "Unprocessable Content") {
                            toastr.error('Kindly fill all field(s)!');
                        } else {
                            toastr.error("Something went wrong!");
                        }
                    }
                });
            });
        });
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
        const serviceAnimatedImage = document.getElementById('contactAnimated');

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
