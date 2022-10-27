@extends('layouts.app') @extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="container"></div>
        </div>
    </div>
</div>
<script >
    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Gráfico de Ventas'
        },
        subtitle: {
            text: 'Monitoreo de ventas diarias'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'cantidad',
            data: <?= $data?>
        }]
    });
</script>
@endsection
