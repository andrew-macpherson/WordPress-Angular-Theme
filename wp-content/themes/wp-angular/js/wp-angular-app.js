/*
Create an Angular module with dependencies for ngRoute and wpAngularController
 */
var wpAngular = angular.module('wpAngular',[
    'ngRoute',
    'wpAngularControllers',
    'ngSanitize'
]);


/*
  configure routes
*/

wpAngular.config(['$routeProvider',
    function($routeProvider){
        $routeProvider.when('/home',{
            templateUrl: template_url+'/templates/posts.html',
            controller: 'contentController'
        }).otherwise({
            redirectTo: '/home'
        })
    }
]);