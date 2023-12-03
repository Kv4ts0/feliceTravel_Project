<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function getHomePage(){
        return view("index");
    }
    public function getTourPage(){
        return view("tours");
    }
    public function getContactPage(){
        return view("contact");
    }
    public function getBlogPage(){
        return view("blog");
    }
    public function viewAllTour(){
        $tours = Tour::orderBy('created_at', 'DESC')->get();
        return view('all-tour')->with('tours', $tours);
    }
    public function editTour(){

    }
    public function addNewTour(Request $request){
        $tour = New Tour();
        $tour->tourname = $request->tourname;
        $tour->tourdescription = $request->tourdescription;
        $tour->tourprice = $request->tourprice;
        $tour->day = $request->day;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $size5 = $request->file('image5')->getSize();
        $name5 = $request->file('image5')->getClientOriginalName();
        $request->file('image1')->storeAs('public/tour', $name1);
        $tour->image1 = $name1;
        $request->file('image2')->storeAs('public/tour', $name2);
        $tour->image2 = $name2;
        $request->file('image3')->storeAs('public/tour', $name3);
        $tour->image3 = $name3;
        $request->file('image4')->storeAs('public/tour', $name4);
        $tour->image4 = $name4;
        $request->file('image5')->storeAs('public/tour', $name5);
        $tour->image5 = $name5;
        $tour->locationone = $request->locationone;
        $tour->dayonedesc = $request->dayonedesc;
        $tour->locationtwo = $request->locationtwo;
        $tour->daytwodesc = $request->daytwodesc;
        $tour->locationthree = $request->locationthree;
        $tour->daythreedesc = $request->daythreedesc;
        $tour->locationfour = $request->locationfour;
        $tour->dayfourdesc = $request->dayfourdesc;
        $tour->locationfive = $request->locationfive;
        $tour->dayfivedesc = $request->dayfivedesc;
        $tour->locationsix = $request->locationsix;
        $tour->daysixdesc = $request->daysixdesc;
        $tour->locationseven = $request->locationseven;
        $tour->daysevendesc = $request->daysevendesc;
        $tour->locationeight = $request->locationeight;
        $tour->dayeightdesc = $request->dayeightdesc;
        $tour->locationnine = $request->locationnine;
        $tour->dayninedesc = $request->dayninedesc;
        $tour->locationten = $request->locationten;
        $tour->daytendesc = $request->daytendesc;
        $tour->locationeleven = $request->locationeleven;
        $tour->dayelevendesc = $request->dayelevendesc;
        $tour->locationtwelve = $request->locationtwelve;
        $tour->daytwelvedesc = $request->daytwelvedesc;
        $tour->locationthirteen = $request->locationthirteen;
        $tour->daythirteendesc = $request->daythirteendesc;
        $tour->save();
        return redirect('/tour/all');
    }
    public function deleteTour(Request $request){
        Tour::where('id', $request->tour_id)->delete();
        return redirect('/tour/all');
    }
}
