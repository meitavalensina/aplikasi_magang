@extends('dashboard.layouts.master')

@section('title', 'Kuliner Magang.IT')

@section ('container')
<br>
<br>
<br>
<br>
<form action="/cari-kuliner" method="GET" class="row align-items-center">
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
                            <h2>Kuliner</h2>
                        </div>
                    </div>
                </div>
                <class class="row">
                    @foreach($kuliner as $kul)
                    <div class="col-md-6">
                        <div class="post-entry-1">
                            <a a href="images/img_h_1.jpg" data-fancybox="gal"><img alt="Image" class="img-fluid" src="{{url('/gambar/'.$kul->gambar)}}"></a>
                            <h2 style="font-size: 30px; text-align:center"><a href="/kuliner-detail/{{$kul->kode_kuliner}}">{{$kul -> nama}}</a></h2>
                            <p>{{$kul->lokasi}}</p>
                            <div class="post-meta">
                                <span class="date-read">Admin <span class="mx-1">18 November</span>2020 <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
</div>

@endsection