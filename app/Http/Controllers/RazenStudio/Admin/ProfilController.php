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


}
