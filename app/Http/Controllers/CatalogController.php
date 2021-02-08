<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
 

    public function getIndex(){
      
        $peliculas = Catalog::all();    
   
        return view('catalog.index', array('peliculas'=>$peliculas));        
    }

    public function getShow($id){ 
		$pelis = Catalog::find($id); 
        return view('catalog.show', array('pelis'=>$pelis,'id'=>$id)); 
    }
    

    public function getCreate(){
		
      return view('catalog.create');

    
	}
	public function getstore(Request $request){
		$Catalog = new Catalog();
        $Catalog->title= request('title');
        $Catalog->year= request('year');
		$Catalog->director= request('director');
			if ($request->get('poster')) {
				$Catalog->poster=request('poster');
			
			}	
        $Catalog->rented=request('rented');      
		$Catalog->synopsis=request('synopsis');
		$Catalog->save();
		$peliculas = Catalog::all();   
        return view('catalog.index', array('peliculas'=>$peliculas)); 
  
	  }


     public function getEdit($id){ 
		$pelis = Catalog::find($id);        
	
    return view('catalog.edit', array('pelis'=>$pelis,'id'=>$id));  
	}
	
	public function getDelvolver($rented,$id){ 

		$Catalog =  Catalog::findOrFail($id);
		if($rented=="true"){
			$Catalog->rented="false"; 
		}else{
			$Catalog->rented="true"; 

		}
		$Catalog->update();

		$pelis = Catalog::find($id); 
        return view('catalog.show', array('pelis'=>$pelis,'id'=>$id)); 
	}

	
	public function update(Request $request,  $id)
    {
		$Catalog =  Catalog::findOrFail($id);

	$Catalog->title= request('title');
        $Catalog->year= request('year');
        $Catalog->director= request('director');
        $Catalog->poster=request('poster');
        $Catalog->rented=request('rented');      
		$Catalog->synopsis=request('synopsis');
		$Catalog->update();
		back()->with('data' ,'Actualizado con éxito');

		
		$peliculas = Catalog::all();    
   		return view('catalog.index', array('peliculas'=>$peliculas));
	}
	
	public function destroy( $id){
		$Catalog = Catalog::findOrFail($id);
        $Catalog->delete();
        back()->with('data' ,'Eliminado con éxito');
		
		
		$peliculas = Catalog::all(); 
   		return view('catalog.index', array('peliculas'=>$peliculas));  
	}

}
