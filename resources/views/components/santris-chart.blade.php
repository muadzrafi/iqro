@php(
  $scoresByMonth = $getRecord()->report()
      ->selectRaw('MONTH(date) as month, YEAR(date) as year, SUM(ziyadah) as total_score')
      ->groupBy('month', 'year')
      ->get()
      ->map(function ($item) {
          $item->total_score = (int) $item->total_score; // Format as integer
          $item->month = Carbon\Carbon::create()->month($item->month)->format('F') . ' ' . $item->year; 
          return $item;
      })
)

@php(
  $scoresByWeek = $getRecord()->report()
      ->selectRaw('WEEK(date) as week, YEAR(date) as year, SUM(ziyadah) as total_score')
      ->groupBy('week', 'year')
      ->get()
      ->map(function ($item) {
          $item->total_score = (int) $item->total_score;
          $item->week = 'Week ' . $item->week . ' ' . $item->year; 
          return $item;
      })
)

@php(
  $scoresByDay = $getRecord()->report()
      ->selectRaw('DATE(date) as day, SUM(ziyadah) as total_score')
      ->groupBy('day')
      ->get()
      ->map(function ($item) {
          $item->total_score = (int) $item->total_score;
          $item->day = Carbon\Carbon::parse($item->day)->format('d M Y');
          return $item;
      })
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
    </form>

    <!-- Tempatkan chart di sini -->
    <div id="container"></div>

    <script>
        // Data diambil dari server Laravel
        const scoresByMonth = @json($scoresByMonth->pluck('total_score'));
        const months = @json($scoresByMonth->pluck('month'));
        const scoresByWeek = @json($scoresByWeek->pluck('total_score'));
        const weeks = @json($scoresByWeek->pluck('week'));
        const scoresByDay = @json($scoresByDay->pluck('total_score'));
        const days = @json($scoresByDay->pluck('day'));

        // Fungsi untuk membuat grafik
        function renderChart(categories, data, titleText) {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: titleText,
                    align: 'left'
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

        // Event listener untuk select form
        document.getElementById('period').addEventListener('change', function() {
            if (this.value === 'month') {
                renderChart(months, scoresByMonth, 'Akumulasi Skor per Bulan');
            } else if (this.value === 'week') {
                renderChart(weeks, scoresByWeek, 'Akumulasi Skor per Pekan');
            } else if (this.value === 'day') {
                renderChart(days, scoresByDay, 'Akumulasi Skor per Hari');
            }
        });

        // Default load chart untuk Bulan
        renderChart(months, scoresByMonth, 'Akumulasi Skor per Bulan');
    </script>
</div>