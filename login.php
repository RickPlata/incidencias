<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100" style="padding: 100px">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./img/esime_original.png"
                alt="ESCUDO ESIME" class="img-fluid" style="border-radius: 1rem 0 0 1rem; margin-top: 45px; margin-left: 25px" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="./src/functions/log_session.php">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="user" name="user" class="form-control form-control-lg" required/>
                    <label class="form-label" for="user">Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="pass" name="pass" class="form-control form-control-lg" required/>
                    <label class="form-label" for="pass">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>