app.factory('Posts', ['$http', function($http){
    return {
        getPosts: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'test_ajax'}
            }).then(function (response){
                console.log("pesquisa");
                console.log(ajaxurl);
                return response.data;
            });
            return response;
        }
    }
}]);


app.factory('Profissao', ['$http', function($http){
    return {
        getPosts: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getProfissao'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);

app.factory('Category', ['$http', function($http){
    return {
        getCategory: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getCategory'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);

app.factory('PostProfissao', ['$http', function($http){
    return {
        getPost: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getPostProfissao'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);

app.factory('Materias', ['$http', function($http){
    return {
        getPost: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getMaterias'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);


app.factory('Materia', ['$http', function($http){
    return {
        getPost: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getMateria'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);

app.factory('UltimaMateria', ['$http', function($http){
    return {
        getPost: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getUltimaMateria'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);

app.factory('MembroEquipe', ['$http', function($http){
    return {
        getPost: function(){
            var response = $http({
                url: ajaxurl+"&_embed",
                method: "GET",
                params: {action: 'getMembroEquipe'}
            }).then(function (response){
                return response.data;
            });
            return response;
        }
    }
}]);