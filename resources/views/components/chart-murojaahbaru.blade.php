@php(
  $scoresByMonthmurojaah = $getRecord()->report()
            ->selectRaw(DB::raw('MIN(murojaah_baru) as min_murojaah_baru'))
            ->selectRaw(DB::raw('MAX(murojaah_baru) as max_murojaah_baru'))
            ->selectRaw(DB::raw('MIN(date) as start_date'))
            ->selectRaw(DB::raw('MAX(date) as end_date'))
            ->groupByRaw(DB::raw('MONTH(date)'))
            ->get()
            ->map(function($report){
                if(!$report->max_murojaah_baru && !$report->min_murojaah_baru) $report->total_score = 0;
                else $report->total_score =  (int)$report->max_murojaah_baru - (int)$report->min_murojaah_baru + 1;
                $report->month = $report->start_date . " - ". $report->end_date;
                $report->halaman = $report->min_murojaah_baru . " - ". $report->max_murojaah_baru;
                return $report;
            })->sortBy('start_date')
)

@php(
  $scoresByWeek = $getRecord()->report()
            ->selectRaw(DB::raw('MIN(murojaah_baru) as min_murojaah_baru'))
            ->selectRaw(DB::raw('MAX(murojaah_baru) as max_murojaah_baru'))
            ->selectRaw(DB::raw('MIN(date) as start_date'))
            ->selectRaw(DB::raw('MAX(date) as end_date'))
            ->where("murojaah_baru","!=","-")
            ->groupByRaw(DB::raw('WEEK(date)'))
        //    ->groupByRaw(DB::raw('MONTH(date)'))
            ->get()
            ->map(function($report){
                if(!$report->max_murojaah_baru && !$report->min_murojaah_baru) $report->total_score = 0;
                else $report->total_score =  (int)$report->max_murojaah_baru - (int)$report->min_murojaah_baru + 1;
                $report->week = $report->start_date . " - ". $report->end_date;
                $report->halaman = $report->min_murojaah_baru . " - ". $report->max_murojaah_baru;
                return $report;
            })->sortBy('start_date')
)

@php(
  $scoresByDay = $getRecord()->report()
      ->selectRaw('DATE(date) as day, SUM(murojaah_baru) as total_score')
      ->groupBy('day')
      ->get()
      ->map(function ($item) {
          $item->total_score = (int) $item->total_score;
          $item->day2 = $item->day;
          $item->day = Carbon\Carbon::parse($item->day)->format('d M Y');
          return $item;
      })->sortBy('day2')
)

<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="container">
    <!-- Form untuk memilih Bulan, Pekan, atau Hari -->
    <form id="filterFormmurojaah">
        <label for="period">Pilih Periode:</label>
        <select id="periodmurojaah">
            <option value="month">Bulan</option>
            <option value="week">Pekan</option>
            <option value="day">Hari</option>

        </select>
        <label for="period">chart type:</label>
        <select id="charttypemurojaah">
            <option value="column">Bar</option>
            <option value="line">line</option>
        </select>
    </form>

    <!-- Tempatkan chart di sini -->
    <div id="containermurojaah"></div>

    <script>
        // Data diambil dari server Laravel
        const scoresByMonthmurojaah = @json($scoresByMonthmurojaah->pluck('total_score'));
        const monthsmurojaah = @json($scoresByMonthmurojaah->pluck('month'));
        const scoresByWeekmurojaah = @json($scoresByWeek->pluck('total_score'));
        const weeksmurojaah = @json($scoresByWeek->pluck('week'));
        const scoresByDaymurojaah = @json($scoresByDay->pluck('total_score'));
        const daysmurojaah = @json($scoresByDay->pluck('day'));

        // Fungsi untuk membuat grafik
        function renderChartmurojaah(categories, data, titleText, type) {
            Highcharts.chart('containermurojaah', {
                chart: {
                    type: type
                },
                title: {
                    text: titleText,
                    align: 'center'
                },
                xAxis: {
                    categories: categories,
                    crosshair: true,
                    title: {
                        text: 'Periode'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Skor Hafalan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Skor Hafalan',
                    data: data
                }]
            });
        }

        function updatechart() {
            const month_ = document.getElementById('periodmurojaah').value;
            const charttype_ = document.getElementById('charttypemurojaah').value;
            if (month_=== 'month') {
                renderChartmurojaah(monthsmurojaah, scoresByMonthmurojaah, 'Akumulasi Skor per Bulan',charttype_);
            } else if (month_ === 'week') {
                renderChartmurojaah(weeksmurojaah, scoresByWeekmurojaah, 'Akumulasi Skor per Pekan',charttype_);
            } else if (month_ === 'day') {
                renderChartmurojaah(daysmurojaah, scoresByDaymurojaah, 'Akumulasi Skor per Hari',charttype_);
            }
        }

        // Event listener untuk select form
        document.getElementById('periodmurojaah').addEventListener('change', function() {
           updatechart()
        });
        document.getElementById('charttypemurojaah').addEventListener('change', function() {
            updatechart()
        });

        // Default load chart untuk Bulan
        renderChartmurojaah(monthsmurojaah, scoresByMonthmurojaah, 'Akumulasi Skor per Bulan',document.getElementById('charttype').value);
    </script>
</div>