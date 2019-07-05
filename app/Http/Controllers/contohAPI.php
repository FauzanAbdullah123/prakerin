<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class contohAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $api = ['nama', 'nis', 'kelas', 'jurusan', 
    //     'alamat', 'tgl_lahir', 'nm_bapa', 'nm_ibu', 'no_tlp', 'gol_darah'];
        
    //     $api2 = ['kpl_keluarga', 'tmpt_lahir', 'tgl_lahir', 
    //     'pendidikan_trkhir', 'pekerjaan', 'agama', 'nm_orangtua', 'jenis_kb', 'no_tlp', 'status'];
       
    //     $api3 = ['tgl_waktu', 'order', 'gerai', 'staf', 'status',
    //      'pembayaran', 'catatan', 'produk', 'pajak', 'total'];
        
    //     $api4 = ['no_kartu', 'tgl_lahir', 'angka_validasi', 'nm_peserta',
    //      'no_peserta', 'status_peserta', 'jenis_peserta', 'jmlh_anggota', 'alamat', 'tagihan'];
       
    //     $api5 = ['nik', 'nama', 'tempattgl_lahir', 'jk', 'alamat', 'agama',
    //      'status_perkawinan', 'pekerjaan', 'kewarganegaraan', 'berlakuhingga'];
        
    //     return [$api, $api2, $api3, $api4, $api5];
    // }
    // public function index2()
    // {
    //     $json = [
    //         [
    //         "nama" => "Fauzan Abdullah",
    //         "kelas" => 16,
    //         "hoby" => ['Main Gitar', 'Main Game'],
    //         "guru" => [
    //             "nama1" => "Candra",
    //             "nama2" => "Ute"
    //             ]
    //         ],
    //         [
    //         "nama" => "Iqra",
    //         "kelas" => 17,
    //         "hoby" => ['Nonton Anime', 'Main Game'],
    //         "guru" => [
    //             "nama1" => "Candra",
    //             "nama2" => "Ute"
    //             ]
    //         ]
    //     ];
    //     return $json;
    // }

    public function index()
    {
        $data = Siswa::all();
        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
