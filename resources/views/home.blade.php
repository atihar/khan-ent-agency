@include('includes.header')

<article class="entry">
    <div class="entry-content">
        <!-- head-->
        <div class="twenty-percent-bg-yellow">
            <div class="container py-lg-8 py-md-8 py-5">
                <div class="row gx-lg-5 mt-lg-3">
                    <div class="col-lg-6 col-md-8">
                        <h1 class="text-black mb-4">Khan Ent is a leading construction and infrastructure services company</h1>
                        <p class="mb-5">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                       <div class="pb-md-2 d-inline"><a class="btn btn-outline-black" href="/about">ABOUT US</a></div>
                       <div class="pb-md-2 d-inline"><a class="btn btn-black" data-bs-toggle="modal" data-tagVideo="https://www.youtube.com/embed/sU1MZU3MJXM" data-bs-target="#videoModal">Watch Intro</a></div>

                        {{--modal start--}}
                        <div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">close</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe height="600" width="1100" src="" allow="autoplay;" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{--modal end   --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-lg-0 mt-md-5 mt-5"> <img src="assets/images/1.jpg" alt="burger"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-4 col-md-6">
                    <div class="pr-lg-5">
                        <h2>Working with leading corporates around the world</h2>
                    </div>
                </div>
            </div>
            <!--numberings-->
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="pr-lg-4">
                        <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-6 mb-lg-9 mt-md-5 mb-md-8 mb-5">
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-0 mt-4">
                    <div class="col-4">
                        <div class="custom-font">35</div>
                    </div>
                    <h5 class="mt-6">Years of services </h5>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-0 mt-5">
                    <div class="col-4">
                        <div class="custom-font">120</div>
                    </div>
                    <h5 class="mt-6">Civil and rail projects </h5>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="col-4">
                        <div class="custom-font">350</div>
                    </div>
                    <h5 class="mt-6">Commercial building </h5>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="col-4">
                        <div class="custom-font">8630</div>
                    </div>
                    <h5 class="mt-6">Residential building </h5>
                </div>
            </div>
        </div>
        <!-- working arround the world  -->
        <div class="bg-yellow">
            <div class="container py-lg-9 py-md-7 py-6">
                <div class="row gx-lg-5">
                    <div class="col-lg-6"><img src="assets/images/2.jpg" alt="burger"></div>
                    <div class="col-lg-6 pr-lg-7 my-auto mt-md-6 mt-5">
                        <h2>Working around the world</h2>
                        <p class="mt-3">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, consetetur sadipscing elitr.</p>
                        <div class="row mt-lg-6 mt-md-5 mt-5 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 fas fa-tv btn-outline-black-1 py-3 px-3"></i></div>
                            <div class="col-lg-10">
                                <h5>Virtual design and construction</h5>
                                <p class="mt-3">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore com generate.</p>
                            </div>
                        </div>
                        <div class="row mt-lg-5 mt-md-5 mt-4 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 fas fa-city btn-outline-black-1 py-3 px-3"></i></div>
                            <div class="col-lg-10">
                                <h5>Office Build-outs and Expansion</h5>
                                <p class="mt-3">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore com generate.</p>
                            </div>
                        </div>
                        <div class="row mt-lg-5 mt-md-5 mt-4 gx-lg-5 gx-lg-8">
                            <div class="col-lg-2 mb-3 mb-lg-0"><i class="h3 fas fa-door-open btn-outline-black-1 py-3 px-3"></i></div>
                            <div class="col-lg-10">
                                <h5>Construction Management</h5>
                                <p class="mt-3 mb-0">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore com generate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfoio-->
        <div class="container mt-lg-9 mt-md-7 mt-6">
            <h2 class="mb-lg-5 mb-md-4 mb-3">Portfolio</h2>
            <div class="portfolio-list">
                <article class="portfolio-item">
                    <div class="entry-media"><img src="assets/images/3.jpg" alt="project"></div>
                    <div class="entry-content-wrapper">
                        <div class="entry-title"><a href="portfolio-single-project.html">Depot Hall of West Sector, UK</a></div>
                    </div>
                </article>
                <article class="portfolio-item">
                    <div class="entry-media"><img src="assets/images/4.jpg" alt="project"></div>
                    <div class="entry-content-wrapper">
                        <div class="entry-title"><a href="portfolio-single-project.html">Building Design and Construction</a></div>
                    </div>
                </article>
                <article class="portfolio-item">
                    <div class="entry-media"><img src="assets/images/5.jpg" alt="project"></div>
                    <div class="entry-content-wrapper">
                        <div class="entry-title"><a href="portfolio-single-project.html">Modern House Exterior Architecture</a></div>
                    </div>
                </article>
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
                    <div class="col-lg-5 py-lg-7 order-lg-1"><img src="assets/images/6.jpg" alt="project"></div>
                    <div class="col-lg-7 px-lg-6 py-lg-7 px-md-6 py-md-6 px-5 py-5"><i class="custom-icon fas fa-quote-left mb-4"></i>
                        <div class="pr-lg-4">
                            <p class="lead mt-2 mt-lg-3 mb-lg-5 mb-md-4 mb-4">Adipisci qui natus expedita aut eum aut. Et ut repellendus ea quis autem reprehenderit volu ptatem. Amet totam dolor is voluptates a tenetur sit. Qui asperiores excepturi perspiciatis totam rerum volup tatem et neque pariatur. Vivamus interdum porta turpis at ornare Fugiat qui illum sequi ea qui eos fugit mauris, porta in purus sit amet</p>
                        </div>
                        <h5>Michael D. Wilson - CEO of New City </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-->
        <div class="container my-lg-9 my-md-7 my-6">
            <h2 class="mb-lg-5 mb-md-4 mb-3">Blog</h2>
            <!-- Blog-->
            <div class="row gx-lg-5 gx-lg-3 blog-post card-post-style">
                <div class="col-lg-4 col-12">
                    <article>
                        <figure class="entry-media"><img class="lozad" src="assets/images/blog/b1-lqip.jpg" data-src="assets/images/blog/b1.jpg" alt="Entry Image"/><span class="entry-meta-category"><a href="blog-three-col.html">Photography</a></span>
                        </figure>
                        <div class="entry-content-wrapper">
                            <header class="entry-header">
                                <!--+entryMetaTop(item.author, item.date, item.commentCount, item.isEdit) -->
                                <h2 class="entry-title"><a href="blog-single-post.html">18 New Roads Schemes A Step Closer To Delivery</a></h2>
                            </header>
                            <div class="entry-content">
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <article>
                        <figure class="entry-media"><img class="lozad" src="assets/images/blog/b2-lqip.jpg" data-src="assets/images/blog/b2.jpg" alt="Entry Image"/><span class="entry-meta-category"><a href="blog-three-col.html">Humour</a></span>
                        </figure>
                        <div class="entry-content-wrapper">
                            <header class="entry-header">
                                <!--+entryMetaTop(item.author, item.date, item.commentCount, item.isEdit) -->
                                <h2 class="entry-title"><a href="blog-single-post.html">What Today’s Renters Truly Want In The Building</a></h2>
                            </header>
                            <div class="entry-content">
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <article>
                        <figure class="entry-media"><img class="lozad" src="assets/images/blog/b3-lqip.jpg" data-src="assets/images/blog/b3.jpg" alt="Entry Image"/><span class="entry-meta-category"><a href="blog-three-col.html">Photography</a></span>
                        </figure>
                        <div class="entry-content-wrapper">
                            <header class="entry-header">
                                <!--+entryMetaTop(item.author, item.date, item.commentCount, item.isEdit) -->
                                <h2 class="entry-title"><a href="blog-single-post.html">Should I Sell or Rent My Newly constructed House?</a></h2>
                            </header>
                            <div class="entry-content">
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="text-center align-items-center"><a class="btn btn-outline-black rounded-0" href="/blog">MORE POSTS</a></div>
        </div>
        <!--Subscription form-->
        <div class="container my-lg-9 my-md-7 my-6">
            <div class="bg-yellow">
                <div class="row py-lg-8 py-md-6 py-6 px-lg-0 px-md-0 px-4">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 px-0">
                        <div class="text-center">
                            <h2 class="mb-4">keep up with the latest from tozee</h2>
                            <div class="px-lg-5">
                                <p class="mb-5 mt-1">Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et</p>
                            </div>
                            <form>
                                <div class="form-group row gx-lg-2">
                                    <div class="col-md-9">
                                        <input class="form-control" id="form_email" type="text" name="lname" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-3 mt-2 mt-md-0"><a class="btn btn-outline-black d-block btn-top-0 rounded-0" href="#">SUBSCRIBE</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
