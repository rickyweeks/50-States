<?php
include 'header.php';
?>


<div class="table-responsive">
<table class="table table-hover table-striped table-bordered">
    <tr>
<?php


$counter = 1;
foreach($states as $state) {
// New Mexico = $state
// New_Mexico
$stateunderscore = preg_replace('/\s+/', '_', $state);
// new_mexico
$stateunderscorelowercase = strtolower($stateunderscore);


echo '<td class="text-center"><img src="https://jaxcode.com/stateflags/' . $stateunderscore . '.svg.png" alt="50 state maps" class="img-responsive"><br>
<a href="pages/'.$stateunderscorelowercase.'.html">'.$state.'</a></td>';

if($counter == 5) {
    echo '</tr><tr>';
    $counter = 0;
}
$counter++;
}


?>
</tr>
</table>
</div>


<?php
include 'footer.php';
?>

