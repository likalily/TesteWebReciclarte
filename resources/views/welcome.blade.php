@extends('layouts.staticLayout')

@section('content')
    <link rel="stylesheet" href="css/welcome.css">
    <div class="setContent">
    <div class="contentLeft">
        <div class="containerContent">
            <h1>Descarte rápido <br> e prático!</h1>
            <p>Comunicação eficaz para facilitar o processo de <br> descarte do que não te serve mais!</p>
            <button class="btn btn-success" style="background-color: #003F22">SAIBA MAIS</button>
        </div>
    </div>
    <div class="contentRight">
        <img src="img/lixeiraImg.jfif" alt="">
    </div>
    </div>
    <div class="setContent" id="depoimento">
        <div class="depoimentoLeft">
            <img src="img/pessoaDepoimento.jpg" alt="">
        </div>
        <div class="depoimentoRight">
            <h2>
                “Melhor empresa da região de Ferraz de Vasconcelos,
                da galáxia, do cosmos, do universo, da via láctea.”
            </h2>
            <p>Cliente Janaína</p>
        </div>
    </div>
    <div  class="setContent">
        <h2 class="centerTitle" id="serv">Nossos serviços</h2>
        <div id="gridServicos">
            <div class="servico">
                <img src="./img/coletaResiduos.jpg" alt="">
                <h4 class="centerTitle">Coleta de Resíduos</h4>
                <p>
                    Veja como funciona a coleta de lixo das empresas de Ferraz
                    e outras opções para o descarte do seu produto.
                </p>
            </div>
            <div class="servico">
                <img src="./img/consultarEmpresa.jpg" alt="">
                <h4 class="centerTitle">Consultar Empresa</h4>
                <p>Empresas que fornecem o serviço de retirada de residuos.</p>
            </div>
            <div class="servico">
                <img src="./img/agendamento.jpg" alt="">
                <h4 class="centerTitle">Agendamento de Retirada</h4>
                <p>
                    Agende horários com empresas, as ou apenas inscreva seu produto
                    e espere propostas de coleta.
                </p>
            </div>
            <div class="servico">
                <img src="./img/coletaSeletiva.jpg" alt="">
                <h4 class="centerTitle">Materiais</h4>
                <p>
                    Veja quais produtos podem ser recicláveis, além de dicas, instruções para o descarte.
                </p>
            </div>
        </div>
    </div>
@endsection
