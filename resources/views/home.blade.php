@extends('general')

@section('content')
    <div class="body">
        @foreach ($data as $item)
            <div class="container">
                <img src="{{ asset("img/$item[Name].jpg") }}" alt="">
                <div class="detail">
                    <p class="name">{{ $item['Name'] }}</p>
                    <a href=" {{ route('item', [$item['Guid']]) }}" class="btn">
                        <button>Details</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
