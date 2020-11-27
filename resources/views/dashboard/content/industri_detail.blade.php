@extends('dashboard.layouts.master2')

@section('title', 'Detail-Industri Magang.IT')

@section ('container')
<div class="site-section">
    <div class="container">
        <div class="row">
            <class class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Detail Perusahaan</h2>
                        </div>
                    </div>
                </div>
                <table class="table" style="border-color: white">
                    <tr>
                        <th>
                        <td>
                            <img alt="Image" style="width=50%; height:30%;" class="img-fluid" src="{{url('/gambar/'.$industri->gambar)}}">
                        </td>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Nama Perusahaan</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->nama }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Alamat</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->alamat }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Kontak</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->kontak}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Bidang</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->bidang}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Periode</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->periode}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Deskripsi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $industri->deskripsi}}</td>
                    </tr>
                </table>
        </div>
    </div>
</div>


@endsection