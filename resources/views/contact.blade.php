@include('includes.header')
<!-- End Navbar-->
<article class="entry">
    <div class="entry-content">
        <div class="bg-theme-color">
            <div class="container py-lg-8 py-md-7 py-6">
                <div class="row mt-lg-3">
                    <div class="col-lg-6">
                        <h2 class="my-3">Contact Us</h2>
                        <p class="lead mb-6">We would love to hear any query from you. You can easily get started by entering required details with your query. One of our support member will be right back with the answer.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 mb-lg-5 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">Dhaka Office</h4>
                                    <p>399/2 (2nd Floor), East Nakhalpara, Tejgaon, Dhaka 1215, BD</p>
                                    <h6 class="font-weight-normal mt-4">info@khanenterprise.xyz</h6>+88 01919 017 358
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">
                                    <h4 class="mb-3 mb-lg-3">Registered Office</h4>
                                    <p>#NO-0071, Flat Road, Maijdee Court, Noakhali, 3800, BD</p>
                                    <h6 class="font-weight-normal mt-4 mt-lg-4">hello@khanenterprise.xyz</h6>+88 01919 017 358
                                </div>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">--}}
{{--                                    <h4 class="mb-3 mb-lg-3">Chicago</h4>--}}
{{--                                    <p>4th floor 3918 randall drive moanalua, hi 96819</p>--}}
{{--                                    <h6 class="font-weight-normal mt-4">chicago@email.com​</h6>+51853 458 243--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="pr-lg-7 pr-md-8 mb-md-5 pr-9 mb-5">--}}
{{--                                    <h4 class="mb-3 mb-lg-3">Singapore</h4>--}}
{{--                                    <p>1st floor 66 king street brook vale sp 103</p>--}}
{{--                                    <h6 class="font-weight-normal mt-4">singapore@email.com​</h6>+51853 458 243--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
{{--                        <iframe id="gmap_canvas" width="100" height="400" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>--}}
                        <iframe id="gmap_canvas" width="100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.369523124837!2d90.39274497574485!3d23.769852268872448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c766bb64270d%3A0x8a99121df2522244!2s2nd%20Floor!5e0!3m2!1sen!2sbd!4v1627834507631!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Subscription form-->
        @include('includes.subscription-form')
    </div>
</article>
@include('includes.footer')
