<?php
/** @var \app\components\ManageableIntegface $model */

/** @var \yii\db\ActiveRecord $item */

if (!$model) {
    return;
}

if (!$item) {
    return;
}

$form = \yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])
?>

<input type="hidden" name="act" value=""/>
<input type="hidden" name="id" value="<?= $item->id ?>"/>
<input type="hidden" name="m" value="<?= $m ?>"/>
<input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
       value="<?= Yii::$app->request->csrfToken ?>"/>

    <?php
    foreach ($model->getEditFields() as $params) {
        ?>
        <div class="form-group">
            <label for="<?= $params['field'] ?>"><?= $params['title'] ?? '' ?></label>
                <?php
                $val = htmlspecialchars($item->{$params['field']});
                switch ($params['type'] ?? '') {
                    case 'list':
                        echo "<select id='{$params['field']}' name='{$params['field']}' class='form-control'>";
//                    echo "<option value=''>";
                        foreach ($model->getSearchListOptions($params) as $id => $t) {
                            $s = $val == $id ? 'selected' : '';
                            echo "<option value='{$id}' {$s}>{$t}";
                        }
                        echo "</select>";
                        break;

                    case 'text':
                        echo "<textarea id='{$params['field']}' name='{$params['field']}' class='form-control'>{$val}</textarea>";
                        break;

                    case 'image':
                        if ($item->id) {
                            echo "<img src='/img/{$val}'/></br>";
                        }
                        echo $form->field(new \app\models\UploadForm(), 'imageFile', [
                            'template' => '{input}',
                        ])->fileInput();
                        break;

                    default:
                        echo "<input id='{$params['field']}' type='text' name='{$params['field']}' value='{$val}' class='form-control'/>";
                }
                ?>
        </div>
        <?php
    }

    if ($cntOpt = $model->getCountOptions()) {
        $countList = [];
        try {
            $countList = $model->getSearchListOptions($cntOpt['list']);
        } catch (\Exception $e) {
        }

        if ($countList) {
            $counts = $model->getCounts($cntOpt, $item->id);
//            print_r($counts); exit;
            ?>
<div class="form-group">
    Наличие
    <br/>

    <table class="small">
                        <?php
                        foreach ($countList as $cntKey => $cntName) {
                            $cnt = $counts[$cntKey] ?? 0;
                            echo "<tr>
<td>{$cntName}</td>
<td><input name='counts[{$cntKey}]' value='{$cnt}' style='width: 100px;'/></td>
</tr>
";
                        } ?>
                    </table>
</div>
            <?php
        }
    }
    ?>


<br/>
<br/>
<input type="submit" value="Сохранить" class="btn btn-primary"/>

<input type="reset" value="Сбросить" class="btn btn-info"/>
<?php
if ($item->id) { ?>
    <br/>
    <br/>
    <br/>
    <input type="button" data-action="del" class="btn btn-danger" value="Удалить"/>
    <?php
} ?>
<?php
\yii\widgets\ActiveForm::end() ?>
<br/>
<br/>
