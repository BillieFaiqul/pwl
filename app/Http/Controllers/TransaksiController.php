<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trs = Transaksi::all();
        return view('transaksi', [
            'trs' => $trs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_transaksi')
                ->with('url_form',url('/transaksi'));
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
            'nama' => 'required|string|max:25',
            'judul_buku' => 'required|string|max:25',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'Status' => 'required|string|max:20',
        ]);

        $data = Transaksi::create($request->except(['_token']));
        return redirect('transaksi')->with('success', 'Transaksi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('create_transaksi')
            ->with('trs', $transaksi)
            ->with('url_form', url('/transaksi/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:transaksi,id,' . $id,
            'nama' => 'required|string|max:25',
            'judul_buku' => 'required|string|max:25',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'Status' => 'required|string|max:20',
        ]);
        $data = Transaksi::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('transaksi')
            ->with('succes', 'transaksi Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::where('id', '=', $id)->delete();
        return redirect('transaksi')
        ->with('success', 'Transaksi Berhasil Dihapus');
    }
}
