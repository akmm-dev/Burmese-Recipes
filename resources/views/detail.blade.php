@extends('general')

@section('content')
    <div class="body detail-body">
        <div class="description">
            <img src="{{ asset("img/$Name.jpg") }}" alt="">
            <div class="content">
                <div class="title">
                    <h1>နာမည်</h1>
                    <p>{{ $Name }}</စ>
                </div>

            </div>
        </div>
        <div class="cook">
            <div class="title">
                <h1>ပါဝင်ပစ္စည်းများ</h1>
                <p>{{ $Ingredients }}</p>
            </div>
            <h1>ချက်ပြုတ်နည်း</h1>
            <p>{{ $CookingInstructions }}</p>
        </div>
        <a href="{{ route('home') }}" class="back"><button>Back</button></a>
    </div>
@endsection
