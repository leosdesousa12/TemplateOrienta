app.controller('HomeCtrl',['$scope','Posts', function($scope, Posts){
    console.log("rolou");
    Posts.getPosts().then(function(data){
        console.log(data.posts[2].post_title);
    });

}]);