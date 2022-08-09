<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script type="text/javascript" src="./assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.js"></script>

    <script type="text/javascript" src="./assets/js/jquery.mask.js"></script>
 //   <script type="text/javascript" src="./assets/js/payment-token.js"></script>
    <script type='text/javascript'>var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://api.gerencianet.com.br/v1/cdn/431f766eb8ea7eed2eb91b35926972c1/'+v;s.async=false;s.id='431f766eb8ea7eed2eb91b35926972c1';if(!document.getElementById('431f766eb8ea7eed2eb91b35926972c1')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};</script>

    <script type="text/javascript" src="./assets/js/script-cartao.js"></script>
    <title>WebMed</title>
    <!-- <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon"> -->
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <!-- <img src="./assets/img/marca-gerencianet.svg" alt="Gerencianet - Conceito em Pagamentos" width="218" height="31"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <!-- <li class=""><a href="https://dev.gerencianet.com.br/docs" target="_blank" title="Documentação Oficial da API Gerencianet">Documentação Oficial da API Gerencianet</a></li> -->

                </ul>

                <ul class="nav navbar-nav pull-right">
                    <!-- <li><a target="blank" href="https://gerencianet.com.br/#login">Entrar</a> -->
                    </li>
                    <!-- <li><a target="blank" class="destaque" href="https://gerencianet.com.br/#abrirconta">Abra sua conta</a> -->
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <h4> Pagamento com cartão de crédito</h4>
    </div>

    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-9 well">
                <form id="form" method="POST" action="" class="">
                    <div class="col-lg-3">
                        <h5>Informações do produto/serviço</h5>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrição: (<em class="atributo">name</em>) <br> <strong class="ex"></strong></label>
                            <input required type="text" class="form-control" id="descricao" placeholder="Descrição do produto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Valor do serviço: (<em class="atributo">value</em>) <br><strong class="ex"> (5000 equivale a R$ 50,00) (int)</strong></label>
                            <input required type="text" class="form-control" id="valor" placeholder="Valor do Produto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Quantidade de itens: (<em class="atributo">amount</em>) <br><strong class="ex">Ex: 1 (int)</strong></label>
                            <select required id="quantidade" class="form-control">
                                <?php for ($i = 1; $i < 20; $i++) : ?>
                                    <option><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <h5>Informações do cliente</h5>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do cliente: (<em class="atributo">name</em>) <br><strong class="ex"></strong></label>
                            <input required type="text" class="form-control" id="nome_cliente" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF: (<em class="atributo">cpf</em>) <br><strong class="ex">(sem formatação)</strong></label>
                            <input required type="text" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefone: (<em class="atributo">phone_number</em>) <br><strong class="ex"> (sem formatação)</strong></label>
                            <input required type="text" class="form-control" id="telefone" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email: (<em class="atributo">email</em>) <br><strong class="ex"></strong> </label>
                            <input required type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Data de nascimento: (<em class="atributo">birth</em>) <br><strong class="ex"> (yyyy-mm-dd)</strong></label>
                            <input required type="text" class="form-control" id="nascimento" placeholder="">
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <h5>Informações do endereçoaaa</h5>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Rua: (<em class="atributo">street</em>) <br><strong class="ex"></strong></label>
                            <input required type="text" class="form-control" id="rua" placeholder="Rua">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Número: (<em class="atributo">number</em>) <br><strong class="ex"> (int)</strong></label>
                            <input required type="text" class="form-control" id="numero" placeholder="Número">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bairro: (<em class="atributo">neighborhood</em>) <br><strong class="ex"></strong></label>
                            <input required type="text" class="form-control" id="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CEP: (<em class="atributo">zipcode</em>) <br><strong class="ex">(string)</strong></label>
                            <input required type="text" class="form-control" id="cep" placeholder="CEP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cidade: (<em class="atributo">city</em>) <br><strong class="ex"></strong></label>
                            <input required type="text" class="form-control" id="cidade" placeholder="Cidade">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Estado: (<em class="atributo">state</em>) <br><strong class="ex">Ex: MG</strong></label>
                            <input required type="text" class="form-control" id="estado" placeholder="Estado">
                        </div>

                    </div>

                    <div class="col-lg-3">

                        <h5>Informações de pagamento</h5>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Número do cartão: (<em class="atributo">number</em>)<br><strong class="ex"></strong> </label>
                            <input required type="text" class="form-control" id="numero_cartao" placeholder="Número do cartão">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bandeira: (<em class="atributo">brand</em>) <br><strong class="ex">Ex: visa (string)</strong></label>
                            <select required id="bandeira" class="form-control">
                                <option value="" selected>Selecione um bandeira</option>
                                <option value="visa">Visa</option>
                                <option value="mastercard">MasterCard</option>
                                <option value="amex">Amex</option>
                                <option value="elo">Elo</option>
                                <option value="hipercard">Hipercard</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Código de segurança: (<em class="atributo">cvv</em>)<br> <strong class="ex"> </strong> </label>
                            <input required type="text" class="form-control" id="codigo_seguranca" placeholder="Código de segurança">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mês de vencimento: (<em class="atributo">expiration_month</em>)</label>
                            <select required id="mes_vencimento" class="form-control">
                                <?php for ($i = 1; $i <= 12; $i++) : ?>
                                    <option><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ano de vencimento: (<em class="atributo">expiration_year</em>)</label>
                            <select required id="ano_vencimento" class="form-control">
                                <?php for ($i = 2022; $i <= 2035; $i++) : ?>
                                    <option><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div id="div_installments" class="form-group alert alert-success">
                            <label for="exampleInputPassword1">Número de parcelas: (<em style="color: white" class="atributo">installments</em>) <br> <strong style="color:white" class="ex">Ex: 1 (int) </strong></label>
                            <select required style="color: black" id="installments" class="form-control">
                                <option>Selecione uma opção</option>
                                

                            </select>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <button id="ver_parcelas" type="button" class="btn btn-default"> Definir número de parcelas <img src="./assets/img/next.png"></button>
                        <button id="btn_pg_cartao" type="button" class="btn btn-success hide"> Confirmar pagamento <img src="./assets/img/ok-mark.png"></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <div class="panel">
                        <a href="./download/exemplo-cartao.zip" class="btn btn-block btn-default">Baixar este exemplo <br> <img src="./assets/img/cloud-computing.png"></a>
                    </div>
                </div>

                <div class="col-lg-12 content-guidelines">
                    <div class="alert alert-warning" role="alert">
                        <!-- <strong>ATENÇÃO:</strong><br />
                        <p>Para funcionamento deste exemplo, você deverá informar seu <a style="font-weight: bold;" href="http://content.screencast.com/users/tiagogerencianet/folders/Jing/media/78747741-cb11-44e3-9342-54cd7e5a2fd0/2016-08-02_1359.png" target="_blank">Client_Id</a> e <a style="font-weight: bold;" href="http://content.screencast.com/users/tiagogerencianet/folders/Jing/media/78747741-cb11-44e3-9342-54cd7e5a2fd0/2016-08-02_1359.png" target="_blank">Client_Secret</a> no arquivo "credentials.json", além de alterar o parâmetro "sandbox", de acordo com o ambiente utilizado ("sandbox => true" para desenvolvimento e "sandbox => false" para produção).</p> -->
                    </div>
                </div>

                <div class="col-lg-12 content-guidelines">
                    <div class="alert alert-warning" role="alert">
                        <strong>ATENÇÃO:</strong><br />
                        <!-- <p>Para funcionamento deste exemplo, você deverá informar seu <b>Identificador de Conta</b> (<a target="_blank" href="https://cdn.discordapp.com/attachments/652136190006525955/809138574549188618/identificador-conta.jpg">?</a>) na <b>linha 1</b> do script contido no arquivo <b>"./assets/js/payment-token.js"</b>.</p> -->
                    </div>
                </div>

                <div class="col-lg-12 content-guidelines">
                    <div class="panel panel-default">
                        <div class="panel-heading">Links Úteis</div>
                        <div class="panel-body">
                            <ul>
                      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="content-footer">

        </div>
    </footer><!-- /.container-fluid -->


    <!-- Este componente é utilizando para exibir um alerta(modal) para o usuário aguardar as consultas via API.  -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Aguarde um momento.</h4>
                </div>
                <div class="modal-body">
                    Estamos processando a requisição <img src="./assets/img/ajax-loader.gif">.
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Este componente é utilizando para exibir um alerta(modal) para o usuário aguardar as consultas via API.  -->
    <div class="modal fade" id="myModalResult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Retorno de um pagamento com cartão.</h4>
                </div>
                <div class="modal-body">

                    <!--div responsável por exibir o resultado da emissão do boleto-->
                    <div id="boleto" class="hide">
                        <div class="panel panel-success">
                            <div id="" class="panel-body">
                                <table class="table">
                                    <caption></caption>
                                    <thead>
                                        <tr>
                                            <th>ID da transação(<em>charge_id</em>)</th>
                                            <th>N° de parcelas (<em>installments</em>)</th>
                                            <th>Valor da parcela (<em>installment_value</em>)</th>
                                            <th>Status (<em>status</em>)</th>
                                            <th>Total (<em>total</em>)</th>
                                            <th>Método de pagamento (<em>payment</em>)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="result_table">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
