@include('includes.header')
<!-- End Navbar-->
<article class="entry">
    <div class="entry-content">
        <div class="bg-yellow">
            <div class="container py-lg-8 py-md-7 py-6">
                <div class="row mt-lg-3">
                    <div class="col-lg-6">
                        <h2 class="my-3">Contact Us</h2>
                        <p class="lead mb-6">Consetetur lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 mb-lg-5 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">Amsterdam</h4>
                                    <p>3rd floor 66 queen street brook vale nsw 2100</p>
                                    <h6 class="font-weight-normal mt-4">amsterdam@email.com​</h6>+51853 458 243
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">New York</h4>
                                    <p>1st floor 73 wallis street tamarama nsw 2026</p>
                                    <h6 class="font-weight-normal mt-4 mt-lg-4">newyork@email.com​</h6>+51853 458 243
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">Chicago</h4>
                                    <p>4th floor 3918 randall drive moanalua, hi 96819</p>
                                    <h6 class="font-weight-normal mt-4">chicago@email.com​</h6>+51853 458 243
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">Singapore</h4>
                                    <p>1st floor 66 king street brook vale sp 103</p>
                                    <h6 class="font-weight-normal mt-4">singapore@email.com​</h6>+51853 458 243
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact page-->
                    <div class="col-lg-6">
                        <div class="bg-white py-6 px-4 py-lg-6 px-lg-5">
                            <form id="contact-form" method="post" action="assets/php.contact.php">
                                <div class="mb-3 mb-lg-4">
                                    <input class="form-control" id="form-name" type="text" name="fname" placeholder="Name" required>
                                </div>
                                <div class="mb-3 mb-lg-4">
                                    <input class="form-control" id="form-email" type="text" name="lname" placeholder="Email" required>
                                </div>
                                <div class="mb-3 mb-lg-4">
                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="mb-3 mb-lg-4">
                                    <textarea class="form-control" id="form-message" rows="6" cols="50" name="message" placeholder="Message" required> </textarea>
                                </div>
                                <div class="mb-lg-4"><a class="btn btn-outline-black rounded-0 d-block d-md-inline-block" href="#">Submit</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--google map-->
        <div class="bg-half">
            <div class="container mb-lg-9 mb-md-7 mb-5">
                <div class="container-fluid p-0">
                    <div class="map-responsive">
                        <iframe id="gmap_canvas" width="100" height="400" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Subscription form-->
        <div class="container my-lg-9 my-md-7 my-6">
            <div class="bg-yellow">
                <div class="row py-lg-8 py-md-6 py-6 px-lg-0 px-md-0 px-4">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 px-0">
                        <div class="text-center">
                            <h2 class="mb-4">keep up with the latest from tozee</h2>
                            <p class="mb-5 mt-1 px-lg-5">Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et</p>
                            <form id="subscribe">
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
