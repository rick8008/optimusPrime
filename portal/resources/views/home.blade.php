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
								<input name="Nome_Completo" type="text" class="form-control" placeholder="Nome Completo (ex: Prof. Dr. Lorem Ipsum)">
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
<br>
<br>
<!-- Area de Data
	data id: segunda; terca; quarta; quinta; sexta; sabado.
	horario id : 7:30-9:30 = h1; 9:30-11:30 =  h2; 13:30-15:30 = h3; 15:30 - 17:30 = h4 .
	tipo id: materia = m; nome = n; horario = h;
	id formatação - data-horario-tipo ex: segunda-h2-materia -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header"> Tabela de Horarios </div>
                <div class="table-responsive">
					<table class="table" style="white-space:nowrap;">
					<thead class="thead-dark" style="text-align:center">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Segunda-Feira</th>
							<th scope="col">Terça-Feira</th>
							<th scope="col">Quarta-Feira</th>
							<th scope="col">Quinta-Feira</th>
							<th scope="col">Sexta-Feira</th>
							<th scope="col">Sabado</th>
						</tr>
						</thead>
					<tbody style="text-align:center">
						<tr>
							<th scope="row">7:30 <br> 9:30</th>
							<td> <p class="font-weight-bold" style="margin:0" id="segunda-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="segunda-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="segunda-h1-h"> #h </small> </td>
							<td> <p class="font-weight-bold" style="margin:0" id="terca-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="terca-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="terca-h1-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quarta-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quarta-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quarta-h1-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quinta-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quinta-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quinta-h1-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sexta-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sexta-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sexta-h1-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sabado-h1-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sabado-h1-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sabado-h1-h"> #h </small></td>
						</tr>
						<tr>
							<th scope="row">9:30 <br> 11:30</th>
							<td> <p class="font-weight-bold" style="margin:0" id="segunda-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="segunda-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="segunda-h2-h"> #h </small> </td>
							<td> <p class="font-weight-bold" style="margin:0" id="terca-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="terca-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="terca-h2-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quarta-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quarta-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quarta-h2-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quinta-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quinta-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quinta-h2-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sexta-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sexta-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sexta-h2-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sabado-h2-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sabado-h2-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sabado-h2-h"> #h </small></td>
						</tr>
						<tr>
							<th scope="row"></th>
							<td colspan="6"></td>
						</tr>
						<tr>
							<th scope="row">13:30 <br> 15:30</th>
							<td> <p class="font-weight-bold" style="margin:0" id="segunda-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="segunda-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="segunda-h3-h"> #h </small> </td>
							<td> <p class="font-weight-bold" style="margin:0" id="terca-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="terca-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="terca-h3-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quarta-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quarta-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quarta-h3-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quinta-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quinta-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quinta-h3-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sexta-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sexta-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sexta-h3-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sabado-h3-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sabado-h3-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sabado-h3-h"> #h </small></td>
						</tr>
						<tr>
							<th scope="row">15:30 <br> 17:30</th>
							<td> <p class="font-weight-bold" style="margin:0" id="segunda-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="segunda-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="segunda-h4-h"> #h </small> </td>
							<td> <p class="font-weight-bold" style="margin:0" id="terca-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="terca-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="terca-h4-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quarta-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quarta-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quarta-h4-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="quinta-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="quinta-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="quinta-h4-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sexta-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sexta-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sexta-h4-h"> #h </small></td>
							<td> <p class="font-weight-bold" style="margin:0" id="sabado-h4-m"> ##### </p> <p class="font-weight-light" style="margin:0" id="sabado-h4-n"> Prof. Dr. Lorem Ipsum </p> <p class="font-weight-light" style="margin:0" id="sabado-h4-h"> #h </small></td>
						</tr>
					</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
matrix(
		[element[1,1], element[1,2], element[1,3], element[1,4], element[1,5], element[1,6]]
		[element[2,1], element[2,2], element[2,3], element[2,4], element[2,5], element[2,6]]
		[element[3,1], element[3,2], element[3,3], element[3,4], element[3,5], element[3,6]]
		[element[4,1], element[4,2], element[4,3], element[4,4], element[4,5], element[4,6]]
	)
-->
<script>
//segunda-horario-1
var elementclass11 = document.getElementById("segunda-h1-m");
var elementname11 = document.getElementById("segunda-h1-n");
var elementduration11 = document.getElementById("segunda-h1-h");
	elementclass11.innerHTML = "Lasers 1";
	elementname11.innerHTML = "Prof Dr. Joao Kleber";
	elementduration11.innerHTML = "6h";
//segunda-horario-2
var elementclass12 = document.getElementById("segunda-h2-m");
var elementname12 = document.getElementById("segunda-h2-n");
var elementduration12 = document.getElementById("segunda-h2-h");
	elementclass12.innerHTML = "Ultra Violeta";
	elementname12.innerHTML = "Prof Dr. Faustao Oloco Meu";
	elementduration12.innerHTML = "4h";
//segunda-horario-3
var elementclass13 = document.getElementById("segunda-h3-m");
var elementname13 = document.getElementById("segunda-h3-n");
var elementduration13 = document.getElementById("segunda-h3-h");
	elementclass13.innerHTML = "Ultra Violeta";
	elementname13.innerHTML = "Prof Dr. Faustao Oloco Meu";
	elementduration13.innerHTML = "4h";
//segunda-horario-4
var elementclass14 = document.getElementById("segunda-h4-m");
var elementname14 = document.getElementById("segunda-h4-n");
var elementduration14 = document.getElementById("segunda-h4-h");
	elementclass14.innerHTML = "Infravermelho";
	elementname14.innerHTML = "Prof Dr. Gugu Caiu da Escada";
	elementduration14.innerHTML = "2h";
</script>



@endsection
