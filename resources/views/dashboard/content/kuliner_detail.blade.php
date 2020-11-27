@extends('dashboard.layouts.master2')

@section('title', 'Detail-Kuliner Magang.IT')

@section ('container')

<div class="site-section">
    <div class="container">
        <div class="row">
            <class class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Detail Kuliner</h2>
                        </div>
                    </div>
                </div>
                <table class="table" style="border-color: white">
                    <tr>
                        <th>
                        <td>
                            <img alt="Image" style="width=50%; height:30%;" class="img-fluid" src="{{url('/gambar/'.$kuliner->gambar)}}">
                        </td>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Tempat Makan</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kuliner->nama }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Lokasi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kuliner->lokasi }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Jadwal Buka</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kuliner->jadwal_buka}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Deskripsi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kuliner->deskripsi}}</td>
                    </tr>

                    <tr>
                        <th scope="col">Harga</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $kuliner->harga}}</td>
                    </tr>
                </table>

        </div>
    </div>
</div>
</div>


@endsection