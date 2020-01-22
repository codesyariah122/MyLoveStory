
<footer class="footer"  data-background-color="black">
    <div class=" container ">
        <nav>
            <ul>
                <li>
                    <a href="<?=base_url()?>">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">It's Work team</a>.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="<?=base_url()?>assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=base_url()?>assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?=base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?=base_url()?>assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>

<script src="<?=base_url()?>assets/js/carousel.js" type="text/javascript"></script>

<script>
  $(document).ready(function(){



    // Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

try{
  fbq('init', '111649226022273');
  fbq('track', "PageView");

}catch(err) {
  console.log('Facebook Track Error:', err);
}

  });
</script>
<noscript>
  <img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
/>

</noscript>

<script>

    $(document).ready(function(){
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload(){

        if($('.section-download').length != 0){
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            },1000);
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map" type="text/javascript"></script>

<script>
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>

<script>
var i = 0;
var txt = 'I Will Always Love You iim marlina.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("iimmarlina").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

</body>
</html>
