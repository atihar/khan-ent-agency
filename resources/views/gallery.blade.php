@include('includes.header')
<article class="entry">
    <div class="entry-content">
        <!-- Hero-->
        <div class="bg-yellow">
            <div class="container py-lg-8 mb-lg-7 py-md-7 mb-md-5 py-5 mb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="my-3">Our Gallery</h2>
                        <p class="lead mb-3">Consetetur lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-lg-9 mt-5 mb-lg-9 mb-md-7 mb-6">
        <div class="row gx-lg-5 gy-5 mb-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Photo</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Videos</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
{{--             starting first tab for photos--}}
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/5686647/pexels-photo-5686647.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-thumbnail" alt="khan-enterprise-gallery">
                        </div>
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/8266933/pexels-photo-8266933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-thumbnail" alt="khan-enterprise-gallery">
                        </div>
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/6791447/pexels-photo-6791447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-thumbnail" alt="khan-enterprise-gallery">
                        </div>
                    </div>
                </div>
{{--             ending first tab for photos--}}
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
{{--                                <iframe  src="https://www.youtube.com/embed/j5-yKhDd64s" allowfullscreen></iframe>--}}
                                <iframe class="embed-responsive-item" width="1280" height="720" src="https://www.youtube.com/embed/D14nQnVYPYE?list=RDMMD14nQnVYPYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                        </div>
                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                {{--                                <iframe  src="https://www.youtube.com/embed/j5-yKhDd64s" allowfullscreen></iframe>--}}
                                <iframe class="embed-responsive-item" width="1280" height="720" src="https://www.youtube.com/embed/D14nQnVYPYE?list=RDMMD14nQnVYPYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                {{--                                <iframe  src="https://www.youtube.com/embed/j5-yKhDd64s" allowfullscreen></iframe>--}}
                                <iframe class="embed-responsive-item" width="1280" height="720" src="https://www.youtube.com/embed/D14nQnVYPYE?list=RDMMD14nQnVYPYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</article>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('includes.footer')
