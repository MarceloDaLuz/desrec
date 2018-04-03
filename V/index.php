<!DOCTYPE html>
<html>

<?php include("head.php");?>

<body>
    <header>
        <!--
            <div>
                flexbox que vai ser usada para logo, caso não fique bom será usado brand
            </div>
        -->
        <?php include("navbar.php");?>
    </header>
    <?php include("carousel.php");?>
    <div class="container">
        <main class="main-content">
            <?php include("card.php");?>
            <?php include("card.php");?>
        </main>
        <?php include("footer.php");?>
    </div>
    
    

    <!-- <script>
        $('.carousel').carousel()
    </script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>