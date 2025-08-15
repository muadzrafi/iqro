<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function LaporanMenu()
    {
        return view('report-list'); // sesuaikan dengan nama Blade yang kamu buat
    }

    public function LaporanIkhwan()
    {
        return $this->LaporanByGender('Ikhwan', 'report-pages.report-ikhwan');
    }

    public function LaporanAkhwat()
    {
        
        return $this->LaporanByGender('Akhwat', 'report-pages.report-akhwat');
    }

    private function LaporanByGender($gender, $view)
    {
        $bulanInput = request()->input('bulan', date('Y-m'));
        $awalBulan = date('Y-m-01', strtotime($bulanInput));
        $akhirBulan = date('Y-m-t', strtotime($bulanInput));

        $santris = Santri::where('status', 'active')
            ->where('jenis_kelamin', $gender)
            ->when(request('nama'), function ($query, $nama) {
                return $query->where('nama', 'like', "%$nama%");
            })
            ->get()
            ->map(function ($santri) use ($awalBulan, $akhirBulan) {
                $reportAwal = $santri->report()
                    ->where('date', '<=', $awalBulan)
                    ->whereNotNull('ziyadah')
                    ->orderBy('date', 'asc')
                    ->first();

                $reportAkhir = $santri->report()
                    ->whereBetween('date', [$awalBulan, $akhirBulan])
                    ->whereNotNull('ziyadah')
                    ->orderBy('date', 'desc')
                    ->first();

                $santri->ziyadahAwalBulan = (int) $reportAwal?->ziyadah ?? 0;
                $santri->ziyadahAkhirBulan = (int) $reportAkhir?->ziyadah ?? 0;
                $santri->totalZiyadah = $santri->ziyadahAkhirBulan - $santri->ziyadahAwalBulan;
                return $santri;
            })
            ->sortBy(function ($santri) {
                return intval(preg_replace('/[^0-9]/', '', $santri->kelas));
            })
            ->values();

        return view($view, [
            'santris' => $santris,
            'bulan' => $bulanInput,
        ]);
    }
}