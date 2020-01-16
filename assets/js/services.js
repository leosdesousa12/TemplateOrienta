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