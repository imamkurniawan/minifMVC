var app = angular.module('myApp', []);
app.controller('newsCtrl', function($scope, $http) {
  $http.get("http://iklim.kalbar.bmkg.go.id/m/w1.php?mod=get").then(function (response) {
							// data -> Standard awal
      $scope.myData = response.data.berita;
  });
});

app.controller('owmCtrl', function($scope, $http) {
	$http.get("https://api.openweathermap.org/data/2.5/weather?q=London&APPID=34194db4a5197bee6a4595c387bdafb0").then(function (response) {
		$scope.myData = response.data;
		$scope.myCoord = response.data.coord;
		$scope.myWeather = response.data.weather;
	})
})

app.controller('poshujanCtrl', function($scope, $http){
	$http.get('http://localhost:8080/minif/json/pos.json').then(function(tampung){
		$scope.myDataPos = tampung.data ;
	})
})

app.controller('myCtrl', function($scope){
	$scope.name = "";
})