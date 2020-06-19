@extends('admin.layouts.app')

@section('css')
    <style type="text/css">
        /*============= Clock ==============*/
        #clock *{
        font-family: 'lato_r';
        }
        #clock{
        margin-top: 15vh;
        text-align: center;
        color: #222;
        font-family: 'roboto_r' !important;
        }
        #clock .time .hour-min{
        line-height: 170px;
        font-size: 150px;
        margin-right: 20px;
        }
        #clock .time ul{
        display: inline-block;
        }
        #clock .time ul li{
        line-height: 65px;
        font-size: 75px;
        }
        #clock .time ul .am-pm{
        font-size: 55px;
        }
        #clock .date{
        line-height: 30px;
        font-size: 48px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div id="clock" class="">
        <div class="time">
            <span class="hour-min"></span>
            <ul class="list-unstyled">
                <li class="am-pm"></li>
                <li class="sec"></li>
            </ul>
        </div>
        <div class="date"></div>
    </div>
</div>
@endsection

@section('js')
	<script type="text/javascript">
		
		var interval = setInterval(function() {
				var momentNow = moment();
				$('#clock .date').html(momentNow.format('dddd') +', '+ momentNow.format('DD') +'-'+ momentNow.format('MMM') +'-'+ momentNow.format('YYYY'));
				$('#clock .hour-min').html(momentNow.format('hh:mm'));
				$('#clock .am-pm').html(momentNow.format('A'));
				$('#clock .sec').html(momentNow.format('ss'));
		}, 100);
	</script>
@endsection
