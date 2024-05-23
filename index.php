<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hardware</title>
    <!-- Style  -->
    <link rel="stylesheet" href="./styles/layout.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Escolha a categoria de Eletrônico:</h1>

        <ul class="list-product">
            <li class="list-product-item ">
                <span class="deskIcon"></span>
                <a href="?page=desktop">Desktops</a>
            </li>
            <li class="list-product-item ">
                <span class="deskIcon"></span>
                <a href="?page=notebook">Notebooks</a>
            </li>
            <li class="list-product-item">
                <span class="deskIcon"></span>
                <a href="?page=celular">Celulares</a>
            </li>
            <li class="list-product-item">
                <span class="deskIcon"></span>
                <a href="?page=tv">Televisões</a>
            </li>
        </ul>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php
                        $page = isset($_GET['page']) ? $_GET['page']:'desktop';
                       
                        switch($page){
                            case 'desktop': 
                                include 'desktop.php';
                                break;
                            case 'notebook': 
                                include 'notebook.php';
                                break;
                            case 'celular': 
                                include 'celular.php';
                                break;   
                            case 'tv': 
                                include 'tv.php';
                                break;   
                            
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>









</body>

</html>