$(document).ready(function(){
    
    var server = window.location.protocol+ '//' +document.location.hostname;

    function loadCategories(){
        
        var html= '';
        // Recebe o JSON
        $.getJSON(server+'/conceito/home/GetAllMenuCategories',function(data){
            // Incorpora a Div principal
            let menuCategories = $("#navbarNavAltMarkup1");
            //Começa a inserir o conteúdo na var HTML para inserir na MenuCategorias
            html += '<div class="navbar-nav mr-auto">';
            // Percorre o resultado JSON
            $.each(data, function(key, value){
                html += `
                        <div id="categoryId_`+ value.id +`" class="nav-item dropdown"> `
                
                        html += `
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                `+ value.nome +`
                            </a>`
                
                loadSubCategories(value.id) // Carrega as sub_categorias
                    
                html += '</div>'
            })        
            
            html += '</div>'
            
            html += `
                <div class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>`
            
            menuCategories.html(html)
        })
    }

    function loadSubCategories(categoryId){
        
        var html= '';

        $.getJSON(server+'/conceito/home/GetSubCategoriesByCategoryId/'+categoryId,function(data){
            let menuSubCategories = $("#categoryId_"+categoryId);
            html += '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'
            
            $.each(data, function(key, value){
                html += '<a class="dropdown-item text-secondary" href="'+server+'/conceito/shop/index/'+ value.id +'">'+ value.nome +'</a>'
            })        
            html += '</div>'
            menuSubCategories.append(html)
        })
    }

    loadCategories()
});