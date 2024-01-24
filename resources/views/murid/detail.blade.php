@extends('main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">Murid</h4> 
		<a href="{{ route('murid.index') }}" class="btn btn-danger ml-auto"><i class="fa-solid fa-arrow-left-long"></i></a>  
	</div>
	<div class="card-body">
		<div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nama Legkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap" value="{{ $detail->namaMurid }}" readonly>
          </div>
          @if ($detail->kelamin == "L")
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" placeholder="Kata Sandi" value="Laki-Laki" readonly>
            </div>
            @else
             <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" placeholder="Kata Sandi" value="Perempuan" readonly>
            </div>
            @endif
          <div class="col-6">
            <label for="inputAddress" class="form-label">NISN</label>
            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $detail->nisn }}" readonly>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Nomor Absen</label>
           <input type="text" class="form-control" placeholder="Kata Sandi" name="katasandi" value="{{ $detail->noAbsen }}" readonly>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Di Tambahkan</label>
           <input type="text" class="form-control" placeholder="Kata Sandi" name="katasandi" value="{{ $detail->created_at }}" readonly>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Di Update</label>
           <input type="text" class="form-control" placeholder="-" value="{{ $detail->updated_at }}" readonly>
          </div>
	</div>
</div>
@endsection