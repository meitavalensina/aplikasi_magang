@extends('dashboard.layouts.master2')

@section('title', 'Detail-Wisata Magang.IT')

@section ('container')

<div class="site-section">
    <div class="container">
        <div class="row">
            <class class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Detail Wisata</h2>
                        </div>
                    </div>
                </div>
                <table class="table" style="border-color: white">
                <tr>
                        <th>
                        <td>
                            <img alt="Image" style="width=50%; height:30%;" class="img-fluid" src="{{url('/storage/uploads/'.$wisata->gambar)}}">
                        </td>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Nama Wisata</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $wisata->nama }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Lokasi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $wisata->lokasi }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Tiket Masuk</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $wisata->tiket_masuk }}</td>
                    </tr>
                </table>

        </div>
    </div>
</div>
</div>


@endsection