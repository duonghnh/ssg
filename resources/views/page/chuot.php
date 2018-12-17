<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset(' ')}}">
    <meta charset="UTF-8">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="source/css/bootstrap.css">
    <link rel="stylesheet" href="source/css/bootstrap-grid.css">
    <link rel="stylesheet" href="source/css/custom.css">
    <link rel="shortcut icon" type="image/png" href="images/gear.ico"/>
    <title>Search</title>
</head>

<body>

<div class="rev-slider">
      <div class="content">

      	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">
      			<div class="row">
    <?php foreach ($product as $value): ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 sp">

                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="{{$value->ImageURL}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{($value->Name)}}/h5>

                                <div class="gia">
                                    <p>{{($value->Price)}}</p>
                                </div>
                                <a href="{{($value->ProductURL)}}" class="btn btn-primary">Đến nơi bán</a>
                            </div>
                        </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
	<?php endforeach?>
	<?php var_dump($chuot)?>










<script src="source/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="source/js/bootstrap.bundle.min.js"></script>
<script src="source/js/bootstrap.js"></script>
</body>
</html>