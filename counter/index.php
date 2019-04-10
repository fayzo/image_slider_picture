<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>counter user people or population</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
</head>
<style>
#counts .counter{
    font-size: 66px;
    color: #555;
    display: inline-block;
    font-weight: 400;
    text-align: center;

     font-family: 'Open Sans', sans-serif;
     -webkit-transition: all 400ms ease;
     -moz-transition: all 400ms ease;
     -o-transition: all 400ms ease;
     transition: all 400ms ease;
     text-align: center;
}
  @media only screen and (max-width: 700px) {
       #counts > .counter {
            font-size: 20px;
            display: inline-block;
        }

    }
    @media only screen and (max-width: 460px) {
        #counts > .counter {
            font-size: 18px;
            display: inline-block;
        }
    }
</style>
<body>
    <div id="counts">
        <span class="counter" style="display: inline-block; width: 32%">52,147</span>
        <span class="counter" style="display: inline-block; width: 32%">1.9583</span>
        <span class="counter" style="display: inline-block; width: 32%">12345</span>
    </div>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> -->
    <script src="js/jquery.production.min.js"></script>
    <script src="js/jquery1-12-4.min.js"></script>
    <script src="js/waypoints2-0-3.min.js"></script>
    <script src="js/counterup1-0-0.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
      $('.counter').counterUp({
        delay: 10,
        time: 6000,
        offset: 70,
        beginAt: 10,
       });
    });
    </script>
</body>
</html>