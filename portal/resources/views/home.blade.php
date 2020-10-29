@extends('layouts.app')

@section('content')
<head>
<meta charset="utf-8">
<!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<!--Include-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	function hideAll() {
		document.getElementById('info2').style.display='none';
		document.getElementById('info3').style.display='none';
		document.getElementById('info4').style.display='none';
		document.getElementById('info5').style.display='none';
	}
	function showHideShipInfo1() {
		if(document.getElementById('fr1').checked) {
			document.getElementById('info2').style.display='block';
		} else {
			document.getElementById('info2').style.display='none';	
		}
	}
	function showHideShipInfo2() {
		if(document.getElementById('fr2').checked) {
			document.getElementById('info3').style.display='block';
		} else {
			document.getElementById('info3').style.display='none';	
		}
	}
	function showHideShipInfo3() {
		if(document.getElementById('fr3').checked) {
			document.getElementById('info4').style.display='block';
		} else {
			document.getElementById('info4').style.display='none';	
		}
	}
	function showHideShipInfo4() {
		if(document.getElementById('fr4').checked) {
			document.getElementById('info5').style.display='block';
		} else {
			document.getElementById('info5').style.display='none';	
		}
	}
	</script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div>
                        <!-- <h1>informe as materias</h1>
                        <div class='div-quantas'>
                            quantas: <select id="quantas" name='quantas'><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>
                            <button  class=''  onclick='cria_form();'  value="go">go</button>
                        </div>
                        
                        <form  class ='form' action="registra" method="get">
                            <div class='d-none aqui'></div>
                            <input type="submit" class='d-none' value="Submit"/>
                        </form> -->
						<form method="post" action="url to script">
						<!-- Area do Professor -->
						<fieldset id="info">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input name="Nome_Completo" type="text" class="form-control" placeholder="Nome Completo">
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Preferencia de Exclusão:</span>
								</div>
								    <select id="dia" name='dia' class="form-control">
										<option value="2" class="form-control">Segunda-Feira</option>
										<option value="3" class="form-control">Terça-Feira</option>
										<option value="4" class="form-control">Quarta-Feira</option>
										<option value="5" class="form-control">Quinta-Feira</option>
										<option value="6" class="form-control">Sexta-Feira</option>
									</select>
							</div>
						</fieldset>
						<!-- Area de Seleção de Materias -->
						<div class="input-group form-group">
                        
                            <label class="form-control">
                              <input type="checkbox" id="fr1" value="m1" onclick="showHideShipInfo1()">
                              <span> Materia 1 </span>
                            </label>
                    
                            <label class="form-control">
                              <input type="checkbox" id="fr2" value="m2" onclick="showHideShipInfo2()">
                              <span> Materia 2  </span>
                            </label>
                    
                            <label class="form-control">
                              <input type="checkbox" id="fr3" value="m3" onclick="showHideShipInfo3()">
                              <span> Materia 3 </span>
                            </label>
                            
                            <label class="form-control">
                              <input type="checkbox" id="fr4" value="m4" onclick="showHideShipInfo4()">
                              <span> Materia 4 </span>
                            </label> 
		
                        </div>
						<!-- Materia 1 -->
						<fieldset id="info2" >
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Matéria: </span>
								</div>
								<input name="materia_1" id="name_m1" type="text" class="form-control" placeholder="Nome da Matéria">
								<select id="tempo_m1" name='tempo_m1' class="form-control-float-right">
									<option value="0" class="form-control">Carga</option> 
									<option value="2" class="form-control">2h</option> 
									<option value="4" class="form-control">4h</option>
									<option value="6" class="form-control">6h</option>
								</select>
							</div>
						</fieldset>
						<!-- Materia 2 -->
						<fieldset id="info3" >
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Matéria: </span>
								</div>
								<input name="materia_2" id="name_m2" type="text" class="form-control" placeholder="Nome da Matéria">
								<select id="tempo_m2" name='tempo_m2' class="form-control-float-right">
									<option value="0" class="form-control">Carga</option> 
									<option value="2" class="form-control">2h</option>
									<option value="4" class="form-control">4h</option>
									<option value="6" class="form-control">6h</option>
								</select>
							</div>
						</fieldset>
						<!-- Materia 3 -->
						<fieldset id="info4" >
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Matéria: </span>
								</div>
								<input name="materia_3" id="name_m3" type="text" class="form-control" placeholder="Nome da Matéria">
								<select id="tempo_m3" name='tempo_m3' class="form-control-float-right">
									<option value="0" class="form-control">Carga</option> 
									<option value="2" class="form-control">2h</option>
									<option value="4" class="form-control">4h</option>
									<option value="6" class="form-control">6h</option>
								</select>
							</div>
						</fieldset>
						<!-- Materia 4 -->
						<fieldset id="info5" >
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Matéria: </span>
								</div>
								<input name="materia_4" id="name_m4" type="text" class="form-control" placeholder="Nome da Matéria">
								<select id="tempo_m4" name='tempo_m4' class="form-control-float-right">
									<option value="0" class="form-control">Carga</option> 
									<option value="2" class="form-control">2h</option>
									<option value="4" class="form-control">4h</option>
									<option value="6" class="form-control">6h</option>
								</select>
							</div>
						</fieldset>
						<input class="btn float-right login_btn" type="submit" value="Confirmar">	
						<input name="_token" type="hidden" value="{{ csrf_token() }}" />						
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">
    hideAll();
 </script>







@endsection
