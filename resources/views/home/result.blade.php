@extends('layout.master')

@section('container')

 	<h1>短链生成器</h1>
        <div class="col-lg-8">
           {{Form::open(['url' => '/'])}}
           
            <div class="input-group">
              {{Form::text('url', '', ['class' => "form-control input-lg", 'placeholder' => "请输入URL链接"])}}
              <span class="input-group-btn">
              {{Form::submit('缩短', ['class' => 'btn btn-success btn-lg'])}}
              </span>
            </div><!-- /input-group -->
            {{Form::close()}}
                <br><br>
                <h2>您的短链:<a href="#" target="_blank">url.dev/asde</a></h2>
                 {{HTML::Link($shortened, url('/').'/'.$shortened, ['target' => '_blank'])}}

          </div><!-- /.col-lg-8 -->

@stop