<?php

namespace App\Http\Controllers\RazenStudio\Admin;

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
use Auth;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('razen-studio.admin.profil.index', [
            'profil' => $profil
        ]);
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'pt' => 'required | max:255',
            'no_hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);
        if($errors -> fails())
        {
            return back()->withErrors($errors)->withInput();
        }

        if($request->logo)
        {
            $errors = Validator::make($request->all(), [
                'logo' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        if($request->logo_kecil)
        {
            $errors = Validator::make($request->all(), [
                'logo_kecil' => 'mimes:png,jpeg,jpg,webp',
            ]);
            if($errors -> fails())
            {
                return back()->withErrors($errors)->withInput();
            }
        }

        $get_profil = Profil::first();
        if($get_profil)
        {
            $profil = Profil::find($get_profil->id);
        } else {
            $profil = new Profil;
        }

        $profil->nama = $request->nama;
        $profil->pt = $request->pt;
        $profil->no_hp = $request->no_hp;
        $profil->email = $request->email;
        $profil->alamat = $request->alamat;

        if($request->logo)
        {
            File::delete(public_path('images/razen-studio/logo/'.$profil->logo));

            $logoExtension = $request->logo->extension();
            $logoName =  uniqid().'-'.date("ymd").'.'.$logoExtension;
            $logo = Image::make($request->logo);
            $logoSize = public_path('images/razen-studio/logo/'.$logoName);
            $logo->save($logoSize, 60);

            $profil->logo = $logoName;
        }

        if($request->logo_kecil)
        {
            File::delete(public_path('images/razen-studio/logo/'.$profil->logo_kecil));

            $logoKecilExtension = $request->logo_kecil->extension();
            $logoKecilName =  uniqid().'-'.date("ymd").'.'.$logoKecilExtension;
            $logoKecil = Image::make($request->logo_kecil);
            $logoKecilSize = public_path('images/razen-studio/logo/'.$logoKecilName);
            $logoKecil->save($logoKecilSize, 60);

            $profil->logo_kecil = $logoKecilName;
        }

        $profil->save();

        Alert::success('Berhasil', 'Berhasil memperbaharui profil');
        return redirect()->route('razen-studio.admin.profil.index');
    }
}
