pointCPF();

function pointCPF() {
    var cpf = document.getElementById("nCpf");
    // var cpf = document.querySelector("#nCpf");
    
    cpf.addEventListener("keydown", function (){
       cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
    });
}