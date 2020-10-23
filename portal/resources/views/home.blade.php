@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div>
                        <h1>informe as materias</h1>
                        <div class='div-quantas'>
                            quantas: <select id="quantas" name='quantas'><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>
                            <button  class=''  onclick='cria_form();'  value="go">go</button>
                        </div>
                        
                        <form  class ='form' action="registra" method="get">
                            <div class='d-none aqui'></div>
                            <input type="submit" class='d-none' value="Submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class='linha d-none'>
    <input name='materia' placeholder='materia'>
    <select id="tempo" name='tempo'>
        <option value="2">2h</option>
        <option value="4">4h</option>
        <option value="6">6h</option>
    </select>
    <select id="dia" name='dia'>
        <option value="2">segunda</option>
        <option value="3">terca</option>
        <option value="4">quarta</option>
        <option value="5">quinta</option>
        <option value="6">sexta</option>
    </select>
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
</div>







@endsection
