@extends('layout.app')

@section('content')
    <section class="w-full md:h-[800px] h-[700px]  relative overflow-hidden">
        @include('includes.navbar')

        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/hero sec.svg') }}'); filter: blur(20px);">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center md:h-[700px] h-[500px]">
            <h1 class="md:text-[64px] text-4xl md:leading-[75px] md:w-[892px] pb-1 text-center md:font-bold font-bold">
                Comprehensive <span
                    style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">business
                    solutions</span> for every challenge
            </h1>

            <p class="text-[#545861] z-10 text-lg  md:w-[892px] text-center mt-4 font-medium">
                Our team of experts works closely with you to optimize processes, unlock growth potential, and navigate the
                complexities of today's business landscape. Whether you need to streamline your operations, enhance your
                online presence, or innovate your products, we're here to guide you every step of the way
            </p>
        </div>

    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 py-24">
        <h1 class="text-[#191B1F] md:text-5xl text-2xl text-center md:text-left font-bold">We offer several services to meet
            your needs</h1>

        <div class="flex flex-wrap items-center gap-2 md:justify-start justify-center md:gap-4 2xl:gap-6">
            <div class="py-2 px-6 rounded-[32px]"
                style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                <p class="text-white font-medium md:text-sm 2xl:text-lg">Human Resources Consulting</p>
            </div>

            <div class="py-2 px-6 rounded-[32px]"
                style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                <p class="text-white font-medium md:text-sm 2xl:text-lg">Social Media Advisory</p>
            </div>

            <div class="py-2 px-6 rounded-[32px]"
                style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                <p class="text-white font-medium md:text-sm 2xl:text-lg">Accounting Advisory</p>
            </div>

            <div class="py-2 px-6 rounded-[32px]"
                style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                <p class="text-white font-medium md:text-sm 2xl:text-lg">Growth Advisory</p>
            </div>

            <div class="py-2 px-6 rounded-[32px]"
                style="background: linear-gradient(112.3deg, #075097 22.98%, #F16823 129.74%);">
                <p class="text-white font-medium md:text-sm 2xl:text-lg">Product Development Advisory</p>
            </div>
        </div>

        <div class="border border-[#C3C4CB] mt-10"></div>
        <div class="absolute hidden z-0 md:block top-0 left-0 w-full ">
            <img id="serviceAnimateds" class="fade-in z-0 w-full" src="{{ asset('images/bg-1.png') }}" alt=""
                style="transition: opacity 1s;">
        </div>
    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 pb-24">
        <h1 class="font-bold text-[32px] w-fit"
            style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Human Resources Consulting
        </h1>

        <div class="flex flex-wrap gap-y-12 gap-x-0 mt-12 justify-between">
            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Payroll Management</h6>
                    <p class="text-[#7C7C7C] font-medium">Accurate monthly payroll computation and administration</p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Performance Management</h6>
                    <p class="text-[#7C7C7C] font-medium">Quarterly performance reviews and management</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Succession Planning</h6>
                    <p class="text-[#7C7C7C] font-medium">Ensuring leadership continuity and future-proofing your business
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Training Need & Gap Analysis</h6>
                    <p class="text-[#7C7C7C] font-medium">Identifying skills gaps for targeted development</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">HR Policy and Strategy</h6>
                    <p class="text-[#7C7C7C] font-medium">Developing and reviewing comprehensive human resource policies and
                        strategies</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">HR Personnel Placement</h6>
                    <p class="text-[#7C7C7C] font-medium">Strategically placing HR talent to drive your business forward</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Third-Party Liaison</h6>
                    <p class="text-[#7C7C7C] font-medium">Interfacing with external parties, including payroll tax and
                        pension authorities, HMO providers, and other relevant stakeholders</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Employee Engagement</h6>
                    <p class="text-[#7C7C7C] font-medium">Organizing team bonding activities, town hall forums, check-in
                        meetings, and other initiatives to foster a positive and inclusive work environment</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Compensation and Job Grading</h6>
                    <p class="text-[#7C7C7C] font-medium">Conducting compensation surveys and job grading to ensure fair and
                        competitive pay structures</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Learning and Development</h6>
                    <p class="text-[#7C7C7C] font-medium">Designing and delivering training programs to enhance employee
                        skills and knowledge</p>
                </div>
            </div>
        </div>

        <div class="border border-[#C3C4CB] mt-10"></div>
    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 pb-24">
        <h1 class="font-bold text-[32px] w-fit"
            style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Social Media Advisory
        </h1>

        <p class="text-[#7C7C7C] text-lg font-medium md:w-[964px]">We offer comprehensive social media management services,
            including tailored strategy development to achieve your goals, account setup and visibility optimization, and
            engaging content creation and curation with a well-planned content calendar. However, they come in a distinct
            package that suits your organization's needs</p>

        <div class="flex flex-wrap gap-y-12 gap-x-0 mt-12 justify-between">
            <div class="flex flex-col gap-y-8">
                <h4 class="text-lg font-bold"
                    style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Page Growth</h4>
                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Social Media Strategy Development</h6>
                        <p class="text-[#7C7C7C] font-medium">Creating a customized plan to achieve your goals</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Account Setup and Optimization</h6>
                        <p class="text-[#7C7C7C] font-medium">Setting up and optimizing social media profiles to maximize
                            visibility</p>
                    </div>
                </div>


                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Content Creation and Curation</h6>
                        <p class="text-[#7C7C7C] font-medium">Developing engaging content to attract & retain followers.
                            Scheduling content using a content calendar.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-y-8">
                <h4 class="text-lg font-bold"
                    style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Awareness About the Brand/Product</h4>
                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Social Media Audit</h6>
                        <p class="text-[#7C7C7C] font-medium">Analyzing existing social media presence and providing
                            recommendations for improvement</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Social Media Advertising</h6>
                        <p class="text-[#7C7C7C] font-medium">Managing paid social media ads to reach target audiences</p>
                    </div>
                </div>


                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Content Creation and Curation</h6>
                        <p class="text-[#7C7C7C] font-medium">Developing and sharing engaging content to attract and retain
                            followers. Planning and scheduling content in advance using a content calendar</p>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-y-8">
                <h4 class="text-lg font-bold"
                    style="background: linear-gradient(102.69deg, #F5F5F5 -55.44%, #94ACC4 -0.54%, #075097 108.46%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Community Engagement</h4>
                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Engagement and Community Management</h6>
                        <p class="text-[#7C7C7C] font-medium">Responding to comments, messages, and reviews to build brand
                            loyalty</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Analytic and Reporting</h6>
                        <p class="text-[#7C7C7C] font-medium">Monitoring performance using analytics tools and providing
                            regular reporting</p>
                    </div>
                </div>


                <div class="flex gap-4 items-start w-[348px]">
                    <img src="{{ asset('images/check.svg') }}" alt="">
                    <div class="flex flex-col gap-2">
                        <h6 class="text-[#272A30] text-lg font-bold">Reputation and Crisis Management</h6>
                        <p class="text-[#7C7C7C] font-medium">Monitoring and managing online reputation by addressing
                            negative feedback. Developing strategies to handle social media crisis and maintain brand image.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-[#C3C4CB] mt-10"></div>
    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 pb-24">
        <h1 class="font-bold text-[32px] w-fit"
            style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Accounting Advisory
        </h1>

        <p class="text-[#7C7C7C] font-lg font-medium md:w-[964px]">We provide expert guidance on financial matters, help
            individuals or businesses make informed decisions.
            Our services are as follows</p>

        <div class="flex flex-wrap gap-y-12 gap-x-0 mt-12 justify-between">
            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial statement preparation and analysis</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Accounting system setup and optimization</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Mergers and acquisitions support</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial modeling and scenario planning</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Accountant Placement</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Budgeting and forecasting</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial performance improvement</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Cash flow management</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Tax planning and compliance</h6>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial data interpretation and visualization</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Auditing and financial reporting</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Risk management and internal control</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial planning and strategy development</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Non-current Asset Management</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Specialized services like forensic accounting or valuation
                    </h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Financial training and education</h6>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Compliance with accounting standards and regulation</h6>
                </div>
            </div>

            <div style="visibility: hidden;" class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Compliance with accounting standards and regulation</h6>
                </div>
            </div>
        </div>

        <div class="border border-[#C3C4CB] mt-10"></div>
    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 pb-24">
        <h1 class="font-bold text-[32px] w-fit"
            style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Product Development Advisory
        </h1>
        <p class="text-[#7C7C7C] font-lg font-medium md:w-[824px]">
            We offer a range of services to assist businesses in creating and improving their products and provide excellent
            product development advisory such as
        </p>
        <div class="flex flex-wrap gap-y-12 gap-x-0 mt-12 justify-between">
            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Product Strategy</h6>
                    <p class="text-[#7C7C7C] font-medium">Defining product vision, mission, and roadmap</p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Go-to-market strategy</h6>
                    <p class="text-[#7C7C7C] font-medium">Developing go-to-market strategies, positioning, and messaging
                    </p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Website Development</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Building high-performance websites for optimal user experiences
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Market Research</h6>
                    <p class="text-[#7C7C7C] font-medium">Analyzing customer needs, preferences, and market trends</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Product Lifecycle Management</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Managing product updates, maintenance, and end-of-life strategies
                    </p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Technology Team Placement</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Connecting businesses with top talent for successful product development
                    </p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Product Development</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Overseeing the development process, ensuring timely and within- budget delivery
                    </p>
                </div>
            </div>



        </div>

        <div class="border border-[#C3C4CB] mt-10"></div>
    </section>

    <section class="w-full relative md:px-24 px-5 flex flex-col gap-6 pb-24">
        <h1 class="font-bold text-[32px] w-fit"
            style="background: linear-gradient(142.53deg, #075097 41.81%, #F16823 74.05%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Growth Advisory
        </h1>
        <p class="text-[#7C7C7C] font-lg font-medium md:w-[824px]">
            We offer valuable services to help businesses expand and thrive such as
        </p>
        <div class="flex flex-wrap gap-y-12 gap-x-0 mt-12 justify-between">
            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Growth Strategy Development</h6>
                    <p class="text-[#7C7C7C] font-medium">Creating customized growth plans aligned with business goals</p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Market Analysis</h6>
                    <p class="text-[#7C7C7C] font-medium">Identifying market opportunities, trends, and competitor insights
                    </p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Business Model Innovation</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Optimizing business models for scalability and profitability
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Revenue Growth Strategies</h6>
                    <p class="text-[#7C7C7C] font-medium">Implementing tactics to increase revenue and expand customer
                        bases</p>
                </div>
            </div>


            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Operational Efficiency</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Streamlining processes, eliminating waste, and improving productivity
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Leadership Coaching</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Guiding founders and executives to develop leadership skills
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Strategic Partnerships</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Facilitating partnerships to drive growth, innovation, and expansion
                    </p>
                </div>
            </div>

            <div class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Data-Driven Decision Making</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Leveraging data analytics to inform growth strategies
                    </p>
                </div>
            </div>

            <div style="visibility: hidden;" class="flex gap-4 items-start w-[348px]">
                <img src="{{ asset('images/check.svg') }}" alt="">
                <div class="flex flex-col gap-2">
                    <h6 class="text-[#272A30] text-lg font-bold">Data-Driven Decision Making</h6>
                    <p class="text-[#7C7C7C] font-medium">
                        Leveraging data analytics to inform growth strategies
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    @include('includes.cta')
    {{--  --}}


    {{-- Testiomonial --}}
    @include('includes.testimonial')
    {{-- Testiomonial --}}
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
        const serviceAnimatedImage = document.getElementById('serviceAnimateds');

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
