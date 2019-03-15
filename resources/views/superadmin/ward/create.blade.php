<?php 
    $hospital_name = "Adeoyo Hospital";
?>
@extends("layouts.header")
    @section("content")
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">{{$hospital_name}} Ward</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('superadmin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('superadmin.ward.create')}}">Wards List</a>
                                </li>
                                <li class="breadcrumb-item active">List of Hospital Wards
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="horizontal-grid" id="horizontal-grid">
                    <div class="row">
                        <div class="col-md-12">
                            @include('layouts.message')
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" align="center">
                                        Please Fill The Form Below To Add The Ward Details
                                    </h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">     
                                        <form id="myForm">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="ward_name"  name="ward_name" required placeholder="Enter The Ward Name">
                                                        </div>
                                                        <span style="color: red">** This Field is Required **</span>
                                                        @if ($errors->has('ward_name'))
                                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                                
                                                                <div class="alert-message">
                                                                    <span><strong>Error!</strong> {{ $errors->first('ward_name') }} !</span>
                                                                </div>
                                                            </div>
                                                        @endif 
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" id="ajaxSubmit" class="btn btn-success">
                                                            <i class="fa fa-plus"></i><span>ADD WARD DETAILS</span>
                                                        </button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                        
                                        <script type="text/javascript">
                                            
                                            jQuery(document).ready(function(){
                                                // jQuery('#ajaxSubmit').click(function(e){
                                                //     e.preventDefault();
                                                //     // $.ajaxSetup({
                                                //     //     headers: {
                                                //     //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                                //     //     }
                                                //     // });
                                                //     jQuery.ajax({
                                                //         headers: {
                                                //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                                //         },
                                                //         url: '/saveWard';
                                                //         // url: "{{ route('superadmin.ward.save') }}",
                                                //         method: 'POST',
                                                //         data: {
                                                //             ward_name: jQuery('#ward_name').val(), 
                                                //         },
                                                //         success: function(result){
                                                //             console.log("result");
                                                //         }
                                                //     });
                                                // });
                                            });
                    var formData = document.getElementById('myForm');
                   
                    formData.onsubmit = function(){
                        event.preventDefault();
                        var formData1 = document.getElementById('myForm');
                        var dataForm = new FormData(formData1);
                            dataForm.append('something', 'alalalalala');
                        var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        var xhttp = new XMLHttpRequest();
                        xhttp.open('POST', '/saveWard', true);
                        xhttp.onreadystatechange = function(){
                                if (this.status == 200) {
                                    //    var data = JSON.parse(this.response);
                                    console.log(this.responseText);
                                }
                        }

                        xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
                        xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
                        xhttp.setRequestHeader("processData", 'false');
                        xhttp.setRequestHeader('cache', 'false');
                        xhttp.setRequestHeader("ContentType", "application/x-www-form-urlencoded");
                        xhttp.send(dataForm);
                    }
//             }
// ': $('meta[name="_token"]').attr('content'));
                                            
                                        </script>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-body">
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            @if(count($ward)< 1)
                                <div class="card">
                                    <p style="color:tomato" align="center"> The Ward List is Empty</p>
                                </div>
                            @else
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" align="center">
                                            List of {{$hospital_name}} Wards
                                        </h4>
                                        
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">
                                        
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <td>Serial Number</td>
                                                        <td>Ward Name</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $num=1; ?>
                                                    @foreach($ward as $wards)
                                                        <tr>
                                                            <td> {{$num}}
                                                                <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                                <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                            <td>{{$wards->ward_name}}</td> 
                                                        </tr>
                                                        <?php $num++; ?>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>Serial Number</td>
                                                        <td>Ward Name</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
@endsection