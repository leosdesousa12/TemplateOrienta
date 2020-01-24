app.controller('HomeCtrl',['$scope','Posts', function($scope, Posts){
    $scope.posts;
    $scope.postPrincipal;

    Posts.getPosts().then(function(data){
        $scope.posts =data.posts;

        if(!($scope.posts[0].idPrincipal)){
            $scope.postPrincipal = $scope.posts[0];
        }else{
            $scope.posts.forEach(element => {
                if(element.post_id == element.idPrincipal){
                    $scope.postPrincipal = element;
                }
            });
        }
    });

    $scope.principal = function(data){
        $scope.postPrincipal = data;
    }



}]);

app.controller('ProfissaoCtrl',['$scope','Profissao','Category', function($scope, Profissao, Category){
    $scope.titleProfissao = "Profissões e Carreiras";
    $scope.listaPosts =[];
    $scope.categorys;
    $scope.categoryFilter = -1;
    $scope.pesquisa;
    $scope.paginas=[];
    $scope.lista =[];
    var c = [];
    //$scope.listaPostsFilter = []
  
   Profissao.getPosts().then(function(data){
    $scope.listaPosts = data.posts;
    $scope.carregarLista(angular.copy($scope.listaPosts));

    });

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;
        });

    $scope.listaCategory = function(category){
        $scope.titleProfissao = category.post_category.name;
        $scope.categoryFilter = category.post_category.term_id;
        
       var listLocal = [];

        $scope.listaPosts.forEach(element => {
            element.post_category.forEach(categoria => {

                if($scope.categoryFilter == categoria.cat_ID){

                  listLocal.push(element);
                }
            });
        });
        $scope.carregarLista(angular.copy(listLocal));



    }
    $scope.filter = function (item) { 
        var localList= [];
        $scope.listaPosts.forEach(element => {
            if($scope.customFilter(element)){
                localList.push(element);
            }
        });
        $scope.carregarLista(angular.copy(localList));

    }
    $scope.myFilter = function (item) { 
        if($scope.pesquisa){
            if(item.title ==$scope.pesquisa ){
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

   /* var c = [{'a':1},{'a':2},{'a':3},{'a':4},{'a':5},{'a':6},{'a':7},{'a':8},{'a':9},{'a':10},{'a':11},{'a':12},
{'a':1},{'a':2},{'a':3},{'a':4},{'a':5},{'a':6},{'a':7},{'a':8},{'a':9},{'a':10},{'a':11},{'a':12}];
*/

$scope.carregarLista = function(list){
    c = list;
    $scope.totalPorPagina = 6;
    $scope.totalRegistro = c.length;
    $scope.pageAtual = 0;
    $scope.pagina = [];
    var p = $scope.totalRegistro > $scope.totalPorPagina ? Math.ceil($scope.totalRegistro / $scope.totalPorPagina) : 1;
    for (var i = 0; i < p; i++) {
        $scope.pagina.push(c.splice(0, $scope.totalPorPagina));
    }
    $scope.lista = $scope.pagina[0];

}
//função chamada no ngClick;
$scope.loadListPagination = function (i) {
    $scope.pageAtual = i;
        
        $scope.lista = $scope.pagina[i];
       
    };



}]);




app.controller('ProfissaoIternaCtrl',['$scope','PostProfissao','Category','UltimaMateria','MembroEquipe', 'Profissao',function($scope, PostProfissao,Category,UltimaMateria,MembroEquipe,Profissao){
    $scope.post;
    $scope.categorys;
    $scope.ultimaMateria;
    $scope.membroEquipe;
    $scope.listaPosts=[];
    $scope.pesquisa;

    Profissao.getPosts().then(function(data){
        $scope.listaPosts = data.posts;
    
    });

    PostProfissao.getPost().then(function(data){
        $scope.post =data.posts[0];
    });

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;

        });

    UltimaMateria.getPost().then(function(data){
        $scope.ultimaMateria =  data.posts[0];
        });

    MembroEquipe.getPost().then(function(data){
        $scope.membroEquipe =  data.posts[0];
        });

   
        $scope.customFilter = function (item) {
            if (!$scope.pesquisa) {// your input field is empty or no checkbox checked
                return true;
            }
                var searchVal = $scope.pesquisa;
                searchVal = searchVal.replace(/([()[{*+.$^\\|?])/g, '\\$1'); //special char
    
                var regex = new RegExp('' + searchVal, 'i');
    
                var matchOnValue = false; 
    
                if ($scope.pesquisa) {
                matchOnValue = regex.test(item.title);
                }
                return matchOnValue;
            
        }
    


}]);



app.controller('MateriaCtrl',['$scope','Materias','Category', function($scope, Materias,Category){
    $scope.post;
    $scope.visivel = false;
    $scope.materias;
    $scope.lista=[];
  
    Materias.getPost().then(function(data){
        
        $scope.materias = data.posts;
        $scope.carregarLista(angular.copy($scope.materias));


    });
  

    Category.getCategory().then(function(data){
        $scope.categorys = data.category;
        $scope.visivel = true;

        });


$scope.carregarLista = function(list){
    c = list;
    $scope.totalPorPagina = 3;
    $scope.totalRegistro = c.length;
    $scope.pageAtual = 0;
    $scope.pagina = [];
    var p = $scope.totalRegistro > $scope.totalPorPagina ? Math.ceil($scope.totalRegistro / $scope.totalPorPagina) : 1;
    for (var i = 0; i < p; i++) {
        $scope.pagina.push(c.splice(0, $scope.totalPorPagina));
    }
    $scope.lista = $scope.pagina[0];

}
//função chamada no ngClick;
$scope.loadListPagination = function (i) {
    $scope.pageAtual = i;
        
        $scope.lista = $scope.pagina[i];
       
    };

   



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


app.controller('mainCtrl',['$scope', function($scope){
   
var c = [{'a':1},{'a':2},{'a':3},{'a':4},{'a':5},{'a':6},{'a':7},{'a':8},{'a':9},{'a':10},{'a':11},{'a':12},
{'a':1},{'a':2},{'a':3},{'a':4},{'a':5},{'a':6},{'a':7},{'a':8},{'a':9},{'a':10},{'a':11},{'a':12}];
$scope.totalPorPagina = 6;
$scope.totalRegistro = c.length;
$scope.pageAtual = 0;
$scope.pagina = [];
var p = $scope.totalRegistro > $scope.totalPorPagina ? Math.ceil($scope.totalRegistro / $scope.totalPorPagina) : 1;
for (var i = 0; i < p; i++) {
     $scope.pagina.push(c.splice(0, $scope.totalPorPagina));
}
$scope.lista = $scope.pagina[0];
//função chamada no ngClick;
$scope.loadListPagination = function (i) {
    $scope.pageAtual = i;
        
        $scope.lista = $scope.pagina[i];
       
    };

}]);




app.controller('mainCtrl',['$scope','getFourmaMateria','PostsMain', function($scope, getFourmaMateria,PostsMain){
    $scope.visivel = false;
    $scope.materias;
    $scope.lista=[];

    $scope.posts=[];

    PostsMain.getPosts().then(function(data){
        $scope.posts =data.posts;
    });

    

  
    getFourmaMateria.getPost().then(function(data){
        
        $scope.materias = data.posts;

    });  



}]);


app.controller('ContatoCtrl',['$scope','MembroEquipe', function($scope,MembroEquipe){
$scope.a =  Math.floor((Math.random()*6)+1);
$scope.b =  Math.floor((Math.random()*6)+1);
$scope.result ;
$scope.membroEquipe = [];



MembroEquipe.getPost().then(function(data){
    $scope.membroEquipe =  data.posts[0];
    });

}]);

    