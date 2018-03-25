<footer id="footer" class="footer">
  <div class="containerr">
    <div class="row">
      <div class="col-md-12">
        <p class="copyright text-center">
          Copyright © 2018
          <a href="#">Sony Photography</a>
        </p>
      </div>
    </div>
</footer>


<!-- Modal for full size images on click-->

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">

  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image">
    <i class="fa fa-remove"></i>
  </span>

  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">

    <img id="img01" class="w3-image">

    <p id="caption" class="w3-opacity w3-large"></p>

  </div>
</div>
<!-- form modal -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="img" style="text-align: center;">
          <img src="http://i.imgur.com/VC7M60K.jpg" alt="Thank you">
        </div>

        <h1 style="font-size: 36px; margin-top: 20px; margin-bottom: 10px; font-weight: 500;
        line-height: 1.1;color: inherit; text-align: center;">Thank You!</h1>

        <p style="font-family: 'Open Sans', sans-serif; text-align: center;font-size: 14px;
        line-height: 1.42857143; color: #333; margin: 0 0 10px; display: block;-webkit-margin-before: 1em; -webkit-margin-after: 1em; -webkit-margin-start: 0px; -webkit-margin-end: 0px;">We have received your message. If your inquiry is urgent, please use the telephone number listed below. Otherwise,
          we will reply by email shortly.

          <br>Talk to you soon,</p>

        <div class="button" style="text-align: center;">

          <button class="btn btn-primary" type="button" id="BUTTON_1" data-dismiss="modal" style="text-align: center;">Close</button>
        </div>
      </div>
    </div>
  </div>

  <a href="javascript:void(0);" id="back-top">
    <i class="fa fa-angle-up fa-3x"></i>
  </a>


  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery-countTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAsPokuuvyb6elcUGwdHzG7Y_5fH7ZkKZU"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    var wow = new WOW({
      boxClass: 'wow', // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset: 120, // distance to the element when triggering the animation (default is 0)
      mobile: false, // trigger animations on mobile devices (default is true)
      live: true // act on asynchronously loaded content (default is true)
    });
    wow.init();
  </script>
  <script src="js/custom.js"></script>

  <script type="text/javascript">
    $(function () {

      $('#contact-form').validate({
        rules: {
          name: {
            required: true,
            minlength: 2
          },
          email: {
            required: true,
            email: true
          },
          message: {
            required: true
          }
        },
        messages: {
          name: {
            required: "Please enter your name",
            minlength: "Your name must consist of at least 2 characters"
          },
          email: {
            required: "Please enter your email"
          },
          message: {
            required: "You have to enter something to send the form",
            minlength: "Not enough characters"
          }
        },
        submitHandler: function (form) {
          $(form).ajaxSubmit({
            type: "POST",
            data: $(form).serialize(),
            url: "process.php",
            success: function () {
              $('#contact-form :input').attr('disabled', 'disabled');
              $('#contact-form').fadeTo("slow", 0.15, function () {
                $(this).find(':input').attr('disabled', 'disabled');
                $(this).find('label').css('cursor', 'default');
                $('#success').fadeIn();
                $("#myModal").modal("show");
              });
            },
            error: function () {
              $('#contact-form').fadeTo("slow", 0.15, function () {
                $('#error').fadeIn();
              });
            }
          });
        }
      });
    });

    // Modal Image Gallery

    function onClick(element) {

      document.getElementById("img01").src = element.src;

      document.getElementById("modal01").style.display = "block";

      var captionText = document.getElementById("caption");

      captionText.innerHTML = element.alt;

    }
  </script>
  </body>

  </html>