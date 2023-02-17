@extends('Layouts.sales-layout')

@section('content')
    @include('components.user.sale-detail');
@endsection

<style>
    #progress {
        border-bottom: #008f79 solid 1px;
        color: #008f79;
    }
</style>