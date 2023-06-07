<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap">
</head>
<body>
<img src="{{asset('assets2/img/logo.png')}}" alt="">
 <h1> CONTACTS </h1>

 
    <h3> {{ config('app.name')}} </h3>
   
   <h5> Nom : <strong> {{ $data['name'] }}  </strong></h5>
   
   <h5> From : <strong>{{ $data['email'] }}</strong></h5>
   
   <h5> Sujet : <strong>{{ $data['objet'] }} </strong></h5>

   <p> Message : <strong> {{ $data['message'] }} </strong></p>
 
</body>
</html>


	


