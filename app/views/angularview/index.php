<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="<?=HOME_PATH?>angular/angular.min.js"> </script>
    <script src="<?=HOME_PATH?>angular/angular.app.js"> </script>
</head>
<body ng-app="myApp" >
    <div>
        <h1>Hello {{name}}</h1>
        <p>Name : <input type="text" ng-model="name"></p>
    </div>
    <div ng-controller='newsCtrl'>
        {{ myData }}
        <li ng-repeat='datas in myData'> {{ datas.IDBerita }} - <a href="{{ datas.IDBerita }}">{{ datas.JudulBerita }}</a> </li>
    </div>

    
</body>
</html>