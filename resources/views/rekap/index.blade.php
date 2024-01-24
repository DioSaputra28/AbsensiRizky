@extends('main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">Tanggal Absen</h4> 
		<a href="{{ route('absen.index') }}" class="btn btn-danger ml-auto"><i class="fa-solid fa-arrow-left-long"></i></a>  
	</div>
	<div class="card-body">
		<form class="row g-3" action="{{ route('recap.store') }}" method="POST">
			@csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Tanggal Absen</label>
                <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required>
            </div>
			<div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>
		  </form>
	</div>
</div>
@endsection