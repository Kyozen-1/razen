<?php

namespace App\Http\Controllers\RazenStudio\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioGalleryAbout;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = LandingpageRazenstudioGalleryAbout::latest()->get();
        return view('razen-studio.admin.landing-page.about.gallery.index', [
            'gallerys' => $gallerys
        ]);
    }

    public function hapus_data(Request $request)
    {
        $get = LandingpageRazenstudioGalleryAbout::find($request->id);
        File::delete(public_path('images/landingpage_razenstudio/about/'.$get->gambar));
        $get->delete();
        return response()->json('berhasil');
    }

    public function store(Request $request)
    {
        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $gallery_about = new LandingpageRazenstudioGalleryAbout;
            $gallery_about->gambar = $array_gambar[$i];
            $gallery_about->save();
        }

        Alert::success('Berhasil', 'Berhasil Menambahkan Gambar');
        return redirect()->route('razen-studio.admin.about.gallery.index');
    }
}
