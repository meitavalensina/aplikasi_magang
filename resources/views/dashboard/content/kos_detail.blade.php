@extends('dashboard.layouts.master2')

@section('title', 'Detail-Kost Magang.IT')

@section ('container')

<div class="site-section">
    <div class="container">
        <div class="row">
            <class class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Detail Kost</h2>
                        </div>
                    </div>
                </div>
                <table class="table" style="border-color: white">
                <tr>
                        <th>
                        <td>
                            <img alt="Image" style="width=50%; height:30%;" class="img-fluid" src="{{url('/storage/uploads/'.$kos->gambar)}}">
                        </td>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Nama Kost</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kos->nama }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Alamat</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kos->alamat }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Kontak</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kos->kontak}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Harga</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kos->harga}}</td>
                    </tr>

                    <tr>
                        <th scope="col">Deskripsi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kos->fasilitas}}</td>
                    </tr>
                </table>

        </div>
    </div>
</div>
</div>

@endsection