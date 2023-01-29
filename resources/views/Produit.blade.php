<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
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
<center>
<body>
    <h1>List des Produits Electroniques:</h1>
    <table>
        <tr> 
            <th>id de Produit</th>
            <th>Nom de produit</th>
            <th>Type de produit</th>
            <th>Marque de produit</th>
            <th>Image de produit</th>
        </tr> 
    @foreach($Produis as $pro=>$p)
    
    
      
        <tr>
            
        <td >{{$p['id']}}</td>
        <td style="font-family: Georgia, 'Times New Roman',Times, serif;font-weight:bold">{{$p['Nom']}}</td>
        <td>{{$p['type']}}</td>
        <td>{{$p['marque']}}</td>
        <td><img src={{$p ['Image']}} alt="image" ></td>
      
    </tr>
        
   

    @endforeach
</table>
  
    
    {{-- <script> 
        var Elements=@json($Produis)
        
       console.log(Elements); 
    </script> --}}
   
</body>
</center>

</html>