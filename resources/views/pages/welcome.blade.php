@extends('layouts.welcome')

@section('head')
    <link rel="stylesheet" href="/css/welcome.css">
@stop

@section('content')
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">Texarkana Area IT Users Group</h1>
                </li>
                <li>
                    <p class="wow fadeInDown">Meeting and Event Check-In</p>
                </li>
                @if(!Auth::check())
                <li>
                    <a href="{{ route('social.redirect', ['provider' => 'slack']) }}" class="btn btn-dribbble btn-lg wow fadeInDown" data-toggle="tooltip" data-placement="top" title="Slack"><i class="fa fa-slack"></i> Login Using Slack</a>
                </li>
                @else
                 <li>
                     <a class="btn btn-primary wow fadeInDown" data-wow-delay="0.2s" href="/user"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                     <a href="{{ url('logout') }}" class="btn btn-danger wow fadeInDown" data-wow-delay="0.2s">Logout</a>
                 </li>
                @endif
                <li class="dropdown-divider grey darken-3"></li>
                <li>
                    <a type="button" class="btn-floating btn-small btn-email wow fadeInLeft" target="_blank" href="https://www.txkug.com/"><i class="fa fa-link"></i></a>
                    <a type="button" class="btn-floating btn-small btn-dribbble wow fadeInLeft" target="_blank" href="https://txkug.slack.com"><i class="fa fa-slack"></i></a>
                    <a type="button" class="btn-floating btn-small btn-fb wow fadeInRight" target="_blank" href="https://www.facebook.com/txkug/?fref=ts"><i class="fa fa-facebook"></i></a>
                    <a type="button" class="btn-floating btn-small btn-tw wow fadeInRight" target="_blank" href="https://twitter.com/Txkug"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>

        </div>
    </div>
@stop

@section ('footer')
    <script>
        new WOW().init();
    </script>
@stop