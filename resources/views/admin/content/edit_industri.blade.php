@extends('admin/layouts/master')
@section('title', 'Edit Data Industri')

@section('admin/content')


<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Data Industri</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/proseseditindustri-admin/{{$industri->kode_industri}}" method="post" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                    {{csrf_field()}}
                                                    @method('PATCH')
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Perusahaan</label>
                                                                    <input name="nama" type="text" class="form-control" value="{{$industri->nama}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                                                    <textarea name="alamat" type="text" class="form-control">{{$industri->alamat}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Bidang</label>
                                                                    <input name="bidang" type="text" class="form-control" value="{{$industri->bidang}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Kontak</label>
                                                                    <input name="kontak" type="text" class="form-control" value="{{$industri->kontak}}">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                <label for="exampleFormControlTextarea1">Gambar</label>
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <input name="gambar" type="file" class="form-control" placeholder="Course Price">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Periode</label>
                                                                    <input name="periode" type="text" class="form-control"  value="{{$industri->periode}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{$industri->deskripsi}}</textarea>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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