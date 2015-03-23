var mfqjvApp = angular.module('mfqjv', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

mfqjvApp.controller('mfqjvController', ['$scope', function($scope) {
{	

	$scope.BuscaIMDBporNome = function () {
		var urlToGet = 'http://www.omdbapi.com/?t=' + $scope.nomeIMDB + '&y=&plot=short&type=movie&r=json&apikey=37f2ef67'
		
		$http.get(urlToGet)
			.then(function(result) {
			mfqjvApp.moviesImdb	= result.data;
         });
	};
	
	$scope.BuscaIMDBporID = function () {
		var urlToGet = 'http://www.omdbapi.com/?i=' + $scope.idIMDB + '&y=&plot=short&type=movie&r=json&apikey=37f2ef67'
		
		$http.get(urlToGet)
			.then(function(result) {
			mfqjvApp.moviesImdb	= result.data;
         });
	};
	
});	





