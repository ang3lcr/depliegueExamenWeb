<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title><?php echo "Inicio"?></title>
</head>


<body style="background-color: <?php echo $_GET["color"]; ?>">
    <div class="main-container">
        <ul class="paints-container">
            <li class="paint-1 paint">
                <div class="image-container">
                    <img src="https://editorialtelevisa.brightspotcdn.com/dims4/default/3df0276/2147483647/strip/true/crop/1156x650+22+0/resize/1440x810!/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.amazonaws.com%2Fbrightspot%2Fwp-content%2Fuploads%2F2018%2F05%2FEl-secreto-mejor-guardado-de-La-noche-estrellada-de-Van-Gogh.jpg" alt="">
                </div>
                <div class="content">
                    <p class="title">
                        La noche etrellada.
                    </p>
                    <p class="author">
                        Vincent Van Gogh.
                    </p>
                </div>
            </li>
            <li class="paint-2 paint">
                <div class="image-container">
                    <img src="https://plumasatomicas.com/wp-content/uploads/2020/04/Ultima-Cena-Jueves-Santo-Cuadro-Da-Vinci-1200x720.jpg" alt="">
                </div>
                <div class="content">
                    <p class="title">
                        La ultima cena.
                    </p>
                    <p class="author">
                        Leonardo Da Vinci
                    </p>
                </div>
            </li>
            <li class="paint-3 paint">
                <div class="image-container">
                    <img src="https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvbnljLTItMjY4LmpwZyIsInJlc2l6ZSw4MDAiXX0.oHuiNXMeCqBT1fa5I9ddteiMiKkLQ_e1lyF6l8uUsWo.jpg" alt="">
                </div>
                <div class="content">
                    <p class="title">
                        La peristencia de la memoria.
                    </p>
                    <p class="author">
                        Salvador Dali
                    </p>
                </div>
            </li>
            <li class="paint-4 paint">
                <div class="image-container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/La_familia_de_Carlos_IV%2C_por_Francisco_de_Goya.jpg" alt="">
                </div>
                <div class="content">
                    <p class="title">
                        La familia de Carlos IV.
                    </p>
                    <p class="author">
                        Francisco de Goya.
                    </p>
                </div>
            </li>
            <li class="paint-5 paint">
                <div class="image-container">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/vincent-van-gogh-irises-oil-on-canvas-71-1-x-93-cm-the-j-news-photo-1658240954.jpg?crop=1xw:1xh;center,top&resize=980:*" alt="">
                </div>
                <div class="content">
                    <p class="title">
                        Lirios
                    </p>
                    <p class="author">
                        Vincent Van Gogh
                    </p>
                </div>
            </li>
        </ul>
        
      
        <div class="colors-links">
            <a class="changer" onclick="changeColor('red')">Cambiar a Rojo</a>
            <a class="changer" onclick="changeColor('white')">Cambiar a Blanco</a>
            <a class="changer" onclick="changeColor('blue')">Cambiar a Azul</a>
            <a class="changer" onclick="changeColor('green')">Cambiar a Verde</a>
            <a class="changer" onclick="changeColor('brown')">Cambiar a Cafe</a>
            <button class="counter">Obras diponibles</button>
        </div>

  
    </div>   
        <div class="time-container">
            <p style="text-align: center">
            <?php 
            date_default_timezone_set('America/Mexico_City');
            $currentTime = date('m/d/Y h:i:s:a', time());
                echo $currentTime;
                ?>
            </p>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        function changeColor(color) {
        let url = new URL(window.location.href);
        url.searchParams.set("color", color);
        window.location.href = url.href;
  }
    </script>

</body>
</html>