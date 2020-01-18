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
    $scope.listaPosts =[];
    $scope.categorys;
    $scope.categoryFilter = -1;
    $scope.pesquisa;
    $scope.visualizar
    //$scope.listaPostsFilter = []
  
   Profissao.getPosts().then(function(data){
    $scope.listaPosts = data.posts;
    console.log(data.posts);
    });

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;

       // console.log($scope.titleProfissao);
        });

    $scope.lista = function(category){
        $scope.titleProfissao = category.post_category.name;
    // console.log(category.post_category);
        $scope.categoryFilter = category.post_category.term_id;

    }

    $scope.myFilter = function (item) { 
        //console.log($scope.pesquisa);
        if($scope.pesquisa){
            if(item.title ==$scope.pesquisa ){
                console.log(pesquisa);
            }
        }
        if($scope.categoryFilter ==-1){
            return true;
        }
        if($scope.categoryFilter == item.post_category[0].cat_ID){
            return item; 
        }

    
    };

    $scope.customFilter = function (item) {
        if (!$scope.pesquisa && ($scope.categoryFilter ==-1) ) {// your input field is empty or no checkbox checked
            return true;
        }
        if ($scope.pesquisa){
            var searchVal = $scope.pesquisa;
            searchVal = searchVal.replace(/([()[{*+.$^\\|?])/g, '\\$1'); //special char

            var regex = new RegExp('' + searchVal, 'i');

            var matchOnValue = false; 

            if ($scope.pesquisa) {
            matchOnValue = regex.test(item.title);
            }
            return matchOnValue;
            }
        // console.log("elemento");
            flag = false;
            item.post_category.forEach(element => {

                if($scope.categoryFilter == element.cat_ID){
                    flag = true
                    return element; 
                }
            });
            if(flag){
                return item;
            }
        
        return false;
    }


  

}]);




app.controller('ProfissaoIternaCtrl',['$scope','PostProfissao','Category','UltimaMateria','MembroEquipe', function($scope, PostProfissao,Category,UltimaMateria,MembroEquipe){
    $scope.post;
    $scope.categorys;
    $scope.ultimaMateria;
    $scope.membroEquipe;



    PostProfissao.getPost().then(function(data){
        $scope.post =data.posts[0];
    });

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;

        });

    UltimaMateria.getPost().then(function(data){
        $scope.ultimaMateria =  data.posts[0];
       // console.log(data);
        });

    MembroEquipe.getPost().then(function(data){
        $scope.membroEquipe =  data.posts[0];
      //  console.log(data);
        });

   



}]);



app.controller('MateriaCtrl',['$scope','Materias','Category', function($scope, Materias,Category){
    $scope.post;
    $scope.visivel = false;
    $scope.materias;
  
    Materias.getPost().then(function(data){
        
        $scope.materias = data.posts;

    });
  

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;
        $scope.visivel = true;

        });
   



}]);

app.controller('MateriaInternaCtrl',['$scope','Materia','Category', function($scope, Materia,Category){
    $scope.post;
    $scope.visivel = false;
    $scope.materia;
  
    Materia.getPost().then(function(data){
        $scope.materia = data.posts[0];

    });

 

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;
        $scope.visivel = true;

        });
   



}]);