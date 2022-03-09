<?php

namespace App\Http\Controllers;
use App\models\Document;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\DocumentTrait;

class DocumentsController extends Controller
{
    use DocumentTrait;
    //
    public function _construct()
    {

    }

    public function getDocument()
    {
        return Document::get();
    }

    public function create()
    {
        return view('documents.create');
    }


    public function store(Request $request)
    {
        //validate data before insert to database
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:offers,name',
            'contents' => 'required|max:100',

        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
       $file_name = $this->saveImage($request->photo, 'images/documents');

        //insert
        Document::create([
            'name' => $request->name,
            'contents' => $request->contents,
            'geha' => $request->geha,
            'photo' => $file_name,
        ]);
        return 'saved successfuly';
//       return view('offers.store');
    }

}