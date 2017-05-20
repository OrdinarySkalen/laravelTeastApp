@extends('app')

@section('content')
    <!--<form action="Index.php" method="POST">
        Balls in user's basket: <input type="number" name="userBasketCount" value=100/><br><br>
        Count of baskets: <input type="number" name="basketCount" value=30/><br><br>
        {{Form::open(['url' => action('BasketController@index'), 'method' => 'post']) }}
        {{Form::label('userBasketCountLabel','Balls in user\'s basket:')}}
        {{Form::number('userBasketCount', '100')}}<br>
        {{Form::label('countBaskets','Count of baskets:')}}
        {{Form::number('basketCount', '30')}}<br>
        <input type="submit" value="Try again">-->

    {{Form::open(['method' => 'post']) }}
    {{Form::submit('Try again')}}<br>


    <h5>User Basket:
        @foreach($userBasket as $value)
            {{$value}},
        @endforeach
    </h5>
    <div>
        @for($i = 1; $i < count($baskets); $i++)
            <h5>Basket #{{$i}}:
                @foreach($baskets[$i] as $value)
                    {{$value}},
                @endforeach
            </h5>
        @endfor
        <h4>Contained in User's basket: {{$taskB}}</h4>
        <h4>Have only one element from User basket: {{$taskC}}</h4>
    </div>
    {{ Form::close() }}

@stop