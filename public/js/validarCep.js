/*$(document).ready(function() {
    $("#validar").on("click", function(){
        var cep = $("#cep").val();
        var url = "https://viacep.com.br/ws/"+cep+"/json";

        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success:function(dados) {
                console.log(dados);
                $("#rua").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#estado").val(dados.uf);
            }
        });
    })
});*/

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById("rua").value = "";
    document.getElementById("bairro").value = "";
    document.getElementById("cidade").value = "";
    document.getElementById("uf").value = "";
}

function meu_callback(conteudo) {
    console.log(conteudo);

    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById("street").value = conteudo.logradouro;
        document.getElementById("neighborhood").value = conteudo.bairro;
        document.getElementById("city").value = conteudo.localidade;
        document.getElementById("state").value = conteudo.uf;
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {
    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, "");

    //Verifica se campo cep possui valor informado.
    if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById("street").value = "...";
            document.getElementById("neighborhood").value = "...";
            document.getElementById("city").value = "...";
            document.getElementById("state").value = "...";

            //Cria um elemento javascript.
            var script = document.createElement("script");

            //Sincroniza com o callback.
            script.src =
                "https://viacep.com.br/ws/" +
                cep +
                "/json/?callback=meu_callback";

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}
