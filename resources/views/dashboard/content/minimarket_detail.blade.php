@extends('dashboard.layouts.master2')

@section('title', 'Detail-Minimarket Magang.IT')

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
                        <th scope="col">Nama Tempat</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $minimarket->nama }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Lokasi</th>
                        <td scope="col" style="font-family:Lucida Console; font-size:medium; color:black">{{ $minimarket->lokasi }}</td>
                    </tr>
                </table>

        </div>
    </div>
</div>
</div>


@endsection