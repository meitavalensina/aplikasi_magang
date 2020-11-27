@extends('admin/layouts/master')
@section('title', 'Tambah Industri')

@section('admin/content')


<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Tambah Industri</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/prosescreateindustri-admin" method="post" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        {{csrf_field()}}
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                    <input name="kode_industri" type="text" class="form-control" placeholder="Kode Industri">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nama" type="text" class="form-control" placeholder="Nama Industri">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="alamat" placeholder="Alamat"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kontak" id="finish" type="text" class="form-control" placeholder="Kontak">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="bidang" id="finish" type="text" class="form-control" placeholder="Bidang">
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <input name="gambar" type="file" class="form-control" placeholder="Course Price">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="periode" type="text" class="form-control" placeholder="Waktu Magang">
                                                                </div>
                                                            </div>
                                                          
                                                                <div class="form-group">
                                                                    <textarea name="deskripsi" placeholder="Description"></textarea>
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