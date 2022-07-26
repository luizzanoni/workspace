function pesquisar(){
    var input,filtro,menu,menuItens,links;
    input = document.getElementById("pesquisa");
    filtro = input.value.toUpperCase();
    menu = document.getElementsByTagName("li");
    for(var i=0;i<menuItens.length;i++){
        links = menuItens[i].getElementsByTagName("a")[0];
        if(links.innerHTML.toUpperCase().indesOf(filtro)>-1){
            menuItens[i].style.display="";
        }else{
            menuItens[i].style.display="none";
        }
    }
}