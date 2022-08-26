@extends('main.layout')
 
@section('content')
<body>
    <div class="container mt-3">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-block text-center" href="#">DATA PEGAWAI</a>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-lg-6">
                <form action="/pegawai">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control float-end" placeholder="Cari.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('pegawai.create') }}" class="btn btn-primary px-4 float-end"><i class="bi bi-plus"></i> Tambah</a>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <table class="table table-striped w-100 table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Golongan</th>
                            <th scope="col">Eselon</th>
                            <th scope="col">Tempat Tugas</th>
                            <th scope="col">Unit Kerja</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($pegawai as $peg)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peg->nip }}</td>
                                <td>{{ $peg->nama }}</td>
                                <td>{{ $peg->golongan->name_golongan }}</td>
                                <td>{{ $peg->eselon->name_eselon }}</td>
                                <td>{{ $peg->tempat_tugas }}</td>
                                <td>{{ $peg->unit_kerja }}</td>
                                <td>
                                    <a href="{{ route('pegawai.show', $peg->id) }}" class="btn btn-info btn-sm text-white">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{ route('pegawai.edit', $peg->id) }}" class="btn btn-warning btn-sm text-white">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('pegawai.destroy', $peg->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($pegawai->count())
            </div>
        </div>
        @else
        <p class="text-center fs-4">Data tidak ditemukan.</p>
        @endif
        <div class="d-flex justify-content-end">
        {{ $pegawai->links() }}
        </div>
    </div>
</body>
@endsection