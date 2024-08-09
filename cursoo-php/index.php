
<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#inicializar una seccion de curl
$ch= curl_init(API_URL);
// inidicar queremos recibir el resultado de la peticiones y no motras el resultado en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#EJECUTAR LA PETICION Y GAURDAMOS EL RSULTADO 
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

//var_dump($data);

?>

<head>
<meta charset ="UTF-8" />
<TItle>La proxima pelicula de Marvel</TItle>
<meta name="description" content="La proxima pelicula de Marvel">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
    <section>
 <img src="<?= $data ["poster_url"];?>" width= "300" alt="Poster de <?= $data["title"];?> "
 style="border-radius: 16px;"/>
    </section>
<hgroup>
    <h2><?= $data["title"];?> se estrena en <?= $data["days_until"];?> dias </h2>
    <p>Fecha de estreno: <?= $data["release_date"];?></p>
    <p>La siguiente es : <?= $data["following_production"]["title"];?></p>
</hgroup>
</main>


 <style>
:root {

    color-scheme: light dark;

}
body {
 display: grid;
 place-content: center;

}
section {

    display: flex;
    justify-content: center;
    text-align: center;
}

hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center; 
}

 </style>