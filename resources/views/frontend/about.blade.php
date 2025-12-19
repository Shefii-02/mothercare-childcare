@extends('layouts.master')

@section('content')
    <div class="hhc-title-bar-wrapper  hhc-bg-color-transparent hhc-bg-image-yes hhc-titlebar-style-left">
        <div class="container">
            <div class="hhc-title-bar-content">
                <div class="hhc-title-bar-content-inner">
                    <div class="hhc-tbar">
                        <div class="hhc-tbar-inner container">
                            <h1 class="hhc-tbar-title"> About us</h1>
                        </div>
                    </div>
                    <div class="hhc-breadcrumb">
                        <div class="hhc-breadcrumb-inner">
                            <span>
                                <a title="" href="#" class="home">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span class="archive post-hhc-service-archive current-item">
                                    About us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 position-relative ">

                        <div class="w-10 bg-theme2 h-100 position-absolute">
                        </div>
                        <img src="{{ asset('assets/images/about-01.jpg') }}"
                            style="right: -20px;position: relative;top: 30px; width:90%" class="rounded mb-5" />
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-theme fs-2 mb-3 mt-3 fw-bold">About us</h2>
                        <p>
                            Welcome to Hayath Mother and Child Care LLP, your trusted partner in gynecological and maternity
                            care in Kuttippuram. Established in 2024, we are proud
                            to bring world-class healthcare services to the heart of Malabar, offering exceptional care at
                            affordable prices. At Hayath Mother and Child Care, we are
                            dedicated to ensuring the well-being of women and children through a comprehensive range of
                            services:
                            <br>
                        <ul class="my-3">
                            <li>State-of-the-Art Scanning Centre</li>
                            <li>Gynecological & Pediatric Emergency Trauma Care</li>
                            <li>Specialized IVF Centre, Yoga & Nutrition Centres</li>
                            <li>Multipurpose Party Hall and Lawn for Celebrations</li>
                            <li>Kids’ Play Area for Little Ones</li>
                            <li>Hyper Pharmacy & Mom's Bay Store</li>
                        </ul>
                        <br>
                        Our facility also features spacious and private suites, ensuring comfort and privacy during your
                        stay. For the first time in Kuttippuram and the Malabar region,
                        we offer this unique blend of facilities and care, adhering to world-class quality accreditations.
                        Experience healthcare redefined and let us grow together
                        with Hayath Mother and Child Care LLP
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                <div class="row justify-center">
                    <div class="col-lg-8 position-relative text-center">
                        <img src="{{ asset('assets/images/about-02.jpg?v=1') }}" style="object-fit: cover; -webkit-mask-image: url(/assets/images/bg/brushMask.webp); mask-image: url(/assets/images/bg/brushMask.webp); mask-repeat: no-repeat; mask-size: contain;  mask-position: center;" class="rounded w-100" />
                        <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">WORLD-CLASS FACILITIES FOR YOUR CARE</h2>
                        <p class="mt-3">Indulge in the spaciousness of our private suites, where you can relish the joy of
                            motherhood in complete comfort. The rooms are
                            adorned with elegant details, creating an intimate space for you and your newborn.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                <div class="row ">
                    <div class="col-lg-6 position-relative mb-3">
                        <img src="{{ asset('assets/images/about-04.jpg') }}" class="rounded w-100" />
                        {{-- <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Spacious and Private Suites</h2>
                        <p>
                            Indulge in the spaciousness of our private suites, where you can relish the joy of mother hood
                            in complete comfort. The rooms are adorned with elegant details, creating an
                            intimate space for you and your newborn.
                        </p> --}}
                    </div>
                    <div class="col-lg-6 mb-3">
                        <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Clinical Excellence</h2>
                        <p class="mb-1">
                            We are known for our unwavering commitment to clinical excellence. Our services include:
                        </p>
                        <ul>
                            <li class="mb-1">• 24/7 Consultant-led Emergency and Maternal Acute Care</li>
                            <li class="mb-1">• Round-the-clock Obstetrician and Neonatology Services</li>
                            <li class="mb-1">• Expert Fetal Medicine Specialists</li>
                            <li class="mb-1">• Advanced Infertility Treatments</li>
                            <li class="mb-1">• Obstetric Anesthesia and Painless Labor Options</li>
                            <li class="mb-1">• Comprehensive Diagnostic Services, including 4D Scans</li>
                            <li class="mb-1">• IVF Centre with Personalized Fertility Care</li>
                        </ul>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Exclusive Amenities</h2>
                        <p>
                            <span class="mb-2">
                                At Hayath Mother and Child Care, we go beyond medical
                                excellence to ensure a luxurious experience. We o~er the
                                finest amenities, making every moment special for our
                                patients.<br>
                            </span>
                            <span class="fw-bold mt-3">Premier Birthing Suites</span><br>
                            Redefining maternity care, our birthing suites o~er a harmonious blend of luxury, personalized
                            support, and advanced medical technology, making your birthing experience memorable.<br>

                            <span class="fw-bold mt-3">Kangaroo Mother Care and Family-Centered NICU</span><br>
                            Our NICU provides the highest level of care for neonates
                            and premature babies, with specialized monitoring systems, Kangaroo Mother Care, and
                            family-centered neonatal suites.

                        </p>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <img src="{{ asset('assets/images/about-05.jpg') }}" class="rounded w-100" />
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                <div class="row justify-center">

                    <div class="col-lg-12 mb-3">
                        <div class="card shadow p-3 rounded-5">
                            <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">WHY CHOOSE US?</h2>
                            <span class="fw-bold text-muted my-1">World-Class Care: </span>
                            <p>We bring global healthcare standards to Malabar, ensuring that you receive the best possible
                                care.</p>
                            <span class="fw-bold text-muted my-1">Comprehensive Services: </span>
                            <p>From IVF treatments to emergency pediatric trauma
                                care, we provide a complete range of services.</p>
                            <span class="fw-bold text-muted my-1">Affordable Excellence: </span>
                            <p>We offer exceptional care at a~ordable prices, making
                                world-class healthcare accessible to all.</p>
                            <span class="fw-bold text-muted my-1">Experienced Medical Team: </span>
                            <p>Our team of skilled doctors, nurses, and specialists
                                are dedicated to providing expert care with compassion.</p>
                            <span class="fw-bold text-muted my-1">Luxury and Comfort: Luxury and Comfort: </span>
                            <p>Our state-of-the-art facilities and luxury suites provide an exceptional experience for
                                mothers, babies,
                                and families.</p>
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 mb-3">
                        <div class="card shadow p-3 rounded-5">
                            <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold"> Hayath Mother and Child Cares NICU</h2>
                            <p>
                                Experience the pinnacle of care for neonates and pre mature babies in our state-of-the-art
                                Level 3 & Level 4
                                NICU. Equipped with cutting-edge monitoring systems,
                                Kangaroo Mother Care, family-centered neonatal suites,
                                and a team of specialized neonatology experts, Hayath
                                Mother and Child Care guarantees that every delicate
                                beginning is fostered with a blend of compassion,
                                expertise, and advanced technology
                            </p>
                        </div>


                    </div> --}}
                    {{-- <div class="col-lg-6 mb-3">
                        <div class="card shadow p-3 rounded-5">
                            <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Birthing Suites</h2>
                            <p>
                                Immerse yourself in unmatched luxury at Hayath
                                Mother and Child Care premier birthing suites. Redefining maternity care, these spaces
                                harmonize luxury,
                                technology, and personalized support for a birthing
                                experience that becomes a treasured memory.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                <div class="row justify-center">
                    <div class="col-lg-12 text-center pb-5">
                        <h2 class="fs-1 text-muted my-1 fw-bold">"INVEST IN THE FUTURE OF HEALTHCARE"</h2>
                    </div>
                    <div class="col-lg-8 position-relative text-center">
                        <img src="{{ asset('assets/images/about-03.jpg') }}" class="rounded w-100" />
                        <p class="mt-3">
                            Hayath Mother and Child Care is more than just a healthcare
                            provider; it is a symbol of health, empowerment, and holistic
                            well-being. As an investor or partner, you will be part of a forward-thinking institution that
                            is committed to improving the health outcomes for women and children in the region.
                        </p>
                        <p class="mt-3">
                            Growing Market: The need for high-quality gynecological and
                            maternity services is rapidly increasing in the Malabar region.
                            Our services meet this demand with a blend of excellence,
                            compassion, and a~ordability.
                            growth, continuously improving our services to meet the
                            needs of our patients and the community.
                        </p>
                        <p class="mt-3">
                            A Trusted Partner: Engaging with Hayath Mother and Child
                            Care is a partnership focused on delivering exceptional
                            healthcare and advancing the well-being of families in the
                            region.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-2">
                            <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Vision</h2>
                            <p>
                                To be the trusted leader in gynecological and
                                maternity care, setting new benchmarks in
                                quality, compassion, and a~ordability while
                                providing world-class healthcare services to
                                Kuttippuram and the Malabar region.
                            </p>

                        </div>
                        <div class="mb-2">
                            <h2 class="text-theme fs-4 mt-4 mb-3 fw-bold">Mission</h2>
                            <p>
                                Our mission is to provide exceptional gynecological and maternity care through advanced
                                medical practices, state-of-the-art technology,
                                and a patient-centered approach. We strive to
                                make world-class healthcare accessible and
                                a~ordable for every woman and child, while
                                maintaining a nurturing environment that prioritizes health, comfort, and dignity. We
                                continuously innovate and adhere to the highest ethical standards.
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-1">
                        <div class="w-5 bg-theme2 h-100">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="text-theme fs-4 mt-4 mb-5 fw-bold text-center">Board of Directors</h2>
                        <div class="row">
                            <div class="col-lg-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/nasif.jpg') }}" class="border rounded-3 w-50 mx-auto">
                                <h2 class="text-dark fs-6 mt-4 mb-1 fw-bold">Mohammed Nasif K</h2>
                                <span class="text-muted">Founder & Managing Director</span>
                            </div>
                            <div class="col-lg-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/thahir.jpg') }}" class="border rounded-3 w-50 mx-auto">
                                <h2 class="text-dark fs-6 mt-4 mb-1 fw-bold">Abu Thahir KT</h2>
                                <span class="text-muted">Co-Founder & Director</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

    </section>
@endsection
