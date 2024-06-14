
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    


</head>
<body>

<?php
    require('./includes/config/conexion.php');
    $db = conectarDB();
    $enviado = false;
    
    // $query = "SELECT * FROM book";

    // $result = mysqli_query($db, $query);

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        $location= $_POST['location'];
        $guests= $_POST['guests'];
        $arrival= $_POST['arrival'];
        $leaving= $_POST['leaving'];

        //! ERRORES
        if($name) {
            
        }

        $query = "INSERT INTO book (name, email, phone, address, location, guests, arrival, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrival', '$leaving')";

        $result = mysqli_query($db, $query);

        if($result) {
            $enviado = true;
        }
    }



    // while($row = $result->fetch_assoc()) {
    //     echo $row["name"];
    // }
    // echo var_dump($result);
    // echo $result;
?>

<section class="header">

    <a href="home.php" class="logo">ViajaConAbner</a>

    <nav class="navbar">
        <a href="home.php">Inicio</a>
        <a href="about.php">Sobre Nosotros</a>
        <a href="package.php">Paquetes</a>
        <a href="book.php">Contacto</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(images/3.jpg) no-repeat">
    <h1>Reserva ahora</h1>
</div>


<section class="booking">

<h1 class="heading-tittle">Reserva tu viaje</h1>

<?php 
    if($enviado) {
        echo '<div>Su reserva ha sido enviada</div>';
    }
?>


<form action="book.php" method="POST" class="book-form">


        <div class="flex">
            <div class="inputBox">
                <span>Nombre :</span>
                <input type="text" placeholder="Ingrese su nombre" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Ingrese su correo" name="email">
            </div>


            <div class="inputBox">
                <span>Telefono :</span>
                <input type="number" placeholder="Ingrese su numero" name="phone">
            </div>

            <div class="inputBox">
                <span>Direccion :</span>
                <input type="text" placeholder="Ingrese su Direccion" name="address">
            </div>

            <div class="inputBox">
                <span>A donde se dirige :</span>
                <input type="text" placeholder="Lugar al que quiere visitar" name="location">
            </div>


            <div class="inputBox">
                <span>Cuantos viajan :</span>
                <input type="number" placeholder="Numero de Pasajeros" name="guests">
            </div>

            <div class="inputBox">
                <span>Ida :</span>
                <input type="date" name="arrival">
            </div>

            <div class="inputBox">
                <span>Vuelta :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btm" name="send">


       

</form>


</section>






    

 












<section class="footer">


<div class="box-container">
        <div class="box">
            <h3>Enlaces Rapidos</h3>
        <a href="home.php"><i class="fas fa-angle right"></i>Inicio</a>
        <a href="about.php"><i class="fas fa-angle right"></i>Sobre nosotros</a>
        <a href="package.php"> <i class="fas fa-angle right"></i>Paquetes</a>
        <a href="book.php"> <i class="fas fa-angle right"></i>Inicio</a>
        </div>

        <div class="box">
            <h3>Enlaces extra</h3>
        <a href="#"><i class="fas fa-angle right"></i> Preguntas</a>
        <a href="#"><i class="fas fa-angle right"></i> Politicas de Privacidad</a>
        <a href="#"><i class="fas fa-angle right"></i> términos de usuario</a>
    </div>

    <div class="box">
            <h3>Informacion de Contacto</h3>
        <a href="#"><i class="fas fa-phone"></i>3311234534</a>
        <a href="#"><i class="fas fa-envelope"></i>abnerpapu@outlook.com</a>
        <a href="#"><i class="fas fa-map"></i> Iztapalapa, cdmx Mexico</a>
    </div>

    <div class="box">
    <h3>Sigueme En Mis Redes</h3>
        <a href="facebook.com"><i class="fab fa-facebook f">facebook</i></a>
        <a href="#"><i class="fab fa-twitter">twitter</i></a>
        <a href="#"><i class="fab fa-instagram">instagram</i></a>
    </div>



</div>
<div class="credit">Pagina creada por <span>Abner</span>Papu de Papus</div>


</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script src="js/script.js"></script>

</body>
</html>