@extends('main.layout')

@section('content')
<body>
    <div class="container mt-3">
        <div class="card">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DETAIL PEGAWAI</a>
            </div>
        </nav>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>NIP: </b>{{$pegawai->nip}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$pegawai->nama}}</li>
                <li class="list-group-item"><b>Tempat Lahir: </b>{{$pegawai->tempat_lahir}}</li>
                <li class="list-group-item"><b>Alamat: </b>{{$pegawai->alamat}}</li>
                <li class="list-group-item"><b>Tanggal Lahir: </b>{{$pegawai->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Jenis Kelamin: </b>{{$pegawai->jenis_kelamin->name_jenis_kelamin}}</li>
                <li class="list-group-item"><b>Golongan: </b>{{$pegawai->golongan->name_golongan}}</li>
                <li class="list-group-item"><b>Eselon: </b>{{$pegawai->eselon->name_eselon}}</li>
                <li class="list-group-item"><b>Jabatan: </b>{{$pegawai->jabatan->name_jabatan}}</li>
                <li class="list-group-item"><b>Tempat Tugas: </b>{{$pegawai->tempat_tugas}}</li>
                <li class="list-group-item"><b>Agama: </b>{{$pegawai->agama->name_agama}}</li>
                <li class="list-group-item"><b>Unit Kerja: </b>{{$pegawai->unit_kerja}}</li>
                <li class="list-group-item"><b>No HP: </b>{{$pegawai->no_hp}}</li>
                <li class="list-group-item"><b>NPWP: </b>{{$pegawai->npwp}}</li>
            </ul>
        </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-lg-12 mb-2">
                <a href="{{ route('pegawai.index') }}" class="btn btn-light px-4"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</body>
@endsection