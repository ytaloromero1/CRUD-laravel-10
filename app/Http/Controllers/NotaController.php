<?php

namespace App\Http\Controllers;
use App\Models\Nota;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NotaController extends Controller
{
   

public function index(): View  {
    
     $notas = Nota::all();

    return view('nota.index', ['notas' => $notas]);

}

public function crear(): View   {
    
    

   return view('nota.crear');

}

public function guardar( Request $request): RedirectResponse {


    $nota  = new Nota;
    $nota -> titulo = $request->titulo;
    $nota -> descripcion = $request->descripcion;
    $nota->save();

 return redirect()->route('nota.index');


}

public function editar( $nota_id): View   {


 $nota = Nota::find($nota_id);

return view('nota.editar',['nota' => $nota]);

}


public function actualizar(Request $request, $nota_id) : RedirectResponse {
  // $request almacena los datos enviados osea el titulo y descripcion 
  // y $nota_id  solo almacena el id

  $nota = Nota::find($nota_id);
 $nota ->titulo = $request->titulo;
 $nota ->descripcion = $request->descripcion;
 $nota->save();



 return redirect()->route('nota.index');
 
 }


 public function mostrar( $nota_id): View   {
  // $request almacena los datos enviados osea el titulo y descripcion 
  // y $nota_id  solo almacena el id

  $nota = Nota::find($nota_id);




  return view('nota.mostrar',['nota' => $nota]);
 
 }




 public function eliminar($nota_id): RedirectResponse  {


  $nota = Nota::find($nota_id);
 
 $nota->delete();



 return redirect()->route('nota.index');
 
 }


















}