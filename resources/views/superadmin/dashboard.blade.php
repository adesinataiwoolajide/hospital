@extends("layouts.header")
    @section("content")
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>
                <div class="content-body">
                    @include('layouts.message')
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-primary white media-body">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 28</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-danger bg-darken-2">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-danger white media-body">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>1,238</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-warning bg-darken-2">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-warning white media-body">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0"><i class="ft-arrow-down"></i> 4,658</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-success bg-darken-2">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-success white media-body">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> 5.6 M</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="img-fluid" src="{{asset('website/app-assets/images/carousel/ogun.png')}}" style="height:200px width:200px" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text" align="center">Drugs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="img-fluid" src="{{asset('website/app-assets/images/carousel/labo2.jpg')}}" style="height:300px width:200px" alt="Card image cap">
                                    <div class="card-body">
                                            <p class="card-text" align="center">Hospital Test</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="img-fluid" src="{{asset('website/app-assets/images/carousel/ward.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text" align="center">Hospital Ward</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="img-fluid" src="{{asset('website/app-assets/images/carousel/unit.jpg')}}" style="height:165px" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text" align="center">Hospital Units</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Staff</h4>
                                       
                                    </div>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="{{asset('website/app-assets/images/carousel/doc.jpg')}}" class="d-block w-100" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/doc2.jpg')}}" class="d-block w-100" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/doc3.jpg')}}" class="d-block w-100" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Hospital Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Laboratory</h4>
                                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                    </div>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="{{asset('website/app-assets/images/carousel/labo.jpg')}}" class="d-block w-100" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/labo2.jpg')}}" class="d-block w-100" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/labo3.jpg')}}" class="d-block w-100" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Hospital Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Hospital Drugs</h4>
                                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                    </div>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="{{asset('website/app-assets/images/carousel/ogun.png')}}" class="d-block w-100" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/ogun2.png')}}" class="d-block w-100" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('website/app-assets/images/carousel/ogun3.jpg')}}" class="d-block w-100" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Hospital Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection