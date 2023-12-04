<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
class Web extends Controller
{
    public function pedirDni()
    {
        return redirect('pedirdni');
    }
    public function validarDni(Request $request)
    {
        $sesion = session()->getId();
        //Primero validamos si ya existe en la base de datos de inscriptos
        $inscripto = DB::table('terr_inscriptos')
                     ->where('dni', $request->input('dni'))
                     ->select('*')
                     ->get();
        if(count($inscripto) > 0) {
            //Entonces quiere decir que ya existe
            $inscripto = $inscripto->first();            
            // Preguntamos si ya se encuentra en la base temporal con esa session
            $temporal = DB::table('terr_inscriptos_temp')
                     ->where('dni', $request->input('dni'))
                     ->where('sesion', $sesion)
                     ->select('*')
                     ->get();
            if(count($temporal) > 0) {
                $temporal = $temporal->first();
                return redirect('previo')->with( ['temporal' => $temporal] );
            } else {
                //Si no existe en la base temporal, lo agregamos
                DB::table('terr_inscriptos_temp')->insert(
                       ['dni' => $inscripto->dni,
                        'correo'        => $inscripto->correo,
                        'nombres'        => $inscripto->nombre,                        
                        'apellido'      => $inscripto->apellido,
                        'cuil'          => $inscripto->cuil,
                        'fecha_nac'     => $inscripto->fecha_nac,
                        'nacionalidad'  => $inscripto->nacionalidad,
                        'telefono'      => $inscripto->telefono,
                        'estado_civil'  => $inscripto->estado_civil,
                        'discapacidad'  => $inscripto->discapacidad,
                        'lugar_trabajo' => $inscripto->lugar_trabajo,
                        'sesion' => $sesion] // completar todos los campos que faltan
                );
                // Aca lo leemos al nuevo agregado
                $temporal = DB::table('terr_inscriptos_temp')
                     ->where('dni', $request->input('dni'))
                     ->where('sesion', $sesion)
                     ->select('*')
                     ->get()->first();

                return redirect('previo')->with( ['temporal' => $temporal] );
            }    
        } else {
            // Primero validamos que exista en el padron de electores
            $padron = DB::table('terr_padron')
                     ->where('dni', $request->input('dni'))
                     ->select('*')
                     ->get();
            if(!count($padron)) { // Si no existe en el padron de electores
                return redirect('pedirdni')->with('error' ,'El DNI ingresado no se encuentra en el padrón de electores.');
                // Me voy a informar que no puede continuar
            } else {
                $padron = $padron->first();
                $temporal = DB::table('terr_inscriptos_temp')
                  ->where('dni', $request->input('dni'))
                  ->where('sesion', $sesion)
                  ->select('*')
                  ->get();
                if(!count($temporal))  {

                    DB::table('terr_inscriptos_temp')->insert(
                        ['dni'           => $padron->dni,
                        'nombres'        => $padron->nombres,                        
                        'apellido'      => $padron->apellido,
                        'sesion' => $sesion]                        
                        );
                }
             // Aca lo leemos al nuevo agregado
             $temporal = DB::table('terr_inscriptos_temp')
                  ->where('dni', $request->input('dni'))
                  ->where('sesion', $sesion)
                  ->select('*')
                  ->get()->first();

             return redirect('previo')->with( ['temporal' => $temporal] );

            }    
        }

    }
    public function validarPrevio(Request $request)
    {
        return redirect('pedircorreo');
    }
    public function validarCorreo(Request $request)
    {
        return redirect('pedirnombre');
    }
    public function validarNombre(Request $request)
    {
        return redirect('pedirapellido');
    }
    public function validarApellido(Request $request)
    {
        return redirect('pedircuil');
    }
    public function validarCuil(Request $request)
    {
        return redirect('pedirfechanacimiento');
    }
    public function validarFechaNacimiento(Request $request)
    {
        return redirect('pedirnacionalidad');
    }
    public function validarNacionalidad(Request $request)
    {
        return redirect('pedirtelefono');
    }
    public function validarTelefono(Request $request)
    {
        return redirect('pedirestadocivil');
    }
    public function validarEstadoCivil(Request $request)
    {
        return redirect('pedirdiscapacidad');
    }
    public function validarDiscapacidad(Request $request)
    {
        return redirect('pedirlugartrabajo');
    }
    public function validarLugarTrabajo(Request $request)
    {
        return redirect('pedirdomicilio');
    }
    public function validarDomicilio(Request $request)
    {
        return redirect('pedirdomicilioalternativo');
    }
    public function validarDomicilioAlternativo(Request $request)
    {
        return redirect('pedirsituacionhabitacional');
    }
    public function validarSituacionHabitacional(Request $request)
    {
        return redirect('pedirconyuge');
    }
    public function validarConyuge(Request $request)
    {
        return redirect('pedirnombreconyuge');
    }
    public function validarNombreConyuge(Request $request)
    {
        return redirect('pedirapellidoconyuge');
    }
    public function validarApellidoConyuge(Request $request)
    {
        return redirect('pedirdniconyuge');
    }
    public function validarDniConyuge(Request $request)
    {
        return redirect('pedircuilconyuge');
    }
    public function validarCuilConyuge(Request $request)
    {
        return redirect('pedirfechanacimientoconyuge');
    }
    public function validarFechaNacimientoConyuge(Request $request)
    {
        return redirect('pedirnacionalidadconyuge');
    }
    public function validarNacionalidadConyuge(Request $request)
    {
        return redirect('pedirtelefonoconyuge');
    }
    public function validarTelefonoConyuge(Request $request)
    {
        return redirect('pedirdiscapacidadconyuge');
    }
    public function validarDiscapacidadConyuge(Request $request)
    {
        return redirect('pedirlugartrabajoconyuge');
    }
    public function validarLugarTrabajoConyuge(Request $request)
    {
        return redirect('pedircorreoconyuge');
    }

    public function validarCorreoConyuge(Request $request)
    {
        return redirect('pedircantidadhijos');
    }
    public function validarCantidadHijos(Request $request)
    {
        return redirect('pedirgrupofamiliar');
    }
    public function validarGrupoFamiliar(Request $request)
    {
        return redirect('finalizar');
    }
    }