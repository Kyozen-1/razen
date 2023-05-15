<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortofolioVideoAnimasi;
use App\Models\RazenStudio\Data\LandingPageVideoProductionVideoAnimasiHargaJasa;
use App\Models\RazenStudio\Data\LandingPageVideoProductionVideoAnimasiTestimoni;
use App\Models\RazenStudio\Data\LandingPageVideoProductionVideoKontenSosmedTestimoni;
use App\Models\RazenStudio\Data\LandingPageVideoProductionVideoCompanyProfileTestimoni;

class VideoProduction extends Controller
{
    public function video_animasi()
    {
        $portofolios = PortofolioVideoAnimasi::all();
        $harga_jasas = LandingPageVideoProductionVideoAnimasiHargaJasa::all();
        $testimonis = LandingPageVideoProductionVideoAnimasiTestimoni::all();
        return view('landing-page-razen-studio.video-production.video-animasi.index', [
            'portofolios' => $portofolios,
            'harga_jasas' => $harga_jasas,
            'testimonis' => $testimonis
        ]);
    }

    public function video_konten_sosmed()
    {
        $testimonis = LandingPageVideoProductionVideoKontenSosmedTestimoni::all();
        return view('landing-page-razen-studio.video-production.video-konten-sosmed.index', [
            'testimonis' => $testimonis
        ]);
    }

    public function video_company_profile()
    {
        $testimonis = LandingPageVideoProductionVideoKontenSosmedTestimoni::all();
        return view('landing-page-razen-studio.video-production.video-company-profile.index', [
            'testimonis' => $testimonis
        ]);
    }
}
