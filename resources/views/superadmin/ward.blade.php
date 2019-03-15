@extends("layouts.header")
    @section("content")
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Hospital Ward</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('superadmin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Ward List</a>
                                </li>
                                <li class="breadcrumb-item active">Input Grid
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection