@extends('layouts.master')
@section('content')
{!! Form::select('pais',$nacion,null,['id'=>'pais','class' => 'form-control','placeholder' =>'seleccione un pais'])!!}
{!! Form::select('provincia',$provinces,null,['id'=>'pais','class' => 'form-control','placeholder' =>'seleccione una provincia'])!!}
{!! Form::select('localidad',['placeholder'=>'selecciona'],null,['id'=>'localidad'])!!}
@endsection
