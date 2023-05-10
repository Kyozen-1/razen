<?php

namespace App\Http\Controllers\RazenStudio\Admin\Data;

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
use App\Models\RazenStudio\Data\LandingPageBerandaBiaya;

class BiayaController extends Controller
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
            $data = new LandingPageBerandaBiaya;
            $data = $data->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-studio.admin.home.data.biaya.detail', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-studio.admin.home.data.biaya.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('in_house', function($data){
                    $in_house = json_decode($data->in_house, true);
                    $teks = '';
                    if($in_house['status'] == '1')
                    {
                        $teks .= 'Status: Ya; <br>';
                    } else {
                        $teks .= 'Status: Tidak; <br>';
                    }
                    if($in_house['status_keterangan'] == '1')
                    {
                        $teks .= 'Status Keterangan: Ya; <br>';
                    } else {
                        $teks .= 'Status Keterangan: Tidak; <br>';
                    }
                    if(array_key_exists('keterangan',$in_house))
                    {
                        $teks .= 'Keterangan: '. $in_house['keterangan'];
                    }
                    return $teks;
                })
                ->editColumn('freelance', function($data){
                    $freelance = json_decode($data->freelance, true);
                    $teks = 'Status: '.$freelance['status']. '; <br>';
                    if($freelance['status_keterangan'] == '1')
                    {
                        $teks .= 'Status Keterangan: Ya; <br>';
                    } else {
                        $teks .= 'Status Keterangan: Tidak; <br>';
                    }
                    if(array_key_exists('keterangan',$freelance))
                    {
                        $teks .= 'Keterangan: '. $freelance['keterangan'];
                    }
                    return $teks;
                })
                ->editColumn('digital_agency_hub', function($data){
                    $digital_agency_hub = json_decode($data->digital_agency_hub, true);
                    $teks = 'Status: '.$digital_agency_hub['status']. '; <br>';
                    if($digital_agency_hub['status_keterangan'] == '1')
                    {
                        $teks .= 'Status Keterangan: Ya; <br>';
                    } else {
                        $teks .= 'Status Keterangan: Tidak; <br>';
                    }
                    if(array_key_exists('keterangan',$digital_agency_hub))
                    {
                        $teks .= 'Keterangan: '. $digital_agency_hub['keterangan'];
                    }

                    return $teks;
                })
                ->rawColumns(['aksi', 'in_house', 'freelance', 'digital_agency_hub'])
                ->make(true);
        }
        return view('razen-studio.admin.landing-page.home.data.biaya.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-studio.admin.landing-page.home.data.biaya.create');
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
            'nama' => 'required | max:255',
            'in_house' => 'required',
            'freelance' => 'required',
            'digital_agency_hub' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.home.data.biaya.index');
        }

        $biaya = new LandingPageBerandaBiaya;
        $biaya->nama = $request->nama;
        $biaya->in_house = json_encode($request->in_house);
        $biaya->freelance = json_encode($request->freelance);
        $biaya->digital_agency_hub = json_encode($request->digital_agency_hub);
        $biaya->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.home.data.biaya.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LandingPageBerandaBiaya::find($id);

        return view('razen-studio.admin.landing-page.home.data.biaya.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LandingPageBerandaBiaya::find($id);
        $in_house = json_decode($data->in_house, true);
        $freelance = json_decode($data->freelance, true);
        $digital_agency_hub = json_decode($data->digital_agency_hub, true);
        return view('razen-studio.admin.landing-page.home.data.biaya.edit', [
            'data' => $data,
            'in_house' => $in_house,
            'freelance' => $freelance,
            'digital_agency_hub' => $digital_agency_hub,
            'id' => $id,
        ]);
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
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'in_house' => 'required',
            'freelance' => 'required',
            'digital_agency_hub' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.home.data.biaya.index');
        }

        $biaya = LandingPageBerandaBiaya::find($id);
        $biaya->nama = $request->nama;
        $biaya->in_house = json_encode($request->in_house);
        $biaya->freelance = json_encode($request->freelance);
        $biaya->digital_agency_hub = json_encode($request->digital_agency_hub);
        $biaya->save();

        Alert::success('Berhasil', 'Berhasil Merubah Data Data');
        return redirect()->route('razen-studio.admin.home.data.biaya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPageBerandaBiaya::find($id)->delete();
    }
}
