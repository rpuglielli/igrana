<?php if ( ! defined('ABSPATH')) exit; ?>

    <?php
        // Carrega todos os métodos do modelo
        $modelo->validate_register_form();
        $modelo->get_register_form( chk_array( $parametros, 1 ) );
        $modelo->del_fornecedor( $parametros );
    ?>

<?php if( !empty( $modelo->form_msg_del ) ){ echo $modelo->form_msg_del; } ?>

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Cadastro de fornecedor</h4>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo HOME_URI; ?>">Início</a>
            </li>
            <li>
                <a href="<?php echo HOME_URI; ?>/fornecedor">Listagem de fornecedores</a>
            </li>
            <li class="active">
                Cadastro de fornecedor
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <form method="post" action="">
            <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Cadastro de fornecedor</b></h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nome *</label>
                            <input type="text" class="form-control border-input" placeholder="Nome" id="nome" name="nome" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'nome') ); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control border-input" placeholder="CPF" id="cpf" name="cpf" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'cpf') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>RG</label>
                            <input type="text" class="form-control border-input" placeholder="RG" id="rg" name="rg" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'rg') ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CNPJ</label>
                            <input type="text" class="form-control border-input" placeholder="CNPJ" id="cnpj" name="cnpj" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'cnpj') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Insc. Estadual</label>
                            <input type="text" class="form-control border-input" placeholder="Inscrição Estadual" id="inscricao" name="inscricao" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'inscricao') ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control border-input" placeholder="(99)9999-9999" id="telefone" name="telefone" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'telefone') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" class="form-control border-input" placeholder="(99)99999-9999" id="celular" name="celular" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'celular') ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sexo</label>
                            <input type="text" class="form-control border-input" placeholder="Número" id="sexo" name="sexo" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'sexo') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <input type="text" class="form-control border-input datepicker" placeholder="99/99/9999" id="dataNascimento" name="dataNascimento" value="<?php
                            echo htmlentities( converteData(chk_array( $modelo->form_data, 'dataNascimento')) ); ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" class="form-control border-input" placeholder="99999-999" id="cep" name="cep" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'cep') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control border-input" placeholder="Endereço" id="logradouro" name="logradouro" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'logradouro') ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control border-input" placeholder="Cidade" id="cidade" name="cidade" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'cidade') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control border-input" placeholder="Estado" id="uf" name="uf" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'uf') ); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" class="form-control border-input" placeholder="Bairro" id="bairro" name="bairro" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'bairro') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nº</label>
                            <input type="number" min="0" class="form-control border-input" placeholder="Nº" id="numero" name="numero" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'numero') ); ?>">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" class="form-control border-input" placeholder="Complemento" id="complemento" name="complemento" value="<?php
                            echo htmlentities( chk_array( $modelo->form_data, 'complemento') ); ?>">
                        </div>
                    </div>

                    <div class="form-group m-b-0 col-md-12 text-center">
                        <br>
                        <button class="btn btn-success waves-effect waves-light" type="submit">
                            Gravar
                        </button>
                        <a href="<?php echo HOME_URI . '/fornecedor';?>" class="btn btn-white waves-effect waves-light m-l-5">
                            Voltar
                        </a>
                        <input id="id" name="id" value="<?php echo htmlentities( chk_array( $modelo->form_data, 'idPessoa') ); ?>" hidden>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
   $(document).ready(function(){
       // Masks
       $('#cpf').mask('000.000.000-00');
       $('#rg').mask('00.000.000-0');
       $('#cnpj').mask('00.000.000.0000-00');
       $('#inscricao').mask('000.000.000.000');
       $('#telefone').mask('(00)0000-0000');
       $('#celular').mask('(00)00000-0000');
       $('#dataNascimento').mask('00/00/0000');
       $('#cep').mask('00000-000');
       // Init DatetimePicker
       demo.initFormExtendedDatetimepickers();
       //
       function limpa_formulário_cep() {
           // Limpa valores do formulário de cep.
           $("#logradouro").val("");
           $("#bairro").val("");
           $("#cidade").val("");
           $("#uf").val("");
       }
       // Busca de CEP
       $("#cep").blur(function() {

           //Nova variável "cep" somente com dígitos.
           var cep = $(this).val().replace(/\D/g, '');

           //Verifica se campo cep possui valor informado.
           if (cep != "") {

               //Expressão regular para validar o CEP.
               var validacep = /^[0-9]{8}$/;

               //Valida o formato do CEP.
               if(validacep.test(cep)) {

                   //Preenche os campos com "..." enquanto consulta webservice.
                   $("#logradouro").val("Buscando...");
                   $("#bairro").val("Buscando...");
                   $("#cidade").val("Buscando...");
                   $("#uf").val("Buscando...");

                   //Consulta o webservice viacep.com.br/
                   $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                       if (!("erro" in dados)) {
                           //Atualiza os campos com os valores da consulta.
                           $("#logradouro").val(dados.logradouro);
                           $("#bairro").val(dados.bairro);
                           $("#cidade").val(dados.localidade);
                           $("#uf").val(dados.uf);
                       } //end if.
                       else {
                           //CEP pesquisado não foi encontrado.
                           limpa_formulário_cep();
                           sweetAlert("Ops...", "O CEP informado não foi encontrado.", "error");
                       }
                   });
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
       });
   });
</script>