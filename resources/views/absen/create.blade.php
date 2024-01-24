@extends('main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">Tambah Murid</h4> 
		<a href="{{ route('absen.index') }}" class="btn btn-danger ml-auto"><i class="fa-solid fa-arrow-left-long"></i></a>  
	</div>
	<div class="card-body">
		<form class="row g-3" action="{{ route('absen.store') }}" method="POST">
			@csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Tanggal</label>
                <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required>
            </div>
            <table class="table table-bordered table-striped mt-3" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No Absen</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>L/P</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No Absen</th>   
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>L/P</th>
                        <th>Keterangan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($murid as $item)
                    <tr>
                        <input type="hidden" name="id_murid[]" value="{{ $item->id }}">
                        <td>{{ $item->noAbsen }}</td>
                        <td>{{ $item->namaMurid }}</td>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->kelamin }}</td>
                        <td>
                            <select name="keterangan[]" class="form-control">
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Alpha">Alpha</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>
		  </form>
	</div>
</div>
@endsection