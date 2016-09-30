/**
 * Create the module. Set it up to use html5 mode.
 */
window.MyOpenSearch = angular.module('mySearch', ['elasticsearch'],
    ['$locationProvider', function($locationProvider){
        $locationProvider.html5Mode(true);
    }]
);

/**
 * Create a service to power calls to Elasticsearch. We only need to
 * use the _search endpoint.
 */
MyOpenSearch.factory('hitservice',
    ['$q', 'esFactory', '$location', function($q, elasticsearch, $location){
        var client = elasticsearch({
            host: $location.host() + ":9200"
        });
		
		

        /**
         * Given a term and an offset, load another round of 10 hits.
         *
         * Returns a promise.
         */
        var search = function(term, num, offset){
            var deferred = $q.defer();
			var zero = 0;

			var query = {
				"bool":{
					"should":[
						{"match": {"first_name": term[0]}},
						{"match": {"last_name": term[1]}},
						{"match": {"gender": term[2]}},
						{"match": {"country": term[3]}},
						{"match": {"email": term[4]}},
						{"match": {"ip_address": term[5]}},
						{"range":{"age": {"gte":term[6],"lte":term[7]}}},
						{"range":{"health_rating": {"gte":term[8],"lte":term[9]}}},	
					], 
				}
			};

            client.search({
                "index": 'logstash*',
                "type": 'logs', 
                "body": {
                    "size": 1000,
                    "from": (offset || 0) * 1000,
                    "query": query
                }
            }).then(function(result) {
                var ii = 0, hits_in, hits_out = [];
                hits_in = (result.hits || {}).hits || [];
                for(;ii < hits_in.length; ii++){
                    hits_out.push(hits_in[ii]._source);
                }
                deferred.resolve(hits_out);
            }, deferred.reject);

            return deferred.promise;
        };


        return {
            "search": search
        };
    }]
);

/**
 * Create a controller to interact with the UI.
 */
MyOpenSearch.controller('searchCtrl',
    ['hitservice', '$scope', '$location', function(hits, $scope, $location){
        // Provide some nice initial choices

      

        // Initialize the scope defaults.
        $scope.hits = [];        // An array of recipe results to display
        $scope.slt = [];
        $scope.term = [];
		$scope.number = "12";		
		$scope.range = [0,100,0,10];
		$scope.page = 0;            // A counter to keep track of our current page
        $scope.allResults = false;  // Whether or not all results have been found.

        /**
         * A fresh search. Reset the scope variables to their defaults, set
         * the q query parameter, and load more results.
         */
        $scope.search = function(){
			$scope.page = 0;
            $scope.hits = [];
            $scope.allResults = false;
            $location.search({'q': $scope.searchTerm});
            
			if($scope.slt[0]){
				$scope.term[0] = $scope.searchTerm;

			}else{
				$scope.term[0] = "";
			}
			if($scope.slt[1]){
				$scope.term[1] = $scope.searchTerm;

			}else{
				$scope.term[1] = "";
			}
			if($scope.slt[2]){
				$scope.term[2] = $scope.searchTerm;

			}else{
				$scope.term[2] = "";
			}
			if($scope.slt[3]){
				$scope.term[3] = $scope.searchTerm;

			}else{
				$scope.term[3] = "";
			}
			if($scope.slt[4]){
				$scope.term[4] = $scope.searchTerm;

			}else{
				$scope.term[4] = "";
			}
			if($scope.slt[5]){
				$scope.term[5] = $scope.searchTerm;

			}else{
				$scope.term[5] = "";
			}
			if($scope.slt[6]){
				$scope.term[6] =  $scope.range[0];
				$scope.term[7] = $scope.range[1];
			}else{
				$scope.term[6] =  0;
				$scope.term[7] = 0;
			}
			if($scope.slt[7]){
				$scope.term[8] =  $scope.range[2];
				$scope.term[9] = $scope.range[3];

			}else{

				$scope.term[8] =  0;
				$scope.term[9] = 0;
			}
			
			$scope.loadMore();

        };

        /**
         * Load the next page of results, incrementing the page counter.
         * When query is finished, push results onto $scope.hits and decide
         * whether all results have been returned (i.e. were 10 results returned?)
         */
        $scope.loadMore = function(){
            hits.search($scope.term,$scope.num,$scope.page++).then(function(results){
                if(results.length !== 10){
                    $scope.allResults = true;
                }

                var ii = 0;
                for(;ii < results.length; ii++){
					
                    $scope.hits.push(results[ii]);
                }
            });
        };

        // Load results on first run
        $scope.loadMore();
    }]
);
