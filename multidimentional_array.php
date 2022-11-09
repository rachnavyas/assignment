<?php
$products = array( array( 'shampoo', 'soap', 100,200,86.5 ),array( 'oil', 'seeds', 223,850,69.6),array( 'apple', 'banana', 40,50,90 ) );
for ( $row = 0; $row < 3; $row++ )
{
 for ( $column = 0; $column < 4; $column++ )
 {
  echo '|'.$products[$row][$column];
 }
 echo '|<br />';
}
?>