@extends('admin/layouts/master')
@section('title', 'Edit Tips & Trik')
@section('admin/content')

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Tips & Trik</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                
                                                    <form action="/updatetipstrik-admin/{{$tipstrik->id_tips}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                    @csrf 
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="judul" type="text" class="form-control" placeholder="Judul" value="{{$tipstrik->judul}}">
                                                                </div>
                                                                <div class="form-group">
                                                                <textarea name="deskripsi" placeholder="Deskripsi">{{$tipstrik->deskripsi}}</textarea>
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