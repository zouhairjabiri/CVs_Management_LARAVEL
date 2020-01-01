<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Http\Requests\cvRequest;

class CvController extends Controller
{  

	//Affichage Des CV
    public function index() {
        $listcv = Cv::all();
        return view('cv.index' , ['cvs' => $listcv]);
    }
    public function create() {
        return view('cv.create');
      
    }
    public function store(cvRequest $request) {
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        return redirect('cvs');
    }


    public function edit($id) {
      $cv = Cv::find($id);
      return view('cv.edit', ['cv' => $cv]);
    }

    public function update(cvRequest $request, $id) {

        $cv = Cv::find($id);

        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        return redirect('cvs');

    }
    public function destroy(Request $request,$id) {
       $cv = Cv::find($id);
       $cv->delete();
       return redirect('cvs');
    }
}
