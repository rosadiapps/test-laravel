<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\JenisKelamin;
use App\Models\Agama;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\Eselon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('pegawai.index', [
            "pegawai" => Pegawai::latest()->filter(request(['search']))->paginate(5)]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create', [
            'jenis_kelamins' => JenisKelamin::all(),
            'agamas' => Agama::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'eselons' => Eselon::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'nip' => 'required|max:15',
            'nama' => 'required|max:225',
            'tempat_lahir' => 'required|max:225',
            'alamat' => 'required|max:225',
            'tanggal_lahir' => 'required|max:225',
            'jenis_kelamin_id' => 'required',
            'golongan_id' => 'required|max:225',
            'eselon_id' => 'required|max:225',
            'jabatan_id' => 'required|max:225',
            'tempat_tugas' => 'required|max:225',
            'agama_id' => 'required|max:225',
            'unit_kerja' => 'required|max:225',
            'no_hp' => 'required|max:12',
            'npwp' => 'required|max:15',
        ]);

        $data = $request->all();

        Pegawai::create($data);
        
        return redirect()->route('pegawai.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        
        return view('pegawai.show', [
            'pegawai' => $pegawai,
            'jenis_kelamins' => JenisKelamin::all(),
            'agamas' => Agama::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'eselons' => Eselon::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        // $data['pegawai'] = Pegawai::findOrFail($id);
        // return view('pegawai.edit')->with($data);

        return view('pegawai.edit', [
            'pegawai' => $pegawai,
            'jenis_kelamins' => JenisKelamin::all(),
            'agamas' => Agama::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'eselons' => Eselon::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|max:15',
            'nama' => 'required|max:225',
            'tempat_lahir' => 'required|max:225',
            'alamat' => 'required|max:225',
            'tanggal_lahir' => 'required|max:225',
            'jenis_kelamin_id' => 'required',
            'golongan_id' => 'required|max:225',
            'eselon_id' => 'required|max:225',
            'jabatan_id' => 'required|max:225',
            'tempat_tugas' => 'required|max:225',
            'agama_id' => 'required|max:225',
            'unit_kerja' => 'required|max:225',
            'no_hp' => 'required|max:12',
            'npwp' => 'required|max:15',
        ]);

        $pegawai = Pegawai::findOrFail($id);

        $data = $request->all();

        $pegawai->update($data);
        return redirect()->route('pegawai.index')->with('status', 'Data berhasi diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
