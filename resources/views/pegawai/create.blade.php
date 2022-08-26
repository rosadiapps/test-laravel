@extends('main.layout')

@section('content')
<body>
    <div class="container mt-3">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-block text-center" href="#">TAMBAH DATA PEGAWAI</a>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-lg-12">
                <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" required autofocus value="{{ old('nip') }}">
                        @error('nip')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama') }}">
                        @error('nama')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" required value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required value="{{ old('alamat') }}">
                        @error('alamat')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" required value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="jenis_kelamin_id">
                        @foreach ($jenis_kelamins as $jenis_kelamin)
                        @if(old('jenis_kelamin_id') == $jenis_kelamin->id)
                            <option value="{{ $jenis_kelamin->id }}" selected>{{ $jenis_kelamin->name_jenis_kelamin }}</option>
                        @else
                        <option value="{{ $jenis_kelamin->id }}" selected>{{ $jenis_kelamin->name_jenis_kelamin }}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="golongan_id">
                        @foreach ($golongans as $golongan)
                        @if(old('golongan_id') == $golongan->id)
                            <option value="{{ $golongan->id }}" selected>{{ $golongan->name_golongan }}</option>
                        @else
                            <option value="{{ $golongan->id }}" selected>{{ $golongan->name_golongan }}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="eselon" class="col-sm-2 col-form-label">Eselon</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="eselon_id">
                        @foreach ($eselons as $eselon)
                        @if(old('eselon_id') == $eselon->id)
                            <option value="{{ $eselon->id }}" selected>{{ $eselon->name_eselon }}</option>
                        @else
                            <option value="{{ $eselon->id }}" selected>{{ $eselon->name_eselon }}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="jabatan_id">
                        @foreach ($jabatans as $jabatan)
                        @if(old('jabatan_id') == $jabatan->id)
                            <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name_jabatan }}</option>
                        @else
                            <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name_jabatan }}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                <label for="tempat_tugas" class="col-sm-2 col-form-label">Tempat Tugas</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_tugas" class="form-control @error('tempat_tugas') is-invalid @enderror" required value="{{ old('tempat_tugas') }}">
                        @error('tempat_tugas')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="agama_id">
                        @foreach ($agamas as $agama)
                        @if(old('agama_id') == $agama->id)
                            <option value="{{ $agama->id }}" selected>{{ $agama->name_agama }}</option>
                        @else
                            <option value="{{ $agama->id }}" selected>{{ $agama->name_agama }}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                <label for="unit_kerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                    <div class="col-sm-10">
                        <input type="text" name="unit_kerja" class="form-control @error('unit_kerja') is-invalid @enderror" required value="{{ old('unit_kerja') }}">
                        @error('unit_kerja')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" required value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                    <div class="col-sm-10">
                        <input type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" id="npwp" required value="{{ old('npwp') }}">
                        @error('npwp')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-success px-4"><i class="bi bi-clipboard-check"></i> Simpan</button>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-light px-4"><i class="bi bi-arrow-left"></i> Kembali</a>
                    </div>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</body>
{{-- <script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display= 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.file[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
    }
</script> --}}
@endsection