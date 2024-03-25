<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer documento de PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">



</head>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    padding: 0;

}

main {

    flex: 1;
    padding-top: 10vh;
}

.home {

    flex: 1;
    padding-top: 10vh;
    background-color: #8e9194;
}

.contacto {

    flex: 1;
    padding-top: 10vh;
    background-color: aquamarine;
}



/* Estilos Header */


header {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    gap: 10px;
    height: 80px;
    padding: 2%;
    background-color: black;
    position: fixed;
}

.menu {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 30px;

}

.menu a {
    text-decoration: none;
    color: white;
    font-family: verdana;
    font-weight: bold;

}

.menu a:hover {
    color: red;
}

.fa {
    padding-right: 5px;

}

.logo {
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 25px;
    color: red;
}

.logo a {
    color: rgb(255, 255, 255);
    text-decoration: none;

}

.logo a:hover {
    color: rgb(250, 8, 8);


}



/* menu navegacion */


nav a {
    margin-right: 80px;
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-size: 1.1em;

}

nav a:last-child {
    margin-right: 0;
}

nav a:hover {
    color: #66FFDA;
}

/* formulario */

/* Estilo titulo contacto */
.contact {
    height: 150px;
    width: 100%;
    border-bottom: 1px solid black;
    border-top: 1px solid black;


}

.contact h2 {
    text-align: center;
    margin-top: 30px;


    font-family: JotiOne;
    font-size: 3.8em;


}


/* estilo formulario */

main {

    display: flex;
    flex-direction: column;
    align-items: center;

}

.form-register {
    background-color: #24303c;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
    margin-bottom: 50px;
}

.form-group {
    margin: 10px 0;
    width: 90%;
    margin-left: 10px;

}

h1 {
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 10px;
}

.form-group label {
    font-weight: bold;
    color: white;
    font-family: Arial, Helvetica, sans-serif;

}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.form-register p {
    height: 40px;
    text-align: center;
    font-size: 13px;
    color: aliceblue;
}

.form-group-animo select {

    width: 90%;
    text-align: center;
    height: 40px;
    border-radius: 5px;
    margin: 10px;
}

.form-group-animo label {

    margin: 10px;
}

.form-group-radio {
    display: flex;
    align-items: center;
    flex-direction: row;
    /* Cambiamos a fila para poner el input y la etiqueta en la misma lÃƒÂ­nea */
    margin-top: 10px;
    margin-left: 5px;
    margin-right: 30px;
    margin-bottom: 20px;
}

.form-group-radio label {

    margin-left: 15px;
    margin-right: 50px;
}

.form-group-comentarios {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.form-group-comentarios textarea {

    margin-top: 15px;
    width: 90%;
    border-radius: 4px;
    margin-right: 12px;
    margin-bottom: 20px;
    resize: none;
}




.form-group-checkbox {

    display: flex;
    align-items: start;
    flex-direction: row;



}


.form-group-checkbox label {

    margin-top: 15px;

    width: 100%;
    margin-left: 15px;

}


.form-group-checkbox input {

    margin-top: 18px;
    flex: 1;
    margin-right: 30px;
}


.boton {

    background-color: #007bff;
    margin-top: 30px;
    margin-left: 10px;
    border-radius: 8px;
    font-family: Arial, Helvetica, sans-serif;
    width: 92%;
    font-weight: bold;
    height: 40px;
    cursor: pointer;
}

.boton:hover {
    background-color: rgb(231, 255, 11);
    transform: scale(102%);

}


/* estilo footer */
footer {
    width: 100%;
    height: 100px;
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: black;
    font-weight: bold;
}

footer p {
    color: white;

    padding-top: 45px;
    border-top: 2px solid rgb(239, 0, 0);
}
</style>

<body>
   <header>
   <div class="logo"> <a href="http://sanmen.es"> Web Humberto</div>
    <nav>
    <a href="index.php"><i class="fa fa-solid fa-house"></i> Home</a>
            <a href="about.php"><i class="fa-solid fa-rocket"></i> About</a>
            <a href="contacto.php"><i class="fa-regular fa-id-badge"></i> Contact</a>

          

          
 
    </nav>
   </header>
<main>
<h1>ABOUT</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo porro perspiciatis illum eos laborum consequatur natus magnam rerum modi. Aliquid est, quisquam eos aliquam cupiditate iusto vitae beatae eum similique esse? Cum totam, ullam sunt ratione voluptatum, assumenda reiciendis impedit nulla dolores voluptatem suscipit porro natus quae, delectus repellat rerum?</p>
</main>



  <footer>
    <p>Footer web</p>
  </footer>

  </body>
</html>
