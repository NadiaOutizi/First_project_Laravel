<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nintando switch</title>
    <style>
 h1{
            color:red;
    }
    table {
 border-collapse: collapse;
 text-align: center;
 max-height: min-content;


}

td,
tr,
th {
 border: 3px solid black;
 vertical-align:center; 

}
th{
color:blue;
}

    </style>
</head>
<body>
    
</body>
</html>
<h1>{{$heading}}:</h1>
<table>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>Dimensions</th>
        <th>Weight</th>
        <th>Screen</th>
        <th>Storage</th>
        <th>BatteryLife</th>
        <th> Nintendo Switch</th>
    </tr>
@foreach($listings as $l)

<tr>
<td>{{$l['id']}}</td>
<td>{{$l['nom']}}</td>
<td>{{$l['Dimensions']}}</td>
<td>{{$l['Weight']}}</td>
<td>{{$l['Screen']}}</td>
<td>{{$l['Storage']}}</td>
<td>{{$l['Battery Life']}}</td>
<td><img src={{$l ['Image']}} alt="image" ></td>
</tr>
@endforeach 
</table>
