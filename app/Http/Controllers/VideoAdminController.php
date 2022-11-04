<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VideoAdminController extends Controller
{
    public function create()
    {
        return view('admin.video.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_sampul' => 'required|image|max:2200',
            'judul' => 'required',
            'konten' => 'required',
            'caption' => 'required'
        ]);

        // sampul video
        $file = $request->file('gambar_sampul');
        if($file->isValid()){
            $ext = $file->extension();
            $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->storeAs('videoProd/sampul',$foto);        
        }

        // // konten video
        // $konten = $request->file('konten');
        // $videoname = $konten->getClientOriginalName();
        // $videopath = $konten->storeAs('konten', $videoname);
        // $pathStore = $request->konten->move(public_path('../videoProd/konten'), $videopath);
        

        $url = explode("v=",$request['konten']);
        VideoAdmin::create([
            "gambar_sampul" => $foto,
            "judul" => $request["judul"],
            "konten" => "https://www.youtube.com/embed/".$url[1],
            "caption" => $request["caption"],
        ]);

        return redirect('/admin/list-video')->with('success', 'Video Berhasil Ditambahkan');
    }

    public function index()
    {
        $videos = VideoAdmin::all();
        return view('admin.video.list', compact('videos'));
    }

        // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $video = VideoAdmin::findOrFail($id);
        return view('admin.video.edit',compact('video'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'judul' => 'required',
            'konten' => 'required', 
            'caption' => 'required'
        ]);

        $video = VideoAdmin::findorfail($id);
        $file = $request->file('gambar_sampul');
        if ($file != NULL) {
            File::delete("videoProd/" . $video->gambar_sampul);
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->storeAs("videoProd/sampul", $filePath);

            $video->update([
                'judul' => $request->judul,
                'gambar_sampul' => $filePath,
                'caption' => $request->caption
            ]);
        } else {
            $video->update([
                'judul' => $request->judul,
                'caption' => $request->caption
            ]);
        }

        return redirect('/admin/list-video')->with('success', 'Video Berhasil Diupdate');
    }

    public function destroy($id) {
        $submission = DB::table('videos')->where('id', $id)->delete();
        return redirect('/admin/list-video')->with('success', 'Video Berhasil Dihapus');
    }
/*
    public function upload($id) {
        $video = Video::where('id',$id)->first();
        return view('layouts.video_content',compact('article')); //belum ditambahin ke layout
    }

    public function list_content() {
        $videos = Video::all();
        return view('layouts.video',compact('videos')); 
    }
*/
}