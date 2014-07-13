$(document).ready(function (){
    $( "#mainSearchField" ).autocomplete({
        source: function( request, response ) {
            $.get('index.php?route=index', {find: request.term}, function (data){
                var strings=[];
                for (var i in data.bytitle){
                    strings.push(data.bytitle[i].title);
                }
                for (var i in data.byauthor){
                    strings.push(data.byauthor[i].lastname);
                }
                for (var i in data.bygenre){
                    strings.push(data.bygenre[i].genretitle);
                }
                response(strings);
            },'json');
        }
    });
});