@extends('admin/layouts/master')
@section('title', 'Tambah Minimarket')

@section('admin/content')


<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Tambah Minimarket</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/proses-create-minimar-admin" method="post" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        {{csrf_field()}}
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Kode Minimarket</label>
                                                                    <input name="kode_market" type="text" class="form-control" placeholder="Kode Minimarket">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Nama</label>
                                                                    <input name="nama" type="text" class="form-control" placeholder="Nama">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Alamat</label>
                                                                    <textarea name="lokasi" placeholder="Lokasi"></textarea>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
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