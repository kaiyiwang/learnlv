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
                @if(!empty($errors->first('url')))
                <div class="alert alert-warning alert-dismissable">
                  {{$errors->first('url')}}
                </div>
                @endif

          </div><!-- /.col-lg-8 -->

@stop