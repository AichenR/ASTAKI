@extends('master')

@section('upper_Layer')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
@section('content')

<div>
    <div class="sub_Title">MENU</div>
    <div class="item_Container">
        <a class="item" href="{{ route('user_Menu') }}">User Management</a>
        <a class="item" href="{{ route('item_Menu') }}">Item Management</a>
        <a class="item" href="{{ route('store_Menu') }}">Store Management</a>
        <a class="item" href="{{ route('cashier') }}">Cashier</a>
    </div>8
</div>

@endsection