@extends('layouts.master')

@section('body')

<div class="container" id="tourpackages-carousel">
    <div class="row">
        <div class="col-lg-12 title-buttonadd">
            <h1>Jogos <a class="btn icon-btn btn-primary pull-right" href="/games/create"><span
                        class="fa fa-plus img-circle"></span> Jogo</a></h1>
        </div>
{{-- {{dd($games)}} --}}
        @foreach($games as $game)
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <div class="caption">

                        <div class='col-lg-12 well well-add-card'>
                            <h4>{{$game['name']}}</h4>
                        </div>
                        <div class='col-lg-12'>
                            <p>{{$game['hour'] }}</p>
                        </div>
                        <a href="/games/{{$game['id']}}/edit" class="btn btn-primary btn-md btn-update btn-add-card">Atualizar</a>
                        <a href="/games/{{$game['id']}}"  class="btn bg-green btn-md btn-update btn-add-card pull-right">Avançar</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div><!-- End row -->
</div><!-- End container -->

@endsection

@section('css')

<style>
    .title-buttonadd{
        margin: 2%;
    }
    .well {
        min-height: 20px;
        padding: 0px;
        margin-bottom: 20px;
        background-color: #D9D9D9;
        border: 1px solid #D9D9D9;
        border-radius: 0px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        padding-left: 15px;
        border: 0px;
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333;
        padding-left: 0px;
        padding-right: 0px;
    }

    .icon-style {
        margin-right: 15px;
        font-size: 18px;
        margin-top: 20px;
    }

    p {
        margin: 3px;
    }

    .well-add-card {
        margin-bottom: 10px;
    }

    .btn-add-card {
        margin-top: 20px;
    }

    .thumbnail {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 6px solid #D9D9D9;
        border-radius: 15px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        padding-left: 0px;
        padding-right: 0px;
    }


    .btn-update {
        margin-left: 5px;
        margin-right: 5px;
    }
</style>

@endsection