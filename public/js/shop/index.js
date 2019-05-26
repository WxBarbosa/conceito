$(document).ready(function(){
    var server = window.location.protocol+ '//' +document.location.hostname;

    function loadProductList(){
        
        var url = window.location.href.split('/')
        var categoryId = url[6]

        var html= '';

        $.getJSON(server+'/conceito/shop/GetSubCategoryById/'+categoryId,function(data){
            let titleSubcategory = $(".title_subcategory");
            $.each(data, function(key,value){
                titleSubcategory.html(value.nome)
            })
        })
        // Recebe o JSON
        $.getJSON(server+'/conceito/shop/GetProductsBySubCategoryId/'+categoryId,function(data){
            // Incorpora a Div principal
            let productList = $("#product-list");
            
            $.each(data, function(key,value){
                html += `
                    <div class="col-md-3 col-sm-6">
                        <div class="grid-produtos">
                            <div class="img-produto">
                                <a href="#">
                                    <img class="img-1" src="`+ value.imagem +`">
                                </a>
                                <a class="add-carrinho" 
                                onclick="carrinho.adicionarAoCarrinho({ foto: '`+ value.imagem +`', nome: '`+ value.nome +`', preco: `+ value.preco +` })">
                                Adicionar ao carrinho
                                </a>
                            </div>
                            <div class="produto-cont">
                                <h3 class="titulo"><a href="#">`+ value.nome +`</a></h3>
                                <span class="preco">R$`+ value.preco +`</span>
                            </div>
                        </div>
                    </div>`;
            })        

            productList.html(html)
        })
    }

    loadProductList()
});