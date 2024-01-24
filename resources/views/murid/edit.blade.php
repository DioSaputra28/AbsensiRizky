@extends('main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">Tambah Murid</h4> 
		<a href="{{ route('murid.index') }}" class="btn btn-danger ml-auto"><i class="fa-solid fa-arrow-left-long"></i></a>  
	</div>
	<div class="card-body">
		<form class="row g-3" action="{{ route('murid.update', $edit->id) }}" method="POST">
			@csrf
			@method('PUT')
			<div class="col-md-6">
			  <label for="inputEmail4" class="form-label">Nama Murid</label>
			  <input type="text" class="form-control" value="{{ $edit->namaMurid }}" name="namaMurid" required>
			</div>
			<div class="col-md-6">
			  <label class="form-label">Jenis Kelamin</label>
			  <select class="form-control" name="kelamin">
                @if ($edit->kelamin == "L")
				<option disabled>Laki-Laki</option>
                @else
				<option disabled>Perempuan</option>
                @endif
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
			  </select>
			</div>
			<div class="col-6">
			  <label for="inputAddress" class="form-label">NISN</label>
			  <input type="text" class="form-control" value="{{ $edit->nisn }}" name="nisn" required>
			</div>
			<div class="col-6">
			  <label for="inputAddress" class="form-label">No Absen</label>
			  <input type="text" class="form-control" value="{{ $edit->noAbsen }}" name="noAbsen" required>
			</div>
			<div class="col-12 mt-2">
			  <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div>
		  </form>
	</div>
</div>
@endsection