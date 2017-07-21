@extends('layouts.admin')

@section('title'){{Lang::get('bakery.createProduct')}} @endsection

@section('breadcrumbTitle') {{Lang::get('bakery.createProduct')}} @endsection

@section('breadcrumbLinks')
    <li><a href="{{route('admin.admin-users')}}">{{Lang::get('bakery.manageProducts')}}</a></li>
    <li class="active">{{Lang::get('bakery.createProduct')}}</li>
@endsection

@section('content')

    @include('products.form',[
    'action' => route('admin.products.store'),
    'method' => 'POST',
    'formTitle' => Lang::get('bakery.createProduct')
    ])

@endsection