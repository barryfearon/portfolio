<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="GreySnow Group, a 100% Non-Profit Enterprise. We offer premium Casino, Poker & Sports Igaming products for Tribes, B2B & B2C, both Online and Retail." />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="manifest" href="/manifest.json" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

  <title>GreySnow Group</title>
  <script src="https://kit.fontawesome.com/6790bbcacc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="/main.css" rel="stylesheet">
</head>

<body class="webinar">
  <?php
  $showAlert = false;
  if ($_POST["preferred-date"] != "") {
    $showAlert = true;
    $messageBody = "<!DOCTYPE html>
    <html>
      <head>
        <meta name=\"viewport\" content=\"width=device-width\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>Webinar Interest Registration</title>
        <style>
    @media only screen and (max-width: 620px) {
      table[class=\"body\"] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
    
      table[class=\"body\"] p,
    table[class=\"body\"] ul,
    table[class=\"body\"] ol,
    table[class=\"body\"] td,
    table[class=\"body\"] span,
    table[class=\"body\"] a {
        font-size: 16px !important;
      }
    
      table[class=\"body\"] .wrapper,
    table[class=\"body\"] .article {
        padding: 10px !important;
      }
    
      table[class=\"body\"] .content {
        padding: 0 !important;
      }
    
      table[class=\"body\"] .container {
        padding: 0 !important;
        width: 100% !important;
      }
    
      table[class=\"body\"] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
    
      table[class=\"body\"] .btn table {
        width: 100% !important;
      }
    
      table[class=\"body\"] .btn a {
        width: 100% !important;
      }
    
      table[class=\"body\"] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }
    @media all {
      .ExternalClass {
        width: 100%;
      }
    
      .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
      }
    
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
    
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
    
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
      </head>
      <body class=\"\" style=\"background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
        <span class=\"preheader\" style=\"color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;\">Interest registered from " . $_POST["first-name"] . " " . $_POST["last-name"] . ".</span>
        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin-bottom: 1rem; background-color: #f6f6f6; width: 100%;\" width=\"100%\" bgcolor=\"#f6f6f6\">
          <tr>
            <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
            <td class=\"container\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;\" width=\"580\" valign=\"top\">
              <div class=\"content\" style=\"box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;\">
                <!-- START CENTERED WHITE CONTAINER -->
                <table role=\"presentation\" class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin-bottom: 1rem; background: #ffffff; border-radius: 3px; width: 100%;\" width=\"100%\">
                  <!-- START MAIN CONTENT AREA -->
                  <tr>
                    <td class=\"wrapper\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;\" valign=\"top\">
                      <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 1rem;\" width=\"100%\">
                        <tr>
                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">
                            <p style=\"font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;\">Hi,</p>
                            <p style=\"font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;\">Someone has registered interest in your webinar:</p>
                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 1rem;\" width=\"100%\">
                              <tbody>
                                <tr>
                                  <td align=\"left\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">
                                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 1rem;\" width=\"100%\">
                                      <tbody>
                                        <tr>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">Name:</td>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">" . $_POST["first-name"] . " " . $_POST["last-name"] . "</td>
                                        </tr>
                                        <tr>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">Organisation:</td>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">" . $_POST["organisation"] . "</td>
                                        </tr>
                                        <tr>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">Email:</td>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">" . $_POST["email"] . "</td>
                                        </tr>
                                        <tr>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">Preferred date:</td>
                                          <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">" . $_POST["preferred-date"] . "</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <p style=\"font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;\">All the best!</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
    
                  <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->
    
                <!-- START FOOTER -->
                <div class=\"footer\" style=\"clear: both; margin-top: 10px; text-align: center; width: 100%;\">
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 1rem;\" width=\"100%\">
                    <tr>
                      <td class=\"content-block\" style=\"font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                        <span class=\"apple-link\" style=\"color: #999999; font-size: 12px; text-align: center;\">Ioway Internet Gaming Enterprises Ltd, 2nd Floor St
                          Mary’s Court, 20 Hill Street, Douglas, Isle of Man IM1
                          1EU</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=\"content-block powered-by\" style=\"font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                        Powered by <a href=\"http://htmlemail.io\" style=\"color: #999999; font-size: 12px; text-align: center; text-decoration: none;\">HTMLemail</a>.
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- END FOOTER -->
              </div>
            </td>
            <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>
    ";

    mail("nmcdonald@iowaycorp.com", "Interest in Webinar Submitted", $messageBody, "from: <noreply@greysnowgroup.com>\r\nMIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8");
  }
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="greysnow-group-nav">
    <a class="navbar-brand" href="#front-page">GreySnow Group</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarGSGContent" aria-controls="navbarGSGContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarGSGContent">
      <ul class="navbar-nav ml-auto"></ul>
    </div>
  </nav>
  <div class="container-fluid bg-primary px-0 mt-4 pt-4">
    <img src="/images/gsg-2020-webinar-large-1.jpg" class="img-fluid w-100" alt="gsg-2020-webinar" />

    <?php if ($showAlert) { ?>
      <div class="alert alert-success mb-2 mx-0 text-center" role="alert">
        Thank you, your interest has been registered successfully.
      </div>
    <?php } ?>

    <div class="row justify-content-center">
      <div class="col-8">
        <form class="bg-primary text-white p-3 p-sm-4 needs-validation" action="/webinar/index.php" method="post" novalidate>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputfirstname4">First Name</label>
              <input required type="text" class="form-control" id="inputfirstname4" name="first-name" />
              <div class="invalid-feedback">
                Please enter your first name.
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputlastname4">Last Name</label>
              <input required type="text" class="form-control" id="inputlastname4" name="last-name" />
              <div class="invalid-feedback">
                Please enter your last name.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputOrganisation">Organisation</label>
            <input type="text" class="form-control" id="inputOrganisation" placeholder="" name="organisation" />
          </div>
          <div class="form-group">
            <label for="inputOrganisation">E-mail</label>
            <input required type="email" class="form-control" id="inputEmail" placeholder="" name="email" />
            <div class="invalid-feedback">
              Please enter your e-mail address.
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col-md-12">
              <label for="FormSelectDate">Date</label>
              <select required class="form-control" id="FormSelectDate" name="preferred-date">
                <option selected disabled value="">Choose...</option>
                <option value="September 2nd at 13:00 EST">September 2nd at 13:00 EST</option>
                <option value="September 3rd at 13:00 EST">September 3rd at 13:00 EST</option>
              </select>
              <div class="invalid-feedback">
                Please select a preferred date.
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-block btn-secondary">
            Sign Up
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="/runtime.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="/npm.lazysizes.bundle.js"></script>
  <script src="/npm.webpack.bundle.js"></script>
  <script src="/npm.animate.css.bundle.js"></script>
  <script src="/main.bundle.js"></script>

  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>