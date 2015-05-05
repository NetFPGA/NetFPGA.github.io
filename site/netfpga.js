var netfpga = angular.module( 'netfpga', ['ngRoute','ngSanitize'] );



netfpga.config(function($locationProvider, $routeProvider){

	$routeProvider
		.when('/news/', 
		{
			templateUrl: 'news.html',
			controller: 'newsCtrl',
			resolve: {
				getNews : function($q, $route,newsSrv, generalSrv){
				//	console.log(11);
					generalSrv.active = 'news';
					var q = $q.defer();
					newsSrv.getNews()
					.then(function(data){
						q.resolve(data);
					});
					return q.promise;
				}
			}
		})
		.when('/news/:newTitle', 
		{
			templateUrl: 'news.html',
			controller: 'newsCtrl',
			resolve: {
				getNews : function($q, $route,newsSrv, generalSrv){
					console.log($route.current.params.newTitle);
					generalSrv.active = 'news';
					var q = $q.defer();
					newsSrv.getNews()
					.then(function(data){
						q.resolve(data);
					});
					return q.promise;
				}
			}
		})
		.when('/events/', 
		{
			templateUrl: 'events.html',
			controller: 'eventsCtrl',
			resolve: {
				getEvents : function($q, $route,eventsSrv, generalSrv){
					var q = $q.defer();
					eventsSrv.getEvents()
					.then(function(data){
						generalSrv.active = 'events';
						q.resolve(data);
					});
					return q.promise;
				}
			}
		})
		.when('/deployment_map/', 
		{
			templateUrl: 'deployment_map.html'
		})
		.when('/events_map/', 
		{
			templateUrl: 'events_map.html'
		})
		.when('/NetFPGA-10g-License/', 
		{
			templateUrl: '10glicense.html'
		})
		.when('/NetFPGA-1g-License/', 
		{
			templateUrl: '1glicense.html'
		})
		.when('/publications/', 
		{
			controller: 'publicationsCtrl',
			templateUrl: 'publications.html',
			resolve: {
				getPublications : function($q, $route,publicationsSrv){
					var q = $q.defer();
					publicationsSrv.getPublications()
					.then(function(data){
						q.resolve(data);
					});
					return q.promise;
				}
			}
		})
		.when('/about/', 
		{
			controller: 'aboutCtrl',
			templateUrl: 'about.html'
		})
		.when('/systems/', 
		{
			redirectTo: '/systems/1netfpga-sume/details/'
		})
		.when('/systems/:systemName/', 
		{
			redirectTo: '/systems/:systemName/details/'
		})
		.when('/systems/:systemName/:option/', 
		{
			templateUrl: 'systems.html',
			controller: 'systemsCtrl',
			resolve: {
				getSystems : function($q, $route,systemsSrv, generalSrv){
					var q = $q.defer();
					systemsSrv.getSystems()
					.then(function(data){
						generalSrv.active = 'systems';
						q.resolve(data);
					});
					return q.promise;
				}
			}
		})
		.when('/SUME_reg_form/', 
		{
			templateUrl: 'sume_reg_form.html'
		})
		.when('/events/2009_WorkshopNorthAmerican/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2009_WorkshopNorthAmerican.html'
		})
		.when('/events/2008_China/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2008_China.html'
		})
		.when('/events/2010_WorkshopNorthAmerican/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2010_WorkshopNorthAmerican.html'
		})
		.when('/events/2011_SummerCamp/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2011_SummerCamp.html'
		})
		.when('/events/2010_SummerCamp/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2010_SummerCamp.html'
		})
		.when('/events/2012_SummerCamp/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2012_SummerCamp.html'
		})
		.when('/events/2013_SummerCamp/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2013_SummerCamp.html'
		})
		.when('/events/2007_HotI/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2007_HotI.html'
		})
		.when('/events/2008_NICTA/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2008_NICTA.html'
		})
		.when('/events/2008_India/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2008_India.html'
		})
		.when('/events/2008_SIGCOMM/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2008_SIGCOMM.html'
		})
		.when('/events/2010_IETF/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2010_IETF.html'
		})
		.when('/events/2011_SIGCOMM/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2011_SIGCOMM.html'
		})
		.when('/events/2011_CoNext/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2011_CoNext.html'
		})
		.when('/events/2008_SummerCamp/', 
		{
			controller: 'tutorials',
			templateUrl: 'tutorials/2008_SummerCamp.html'
		})
		.when('/10G_going_beta/', 
		{
			templateUrl: '10g_going_beta.html'
		})
		.when('/CML_reg_form/', 
		{
			templateUrl: 'cml_reg_form.html'
		})
		.otherwise({
			controller : 'generalCtrl',
			templateUrl: '/'
		});
		$locationProvider.html5Mode(false);
});
netfpga.controller( 'aboutCtrl', function generalCtrl( $scope, $sce , generalSrv) {
	
	generalSrv.active = 'about';
});
netfpga.controller( 'tutorials', function generalCtrl( $scope, $sce , generalSrv) {
	
	generalSrv.active = 'events';
});

