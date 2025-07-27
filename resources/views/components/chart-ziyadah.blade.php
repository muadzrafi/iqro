@php(
  $scoresByMonth = $getRecord()->report()
            ->selectRaw(DB::raw('MIN(ziyadah) as min_ziyadah'))
            ->selectRaw(DB::raw('MAX(ziyadah) as max_ziyadah'))
            ->selectRaw(DB::raw('MIN(date) as start_date'))
            ->selectRaw(DB::raw('MAX(date) as end_date'))
            ->groupByRaw(DB::raw('MONTH(date)'))
            ->get()
            ->map(function($report){
                if(!$report->max_ziyadah && !$report->min_ziyadah) $report->total_score = 0;
                else $report->total_score =  (int)$report->max_ziyadah - (int)$report->min_ziyadah + 1;
                $report->week = $report->start_date . " - ". $report->end_date;
                $report->halaman = $report->min_ziyadah . " - ". $report->max_ziyadah;
                $report->month = Carbon\Carbon::parse($report->start_date)->format('M Y'); // Extract month
                return $report;
            })->sortBy('start_date')
)

@php(
  $scoresByWeek = $getRecord()->report()
            ->selectRaw(DB::raw('MIN(ziyadah) as min_ziyadah'))
            ->selectRaw(DB::raw('MAX(ziyadah) as max_ziyadah'))
            ->selectRaw(DB::raw('MIN(date) as start_date'))
            ->selectRaw(DB::raw('MAX(date) as end_date'))
            ->where("ziyadah","!=","-")
            ->groupByRaw(DB::raw('WEEK(date)'))
            ->get()
            ->map(function($report){
                if(!$report->max_ziyadah && !$report->min_ziyadah) $report->total_score = 0;
                else $report->total_score =  (int)$report->max_ziyadah - (int)$report->min_ziyadah + 1;
                $report->week = $report->start_date . " - ". $report->end_date;
                $report->halaman = $report->min_ziyadah . " - ". $report->max_ziyadah;
                return $report;
            })->sortBy('start_date')
)

@php(
  $scoresByDay = $getRecord()->report()
      ->selectRaw('DATE(date) as day, SUM(ziyadah) as total_score')
      ->groupBy('day')
      ->get()
      ->map(function ($item) {
          $item->total_score = (int) $item->total_score;
          $item->day2 = $item->day;
          $item->name = $item->day;
          $item->day = Carbon\Carbon::parse($item->day)->format('d M Y');
          return $item;
      })->sortBy('day2')
)

<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="container">
    <!-- Form untuk memilih Bulan, Pekan, atau Hari -->
    <form id="filterForm">
        <label for="period">Pilih Periode:</label>
        <select id="period">
            <option value="month">Bulan</option>
            <option value="week">Pekan</option>
            <option value="day">Hari</option>
        </select>
        <label for="charttype">Chart Type:</label>
        <select id="charttype">
            <option value="column">Bar</option>
            <option value="line">Line</option>
        </select>
    </form>

    <!-- Tempatkan chart di sini -->
    <div id="container"></div>

    <script>
        // Data diambil dari server Laravel
        const scoresByMonth = @json($scoresByMonth->pluck('total_score'));
        const months = @json($scoresByMonth->pluck('month')); // Correctly extract months
        const scoresByWeek = @json($scoresByWeek->pluck('total_score'));
        const weeks = @json($scoresByWeek->pluck('week'));
        const scoresByDay = @json($scoresByDay->pluck('total_score'));
        const days = @json($scoresByDay->pluck('day'));

        // Fungsi untuk membuat grafik
        function renderChart(categories, data, titleText, type) {
            Highcharts.chart('container', {
                chart: {
                    type: type || 'column' // Default to 'column' if type is not provided
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
            const period = document.getElementById('period').value;
            const charttype = document.getElementById('charttype').value;
            if (period === 'month') {
                renderChart(months, scoresByMonth, 'Akumulasi Skor per Bulan', charttype);
            } else if (period === 'week') {
                renderChart(weeks, scoresByWeek, 'Akumulasi Skor per Pekan', charttype);
            } else if (period === 'day') {
                renderChart(days, scoresByDay, 'Akumulasi Skor per Hari', charttype);
            }
        }

        // Event listener untuk select form
        document.getElementById('period').addEventListener('change', updatechart);
        document.getElementById('charttype').addEventListener('change', updatechart);

        // Default load chart untuk Bulan
        updatechart();
    </script>
</div>