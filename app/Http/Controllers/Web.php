<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
class Web extends Controller
{
    public function control(Request $request){
        $usuario = $request->input('mail');
        $clave   = $request->input('dni');
        $usuarios = DB::table('zoo_personas')
            ->where('mail','=',$usuario)
            ->where('dni','=',$clave)
            ->get();
        if( count($usuarios) ){
            $user = $usuarios->first();
            $usuarioSession = ['id'=>$user->id,'nombre'=>$user->nombre];
            $request->session()->put('userAct', $usuarioSession);
            $request->session()->put('error', false);

            return redirect('panel');
        } else {
            return redirect('login')->with('error','au');
        }
    }

    public function ver(Request $request){
        $usuario = $request->input('mail');
        $clave   = $request->input('dni');
        $usuarios = DB::table('zoo_personas')
            ->where(function ($query) use ($usuario,$clave){
                $query->where('mail', '=', $usuario)
                    ->orWhere('dni', '=', $clave);
            })
            ->get();
        if( count($usuarios) ){
            return redirect('registro')->with('error','au');
        } else {
            $id_persona = DB::table('zoo_personas')->insertGetId(
                [
                    'dni' =>   $request->input('dni'),
                    'nombre'  => $request->input('nombre'),
                    'mail'  => $request->input('mail'),
                    'telefono'  => $request->input('telefono'),
                    'direccion'  => $request->input('direccion'),
                    'barrio'  => $request->input('barrio')
                ]);
            $data = array(
                'nombre'    => $request->input('nombre'),
                'dni'    => $request->input('dni'),
                'email'  	=> $request->input('mail'),
                'motivo'    => 'Validación de cuenta',
                'id'		=> $id_persona,
                'tipo'		=> 'persona'
            );
            $email = $request->input('mail');
            Mail::send('login/registro-mail', $data, function($message) use ($email) {
                $message->to($email, 'Usuario')->from('prueba@mercedes.gob.ar','Zoonosis')->subject('Formulario de Registro en Bienestar Animal');
            });
            return view('login.registro_exitoso');
        }
    }

    public function confirmar($tipo,$id){
        $persona = DB::table('zoo_personas')
            ->select('*')
            ->where('id','=',$id)
            ->get()->first();
        if (!$persona->activo){
            DB::beginTransaction();
            try {
                DB::table('zoo_personas')->where('id','=', $id)
                    ->update(
                        [
                            'activo' => true
                        ]);

            } catch(ValidationException $e){
                DB::rollBack();
                dd(e);
                //return redirect('afiliado.afiliado');
            }
            DB::commit();
        }
        return redirect('respuesta');
    }

    public function verregistros(Request $request){
        $registros = DB::table('terr_estado')
            ->select('*')           
            ->get();

        return view('registros',compact('registros'));
    }

    public function buscardni(Request $request){
        $registros = DB::table('terr_inscriptos')
            ->select('*')  
            ->where('dni','=',$request->input('dni'))         
            ->get();
        if(count($registros) > 0){
            
            $existe=true;
            return view('error')->with('error','El DNI ya se encuentra registrado');
        }
        return view('registros');
    }
    public function editarformulario(Request $request){
        $registros = DB::table('terr_inscriptos')
            ->select('*')  
            ->where('dni','=',$request->input('dni'))         
            ->get();

        if(count($registros) == 0){
            
            $existe=true;
            return view('error')->with('error','El DNI no se encuentra registrado');
        }
        $registros=$registros->first();
        return view('editarregistros',compact('registros'));
    }
}