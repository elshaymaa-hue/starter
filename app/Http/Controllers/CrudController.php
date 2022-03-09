<?php

namespace App\Http\Controllers;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;
use Illuminate\Http\Exceptions\PostTooLargeException;
class CrudController extends Controller
{
    //
    public function _construct()
    {

    }

    public function getOffers()
    {
       return Offer::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name','details_'.LaravelLocalization::getCurrentLocale().' as details','price')->get();
      //  return Offer::select('id', 'name_ar','name_en','details_ar', 'details_en','price')->get();
    }
    public function getAllOffers()
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
        $offers = Offer::select('id',
            'price',
            'photo',
            'name_ar' ,
            'name_en',
            'details_ar',
            'details_en'
        )->get();



        return view('offers.all', compact('offers'));


        //return view('offers.paginations',compact('offers'));
    }

    public function store(OfferRequest $request)
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
        $path = 'images/offers';
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
        offer::create([
            'photo' => $file_name,
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'price'=>$request->price,
            'details_ar'=>$request->details_ar,
            'details_en'=>$request->details_en,

        ]);

       return redirect()->back()->with(['success'=> $file_name.'-'.'تم اضافة العرض بنجاج']);
    }
    public function create(){
        return view('offers.create');
    }
    public function editOffer($offer_id){
      $offer=  Offer::find($offer_id);
      if(!$offer)
      return redirect()->back();
      $offer=Offer::select ('id','name_ar','name_en','details_ar','details_en','price')->find($offer_id);
      return view('offers.edit',compact('offer'));
//      return $offer_id;
    }
    public function UpdateOffer(OfferRequest $request, $offer_id)
    {
        $file_name ="";
        //validtion
        if ($request->photo) {
            $file_extension = $request->photo->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/offers';
            $request->photo->move($path, $file_name);
        }
        // chek if offer exists

        $offer = Offer::find($offer_id);
        if (!$offer)
            return redirect()->back();

        //update data

     //   $offer->update($request->all());


       $offer->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'price' => $request->price,
           'details_ar' => $request->details_ar,
           'details_en' => $request->details_en,
           'photo'=>  $file_name,
        ]);
//
        return redirect()->back()->with(['success' => $file_name.'-'.' تم التحديث بنجاح ']);

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