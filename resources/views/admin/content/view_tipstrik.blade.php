@extends('admin/layouts/master')
@section('title', 'Halaman Tips & Trik')

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
                                            <li><span class="bread-blod">Tips & Trik</span>
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
                                    <h1><span class="table-project-n">Tips & Trik</span></h1>
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
                                        <a href="/createtipstrik-admin" class="btn btn-primary btn-s"> (+) Tambah Data</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-add="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="no">No</th>
                                                <th data-field="judul">Judul</th>
                                                <th data-field="deskripsi">Deskripsi</th>
                                                <th data-field="aksi">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0;?>
                                        @foreach($tipstrik as $t)
                                        <?php $no++;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$t->judul}}</td>
                                                <td>{{$t->deskripsi}}</td>
                                                <td>
                                                    <a href="/edittipstrik-admin/{{$t->id_tips}}" data-toggle="tooltip" title="edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <a href="/hapustipstrik-admin/{{$t->id_tips}}" data-toggle="tooltip" title="hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
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