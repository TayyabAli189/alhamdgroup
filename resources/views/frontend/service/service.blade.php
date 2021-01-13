<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title> </title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">

    <!-- CSS
  ================================================== -->
    @includeIf('include.styles')

</head>
<body>
<div class="body-inner">

    @includeIf('include.header')
    <!--/ Topbar end -->

    <!--/ Header end -->
    <div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/banner/banner1.jpg')}})">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Service</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container pb-2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service1.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon1.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Civil Works</a></h3>
                                <p>To Focus on Civil Construction, ATS has successfully completed More than 100 sites with the collaboration of IIC PVT Ltd, SIFCO Engineering, Crystal Engineering 3-G Telecom Engineering Services and Edoteco Group. These BTS sites were constructed in different areas of Pakistan including hard areas.
                                    Moreover, ATS has successfully understand few Housing and commercial building projects in different sectors of Islamabad, E-7, F-7 Sector, G-8 etc.
                                    Through these projects, the company has gathered experiences, which will be a great direction in future projects.
                                    We are a dynamic organization and can meet all the challenges in normal areas of Punjab to hard areas of Baluchistan, KPK and FATA.
                                </p>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service2.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Repair & Maintenance of Gensets</a></h3>
                            <p>
                                Al Hamd Telecom Services repair and maintenance crew is well aware of the fact that how important is to run the site on Air without any trouble.
                                Keeping this in mind, our staff keeps on visiting BTS sites for Gensets related problems every now and then again.
                                A meticulous inspection of Gensets in one of the salient features of AES. Gensets should be replenished and refueled to eliminate any possibility of service breakdown. Our experts not only smoothens the gensets’ durability but also the overall performance & operation of the site.

                            </p>
                            </div>
                        </div>
                    </div><!-- Service2 end -->
                </div><!-- Col 2 end -->

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service3.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon3.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Dismantling/Packaging & Transportation of BTS Sites</a></h3>
                             <p>
                                 ATS is also specialized in Dismantling/ Packaging & Transportation of BTS Sites.
                                 Once we get confirmation for dismantling a BTS tower our Crew member within no Time get to the site and execute with targets, our specialized crew member makes every possible endeavor to dismantle the site as early as possible keeping in view all the safety process and standards in place.
                                 Once the site is dismantled it is then up to our transportation and packaging team to get the site clear in shortest possible time.
                                 Our team member handle the equipment meticulously with single bolt after Getting packed transported to our warehouse, then it is the responsibility of our warehouse Staff to keep packed equipment on sage place.

                             </p>
                            </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 3 end -->

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service4.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon4.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Solar Panel Installation Services for BTS</a></h3>
                           <p>
                               Al Hamd Telecom Services is also a solar service provider, with everything you need to power your BTS towers with clear solar energy. We will oversee your entire solar panel installation project and provide a single point of contact and accountability throughout the life of your system. Our experience engineering and installing high quality solar power systems for Telecom Towers and our uncompromising service have made us an industry leader.
                               Our engineers will complete a structural analysis of your sites and produce a full set of structural design and electrical blueprints. Your design plans will also contain the specification sheets for all system components, such as the solar panels and inverters for your project.

                           </p>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 4 end -->

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service5.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Telecom Installation</a></h3>
                           <p>
                               Al Hamd Telecom Services team is well equipped and trained as per current market standards providing telecom installation services. Having an experience of work with BTS/RBS installation, AC&DC connections, antenna, Feeder Cable, E1 Patching, 3G, IBS, COW, and MW etc.
                               Our teams with enormous potential to deal in commissioning and installation of BTS and Rectifiers and ensures objectives set. Our strength lies in our pool of experienced and highly trained professionals who are trained in complete installation, configuration, commissioning and interconnectivity of RBS equipment. We are dedicated to delivering the solutions you need to run your sites with continuous innovations and improvements.

                           </p>
                            </div>
                        </div>
                    </div><!-- Service2 end -->
                </div><!-- Col 5 end -->

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service6.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon6.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Repairing & Maintenance of BTS Sites</a></h3>
                          <p>
                              We work closely with our customers to optimize performance and minimize the downtime of the sites. We are well-equipped with the professional staff and equipment. Our teams ready to rush 24/7 to meet any urgencies.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service31.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon1.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">NOCs/ Build out Approvals</a></h3>
                          <p>
                              We believe that for un-interruptible Role out NOCs from concerned authorities are mandatory and only speedy way of getting the NOCs can ensure smooth and trouble free build out. Al Hamd Telecom services have full ability to meet all these challenges to get NOCs from relevant authorities in speculated time. We are working closely with local bodies for approvals of NOCs of BTS sites. So far we have acquired more than NOCs from TMAs, DHAs other authorities’ nationwide.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service16.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon1.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Site Acquisition, Negotiation Re-Negotiation of Rents</a></h3>
                          <p>
                              Our management personnel have significant experience in attaining BSS sites for companies such as NSN, Huawei, Alcatel and Tower Share. Not only these sites attained in the stipulated period of time but these were also acquired at very well bargained rates. Acquisition of more than 1500 sites at very well bargained rates shows our efficiency & expertise in the field of negotiations. We believe that we’re the best team skilled in rental negotiations of the existing sites to cut down the rental/ operational expenses.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service26.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon3.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Environmental Approvals Consultancy </a></h3>
                          <p>
                              Al Hamd Telecom Services investing this expertise into helping to create an environmentally friendly telecom web. We are already consulting different telecoms on the noise, vibration, CO2 and microwave radiation aspects to help them comply with presentand future emission standards. We are also expanding our capabilities to provide environmental impact surveys & “IEE” reports on large construction and energy projects such as dams and power generation facilities. We are registered with EPA NWFP, AJK and Gilgit Baltistan, however our registration with other provinces is in progress. Currently we are working with JAZZ (Warid-Mobilink) for their EPA related issues.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service36.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">BTS Indoor Installation Services</a></h3>
                          <p>
                              We Al Hamd Telecom Services also provide BTS indoor installation MBTS/BBU sites indoor installation and commissioning, RFS/RRU Tower Top Mounted, Commissioning, Integration & ATP Sign- Off. Which includes Un-Packaging and Goods verification and shifting. Installation of BTS Rack. Power cable and grounding cable routing and terminate to MCB or IGB. E1 cable routing and punching on DDF. Lightning protection Box, IGB, MCB, DDF installation. Alarm cable routing and environment detection sensor fixed. RF jumper cable connector making. RF jumper cable routing and connect to existing surge arrestor.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service46.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon4.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Fiber Optical Wire Laying Services</a></h3>
                          <p>
                              We also provide a full service of fiber optical wires laying in many different specifications, including single-mode, multimode, duplex and simplex in many different core sizes. We also carry many terminated cables in various lengths, with the main fiber connection types of SR4, SR10, MTP/MPO, SC, ST, LC, FC and MTRJ. For longer runs cable, we also offer bulk fiber optic cable, which can be cut and fitted with connectors for any length you need. Our plenum bulk fiber will pass building inspections for cables installed between the floors of buildings, Towers & other required purposes.
                              Al Hamd Telecom Services can handle a wide variety of fiber optic services. Contact us with any questions regarding your project and we’ll explain the process to you and let you know how we can help.
                              <br>
                              <br>
                              <b>Services include:</b>
                                <ul>
                                    <li>Fusion Splicing</li>
                                    <li>Installation</li>
                                    <li>Testing & Certification</li>
                                    <li>Fiber Optic Network Audits</li>
                                    <li>Fiber to the Desktop/FTTx</li>
                                    <li>Multi-site Connectivity</li>
                                </ul>
                                If you need a reliable outside site contractor that knows how to get the job done every time you can count on us. Give us a call to learn more about our OSP experience and find out how we can meet your needs.
                                <br>
                                <br>
                                <b>Outside Site Contractor Services Include:</b>
                                <ul>
                                    <li>Fiber Splicing on Dark Fiber and Critical Active Network</li>
                                    <li>Fiber Optic Acceptance testing and Documentation</li>
                                    <li>Aerial Cable Line Construction</li>
                                    <li>Underground Cable Placement Services</li>
                                    <li>Equipment Installation</li>
                                </ul>
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service56.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Drive Test Services for Telecommunication’s</a></h3>
                          <p>
                              Al Hamd Telecom Services also provides drive test services for checking the telecommunication tower network capability. At this stage our main focus in on fundamental end to end service accessibility target (eg calls set up and drop rates) and on performance targets such as coverage related targets (Such as CPICH RSCP and CPICH Ec/No) and HSDPA/HSUPA speed performance such services are as below:
                          <br>
                                <ul>
                                    <li>Coverage Verification</li>
                                    <li>New Site Performance Verification & amp; Field Optimization</li>
                                    <li>Network Problem Trouble Shooting like Drop Calls, handover failure, Poor coverage patches</li>
                                    <li>Poor RX Quality Patches, Etc.</li>
                                    <li>Bench-marking Drive Test to find our Coverage & amp; Quality comparison against Competitor Network</li>
                                    <li>New Site Drive Test (Coverage Drive)</li>
                                    <li>Route Drive Test</li>
                                </ul>

                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{asset('frontend/images/services/service66.jpg')}}" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{asset('frontend/images/icon-image/service-icon2.png')}}" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="">Energization Optimization</a></h3>
                          <p>
                              The Energization process includes arrangement of WAPDA power for BTS Sites Earthing & termination/installation of Power Cables. So far we have energized more than 150 sites for NSN/Telenor & Erricson/Warid. We also provide Energization in the form of generators. AES Optimizing Service lets you derive greater performance form your existing network by optimizing the wireless and transmission network, maximizing coverage and balancing network infrastructure with network performance.
                          </p>
                           </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->

            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    <!-- Javascript Files
    ================================================== -->
        @includeIf('include.footer')

        @includeIf('include.scripts')
</div><!-- Body inner end -->
</body>
</html>
