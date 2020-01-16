<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\MapelModel;
use Image;
use File;

class MapelController extends Controller
{

    public $path;

    public function __construct()
    {
        //DEFINISIKAN PATH
        $this->path = public_path('/images');
        //DEFINISIKAN DIMENSI
        // $this->dimensions = ['245', '300', '500'];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapels = MapelModel::all();

        return view('mapel.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function __construct() {
    //     /**
    //      * Set your APIKey Cloudinary
    //      * cloudname
    //      * api_key
    //      * api_secret
    //      */
    //     \Cloudinary::config(array(
    //         "cloud_name" => "doockwiis",
    //         "api_key" => "678375874147215",
    //         "api_secret" => "AckJEppTwhmQTkbGAdewTm5inVY",
    //     ));
    // }
    public function store(Request $request)
    {		
        $this->validate($request, [
            'cover' => 'required|image|mimes:jpg,png,jpeg'
        ]);
		
        //JIKA FOLDERNYA BELUM ADA
        if (!File::isDirectory($this->path)) {
            //MAKA FOLDER TERSEBUT AKAN DIBUAT
            File::makeDirectory($this->path);
        }
        //MENGAMBIL FILE IMAGE DARI FORM
        $file = $request->file('cover');
        //MEMBUAT NAME FILE DARI GABUNGAN TIMESTAMP DAN UNIQID()
        $filename = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //UPLOAD ORIGINAN FILE (BELUM DIUBAH DIMENSINYA)
        Image::make($file)->save($this->path . '/' . $filename);
        
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:50',
        //     'nama_penulis' => 'required|max:25',
        // ]);
        $book = MapelModel::create([
            'nama' => $request['nama'],
            'nama_penulis' => $request['nama_penulis'],
            'cover' => $filename,
        ]);

        // $upload = \Cloudinary\Uploader::upload($cover, array("public_id" => $nama_file));
        
        return redirect('/mapel')->with('success', 'Book is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = MapelModel::where('id','=', $id)->get();
        
        return view('mapel.show', ['buku' => $buku]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = MapelModel::findOrFail($id);

        return view('mapel.edit', compact('mapel'));
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
        $validatedData = $request->validate([
            'nama' => 'required|max:50',
            'nama_penulis' => 'required|max:25',
            'cover' => 'required|max:255',
        ]);
        MapelModel::whereId($id)->update($validatedData);
   
        return redirect('/mapel')->with('success', 'Book is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = MapelModel::findOrFail($id);
        $mapel->delete();

        return redirect('/mapel')->with('success', 'Book is successfully deleted');
    }
}
