<?php

namespace App\Http\Controllers\ManajemenAkun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use App\AkunRazenStudio;

class RazenStudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = AkunRazenStudio::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-outline-success" title="Detail Data">Lihat</button>';
                    $button_edit = '<button type="button" name="change-password" id="'.$data->id.'"
                    class="change-password btn btn-icon waves-effect btn-outline-warning" title="Change Password">Ubah Password</button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-outline-danger" title="Delete Data">Hapus</button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('razen.manajemen-akun.razen-studio.index');
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
        $errors = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | unique:akun_razen_studios',
            'password' => 'required | min:8'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $akun_razen_studio = new AkunRazenStudio;
        $akun_razen_studio->name = $request->name;
        $akun_razen_studio->email = $request->email;
        $akun_razen_studio->password = bcrypt($request->password);
        $akun_razen_studio->save();

        return response()->json(['success' => 'Berhasil Menambahkan Akun '. $akun_razen_studio->name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AkunRazenStudio::find($id);

        $array = [
            'name' => $data->name,
            'email' => $data->email
        ];

        return response()->json(['result' => $array]);
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
    public function change_password(Request $request)
    {
        $akun_razen_studio = AkunRazenStudio::find($request->id);
        $akun_razen_studio->password = bcrypt('1234578');
        $akun_razen_studio->save();

        return response()->json(['success' => 'Berhasil Mereset Password! Passwordnya adalah 12345678']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        AkunRazenStudio::find($request->id)->delete();
        return response()->json(['success' => 'Berhasil Menghapus Akun!']);
    }
}
