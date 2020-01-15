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