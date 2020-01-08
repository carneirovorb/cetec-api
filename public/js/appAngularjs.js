var app=angular.module('aplicacao',[]);

app.controller('conteudo', ['$scope', function ($scope) {
	$scope.teste='Mensagem de Texto';
	$scope.mudarMensagem=function(){
		$scope.teste='Texto 2';
	}
	$scope.openModal=function(horario,dia){
		console.log("Dia: "+dia+" - Hora: "+horario);
	}
}]);

$('#h7 #d2').click(function(){
	console.log('Testando');
})