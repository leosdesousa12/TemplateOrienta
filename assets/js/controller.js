app.controller('HomeCtrl',['$scope','Posts', function($scope, Posts){
    $scope.posts;
    $scope.postPrincipal;
    $scope.ID= 93;

    Posts.getPosts().then(function(data){
        $scope.posts =data.posts;
        $scope.postPrincipal = $scope.posts[0];
    });

    $scope.principal = function(data){
        $scope.postPrincipal = data;
    }



}]);