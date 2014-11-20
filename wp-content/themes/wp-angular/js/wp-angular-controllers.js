/*
create a controllers variable with no dependencies.
 */
var wpAngularControllers = angular.module('wpAngularControllers',[]);

/*
    Posts
*/

wpAngularControllers.controller('contentController',['$scope','$http',
    function($scope,$http){
        $http.get('?json_route=/posts').success(function(data){
            console.log(data);
            $scope.posts = data;
        });
    }
])