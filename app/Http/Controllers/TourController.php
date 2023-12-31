<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TourController extends Controller
{

    public function getContactPage(){
        return view("contact");
    }

    public function getFilteredTours(Request $request){
        $tours = Tour::orderBy('created_at', 'DESC');
        if($request->id != null){
            $tours->where('id', $request->id);
        }
        if($request->tourname != null){
            $tours->where('tourname', 'LIKE', '%' . $request->tourname . '%');
        }
        if($request->min_price != null){
            $tours->where('tourprice', '>=', $request->min_price);
        }
        if($request->max_price != null){
            $tours->where('tourprice', '<=', $request->max_price);
        }
        if($request->day != null){
            $tours->where('day', '=', $request->day);
        }
        return $tours->get();

    }
    public function getFilteredBlogs(Request $request){
        $blogs = Blog::orderBy('created_at', 'DESC');
        if($request->id != null){
            $blogs->where('id', $request->id);
        }
        if($request->blogname != null){
            $blogs->where('blogname', 'LIKE', '%' . $request->blogname . '%');
        }
        return $blogs->get();

    }
    public function viewAllTour(Request $request){
        $tours = $this->getFilteredTours($request);
        return view('all-tour')->with('tours', $tours)->with('filters', [
            'id' => $request->id,
            'tourname' => $request->tourname,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'day' => $request->day,
        ]);
    }
    
    public function viewAllBlog(Request $request){
        $blogs = $this->getFilteredBlogs($request);
        return view('all-blog')->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'blogname' => $request->blogname,
        ]);
    }
    public function editTour(Request $request, $id){
        $tour = Tour::where('id', $id)->first();
        return view('edit-tour')->with('tour', $tour);
    }
    public function editBlog(Request $request, $id){
        $blog = Blog::where('id', $id)->first();
        return view('edit-blog')->with('blog', $blog);
    }
    public function updateTour(Request $request, $id){
        $tour = Tour::findOrFail($id);
        $tour->tourname = $request->tourname;
        $tour->tourdescription = $request->tourdescription;
        $tour->tourprice = $request->tourprice;
        $tour->day = $request->day;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/tour', $name1);
            $tour->image1 = $name1;
        }
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/tour', $name2);
            $tour->image2 = $name2;
        }
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/tour', $name3);
            $tour->image3 = $name3;
        }
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/tour', $name4);
            $tour->image4 = $name4;
        }
        if ($request->hasFile('image5')) {
            $name5 = $request->file('image5')->getClientOriginalName();
            $request->file('image5')->storeAs('public/tour', $name5);
            $tour->image5 = $name5;
        }
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
    
        return redirect()->route('tours.all');
    }
    public function updateBlog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->blogname = $request->blogname;
        $blog->blogdescription = $request->blogdescription;
        if ($request->hasFile('blogimage')) {
            $bname1 = $request->file('blogimage')->getClientOriginalName();
            $request->file('blogimage')->storeAs('public/blog', $bname1);
            $blog->blogimage = $bname1;
        }
        $blog->save();
    
        return redirect()->route('blogs.all');
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
        return redirect()->route('tours.all');
    }
    public function addNewBlog(Request $request){
        $blog = New Blog();
        $blog->blogname = $request->blogname;
        $blog->blogdescription = $request->blogdescription;
        $bsize1 = $request->file('blogimage')->getSize();
        $bname1 = $request->file('blogimage')->getClientOriginalName();
        $request->file('blogimage')->storeAs('public/blog', $bname1);
        $blog->blogimage = $bname1;
        $blog->save();
        return redirect()->route('blogs.all');
    }
    public function deleteTour(Request $request){
        Tour::where('id', $request->tour_id)->delete();
        return redirect()->route('tours.all');
    }
    public function deleteBlog(Request $request){
        Blog::where('id', $request->blog_id)->delete();
        return redirect()->route('blogs.all');
    }
    public function getHomePage(Request $request){
        $tours = $this->getFilteredTours($request);
        return view("index")->with('tours', $tours)->with('filters', [
            'id' => $request->id,
            'tourname' => $request->tourname,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'day' => $request->day,
        ]);
    }
    public function getTourPage(Request $request){
        $tours = $this->getFilteredTours($request);
        return view("tours")->with('tours', $tours)->with('filters', [
            'id' => $request->id,
            'tourname' => $request->tourname,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'day' => $request->day,
        ]);
    }
    public function returnTourPage(Request $request, $id){
        $tour = Tour::where('id', $id)->first();
        return view('tour')->with('tour', $tour);
    }
    public function returnBlogPage(Request $request){
        $blogs = $this->getFilteredBlogs($request);
        return view("blog")->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'blogname' => $request->blogname,
            'blogdescription' => $request->blogdescription,
        ]);
    }
}
