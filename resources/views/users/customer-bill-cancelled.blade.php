@extends('Layouts.my-bill-layout')

@section('content')
    @if(!empty($bills))
        @foreach($bills as $key => $bill)
            @include('components.user.my-bill-detail', ['confirm' => 'Duyệt', 'confirmLink' => "./bill/$bill->id/confirm"])
        @endforeach
    @else
        @include('components.user.no-product')
    @endif
@endsection

<style>
    #customCancelled {
        border-bottom: #008f79 solid 1px;
        color: #008f79;
    }
</style>
