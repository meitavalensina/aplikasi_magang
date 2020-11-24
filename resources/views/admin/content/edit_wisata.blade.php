@extends('admin/layouts/master')
@section('title', 'Edit Tempat Wisata')
@section('admin/content')

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Tempat Wisata</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                
                                                    <form action="/updatewisata-admin/{{$wisata->kode_wisata}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                    @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nama" type="text" class="form-control" value="{{$wisata->nama}}">
                                                                    {{ $errors->kost->first('nama') }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="lokasi" placeholder="Lokasi">{{$wisata->lokasi}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <img style="height: 100px;"  src="{{asset('storage/uploads/'.$wisata->gambar)}}"/>
                                                                        <input name="file" type="file" class="form-control" placeholder="Course Price">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tiket_masuk" id="finish" type="number" class="form-control" value="{{$wisata->tiket_masuk}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <input type="submit" value="Update" class="btn btn-primary waves-effect waves-light">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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