@extends('admin/layouts/master')
@section('title', 'Halaman Industri')

@section('admin/content')

<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><span class="bread-blod">Kelola Data Industri</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1><span class="table-project-n">Data Industri</span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <div>
                                        <a href="/createindustri-admin" class="btn btn-primary btn-s"> (+) Tambah Data</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-add="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="no">No</th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name">Nama</th>
                                                <th data-field="email">Email</th>
                                                <th data-field="phone">No. HP</th>
                                                <th data-field="date">Tanggal Lahir</th>
                                                <th data-field="price">Jenis Kelamin</th>
                                                <th data-field="action">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>MHS123</td>
                                                <td>Ricky Sadewa</td>
                                                <td>RickySadewa007@gmail.com</td>
                                                <td>081271113744</td>
                                                <td>25 Februari 1997</td>
                                                <td>Laki-laki</td>
                                                <td>
                                                    <a href="/editindustri-admin" data-toggle="tooltip" title="isi materi" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>MHS123</td>
                                                <td>Ricky Sadewa</td>
                                                <td>RickySadewa007@gmail.com</td>
                                                <td>081271113744</td>
                                                <td>25 Februari 1997</td>
                                                <td>Laki-laki</td>
                                                <td>
                                                    <button data-toggle="tooltip" title="isi materi" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>MHS123</td>
                                                <td>Ricky Sadewa</td>
                                                <td>RickySadewa007@gmail.com</td>
                                                <td>081271113744</td>
                                                <td>25 Februari 1997</td>
                                                <td>Laki-laki</td>
                                                <td>
                                                    <button data-toggle="tooltip" title="isi materi" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>MHS123</td>
                                                <td>Ricky Sadewa</td>
                                                <td>RickySadewa007@gmail.com</td>
                                                <td>081271113744</td>
                                                <td>25 Februari 1997</td>
                                                <td>Laki-laki</td>
                                                <td>
                                                    <button data-toggle="tooltip" title="isi materi" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>MHS123</td>
                                                <td>Ricky Sadewa</td>
                                                <td>RickySadewa007@gmail.com</td>
                                                <td>081271113744</td>
                                                <td>25 Februari 1997</td>
                                                <td>Laki-laki</td>
                                                <td>
                                                    <button data-toggle="tooltip" title="isi materi" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection