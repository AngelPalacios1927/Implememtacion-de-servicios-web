



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/DiseñoValidacion.css">

    <title>Document</title>
</head>
<body>
    <div class="popup center">
        <div class="icon">
          <i class="fa fa-times"></i>
        </div>
        <div class="title">
          Error
        </div>
        <div class="description">
          Verfique el usuario y contraseña
        </div>
        <div class="dismiss-btn">
          <form action="Login.php" method="POST">
          <button id="dismiss-popup-btn">
            Regresar
          </button>

          </form>
          
        </div>
      </div>
      <div class="bottom-right">
        </button>
      </div>
      
      <script>
        document.getElementsByClassName("popup")[0].classList.add("active");
        document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
        document.getElementById("open-popup-btn").style.display = "block";
        document.getElementsByClassName("popup")[0].classList.remove("active");
        });
      </script>
    
</body>
</html>
