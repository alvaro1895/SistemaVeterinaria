<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatoNegro</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <link rel="stylesheet" href="\css\tablausuario.css">
</head>

<body>
@include('cabeceraAdmin')

    <div class="container">
        <header>
            <h1 style="color:#902e31;">Gestión de Servicios</h1>
            <div class="filterEntries">
                <div class="entries">
                    Mostrar <select name="" id="table_size">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> registros
                </div>

                <div class="filter">
                    <label for="search">Buscar:</label>
                    <input type="search" name="" id="search" placeholder="Nombre/Precio/Fecha">
                </div>
            </div>

            <div class="addMemberBtn">
                <button>Nuevo Servicio</button>
            </div>

        </header>


        <table class="data-table">

            <thead>
                <tr class="heading">
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Nombre Servicio</th>
                    <th>Precio Servicio</th>
                    <th>Fecha Consulta</th>
                    <th>Acción</th>
                </tr>
            </thead>


            <tbody class="userInfo">

            </tbody>

        </table>


        <footer>
            <span class="showEntries">Showing 1 to 10 of 50 entries</span>
            <div class="pagination">

            </div>
        </footer>
    </div>


    <!--Formulario emergente-->

    <div class="dark_bg">

        <div class="popup">
             <header>
                <h2 class="modalTitle">Rellene el formulario</h2>
                <button class="closeBtn">&times;</button>
             </header>

             <div class="body">
                <form action="#" id="myForm">
                    <div class="imgholder">
                        <label for="uploadimg" class="upload">
                            <input type="file" name="" id="uploadimg" class="picture">
                            <i class="fa-solid fa-plus"></i>
                        </label>
                        <img src="..\img\pic1.png" alt="" width="150" height="150" class="img">
                    </div>

                    <div class="inputFieldContainer">

                        <div class="nameField">
                            <div class="form_control">
                                <label for="fName">Nombre Servicio:</label>
                                <input type="text" name="" id="fName" required>
                            </div>
    
                            <div class="form_control">
                                <label for="preciosev">Precio Servicio:</label>
                                <input type="number" name="" id="preciosev" required>
                            </div>
                        </div>

                        <div class="BField">
                            <div class="form_control">
                                <label for="sDate">Fecha Consulta:</label>
                                <input type="date" name="" id="sDate" required>
                            </div>

                        </div>

                    </div>
                </form>
             </div>

             <footer class="popupFooter">
                <button form="myForm" class="submitBtn">Submit</button>
             </footer>
        </div>
    </div>


    <br>
    <script src="..\js\TServicio.js"></script>
    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>


    <!-- <footer class="footerpage">
        <div class="page.foot">
            <p class="footer-copy">©2024 ElGatoNegro. Todos los derechos reservados.</p>
        </div>

    </footer> -->

</body>

</html>
