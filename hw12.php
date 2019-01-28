<?php
echo "Data Received(Unsorted)</br >";
foreach($_GET as $key => $value)
{
   echo 'Key = ' . $key;
   echo ' Value= ' . $value . '</br >';
}
ksort($_GET);
echo "</br >Data Received(sorted by name)</br >";
foreach($_GET as $key => $value)
{
   echo 'Key = ' . $key;
   echo ' Value= ' . $value . '</br>';
}
asort($_GET);
echo "</br >Data Received(sorted by value)</br >";
foreach($_GET as $key => $value)
{
   echo 'Key = ' . $key;
   echo ' Value= ' . $value . '</br >';
}
?>
