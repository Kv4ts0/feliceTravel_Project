<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/adminconsole.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.svg">
    <title>Edit Tour</title>
</head>
<body>
    <div class="heading">
        <h1>Edit Tours</h1>
    </div>
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <form action="{{ route('tour.update',['id' => $tour->id]) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="tour_id" value="{{$tour->id}}" />
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
        <tbody>
            <tr>
                <td></td>
                <td><input type="text" name="tourname" id="tourname" value=" {{ $tour->tourname }} "/></td></td>
                <td><textarea name="tourdescription" id="tourdescription" >{{ $tour->tourdescription }}</textarea></td>
                <td><input type="text" name="tourprice" id="tourprice" value=" {{ $tour->tourprice }} " /></td>
                <td><input type="text" name="day" id="day" value=" {{ $tour->day }} " /></td>
                <td><img width="100px" height="100px" src="/storage/tour/{{$tour->image1}}" alt=""><input type="file" name="image1" placeholder="image1"></td>
                <td><img width="100px" height="100px" src="/storage/tour/{{$tour->image2}}" alt=""><input type="file" name="image2" placeholder="image2"></td>
                <td><img width="100px" height="100px" src="/storage/tour/{{$tour->image3}}" alt=""><input type="file" name="image3" placeholder="image3"></td>
                <td><img width="100px" height="100px" src="/storage/tour/{{$tour->image4}}" alt=""><input type="file" name="image4" placeholder="image4"></td>
                <td><img width="100px" height="100px" src="/storage/tour/{{$tour->image5}}" alt=""><input type="file" name="image5" placeholder="image5"></td></td>
                <td><input type="text" name="locationone" id="locationone" value=" {{ $tour->locationone }} "/></td>
                <td><textarea name="dayonedesc" id="dayonedesc" >{{ $tour->dayonedesc }}</textarea>
                <td><input type="text" name="locationtwo" id="locationtwo" value=" {{ $tour->locationtwo }} "/></td>
                <td><textarea name="daytwodesc" id="daytwodesc" >{{ $tour->daytwodesc }}</textarea></td>
                <td><input type="text" name="locationthree" id="locationthree" value=" {{ $tour->locationthree }} "/></td>
                <td><textarea name="daythreedesc" id="daythreedesc">{{ $tour->daythreedesc }}</textarea></td>
                <td><input type="text" name="locationfour" id="locationfour" value=" {{ $tour->locationfour }} "/></td>
                <td><textarea name="dayfourdesc" id="dayfourdesc" >{{ $tour->dayfourdesc }}</textarea></td>
                <td><input type="text" name="locationfive" id="locationfive" value=" {{ $tour->locationfive }} "/></td>
                <td><textarea name="dayfivedesc" id="dayfivedesc" >{{ $tour->dayfivedesc }}</textarea></td>
                <td><input type="text" name="locationsix" id="locationsix" value=" {{ $tour->locationsix }} "/></td>
                <td><textarea name="daysixdesc" id="daysixdesc" >{{ $tour->daysixdesc }}</textarea></td>
                <td><input type="text" name="locationseven" id="locationseven" value=" {{ $tour->locationseven }} "/></td>
                <td><textarea name="daysevendesc" id="daysevendesc">{{ $tour->daysevendesc }}</textarea></td>
                <td><input type="text" name="locationeight" id="locationeight" value=" {{ $tour->locationeight }} "/></td>
                <td><textarea name="dayeightdesc" id="dayeightdesc">{{ $tour->dayeightdesc }}</textarea></td>
                <td><input type="text" name="locationnine" id="locationnine" value=" {{ $tour->locationnine }} "/></td>
                <td><textarea name="dayninedesc" id="dayninedesc">{{ $tour->dayninedesc }}</textarea></td>
                <td><input type="text" name="locationten" id="locationten" value=" {{ $tour->locationten }} "/></td>
                <td><textarea name="daytendesc" id="daytendesc">{{ $tour->daytendesc }}</textarea></td>
                <td><input type="text" name="locationeleven" id="locationeleven" value=" {{ $tour->locationeleven }} "/></td>
                <td><textarea name="dayelevendesc" id="dayelevendesc" >{{ $tour->dayelevendesc }}</textarea></td>
                <td><input type="text" name="locationtwelve" id="locationtwelve" value=" {{ $tour->locationtwelve }} "/></td>
                <td><textarea name="daytwelvedesc" id="daytwelvedesc">{{ $tour->daytwelvedesc }}</textarea></td>
                <td><input type="text" name="locationthirteen" id="locationthirteen" value=" {{ $tour->locationthirteen }} "/></td>
                <td><textarea name="daythirteendesc" id="daythirteendesc">{{ $tour->daythirteendesc }}</textarea></td>
                <td><button class="btn btn-success">Save</button><br><button class="btn btn-danger">Cancel</button></td>

            </tr>
        </tbody>
    </div>
</div>
</body>
</html>