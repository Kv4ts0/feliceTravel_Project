<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/adminconsole.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <title>All tours</title>
</head>
<body>
    <div class="heading">
        <a style="text-decoration: none;" href="/tour/all">
        <h1>Tour table</h1>
        </a>
        <div class="filter">
        <form action="{{ route('tours.all') }}">
            <tr>
                <td><input type="number" name="id" value="{{ $filters['id'] }}" placeholder="ID"></td>
                <td colspan="2"><input type="text" value="{{ $filters['tourname'] }}"  name="tourname" placeholder="Enter the Tour name"></td>
                <td><input type="number" name="day" placeholder="Enter the number of day" value="{{ $filters['day'] }}"></td>
                <td><input type="number" name="min_price" placeholder="Enter the min price" value="{{ $filters['min_price'] }}"></td>
                <td><input type="number" name="max_price" placeholder="Enter the max price" value="{{ $filters['max_price'] }}"></td>
                <td><button class="btn btn-success" type="submit">Search</button></td>
            </tr>
        </form>
</div>
    </div>
    
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <form action="/tour/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        </form>
        <thead>
            <th>Date Added</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Day</th>
            <th>Image#1</th>
            <th>Image#2</th>
            <th>Image#3</th>
            <th>Image#4</th>
            <th>Image#5</th>
            <th>Locations of First day</th>
            <th>Day One Description</th>
            <th>Locations of Second day</th>
            <th>Day Two Description</th>
            <th>Locations of Third day</th>
            <th>Day Three Description</th>
            <th>Locations of Fourth day</th>
            <th>Day Four Description</th>
            <th>Locations of Fiveth day</th>
            <th>Day Five Description</th>
            <th>Locations of Sixth day</th>
            <th>Day Six Description</th>
            <th>Locations of Seventh day</th>
            <th>Day Seven Description</th>
            <th>Locations of Eights day</th>
            <th>Day Eight Description</th>
            <th>Locations of Ninth day</th>
            <th>Day Nine Description</th>
            <th>Locations of Tenth day</th>
            <th>Day Ten Description</th>
            <th>Locations of Eleventh day</th>
            <th>Day Eleven Description</th>
            <th>Locations of Twelves day</th>
            <th>Day Twelve Description</th>
            <th>Locations of Thirteenth day</th>
            <th>Day Thirteen Description</th>
            <th>Actions</th>
        </thead>
        <tr>
            <form action="{{ route('tours.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <td></td>
                <td><input type="text" name="tourname" placeholder="Tour name"></td>
                <td><textarea name="tourdescription" placeholder="Tour description"></textarea></td>
                <td><input type="number" name="tourprice" placeholder="Tour price"></td>
                <td><input type="number" name="day" placeholder="Tour Day"></td>
                <td><input class="form-control" type="file" name="image1" placeholder="image1"></td>
                <td><input class="form-control" type="file" name="image2" placeholder="image2"></td>
                <td><input class="form-control" type="file" name="image3" placeholder="image3"></td>
                <td><input class="form-control" type="file" name="image4" placeholder="image4"></td>
                <td><input class="form-control" type="file" name="image5" placeholder="image5"></td>
                <td><input type="text" name="locationone" placeholder="Location of first day" value="N/A"></td>
                <td><textarea name="dayonedesc" placeholder="Description of first day" >N/A</textarea></td>
                <td><input type="text" name="locationtwo" placeholder="Location of second day" value="N/A"></td>
                <td><textarea name="daytwodesc" placeholder="Description of second day" >N/A</textarea></td>
                <td><input type="text" name="locationthree" placeholder="Location of third day" value="N/A"></td>
                <td><textarea name="daythreedesc" placeholder="Description of third day" >N/A</textarea></td>
                <td><input type="text" name="locationfour" placeholder="Location of fourth day" value="N/A"></td>
                <td><textarea name="dayfourdesc" placeholder="Description of fourth day" >N/A</textarea></td>   
                <td><input type="text" name="locationfive" placeholder="Location of fiveth day" value="N/A"></td>
                <td><textarea name="dayfivedesc" placeholder="Description of fiveth day" >N/A</textarea></td>
                <td><input type="text" name="locationsix" placeholder="Location of sixth day" value="N/A"></td>
                <td><textarea name="daysixdesc" placeholder="Description of sixth day" >N/A</textarea></td>
                <td><input type="text" name="locationseven" placeholder="Location of seventh day" value="N/A"></td>
                <td><textarea name="daysevendesc" placeholder="Description of seventh day" >N/A</textarea></td> 
                <td><input type="text" name="locationeight" placeholder="Location of eighth day" value="N/A"></td>
                <td><textarea name="dayeightdesc" placeholder="Description of eighth day" >N/A</textarea></td>
                <td><input type="text" name="locationnine" placeholder="Location of ninth day" value="N/A"></td>
                <td><textarea name="dayninedesc" placeholder="Description of ninth day" >N/A</textarea></td>
                <td><input type="text" name="locationten" placeholder="Location of tenth day" value="N/A"></td>
                <td><textarea name="daytendesc" placeholder="Description of tenth day" >N/A</textarea></td> 
                <td><input type="text" name="locationeleven" placeholder="Location of eleventh day" value="N/A"></td>
                <td><textarea name="dayelevendesc" placeholder="Description of eleventh day" >N/A</textarea></td> 
                <td><input type="text" name="locationtwelve" placeholder="Location of twelfth day" value="N/A"></td>
                <td><textarea name="daytwelvedesc" placeholder="Description of twelfth day" >N/A</textarea></td>
                <td><input type="text" name="locationthirteen" placeholder="Location of thirteenth day" value="N/A"></td>
                <td><textarea name="daythirteendesc" placeholder="Description of thirteenth day" >N/A</textarea></td>  
                <td><button class="btn btn-success" type="submit">Add</button></td>
                <td>#</td>
            </tr>
            </form>
        @foreach($tours as $tr)
        <tbody>
            <tr>
                <td>{{$tr->created_at}}</td>
                <td>{{$tr->tourname}}</td>
                <td><pre>{{$tr->tourdescription}}</pre></td>
                <td>{{$tr->tourprice}}</td>
                <td>{{$tr->day}}</td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image1}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image2}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image3}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image4}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image5}}" alt=""></td>
                <td>{{$tr->locationone}}</td>
                <td><pre>{{$tr->dayonedesc}}</pre></td>
                <td>{{$tr->locationtwo}}</td>
                <td><pre>{{$tr->daytwodesc}}</pre></td>
                <td>{{$tr->locationthree}}</td>
                <td><pre>{{$tr->daythreedesc}}</pre></td>
                <td>{{$tr->locationfour}}</td>
                <td><pre>{{$tr->dayfourdesc}}</pre></td>
                <td>{{$tr->locationfive}}</td>
                <td><pre>{{$tr->dayfivedesc}}</pre></td>
                <td>{{$tr->locationsix}}</td>
                <td><pre>{{$tr->daysixdesc}}</pre></td>
                <td>{{$tr->locationseven}}</td>
                <td><pre>{{$tr->daysevendesc}}</pre></td>
                <td>{{$tr->locationeight}}</td>
                <td><pre>{{$tr->dayeightdesc}}</pre></td>
                <td>{{$tr->locationnine}}</td>
                <td><pre>{{$tr->dayninedesc}}</pre></td>
                <td>{{$tr->locationten}}</td>
                <td><pre>{{$tr->daytendesc}}</pre></td>
                <td>{{$tr->locationeleven}}</td>
                <td><pre>{{$tr->dayelevendesc}}</pre></td>
                <td>{{$tr->locationtwelve}}</td>
                <td><pre>{{$tr->daytwelvedesc}}</pre></td>
                <td>{{$tr->locationthirteen}}</td>
                <td><pre>{{$tr->daythirteendesc}}</pre></td>
                <td>
                    <form action="{{ route('tours.delete') }}" method="POST">
                    @csrf
                        <input type="hidden" name="tour_id" value="{{ $tr->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/tour/edit/{{ $tr->id}}" class="btn btn-primary">Edit</a>
                    
                </td>
                

            </tr>
            @endforeach
        </tbody>
        
        
    </table>
    </form>
</body>
</html>