<?php

namespace App\Http\Controllers\RazenProject\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\AkunRazenProject;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('razen-project.admin.dashboard.index');
    }

    public function change(Request $request)
    {
        $user = AkunRazenProject::find(Auth::user()->id);
        $user->color_layout = $request->color_layout;
        $user->nav_color = $request->nav_color;
        $user->behaviour = $request->behaviour;
        $user->layout = $request->layout;
        $user->radius = $request->radius;
        $user->placement = $request->placement;
        $user->save();
    }
}