<!DOCTYPE html>
<html lang="es">

<head>
    <title>Diario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
            if (isset($_POST["categoria"])) {
                header("Refresh: 0");
            }
            if (!isset($_COOKIE["categoria"])) {
                echo
                    '
                    <div class="col-md-12">
                        <div class="row">
                        <h2>
                            Seleccione un tipo de noticia preferido.
                        </h2>
                        </div>
                        <div class="row">
                            <form action="main.php" method="POST" name="categorias">
                            <input type="radio" id="politica" name="categoria" value="politica">
                            <label for="politica">Politica</label><br>
                            <input type="radio" id="deportiva" name="categoria" value="deportiva">
                            <label for="deportiva">Deportiva</label><br>
                            <input type="radio" id="economica" name="categoria" value="economica">
                            <label for="economica">Economica</label><br>  
                            <input type="submit" name="Submit" value="Guardar">
                            </form>
                        </div>
                    </div>
                    ';
                $categoria = $_POST["categoria"];
                setcookie("categoria", $categoria, time() + (60 * 60 * 24 * 90));
            } else {
                echo
                    '
                    <div class="col-md-12">
                    <p>
                        <a href="delete.php">Eliminar cookie</a>
                    </p>
                        <div class="row" style="margin: auto; max-width: 50%;">
                    ';
                $categoria = $_COOKIE["categoria"];
                switch( $categoria ) {
                    case "politica":
                        echo '
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">1 de Julio de 2020</p>
                            <h1>La tensión entre la Casa Rosada y el gobierno bonaerense por Sergio Berni le agregó dramatismo a la la cuarentena.</h1>
                            <img src="politica.jpg" alt="ministro"/>
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">Sergio Berni, ayer por la mañana, en Puente La Noria (Adriàn Escandar)</p>
                            <p>“Hemos tenido épocas más difíciles”, desdramatizó Sergio Berni ante uno de sus colaboradores mientras se subía de nuevo al helicóptero en La Plata para volver a su oficina de Puente 12, ya entrada la noche de ayer.</p>

                            <p>El ministro de Seguridad bonaerense había estado buena parte de la tarde en la capital bonaerense con el teléfono apagado: lo hace, según sus asesores, cuando “arma quilombo”. Berni se las ingenia con frecuencia para no pasar desapercibido, pero su irrupción a los gritos de ayer por la mañana en el retén policial de Puente La Noria, en uno de los accesos de la zona sur a la Ciudad, y su afrenta pública a la ministra Sabina Frederic por el operativo en el primer día de la cuarentena estricta colmó la paciencia de la Casa Rosada, que dejó el tema en manos del gobernador Axel Kicillof.</p>
                            
                            <p>Cuando Horacio Rodríguez Larreta y su equipo vieron por televisión las imágenes insólitas de Berni rodeado por cámaras de televisión, a los gritos y furioso con el operativo policial desplegado por las fuerzas de seguridad nacionales por las largas filas de vehículos, ordenaron automáticamente a los funcionarios porteños que hicieran silencio y dejaran el escenario mediático para las autoridades de Nación y Provincia.</p>
                            
                            <p>Las teorías de los funcionarios más conspirativos señalan que el show mediático del ministro de Seguridad bonaerense, aplaudido, según su entorno, por la mayoría de los conductores que esperaban desde hacía un buen rato en uno de los accesos a la ciudad, se “llevó la marca” en el primer día del confinamiento más estricto, en momentos en que la sociedad muestra señales evidentes de cansancio tras más de cien días de aislamiento.</p>
                            
                            <p>Pero lo cierto es que la escena de ayer por la mañana agrega una cuota de zozobra a la estrategia desplegada en torno a la continuidad de la cuarentena, a los operativos en la calle, a la autoridad presidencial y a la decisión que la administración porteña deberá tomar en poco más de quince días sobre la coordinación con la Provincia.</p>
                        ';
                    break;
                    case "deportiva":
                        echo '
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">1 de Julio de 2020</p>
                            <h1>Histórico: el Real Madrid anunció que tendrá su equipo de fútbol femenino.</h1>
                            <img src="deportiva.jpg" alt="ministro"/>
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">El Real Madrid era una de las pocas potencias que aún no tenía equipo femenino (Reuters)</p>
                            <p>Tras 118 años de existencia, el Real Madrid cuenta con su primer equipo profesional de mujeres al oficializarse este miércoles la anexión del CD Tacón, que el club blanco pretende convertir en su proyecto Galáctico versión femenino.</p>

                            <p>Es toda una revolución. La institución española, el mejor club del siglo XX según la FIFA, era uno de los pocos entre los grandes del mundo que no tenía aún un equipo profesional femenino.</p>
                            
                            <p>El equipo blanco ha solucionado esta anomalía con la anexión del CD Tacón, un joven club madrileño creado en 2014, que jugó por primera vez esta temporada en la máxima categoría del fútbol femenino español y que se dispone a cambiar de dimensión. Ratificada en una asamblea general extraordinaria por los socios (propietarios del club) en septiembre de 2019, la operación de compra del CD Tacón por 300.000 euros (337.000 dólares) concluirá este 1 de julio, fecha en la que comienza el proyecto galáctico del Real Madrid femenino.</p>
                            
                            <p>"La Real Federación Española de Fútbol nos ha comunicado que dicha documentación es correcta, por lo que la fusión será efectiva cuando se dé por concluida definitivamente la actual temporada de fútbol 2019-20", precisó el club blanco este miércoles en un comunicado, añadiendo que la sección femenina tendrá un equipo sénior, uno juvenil y otro cadete.</p>
                        ';
                    break;
                    case "economica":
                        echo '
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">1 de Julio de 2020</p>
                            <h1>Uno de los grupos de acreedores de la Argentina, cerca de fragmentarse por la reestructuración de la deuda.</h1>
                            <img src="economica.jpg" alt="ministro"/>
                            <p style="font-style: italic; color: darkgrey; font-size: 14px;">El ministro de Economía, Martín Guzmán, avanza con las negociaciones con un grupo de acreedores, mientras el comité Ad Hoc, dicen en su cartera, sigue entorpeciendo las discusiones</p>
                            <p>Uno de los principales grupos de acreedores de Argentina está en riesgo de fragmentarse luego de que al menos tres de sus miembros indicaron que podrían romper filas y aceptar un acuerdo de reestructuración con el país a un valor inferior al propuesto por el grupo, dijeron tres tenedores de bonos.</p>

                            <p>Argentina está intentando llegar a un acuerdo de canje de deuda soberana por cerca de USD 65.000, aunque las negociaciones con algunos acreedores se empantanaron a partir de fines de junio.</p>
                            
                           <p> Los bonistas dijeron a Reuters que el Comité de Acreedores de Argentina (ACC), uno de los tres principales grupos de tenedores de bonos, estaba conmocionado por los anuncios de los fondos estadounidenses Gramercy, Fintech y Oaktree, que señalaron que estaban dispuestos a realizar acuerdos individuales.</p>
                            
                            <p>El ACC ha propuesto un acuerdo en el que los tenedores de bonos recibirían efectivamente 55-56 centavos de dólar por sus valores, pero las señales de que el trío y tal vez uno o dos miembros más podrían aceptar una oferta más baja ha causado una grieta.</p>
                            
                            <p>“Es posible”, dijo uno de los tenedores de bonos familiarizados con las discusiones sobre la posible fractura del grupo. “Estos comités son fluidos y las empresas van y vienen”, señaló la fuente, que pidió, al igual que las otras dos, que su identidad no sea revelada.</p>
                            
                            <p>Gramercy, Fintech y Oaktree, que habían unido fuerzas con ACC a principios de este año, no respondieron de inmediato a las solicitudes de comentarios o no fueron accesibles para comentar si habían tenido contactos separados con Buenos Aires.</p>
                            
                            <p>El ACC deberá resolver el problema en los próximos días ya que las conversaciones con el Gobierno argentino se encuentran en una etapa crucial.</p>
                        ';
                    break;

                }
                echo
                    '
                        </div>
                    </div>
                    ';
            }

            ?>
    </div>
</body>

</html>