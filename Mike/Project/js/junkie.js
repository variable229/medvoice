var simpleController = function ($scope)
{
	// Initialize the model variables
	$scope.number = 7;
	
	$scope.search = function(){
		document.getElementById('test').src="http://localhost:5601/app/kibana#/visualize/edit/Country?embed=true&_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now-15m,mode:quick,to:now))&_a=(filters:!(),linked:!f,query:(query_string:(analyze_wildcard:!t,query:'*')),uiState:(),vis:(aggs:!((id:'1',params:(),schema:metric,type:count),(id:'2',params:(field:" + $scope.slt +",order:desc,orderBy:'1',size:" + $scope.number + "),schema:segment,type:terms)),listeners:(),params:(addLegend:!t,addTooltip:!t,isDonut:!f,shareYAxis:!t),title:Country,type:pie))";

	}

	}