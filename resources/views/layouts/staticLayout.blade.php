<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReciclArt</title>

    <!--****************************ARQUIVOS CSS*****************************-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <link rel="stylesheet" href="css/static.css">

</head>
<body>
    <div id="menu">

        <img src="img/logoReciclart.png" alt="">
        
        <div class="input-group mb-3" style="margin-bottom: 0px;">
            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-secondary" type="button" id="button-addon2">
            <lord-icon
                src="https://cdn.lordicon.com/msoeawqm.json"
                trigger="hover"
                stroke="100"
                colors="primary:#ffffff,secondary:#08a88a"
                style="width:30px;height:30px">
            </lord-icon>
            </button>
        </div>
        <a href="">Login</a>
        <a href="">Criar conta</a>
        <a href="">Sobre nós</a>
        <a href="">Home</a>
    </div>
    <div id="content">
        @yield('content')
    </div>
</body>
</html>