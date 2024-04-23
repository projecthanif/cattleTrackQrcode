<div>
    <main class="main" id="top">
        @include('components.nav')
        <section class="py-0" id="header">
            <div class="bg-holder d-none d-md-block"
                 style="background-image:url({{ asset('assets/img/illustrations/cow-header.svg') }});background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->
            <div class="bg-holder d-md-none"
                 style="background-image:url({{ asset('assets/img/illustrations/hero-bg.png') }});background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-lg-100">
                    <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-5 fs-lg-6 fs-xl-3">
                            Revolutionize Your Herd Management.
                            <br class="d-block d-lg-block"/>Track & Identify Cattle with Ease.
                        </h1>
                        <p class="mb-4 fs-1">
                            Introducing a QR code-based cattle identification system for effortless data management.
                        </p>
                        <a class="btn btn-lg btn-success" href="#" role="button">Learn How it Works</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="Features">
            <div class="bg-holder d-none d-sm-block"
                 style="background-image:url({{ asset('assets/img/illustrations/bg.png') }});background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
            </div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Features</h5>
                        <p class="mb-5">Manage Your Herd with Ease: Introducing QR Code Cattle Identification.</p>
                    </div>
                </div>
                <div class="row  h-100">
                    <div class="row">
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                         src="{{ asset('assets/img/icons/qr-code-svgrepo-com.svg') }}" height="60"
                                         alt=""/>
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Unique QR Codes</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Generate a unique QR code for each cow, ensuring
                                            easy and accurate identification.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                         src="{{ asset('assets/img/icons/smartphone-svgrepo-com.svg') }}" height="60"
                                         alt=""/>
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Scan & Access Information</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Simply scan the QR code with your smartphone to
                                            access detailed cattle information anytime, anywhere.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                         src="{{ asset('assets/img/icons/lock-alt-svgrepo-com.svg') }}" height="60"
                                         alt=""/>
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Secure Data Management</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Securely store and manage all your cattle data
                                            in one centralized location for effortless access.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                <div class="text-center text-md-start card-hover">
                                    <img class="ps-3 icons"
                                         src="{{ asset('assets/img/icons/health-vaccine-svgrepo-com.svg') }}"
                                         height="60" alt=""/>
                                    <div class="card-body">
                                        <h6 class="fw-bold fs-1 heading-color">Track Health Records</h6>
                                        <p class="mt-3 mb-md-0 mb-lg-2">Keep track of all health records, vaccinations,
                                            and breeding history for each animal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-3" id="invest"
                 style="background-image:url({{ asset('assets/img/gallery/cattle.jpg') }});background-position:right top;background-size:contain;"
        >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 mb-3">
                        <div class="row">
                            <div class=" mb-3">
                                <h5 class="fw-bold fs-3 fs-lg-3 lh-sm mb-3">
                                    Ready to Improve Your Herd Management? Discover the Benefits of QR Code ID
                                </h5>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card text-white">
                                    <img class="card-img" src="{{ asset('assets/img/gallery/short-terms.png') }}"
                                         alt="..."/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                                        <h6 class="text-success pt-2">Scan & Know: Never Misidentify a Cow Again</h6>
                                        <hr class="text-white" style="height:0.12rem;width:2.813rem"/>
                                        <div class="pt-lg-3">
                                            <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">
                                                Ditch the confusion
                                            </h6>
                                            <p class="w-xxl-75">
                                                QR codes ensure accurate cattle identification with a quick scan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="card text-white">
                                    <img class="card-img" src="{{ asset('assets/img/gallery/short-terms.png') }}"
                                         alt="..."/>
                                    <div
                                        class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                                        <h6 class="text-success pt-2">Scan & Know: Never Misidentify a Cow Again</h6>
                                        <hr class="text-white" style="height:0.12rem;width:2.813rem"/>
                                        <div class="pt-lg-3">
                                            <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">
                                                Ditch the confusion
                                            </h6>
                                            <p class="w-xxl-75">
                                                QR codes ensure accurate cattle identification with a quick scan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="py-0">
            <div class="bg-holder"
                 style="background-image:url(assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
            </div>
            <!--/.bg-holder-->
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-9 col-xl-5 text-center pt-8">
                        <h5 class="fw-bold fs-3 fs-xxl-5 lh-sm mb-3 text-white">How it works</h5>
                        <p class="mb-5 text-white">Take your pick from the supply chain and participate in agribusiness
                            projects that are backed up not only by Zou, but also by the best land, family heritage,
                            innovation and overall superior expertise.
                        </p>
                    </div>
                    <div class="col-sm-9 col-md-12 col-xxl-9">
                        <div class="theme-tab">
                            <ul class="nav justify-content-between">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active fw-semi-bold" href="#bootstrap-tab1"
                                       data-bs-toggle="tab" data-bs-target="#tab1" id="tab-1">
                                        <span class="nav-item-circle-parent">
                                            <span class="nav-item-circle">01</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-tab2" data-bs-toggle="tab"
                                       data-bs-target="#tab2" id="tab-2">
                                        <span class="nav-item-circle-parent">
                                            <span class="nav-item-circle">02</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-tab3" data-bs-toggle="tab"
                                       data-bs-target="#tab3" id="tab-3">
                                        <span class="nav-item-circle-parent">
                                            <span class="nav-item-circle">03</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-tab4" data-bs-toggle="tab"
                                       data-bs-target="#tab4" id="tab-4">
                                        <span class="nav-item-circle-parent">
                                            <span class="nav-item-circle">04</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                     aria-labelledby="tab-1">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">
                                                Scan & Identify:
                                            </h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">
                                                Equip your cows with unique QR code tags. Simply scan the code with your
                                                smartphone to instantly access detailed information about each animal,
                                                eliminating confusion and ensuring accurate identification.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">
                                                Track & Manage:
                                            </h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">
                                                Manage your herd with ease! Our system allows you to store and access
                                                all your cattle data in one centralized location. Track health records,
                                                vaccinations, breeding history, and more – all readily available at your
                                                fingertips.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">
                                                Gain Insights, Make Decisions:
                                            </h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">
                                                Turn data into powerful insights. Analyze trends in health, performance,
                                                and breeding to make informed decisions for your herd. Optimize breeding
                                                strategies, improve overall cattle well-being, and maximize farm
                                                profitability.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">
                                                Peace of Mind, Secure Data:
                                            </h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">
                                                Your valuable cattle data deserves the best protection. Our system
                                                utilizes secure cloud storage and access control features, ensuring only
                                                authorized users can view and manage information. Focus on managing your
                                                herd with confidence, knowing your data is safe.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="z-index-1 cta">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-12">
                        <div class="card shadow h-100 py-5">
                            <div class="card-body text-center">
                                <h1 class="fw-semi-bold mb-4">Take Control of &nbsp;
                                    <span class="text-success">Your Cattle Data:</span>
                                    &nbsp; Unlock Efficiency and Insights
                                </h1>
                                <a class="btn btn-lg btn-success px-6" href="/farmHerd" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        @include('components.footer')
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

</div>
