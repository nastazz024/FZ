<?php
/** @var \app\components\ManageableIntegface $model */

if (!$model) {
    return;
}

$columns = $model->getShowFields();

?>
<table>
    <tr>
        <?php
        $relModels = [];
foreach ($columns as $ind => $params) {
    if ($params['model'] ?? false) {
        $relModels[$params['field']] = $model->getSearchListOptions($params);
    }

    if (!($params['title'] ?? false)) {
        echo "<th></th>";
        continue;
    }
    echo "<th>{$params['title']}</th>";
}
 echo "<th>
<a href='/admin/cat-edit/?m={$m}'>new</a>
</th>";
?>
        </tr>
<?php
 $params = [];
 foreach ($model->getSearchFields() as $key => $p) {
     $params[$key] = \yii::$app->get('request')->get($key);
 }
    $list = $model->query($params);


 foreach ($list as $item) {
     ?>
 <tr>
 <?php
 foreach ($columns as $p) {
     $class = $m . ' ' . ($p['field'] ?? '');
     switch (true) {
         case ($p['field'] ?? false) && (($p['type'] ?? false) == 'image'):
             $f = $item->{$p['field']};
             echo "<td class='{$class} col-md-3'><img src='/img/{$f}' style='width: fit-content'/></td>";
             break;

         case ($p['field'] ?? false) && ($p['model'] ?? false):
             $f = $item->{$p['field']};
             $f =  $relModels[$p['field']][$f];
             echo "<td class='{$class}'>{$f}</td>";
             break;

         case $p['field'] ?? false:
             $f = $item->{$p['field']};
             echo "<td class='{$class}'>{$f}</td>";
             break;
     }

 }
  echo "<td>
<a href='/admin/cat-edit/?m={$m}&id={$item->id}'>edit</a>
<!--<a href='/admin/cat-edit/?m={$m}&id={$item->id}&act=del' data-del-confim='true'>delete</a>-->
</td>";

 ?>
 </tr>
    <?php
 }


