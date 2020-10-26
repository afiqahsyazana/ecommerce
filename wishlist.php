<html>
<?php
//include php header file
include('header.php');
?>

<?php
/*  include top sale section */
count($product->getData('wishlist')) ? include('template/_wishilist_template.php') :  include('template/notFound/_wishlist_notFound.php');
/*  include top sale section */


/*  include top sale section */
include('template/_top-sale.php');
/*  include top sale section */

?>
<?php
// include footer.php file
include('footer.php');
?>

</html>