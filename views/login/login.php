<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> | CF-GIS </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" href="./images/cacao-logo.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content" class="d-flex align-items-center justify-content-center vh-100">
        <main>
          <div class="container col-lg-8">
            <div class="card border-0 rounded-lg">
              <div>
                <h3 class="text-center font-weight-light my-4 text-uppercase">
                  cacao farmers & growers information system
                </h3>
              </div>
              <hr>

              <!-- Global error -->
              <div class="text-danger text-center">
                <?= $this->flash('error') ?>
              </div>

              <div class="card-body">
                <form action="?route=auth-login" method="post">
                  <!-- Email -->
                  <div class="form-floating mb-4">
                    <input type="email" id="email" name="email" value="<?= $this->flash('old_email') ?? '' ?>" class="form-control" placeholder="User Name" />
                    <label for="email">User Name</label>
                    <span class="text-danger"><?= $this->flash('error_username') ?></span>
                  </div>

                  <!-- Password -->
                  <div class="form-floating mb-4">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" />
                    <label for="inputPassword">Password</label>
                    <span class="text-danger"><?= $this->flash('error_password') ?></span>
                  </div>

                  <!-- Submit -->
                  <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit"
                      class="btn btn-lg btn-warning w-100 text-white text-uppercase fs-6 fw-semibold">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>