<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{

    public function __construct() {
    }
    public function show()
    {
        return view('create');
    }

    // Entity functions event, create, read, update and delete
    public function create(Request $request){

         Evento::create([
            'objeto' => $request->string('txtObject'),
            'activity' =>$request->string('inputAddress'),
            'address' =>$request->string('txtActivity'),
            'description' =>$request->string('txtDescription'),
            'badge' =>$request->string('slcCurrency'),
            'budget' =>$request->string('numPresupuest'),
            'start_date' =>$request->date('dateInit'),
            'end_date' =>$request->date('dateEnd'),
            'start_time' => new \Datetime($request->string('timeInit')),
            'end_time' => new \Datetime($request->string('timeEnd')),

        ]);



    }
    public function read(){
        try {
            $this->instancia->read_evento($data);
            return redirect('/create')->with('status', '¡Registro exitoso!');
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
    public function update(){

    }
    public function delete(){

    }

    private $instancia;
    //----------------------------------------------------------------
}
