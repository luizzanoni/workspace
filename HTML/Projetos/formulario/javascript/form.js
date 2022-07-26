document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("btnSubmitForm").addEventListener("click", function () {
        compararTextos()
    });

    function compararTextos() {
        let inputsForm = document.querySelectorAll(".label input");
        for (let x = 0; x < inputsForm.length; x++) {
            verificarCamposVazios(inputsForm[x]);

            inputsForm[x].addEventListener("keydown", function () {
                this.classList.remove("input-error");
            });
        }

        let cpf = document.getElementById("nCpf").value;
        let dataNascimento = document.getElementById("dataNasc").value;
        let nomeCompleto = document.getElementById("nomeCompleto").value;
        let nomeMaeCompleto = document.getElementById("nomeMaeCompleto").value;

        let dadosForm = {
            cpf: cpf,
            dataNascimento: dataNascimento,
            nomeCompleto: nomeCompleto,
            nomeMaeCompleto: nomeMaeCompleto
        }

        console.log(dadosForm)

        executarRequisisao(dadosForm, "");

    }

    function executarRequisisao(dados, url) {
        var requisicao = new XMLHttpRequest();

        var dadosRequisicao = JSON.stringify(dados);
        console.log(dadosRequisicao);
        
        requisicao.open("POST", url);

        requisicao.addEventListener("load", function () {
            if (xhr.status == 200) {
                //sucesso!
            } else {
                //erro!
            }
        });

        // requisicao.send(dadosRequisicao);
    }

    function verificarCamposVazios(inputForm) {
        if (inputForm.value == "") {
            inputForm.classList.add("input-error");
        }
    }

    
})