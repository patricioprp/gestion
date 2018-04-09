@extends('layouts.master')
@section('content')

{!! Form::select('provincia',$provinces,null,['id'=>'provincia','class' => 'form-control','placeholder' =>'seleccione una provincia'])!!}
{!! Form::select('localidad',['placeholder'=>'selecciona'],null,['id'=>'localidad'])!!}
@endsection
