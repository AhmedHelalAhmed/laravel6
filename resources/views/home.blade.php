@extends('layouts.app')
@section('header')
<style type="text/css">
    #ul-data {
      position: relative;
      top: -60px;
      display: inline-block;
      margin-left: 10%;
      width: 30%;
      margin-right: 6%;
    }
    #chart-container { display: inline-block; width: 50%; }
    #ul-data li { font-size: 32px; }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.9/js/jquery.orgchart.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.9/js/jquery.orgchart.min.js.map'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.9/css/jquery.orgchart.css' rel="stylesheet" >

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul id="ul-data" style="display:none">
                        <li>Lao Lao
                          <ul>
                            <li>Bo Miao</li>
                            <li>Su Miao
                              <ul>
                                <li>Tie Hua</li>
                                <li>Hei Hei
                                  <ul>
                                    <li>Pang Pang</li>
                                    <li>Xiang Xiang</li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <div id="chart-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
    $(function() {

      $('#chart-container').orgchart({
        'data' : $('#ul-data')
      });

    });
  </script>
@endsection