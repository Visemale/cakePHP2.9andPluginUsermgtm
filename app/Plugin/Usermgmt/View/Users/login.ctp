<!-- Full Page Intro -->
  <div class="view full-page-intro background-login">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">xxxxxx</h1>

            <hr class="hr-light">

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a class="btn btn-indigo btn-lg">Solicitar Accesos
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form method="post" id="UserLoginForm"  action="<?php echo $this->webroot ?>login" accept-charset="utf-8">
                  <!-- Heading -->

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input id="signin-email" type="text" name="data[User][email]" class="form-control required email" placeholder="Usuario" />
<!--                    <label for="form3">Usuario</label>-->
                  </div>
                  <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input id="signin-password" type="password" name="data[User][password]" class="form-control required" placeholder="Contrase&ntilde;a" />
                    <!--<label for="form2">Contrase&ntilde;a</label>-->
                  </div>

                  <div class="text-center">
                      <input type="submit" class="btn btn-indigo" value="Ingresar" />
                  </div>

                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->