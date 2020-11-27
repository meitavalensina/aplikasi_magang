@extends('dashboard.layouts.master')

@section('title', 'Perusahaan Magang.IT')

@section ('container')
<br>
<br>
<br>
<br>
<form action="/cari-industri" method="GET" class="row align-items-center">
    <div class="col-md-4 ml-auto">
        <div class="d-flex" style="padding-right: 100px;">
            <input type="text" name="cari" class="form-control" placeholder="Search...">
            <button type="submit" value="cari" class="btn btn-secondary"><span class="icon-search"></span></button>
        </div>
    </div>
</form>

<div class="site-section">
    <div class="container">
        <div class="row">
            <class class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>List Perusahaan</h2>
                        </div>
                    </div>
                </div>
                <class class="row">
                    @foreach($industri as $i)
                    <div class="col-md-6">
                        <div class="post-entry-1">
                            <a a href="images/img_h_1.jpg" data-fancybox="gal"><img alt="Image" class="img-fluid" src="{{url('/gambar/'.$i->gambar)}}">
                                <h2 style="font-size: 30px; text-align:center"><a href="/industri-detail/{{$i->kode_industri}}">{{$i->nama}}</a></h2>
                                <p>{{$i->alamat}}</p>
                                <div class="post-meta">
                                    <span class="date-read">Yogyakarta <span class="mx-1">18 November</span>2020 <span class="icon-star2"></span></span>
                                </div>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
</div>

@endsection