@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('message.home') }}
@endsection
@section('main-content')
<div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">新規追加</h3>
        </div>
        {!! Form::open(['route' => ['areas.store'], 'method' => 'post']) !!}
            <div class="box-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">エリア名</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="box-footer">
                    {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ action('AreasController@index') }}" class="btn btn-default">戻る</a>
                </div>
    		</div>
        {!! Form::close() !!}
    </div>
</div>
@endsection