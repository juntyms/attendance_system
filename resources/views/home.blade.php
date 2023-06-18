@extends('layouts.content')

@section('main')


<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
            <p class="font-weight-normal mb-2 text-muted">{{ Now() }}</p>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col-xl-12 d-flex grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Students Per Building</h4>
                    <div id="main" style="width: 300px;height:300px;"></div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('chartjsscript')
<script type="text/javascript">
    $(function () {
        var chartDom = document.getElementById('main');
        var myChart = echarts.init(chartDom);
        var option;
        var students = @json($students);

        option = {
        title: {

            left: 'center'
            },
        tooltip: {
            trigger: 'item'
            },
        legend: {
            orient: 'vertical',
            left: 'left'
            },
        series: [
            {
            name: 'Access From',
            type: 'pie',
            radius: '50%',
            data: students,
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
        };

        option && myChart.setOption(option);
    });
</script>
@endsection