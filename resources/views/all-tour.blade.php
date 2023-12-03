<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/adminconsole.css">
    <title>All tours</title>
</head>
<body>
    <div class="heading">
        <h1>Tour table</h1>
    </div>
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <form action="/tour/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
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
            <form action="/tour/add" method="POST">
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
                <td>{{$tr->tourdescription}}</td>
                <td>{{$tr->tourprice}}</td>
                <td>{{$tr->day}}</td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image1}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image2}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image3}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image4}}" alt=""></td>
                <td><img width=100px height="100px" src="/storage/tour/{{$tr->image5}}" alt=""></td>
                <td>{{$tr->locationone}}</td>
                <td>{{$tr->dayonedesc}}</td>
                <td>{{$tr->locationtwo}}</td>
                <td>{{$tr->daytwodesc}}</td>
                <td>{{$tr->locationthree}}</td>
                <td>{{$tr->daythreedesc}}</td>
                <td>{{$tr->locationfour}}</td>
                <td>{{$tr->dayfourdesc}}</td>
                <td>{{$tr->locationfive}}</td>
                <td>{{$tr->dayfivedesc}}</td>
                <td>{{$tr->locationsix}}</td>
                <td>{{$tr->daysixdesc}}</td>
                <td>{{$tr->locationseven}}</td>
                <td>{{$tr->daysevendesc}}</td>
                <td>{{$tr->locationeight}}</td>
                <td>{{$tr->dayeightdesc}}</td>
                <td>{{$tr->locationnine}}</td>
                <td>{{$tr->dayninedesc}}</td>
                <td>{{$tr->locationten}}</td>
                <td>{{$tr->daytendesc}}</td>
                <td>{{$tr->locationeleven}}</td>
                <td>{{$tr->dayelevendesc}}</td>
                <td>{{$tr->locationtwelve}}</td>
                <td>{{$tr->daytwelvedesc}}</td>
                <td>{{$tr->locationthirteen}}</td>
                <td>{{$tr->daythirteendesc}}</td>
                <td>
                    <form action="/tour/delete" method="POST">
                    @csrf
                        <input type="hidden" name="tour_id" value="{{ $tr->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    
                </td>
                

            </tr>
            @endforeach
        </tbody>
        
        
    </table>
    </form>
</body>
</html>