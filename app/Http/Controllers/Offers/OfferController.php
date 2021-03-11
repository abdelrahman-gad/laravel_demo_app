<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Offer;
class OfferController extends Controller
{
    public function __construct()
    {
        $this->module_view_folder = 'offers';
    }
    public function index(){
     $offers = Offer::paginate(PAGINATION_COUNT);
     return view('offers.index', compact('offers'));

    }
    public function show($offer_id){
        $offer = Offer::findOrFail($offer_id);

       
        return view($this->module_view_folder . '.details',compact('offer'));

    }

  
}
