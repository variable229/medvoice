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
        var search = function(term, slt, offset){
            var deferred = $q.defer();
			var answer = "_all";
			switch(slt) {
				case '_all':
					var query = {
						"match": {
							"_all": term
						}
					};
					break;
				case 'first_name':
					var query = {
						"match": {
							"first_name": term
						}
					};
					break;
				case 'last_name':
					var query = {
						"match": {
							"last_name": term
						}
					};
					break;
				case 'email':
					var query = {
						"match": {
							"email": term
						}
					};
					break;
				case 'gender':
					var query = {
						"match": {
							"gender": term
						}
					};
					break;
				case 'ip_address':
					var query = {
						"match": {
							"ip_address": term
						}
					};
					break;
			}
            client.search({
                "index": 'logstash*',
                "type": 'logs', 
                "body": {
                    "size": 10,
                    "from": (offset || 0) * 10,
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
		$scope.slt = '_all';
      

        // Initialize the scope defaults.
        $scope.hits = [];        // An array of recipe results to display
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
            $scope.loadMore();
        };

        /**
         * Load the next page of results, incrementing the page counter.
         * When query is finished, push results onto $scope.hits and decide
         * whether all results have been returned (i.e. were 10 results returned?)
         */
        $scope.loadMore = function(){
            hits.search($scope.searchTerm, $scope.slt,$scope.page++).then(function(results){
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
