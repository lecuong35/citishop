@extends('Layouts.purchase-layout')

@section('content')
    @if(isset($bills))
        @foreach($bills as $key => $bill)
            @include('components.user.bill-detail', ['confirm' => 'Duyệt', 'confirmLink' => "./bill/$bill->id/confirm"])
        @endforeach
    @else
        @include('components.user.no-product')
    @endif
@endsection

<style>
    #cancelled {
        border-bottom: #008f79 solid 2px;
        color: #008f79;
    }
</style>