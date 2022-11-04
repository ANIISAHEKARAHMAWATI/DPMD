<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BidangAdminController extends Controller
{
    public function create()
    {
        return view('admin.bidang.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required',
            'caption' => 'required',
        ]);

        $files = [];
        foreach ($request->file('foto') as $file) {
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('bidangProd/', $foto);
                $files[] = [
                    'judul' => strtoupper($request->judul),
                    'foto' => $foto,
                    'caption' => $request->caption
                ];
            }
        }
        Bidang::insert($files);

        return redirect('/admin/list-bidang')->with('success', 'Bidang Berhasil Ditambahkan!');
    }

    public function index()
    {
        $bidangs = Bidang::groupBy('judul')->get();
        if(DescriptionAdmin::first())
        $descriptions = DescriptionAdmin::first()->get();
        else $descriptions = [];
        return view('admin.bidang.list', compact('bidangs', 'descriptions'));
    }

    public function edit($id)
    {
        $bidang = Bidang::findOrFail($id);
        return view('admin.bidang.edit', compact('bidang'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'image|max:2200',
            'caption' => 'required'
        ]);

        $bidangs = Bidang::findorfail($id);
        $file = $request->file('foto');
        if ($file != NULL) {
            File::delete("bidangProd/" . $bidangs->foto);
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->storeAs('bidangProd/', $filePath);

            $bidangs->update([
                'judul' => $request->judul,
                'foto' => $filePath,
                'caption' => $request->caption
            ]);
        } else {
            $bidangs->update([
                'judul' => $request->judul,
                'caption' => $request->caption
            ]);
        }

        return redirect('/admin/list-bidang')->with('success', 'Bidang Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('bidangs')->where('id', $id)->delete();
        return redirect('/admin/list-bidang')->with('success', 'Bidang Berhasil Dihapus!');
    }

    public function edit_desc($id)
    {
        $descriptions = DescriptionAdmin::findOrFail($id);
        return view('admin.bidang.editdesc', compact('descriptions'));
    }

    public function update_desc($id, Request $request)
    {
        $request->validate([
            'desc_bidang' => 'required',
        ]);

        $descriptions = DescriptionAdmin::findOrFail($id);
        $descriptions_data = ["desc_bidang" => $request["desc_bidang"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-bidang')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}