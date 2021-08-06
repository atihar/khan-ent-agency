@include('includes.header')

<article class="entry">
    <div class="entry-content">
{{--        silder--}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src={{asset('assets/images/slider/slide-1.jpg')}} alt="First-slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{asset('assets/images/slider/slide-2.jpg')}} alt="Second-slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{asset('assets/images/slider/slide-3.jpg')}} alt="Third-slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{asset('assets/images/slider/slide-4.jpg')}} alt="Fourth-slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src={{asset('assets/images/slider/slide-5.jpg')}} alt="Fifth-slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- head-->
        <div class="twenty-percent-bg-yellow">
            <div class="container py-lg-8 py-md-8 py-5">
                <div class="row gx-lg-5 mt-lg-3">
                    <div class="col-lg-6 col-md-8">
                        <h1 class="text-white mb-4">Khan Ent is a leading construction and infrastructure services company</h1>
                        <p class="mb-5 text-white">As mega-projects are reshaping the growth of Bangladesh and transformation is happening in every sphere with quantifiable successes on global indices, we will keep complementing the government's effort to build a stronger foundation for infrastructure that will support and springboard the development the whole nation aligned their vision around.</p>
                       <div class="pb-md-2 d-inline"><a class="btn btn-outline-white" href="/about">ABOUT US</a></div>

                    </div>
                    <div class="col-lg-6 pt-6 pb-10">
{{--                        <div class="mt-lg-0 mt-md-5 mt-5"> <img src="assets/images/1.jpg" alt="burger"></div>--}}
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sU1MZU3MJXM"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-4 col-md-6">
                    <div class="pr-lg-3">
                        <h2>Working as a First Class Contractor for the Govt. of Bangladesh</h2>
                    </div>
                </div>
            </div>
            <!--numberings-->
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="pr-lg-4">
                        <p>From concept and design to implementation, we have a dedicated team of engineering, procurement and construction experts specializing in civil, structural, mechanical and electrical disiplines. Over the past decade, Khan Enterprise implements complex projects of all types and sizes. We have -</p>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-6 mb-lg-9 mt-md-5 mb-md-8 mb-5">
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-0 mt-4">
                        <img src="assets/images/81.jpg" alt="Gov of Bangladesh">
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-0 mt-5">
                        <img src="assets/images/82.jpg" alt="Meeting">
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <img src="assets/images/83.jpg" alt="Meeting">
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <img src="assets/images/84.jpg" alt="Meeting">
                </div>
            </div>
        </div>
        <!-- working arround the world  -->
        <div class="bg-theme-color">
            <div class="container py-lg-9 py-md-7 py-6">
                <div class="row gx-lg-5">
                    <div class="col-lg-6"><img src="assets/images/2.jpg" alt="khan-enterprise"></div>
                    <div class="col-lg-6 pr-lg-7 my-auto mt-md-6 mt-5">
                        <h2>How we ensure balanced ecosystem?</h2>
                        <p class="mt-3">Khan Enterprise has developed a balanced ecosystem across management, project quality and its overall arena.</p>
                        <div class="row mt-lg-6 mt-md-5 mt-5 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 fab fa-envira btn-outline-black-1 py-3 px-3" style="border-color: white;"></i></div>
                            <div class="col-lg-10">
                                <h5>Environmental management system</h5>
                                <p class="mt-3">We follow sustainable best practice in constructing structures which may last centuries.</p>
                            </div>
                        </div>
                        <div class="row mt-lg-5 mt-md-5 mt-4 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 far fa-building btn-outline-black-1 py-3 px-3" style="border-color: white;"></i></div>
                            <div class="col-lg-10">
                                <h5>Quality management system</h5>
                                <p class="mt-3">A comprehensive set of procedures and controls which are documented in accordance global standard.</p>
                            </div>
                        </div>
                        <div class="row mt-lg-5 mt-md-5 mt-4 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 fas fa-file-medical btn-outline-black-1 py-3 px-3" style="border-color: white;"></i></div>
                            <div class="col-lg-10">
                                <h5>Health, safety & injury prevention policy</h5>
                                <p class="mt-3 mb-0">It is designed to prevent workplace incidents, injuries and illnesses which is maintained on all job site locations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfoio-->
{{--        removed--}}
        <!-- mission and vision-->
        <div class="container mb-lg-9 mb-md-7 mb-5 mt-5">
            <div class="seventy-percent-bg-yellow">
                <div class="row gx-lg-0">
                    <div class="col-lg-6 py-lg-6 px-lg-6 py-md-5 px-md-5 py-5 px-4">
                        <div class="px-lg-0 px-md-0 px-2">
                            <h1 class="mb-3 text-white">Mission</h1>
                            <p class="lead mb-3 text-white">Our mission is to be a world-class engineering and
                                construction enterprise to serve the government
                                development projects, private clients and society
                                by providing quality construction, technical
                                and management services.</p>
                            <p class="lead mb-0 text-white">Uphold our firm
                                commitment to excellence in engineering and
                                innovation, and our dedication to serving with
                                ethical principles, social responsibility, and
                                care for our environment.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-lg-10 pb-lg-7 mt-lg-5">
                        <div class="bg-black">
                            <div class="py-lg-6 px-lg-6 py-md-5 px-md-5 py-5 px-4">
                                <h1 class="text-theme-color mb-3">Vision</h1>
                                <p class="lead text-white mb-0">To be the leading engineering and
                                    Construction Company, celebrated
                                    for our optimum commitment,
                                    methodologies, cutting edge
                                    technology, and human resource
                                    capabilities in the area of
                                    infrastructural development.</p>
                            </div>
                        </div>
                    </div>
                </div>
{{--                our values--}}
                <div class="row gx-lg-5 bg-light p-5">
                    <h2 class="mb-3">Our Values</h2>
                    <div class="col-lg-6 col-md-12">
                        <p class="lead mb-3 "><span class="font-weight-bold">Integrity:</span> We carry out the projects in good faith with shouldering optimal responsibility and maintaining transparency and accountability in the course of performing our job. We commit to systems which are secure, reliable and accurate.</p>
                        <p class="lead mb-3 "><span class="font-weight-bold">Innovation:</span> To create high values in cooperation with our clients by applying our wisdom and innovation to the greatest extent.</p>
                        <p class="lead mb-3 "><span class="font-weight-bold">Teamwork:</span> We value the individuality and contribution of all colleagues for working in support of each other and sharing good practice as well as in cooperation with our clients and partners to acheive a high performance.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="lead mb-3 "><span class="font-weight-bold">Safety:</span> We always think and act safely while implementing our projects and always assess the impact of our activities on the environment, designing balanced solutions that are respectful to the environment.</p>
                        <p class="lead mb-3 pb-4"><span class="font-weight-bold">Diversity:</span> To respond to the variety of work and tasks in a flexible manner while viewing them from different angles as well as respect the cultire and costume.</p>
                        <p class="lead mb-3 "><span class="font-weight-bold">Learning:</span> To acquire new experience, skills and knowledge with an enterprising spirit, we learn from our mistakes and we always look into technological advancements for improving continiously</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- button-->
        <div class="container-fluid px-0 mb-lg-9 mb-md-7 mb-6">
            <div class="text-center"><a class="btn btn-outline-black" href="/projects">SEE All PROJECTS</a></div>
        </div>
        <!-- qoute block-->
        <div class="container mb-lg-9 mb-md-7 mb-5">
            <div class="seventy-five-percent-bg-yellow">
                <div class="row">
                    <div class="col-lg-5 py-lg-7 order-lg-1"><img src="assets/images/6.jpg" alt="khan-enterprise"></div>
                    <div class="col-lg-7 px-lg-6 py-lg-7 px-md-6 py-md-6 px-5 py-5"><i class="custom-icon fas fa-quote-left mb-4"></i>
                        <div class="pr-lg-4">
                            <p class="lead mt-2 mt-lg-3 mb-lg-5 mb-md-4 mb-4 text-white">We mainly work with the government of Bangladesh for implementing infrastructural developement projects. We are registered as a First Class contractor with the government of Bangladesh. Bangladesh has been withnessing tremendous development nowadays under the leadership of our honorable Prime Minister Sheikh Hasina. We are very proud to work for achieving her vision.</p>
                        </div>
                        <h5 class="text-white">Shohid Ullah Khan - CEO, Khan Enterprise</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-->
{{--        removed--}}
        <!--Subscription form-->
        @include('includes.subscription-form')
    </div>
</article>

@include('includes.footer')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    function autoPlayYouTubeModal() {
        var triggerOpen = $("body").find('[data-tagVideo]');
        triggerOpen.click(function() {
            var theModal = $(this).data("bs-target"),
                videoSRC = $(this).attr("data-tagVideo"),
                videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.btn-close').click(function() {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }

    $(document).ready(function() {
        autoPlayYouTubeModal();
    });
</script>
