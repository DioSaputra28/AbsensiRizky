@extends('main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <h5>Website Made By</h5></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">NPC Group</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Heading -->
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <h6 class="m-0 font-weight-bold text-primary">Data Kelompok</h6></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Absen</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>L/P</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>15</th>
                            <th>Irsyad Hidayat</th>
                            <th>112233</th>
                            <th>L</th>
                            <th>Project Manager</th>
                        </tr>
                        <tr>
                            <th>17</th>
                            <th>Irvan Putra Ramadhan</th>
                            <th>445566</th>
                            <th>L</th>
                            <th>Designer</th>
                        </tr>
                        <tr>
                            <th>19</th>
                            <th>M.Rizky Agiantoro</th>
                            <th>778899</th>
                            <th>P</th>
                            <th>Programmer</th>
                        </tr>
                        <tr>
                            <th>24</th>
                            <th>Bintang Radikal</th>
                            <th>889910</th>
                            <th>L</th>
                            <th>Analisis</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection