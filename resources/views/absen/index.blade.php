@extends('main')

@section('container')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
</div>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <h6 class="m-0 font-weight-bold text-primary">Data Murid</h6>
            <a href="{{ route('absen.create') }}" class="btn btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            @if (Session::has('sukses'))
				<div class="alert alert-success" role="alert">
				{{ Session::get('sukses') }}
			    </div>
			@endif
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>
                                <div role="group" aria-label="Contoh Biasa" class="d-flex">
                                    <a href="{{ route('absen.show', ['absen' => $item->id]) }}" class="btn btn-secondary m-1"><i class="fa-solid fa-file"></i></a>
                                    <a href="{{ route('absen.edit', ['absen' => $item->id]) }}" class="btn btn-warning m-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <form action="{{ route('murid.destroy', ['murid' => $item->id]) }}" method="POST" onsubmit="return confirm('Yakin ingin Hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-1" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
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

@endsection