@extends('app')

@section('content')
    <form action="" class="form-horizontal">
        <div class="form-group">
            <label class="sr-only" for="userBasketCount">Balls in user's basket</label>
            <div class="input-group">
                <div class="input-group-addon">Balls in user's basket:</div>
                <input type="number" class="form-control" id="userBasketCount"
                       name="userBasketCount" min="1" value="100">
            </div>
        </div>
        <div class="form-group">
            <label class="sr-only" for="basketCount">Count of baskets:</label>
            <div class="input-group">
                <div class="input-group-addon">Count of baskets:</div>
                <input type="number" class="form-control" id="basketCount" name="basketCount"
                       min="1" value="30">
            </div>
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Try again">
        </div>
        <div class="form-group">
            <h4 class="alert-info">Contained in User's basket: {{$taskB}}</h4>
            <h4 class="alert-success">Have only one element from User basket: {{$taskC}}</h4>
        </div>
        <div class="form-group">
            <h5>
                <mark>User Basket:</mark>
                @foreach($userBasket as $value)
                    <{{$value}}>
                @endforeach
            </h5>
        </div>
        <div class="form-group">
            @for($i = 1; $i < count($baskets); $i++)
                <h5>
                    <mark>Basket #{{$i}}:</mark>
                    @foreach($baskets[$i] as $value)
                        <{{$value}}>
                    @endforeach
                </h5>
            @endfor
        </div>
    </form>
@stop