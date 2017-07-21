<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>


<div  style="padding: 5px;" class="row">
<?php

foreach($model as $rec){
	$image=$rec->product_img;
	$price=$rec->product_price;

echo "<div class='col-lg-4' style='padding: 50px 08px 0px 0px;'>

<div class='panel panel-success'>

<div style='background:#ccf4ff;' class='panel-heading'>
$rec->product_title
</div>

<div class='panel-body'>
<img src='http://localhost/basic/web/Images/$image'/ height='200' width='95%'  >
</div>

<div  style='text-align:center; ' class='panel-footer'>
Price:&nbsp$price PKR
</div>
<div  style='text-align:center' class='panel-footer'>
<div  class='btn btn-warning'>Add to cart</div>
</div>


</div>
</div>

";
}
?>
</div>