netfpga.controller( 'generalCtrl', function generalCtrl( $scope, $sce , generalSrv) {
	generalSrv.active = 'home';
	$scope.menu= generalSrv;
});


netfpga.factory('generalSrv', function generalSrv($http, $q) {
	return {
		active : 'home'
	}
});



netfpga.controller( 'newsCtrl', function newsCtrl( $scope, getNews, $sce, $route ) {
	$scope.Allnews = getNews;
	if($route.current.params.newTitle){
		angular.forEach(getNews.data, function(value, key) {
			if(value.Link === $route.current.params.newTitle){
				var a = [];
				a['data'] = [value];
				$scope.Allnews = a;
			}
		});
	}
});

netfpga.factory('newsSrv', function newsSrv($http, $q) {
	return {
		getNews: function(){
			return $http({
				url: 'json/news.json',
				method: 'GET'
			});
		}
	}
});



netfpga.controller( 'eventsCtrl', function eventsCtrl( $scope, getEvents, $sce ) {

	$scope.allEvents = getEvents;
	$scope.Upcoming = $scope.allEvents.data.Upcoming;
	$scope.Seminars = $scope.allEvents.data.Seminars;
	$scope.Tutorials = $scope.allEvents.data.Tutorials;
	$scope.General = $scope.allEvents.data.Tutorials.general;
	$scope.netfpga_1g = $scope.allEvents.data.Tutorials.netfpga1g;
	$scope.netfpga_10g = $scope.allEvents.data.Tutorials.netfpga10g;
	$scope.netfpga_cml = $scope.allEvents.data.Tutorials.netfpgacml;
	$scope.netfpga_sume = $scope.allEvents.data.Tutorials.netfpgasume;
	$scope.Camps = $scope.allEvents.data.Camps;
	$scope.Developers_Workshops = $scope.allEvents.data.Developers_Workshops;
	$scope.Contests = $scope.allEvents.data.Contests;

});

netfpga.factory('eventsSrv', function eventsSrv($http, $q) {
	return {
		getEvents: function(){
			return $http({
				url: 'json/events.json',
				method: 'GET'
			});
		}
	}
});


netfpga.controller( 'systemsCtrl', function systemsCtrl( $scope, $route, getSystems, $sce ) {
	$scope.allSystems = getSystems;
	$scope.Tabs = $scope.allSystems.data.systems;
//	console.log($scope.Tabs);
	$scope.systemName = $route.current.params.systemName;
	$scope.wikiurl = $scope.Tabs[$scope.systemName].Wiki[0].Link;
	console.log($scope.wikiurl);
	$scope.option = $route.current.params.option;
	$scope.videos = $scope.allSystems.data.videos;
	$scope.loadutube = function(id){
		player = new YT.Player(id, {
	      height: '325',
	      width: '900',
	      videoId: id,
	      events: {
	        'onReady': $scope.onPlayerReady
	     //   'onStateChange': onPlayerStateChange
	      }
	    });
	}
	$scope.onPlayerReady = function(event) {
		event.target.playVideo();
	}
	$scope.getSystemVideos = function(system){
		for (i = system.System.length - 1; i >= 0; i--) {
			if(system.System[i] === $scope.systemName){
				return true;
			}	
		}
		return false;	
	}
	$scope.getNotSystemVideos = function(system){
		for (i = system.System.length - 1; i >= 0; i--) {
			if(system.System[i] === $scope.systemName){
				return false;
			}	
		}
		return true;
	//	return system.System !== $scope.systemName;		
	}

});

netfpga.factory('systemsSrv', function systemsSrv($http, $q) {
	return {
		getSystems: function(){
			return $http({
				url: 'json/systems.json',
				method: 'GET'
			});
		}
	}
});



netfpga.controller( 'publicationsCtrl', function publicationsCtrl( $scope, $route, getPublications, $sce ) {
	$scope.Publications = getPublications.data;

});

netfpga.factory('publicationsSrv', function eventsSrv($http, $q) {
	return {
		getPublications: function(){
			return $http({
				url: 'json/publications.json',
				method: 'GET'
			});
		}
	}
});



