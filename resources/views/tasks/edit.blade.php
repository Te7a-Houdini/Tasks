@extends('layouts.admin')

@section('title'){{Lang::get('bakery.editProduct')}} @endsection

@section('breadcrumbTitle') {{Lang::get('bakery.editProduct')}} @endsection

@section('breadcrumbLinks')
    <li><a href="{{route('admin.admin-users')}}">{{Lang::get('bakery.manageProducts')}}</a></li>
    <li class="active">{{Lang::get('bakery.editProduct')}}</li>
@endsection

@section('content')

    @include('products.form',[
    'action' => route('admin.products.update',$product->id),
    'method' => 'PUT',
    'formTitle' => Lang::get('bakery.editProduct')
    ])

@endsection