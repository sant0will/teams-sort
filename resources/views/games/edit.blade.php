@extends('layouts.master')

@section('body')

<div class="container register-form">
    <div class="form">
        <form class="form-horizontal" method="post" action="{{ action('FirebaseController@update', $use_game['id']) }}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">

            <div class="note">
                <p>Informações do jogo <br> <small>Altere as informações que são necessárias.</small></p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Título</label>
                            <input type="text" name="title" class="form-control" placeholder="" value="{{$use_game['title']}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Horário</label>
                            <input type="text" name="title" class="form-control" placeholder="" value="{{$use_game['hour']}}"/>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btnSubmit pull-right">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('css')

<style>
    .note
{
    margin-top: 5%;
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>

@endsection
