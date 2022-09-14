@extends('layouts.admin')
@push('style')
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css" />
<link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />
@endpush

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Memo</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Memo
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30 ">
                <div class="pd-20">
                    <h4 class="text-black h4">List Memo</h4>
                </div>
                <div class="table-responsive-md" style="padding: 30px">
                    <table class="data-table table stripe hover wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="table-plus">No Memo</th>
                                <th class="table-plus">No FPPP</th>
                                <th class="table-plus">Mitra</th>
                                <th class="table-plus">Nama Project</th>
                                <th class="table-plus">Tanggal Memo</th>
                                <th class="table-plus">Deadline Pengambilan</th>
                                <th class="table-plus">Charge</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ncrs as $nomor => $ncr)    
                            <tr>
                                <td>{{$nomor + 1}}</td>
                                <td>{{$ncr->nomor_memo}}</td>
                                <td>{{$ncr->nomor_fppp}}</td>
                                <td>{{$ncr->nama_mitra}}</td>
                                <td>{{$ncr->nama_proyek}}</td>
                                <td>2022-08-08</td>
                                <td>2022-08-08</td>
                                <td>Tidak</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="/memo/{{$ncr->id}}/edit"><i class="dw dw-edit2"></i>
                                                Edit </a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                                Show </a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
                                                Cetak </a>
                                            <form action="/memo/{{$ncr->id}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="dropdown-item"><i class="dw dw-delete-3"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
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
@endsection
<!-- welcome modal end -->
<!-- js -->
@push('script')
<script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="/vendors/scripts/datatable-setting.js"></script>
@endpush