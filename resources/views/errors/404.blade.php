@include('includes.header')
<article class="entry">
    <div class="entry-content">
        <!-- head page 404-->
        <div class="bg-yellow pt-5 pt-lg-8 pb-lg-7 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h1 class="title-404">404</h1>
                        <h2 class="h1"> Page Not Found</h2>
                        <div class="mt-lg-3 mt-4">
                            <p class="pl-4">We’re sorry, the page you have looked for does not exist in our database! Maybe go to our home page or try to use a search?</p>
                        </div>
                        <div class="mt-lg-5 px-lg-3 mt-4 px-3">
                            <form class="pr-0">
                                <div class="form-group row gx-lg-0">
                                    <div class="col-lg-10 col-md-10">
                                        <input class="form-control" id="form_search" type="text" name="lname" placeholder="Search" required>
                                    </div>
                                    <div class="col-lg-2 col-md-2"><a class="btn btn-black d-block btn-top-0 rounded-0 px-4" href="#"> <i class="fa fa-search text-white"></i></a></div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-lg-5 mb-lg-6 mt-4 mb-6"> <a class="btn btn-outline-black rounded-0" href="index.html">Go Back To Home Page</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@include('includes.footer')
