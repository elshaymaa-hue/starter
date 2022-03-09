<?php

namespace App\Http\Controllers;
use App\Http\Requests\RadarRequest;
use App\Models\Radar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use Illuminate\Http\Exceptions\PostTooLargeException;
class RadarController extends Controller
{
    //
    public function _construct()
    {

    }

    public function getRadars()
    {
       return Offer::select('id', 'station_name','location','photo','supply_date','installation','operation_date','delivery','status_of_tower','LetterDate','Remarks')->get();
      //  return Offer::select('id', 'name_ar','name_en','details_ar', 'details_en','price')->get();
    }
    public function getAllRadars()
    {
        /* $offers = Offer::select('id',
             'price',
             'photo',
             'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
             'details_' . LaravelLocalization::getCurrentLocale() . ' as details'
         )->get(); // return collection of all result*/


        ##################### paginate result ####################
//        $offers = Offer::select('id',
//            'price',
//            'photo',
//            'name_ar' . LaravelLocalization::getCurrentLocale() . ' as name',
//            'details_' . LaravelLocalization::getCurrentLocale() . ' as details'
//        )->get();
//
        $radars = Radar::select('id',
            'id',
            'station_name',
            'location' ,
            'photo',
            'supply_date','installation','operation_date','delivery','status_of_tower','LetterDate','Remarks'
            )->get();



        return view('radars.all', compact('radars'));


        //return view('offers.paginations',compact('offers'));
    }

    public function store(RadarRequest $request)
    {
//        $rules = $request->getRules();
//        $messages= $request>getMessages();
//        //validate data before insert to database
//        $validator = Validator::make($request->all(),$rules,$messages );
//        if($validator->fails()){
////            return $validator->errors();
//            return redirect()->back()->withErrors($validator)->withInput($request->all());
//        }
        $file_name ="";
        if ($request->photo) {

        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/radars';
        if(Exception instanceof Illuminate\Http\Exceptions\PostTooLargeException){
            return redirect()->back()->withErrors(['File size is too large']);
        }
        else {
            $request->photo->move($path, $file_name);
        }
        }
        //insert
//        offer::create([
//            'photo' => $file_name,
//           'name_'. LaravelLocalization::getCurrentLocale()=>$request->name_. LaravelLocalization::getCurrentLocale(),
//            'price'=>$request->price,
//            'details_'. LaravelLocalization::getCurrentLocale()=>$request->details_. LaravelLocalization::getCurrentLocale(),
//
//        ]);
        radar::create([
            'station_name'=>$request->station_name,
            'location'=>$request->location,
            'supply_date'=>$request->supply_date,
            'photo'=>$file_name,
            'installation'=>$request->installation,
            'operation_date'=>$request->operation_date,
            'delivery'=>$request->delivery,
            'status_of_tower'=>$request->status_of_tower,
            'LetterDate'=>$request->LetterDate,
            'Remarks'=>$request->Remarks,
        ]);

       return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاج']);
    }
    public function create(){
        return view('radars.create');
    }
    public function editRadar($radar_id){
      $radar=  Radar::find($radar_id);
      if(!$radar)
      return redirect()->back();
      $radar=Radar::select ('id','station_name','location','supply_date','supply_date','installation','operation_date','delivery','status_of_tower','LetterDate','Remarks')->find($radar_id);
      return view('radars.edit',compact('radar'));
//      return $offer_id;
    }
    public function UpdateRadar(RadarRequest $request, $radar_id)
    {
        $file_name ="";
        //validtion
        if ($request->photo) {
            $file_extension = $request->photo->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/radars';
            $request->photo->move($path, $file_name);
        }
        // chek if offer exists

        $radar = Radar::find($radar_id);
        if (!$radar)
            return redirect()->back();

        //update data

     //   $offer->update($request->all());


       $radar->update([
           'photo'=>$file_name,
            'station_name' => $request->station_name,
            'location' => $request->location,
            'supply_date' => $request->supply_date,
           'installation'=>$request->installation,
           'operation_date'=>$request->operation_date,
           'delivery'=>$request->delivery,
           'status_of_tower'=>$request->status_of_tower,
           'LetterDate'=>$request->LetterDate,
           'Remarks'=>$request->Remarks,
       ]);
//
        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);

    }
//    public function getMessages(){
//        return [
//            'name.required' =>__('messages.offer name'),
//            'price.required' =>__('messages.price required'),
//            'details.required' =>__('messages.details required'),
//            'name.unique'=>__('messages.name unique'),
//        ];
//    }
//    public function getRules(){
//        return [
//            'name' =>'required|max:100|unique:offers,name',
//            'price' =>'required|numeric',
//            'details'=>'required',
//        ];
//    }
}