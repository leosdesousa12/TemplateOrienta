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

app.controller('ProfissaoCtrl',['$scope','Profissao','Category', function($scope, Profissao, Category){
   console.log("Profissao e carreira");
    $scope.titleProfissao = "Profissões e Carreiras";
    $scope.categorys;
   Profissao.getPosts().then(function(data){
    console.log(data.posts);
    });

    Category.getCategory().then(function(data){
        console.log(data.category);
        $scope.categorys = data.category;

        console.log($scope.titleProfissao);
        });

$scope.lista = function(category){
    $scope.titleProfissao = category.post_category.name;
}

}]);