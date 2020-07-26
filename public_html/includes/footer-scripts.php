<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!--Popper CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Bootstrap CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<? 
/*
 * LOCAL FALLBACK incase the CDN's are down
 * ensure you have a local copy of Jquery and Boostrap on your sever 
 * and replace the path's below accordingly
*/
?>
<!-- JQuery Local fallback -->
<script>window.jQuery || document.write('<script src=\"/YOUR_PATH/TO/jquery/jquery.min.js\"><\/script>')</script>
<!--Bootstrap Local Fallback -->
<script>
    //Bootstrap Local Fallback
    if(typeof($.fn.modal) === 'undefined'){
      console.log("Error Loading Bootstrap CDN (JS): Loaded Local instead")
      document.write('<script src=\"/YOUR_PATH/TO/bootstrap/js/bootstrap.bundle.min.js\"><\/script>');
      $("head").append('<link rel="stylesheet" href="/YOUR_PATH/TO/bootstrap/css/bootstrap.min.css">');

    }
</script>