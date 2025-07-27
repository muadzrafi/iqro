<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function LaporanBulanan()
    {
        // Ambil bulan dari input (format: YYYY-MM), default ke bulan sekarang
        $bulanInput = request()->input('bulan', date('Y-m'));
        try {
            $awalBulan = date('Y-m-01', strtotime($bulanInput));
            $akhirBulan = date('Y-m-t', strtotime($bulanInput));
        } catch (\Exception $e) {
            // fallback jika format salah
            $awalBulan = date('Y-m-01');
            $akhirBulan = date('Y-m-t');
        }
    
        $reports = Santri::where('status', 'active')
            ->when(request()->input('nama'), function ($query, $nama) {
                $query->where('nama', 'like', "%$nama%");
            })
            ->get()
            ->map(function ($query) use ($awalBulan, $akhirBulan) {
                $query->awalBulan = $awalBulan;
                $query->akhirBulan = $akhirBulan;
    
                $reportAwalBulan = $query
                    ->report()
                    ->where('date', '<=', $awalBulan)
                    ->whereNotNull('ziyadah')
                    ->orderBy('date', 'asc')
                    ->first();
    
                $reportAkhirBulan = $query
                    ->report()
                    ->whereBetween('date', [$awalBulan, $akhirBulan])
                    ->whereNotNull('ziyadah')
                    ->orderBy('date', 'desc')
                    ->first();
    
                $query->ziyadahAwalBulan = (int) $reportAwalBulan?->ziyadah;
                $query->ziyadahAkhirBulan = (int) $reportAkhirBulan?->ziyadah;
                $query->totalZiyadah = $query->ziyadahAkhirBulan - $query->ziyadahAwalBulan;
                $query->ziyadahHalamanTerakhir = $reportAkhirBulan?->ziyadah;
                $query->ziyadahHalamanAwal = $reportAwalBulan?->ziyadah;
    
                $reportAkhirBulanStatus = $query
                    ->report()
                    ->where('date', '<=', $akhirBulan)
                    ->orderBy('date', 'desc')
                    ->first();
    
                $status = $reportAkhirBulanStatus?->status ?? null;
                $statusValid = ['ziyadah', 'persiapan ujian juz', 'persiapan tasmi', 'sanad'];
                $query->statusAkhirBulan = in_array($status, $statusValid) ? $status : 'ziyadah';
    
                return $query;
            })
            ->toArray();
    
        return view('report-list', [
            'santris' => $reports,
            'bulan' => $bulanInput, // kirim ke view untuk select bulan
        ]);
    }
}
