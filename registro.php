
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


	<section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
                  <br>

                  <form method="post" action="registro-post.php" name="signup-form" autocomplete="off">
									    <div class="form-outline form-white mb-4">
									        <label>Username</label>
									        <input type="text" name="username" pattern="[a-zA-Z0-9]+" class="form-control form-control-lg" required />
									    </div>

									    <div class="form-outline form-white mb-4">
									        <label>Email</label>
									        <input type="email" name="correo" class="form-control form-control-lg" required />
									    </div>

									    <div class="form-outline form-white mb-4">
									        <label>Password</label>
									        <input type="password" name="clave" class="form-control form-control-lg" required />
									    </div>

									    <button type="submit" name="register" value="register"class="btn btn-success">Registrarse</button>
									</form>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	
	
</body>
</html>




