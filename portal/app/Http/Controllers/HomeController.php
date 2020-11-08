<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email_adin = env("ADMIN_EMAIL");
        $email_user = Auth::user()->email;
        $horarios = DB::table('horarios')->get();
        $horario_arr = [];
        foreach ($horarios as $key => $value) {
            $horario_arr[$value->id] = ["nome_prof"=>$value->nome_prof,"nome_materia"=>$value->nome_materia,"carga"=>$value->carga];
        }



        $resultado = DB::table('resultado')->get();

        return view('home',['horarios'=>$horario_arr,'resultado'=>$resultado,'is_admin'=>($email_adin == $email_user)]);
    }

    public function clear()
    {
        DB::table('resultado')->truncate();
        DB::table('horarios')->truncate();
        return redirect('');
    }


    public function reset()
    {
        DB::table('resultado')->truncate();
        return redirect('');
    }
    public function resolve()
    {
        $horarios = DB::table('horarios')->get();
        $sucesso = false;
        $tentativas = 7;
        $tentativas_try = 4;
        $tentativa_atual =0 ;
        $esquema = false;
        do  {

            if($tentativa_atual >$tentativas){
               $esquema =  $this->try($horarios,true);
            }else{
                $esquema =  $this->try($horarios);
            }

            if($esquema != false){
                $sucesso = true;
                $tentativa_atual = $tentativas+$tentativas_try;
            }
            $tentativa_atual++;
        }while($tentativa_atual <= $tentativas+$tentativas_try);

        if($esquema == false){
            dd('nao conseguimos achar solução :C');
        }else{
            $insert = [];
            foreach ($esquema as $key => $value) {
                $insert_date = $key;
                foreach ($value as $key2 => $value2) {
                    $insert[] = [
                        'dia'=>$insert_date,
                        'periodo'=>$key2,
                        'id_materia'=>$value2
                    ];
                }
                
            }
        }
        DB::table('resultado')->truncate();
        DB::table('resultado')->insert($insert);
        return redirect('');
    }

    public function organisa($horarios_arr,$tryhard,$dias_feitos){

        if(!in_array(2,$dias_feitos) ){ $dias[2]=[]; }
        if(!in_array(3,$dias_feitos) ){ $dias[3]=[]; }
        if(!in_array(4,$dias_feitos) ){ $dias[4]=[]; }
        if(!in_array(5,$dias_feitos) ){ $dias[5]=[]; }
        if(!in_array(6,$dias_feitos) ){ $dias[6]=[]; }
        
        if($tryhard == true){
            if(!in_array(7,$dias_feitos) ){ $dias[7]=[]; }
        }

        shuffle($horarios_arr);

        foreach ($horarios_arr as $key => $value) {
            $i = 2;
            $limite = 6;

            if($tryhard == true){
                $limite = 7;
            }
        
            while ($i <= $limite) {
                if($value->dia_off !=$i ){
                    $dias[$i][] =['id'=>$value->id, 'carga'=>$value->carga] ;
                }
                $i++;
            }
        }
        return $dias;
    }
    public function dia_priori($dias){
        $dias_priori = [];
        $dias_priori_index = [];
        foreach ($dias as $key => $value) {
            $dias_priori[$key]=count($value);


        }
        asort($dias_priori);

        return $dias_priori;
    }
    public function tira_aulas($ids,$horarios_arr){
        $horarios_arr_novo = [];

        foreach ($horarios_arr as $key2 => $value2) {
            $flag = true;
            foreach ($ids as $key => $value) {
               if($value2->id ==  $value) {
                $flag = false;
               }
                
            }
            if($flag == true){
                $horarios_arr_novo[] =  $value2;
            }
        }
       return $horarios_arr_novo;
        
    }

    public function try($horarios,$tryhard=false){
    

        $final[2]=[];
        $final[3]=[];
        $final[4]=[];
        $final[5]=[];
        $final[6]=[];
        $dias_feitos = [];
        if($tryhard == true){
            $final[7]=[];
        }

        $horarios_arr = [];
        foreach ($horarios as $key => $value) {
            $horarios_arr[] = $value;
        }
        while (count($dias_feitos) <count($final)) {

            $dias =  $this->organisa($horarios_arr,$tryhard,$dias_feitos);

            $dias_priori = $this->dia_priori($dias);
            

            $horas = 0;
            $ids_dia = [];
            
            
            foreach ($dias[array_key_first($dias_priori)] as $key2 => $value2) {
                if($horas +$value2["carga"] <= 8 ){
                    $horas = $horas+$value2["carga"];
                    $ids_dia[] = $value2["id"];
                    if($value2["carga"] == 2){
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                    }
                    if($value2["carga"] == 4){
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                    }
                    if($value2["carga"] == 6){
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                        $final[array_key_first($dias_priori)][]=$value2["id"];
                    }
                }
            }
            $dias_feitos[] = array_key_first($dias_priori);

            $horarios_arr = $this->tira_aulas($ids_dia,$horarios_arr);
        }
        
        if(!empty($horarios_arr)){
            return false;
        }
        return $final;    

    }


    public function inset(Request $request)
    {
        $input = $request->all();

        $insert_obj = [];
        if($input['materia_1'] != null){
            $inner_obj["nome_prof"]=$input['Nome_Completo'];
            $inner_obj["dia_off"]=$input['dia'];
            $inner_obj["nome_materia"]=$input['materia_1'];
            $inner_obj["carga"]=$input['tempo_m1'];
            $insert_obj[]= $inner_obj;
        }
        else{
            dd('Dados inputados errados, tente novamente!');
        }


        if($input['materia_2'] != null){
            $inner_obj["nome_prof"]=$input['Nome_Completo'];
            $inner_obj["dia_off"]=$input['dia'];
            $inner_obj["nome_materia"]=$input['materia_2'];
            $inner_obj["carga"]=$input['tempo_m2'];
            $insert_obj[]= $inner_obj;
        }
        if($input['materia_3'] != null){
            $inner_obj["nome_prof"]=$input['Nome_Completo'];
            $inner_obj["dia_off"]=$input['dia'];
            $inner_obj["nome_materia"]=$input['materia_3'];
            $inner_obj["carga"]=$input['tempo_m3'];
            $insert_obj[]= $inner_obj;
        }
        if($input['materia_4'] != null){
            $inner_obj["nome_prof"]=$input['Nome_Completo'];
            $inner_obj["dia_off"]=$input['dia'];
            $inner_obj["nome_materia"]=$input['materia_4'];
            $inner_obj["carga"]=$input['tempo_m4'];
            $insert_obj[]= $inner_obj;
        }
        $users = DB::table('horarios')->insert($insert_obj);

        dd('dados inseridos com sucesso.');
    }
}
