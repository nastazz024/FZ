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
<table>
    <?php
    foreach ($model->getEditFields() as $params) {
        ?>
        <tr>
            <td><?= $params['title'] ?? '' ?></td>
            <td>
                <?php
                $val = htmlspecialchars($item->{$params['field']});
                switch ($params['type'] ?? '') {
                    case 'list':
                        echo "<select name='{$params['field']}'>";
//                    echo "<option value=''>";
                        foreach ($model->getSearchListOptions($params) as $id => $t) {
                            $s = $val == $id ? 'selected' : '';
                            echo "<option value='{$id}' {$s}>{$t}";
                        }
                        echo "</select>";
                        break;

                    case 'text':
                        echo "<textarea name='{$params['field']}'>{$val}</textarea>";
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
                        echo "<input type='text' name='{$params['field']}' value='{$val}'/>";
                }
                ?>
            </td>
        </tr>
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
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <table class="small">
                        <?php
                        foreach ($countList as $cntKey => $cntName) {
                            $cnt = $counts[$cntKey] ?? 0;
                            echo "<tr>
<td>{$cntName}</td>
<td><input name='counts[{$cntKey}]' value='{$cnt}'/></td>
</tr>
";
                        } ?>
                    </table>
                </td>
            </tr>
            <?php
        }
    }
    ?>

</table>
<br/>
<br/>
<input type="submit" value="Сохранить"/>
<br/>
<input type="reset" value="Отменить"/>
<?php
if ($item->id) { ?>

    <br/>
    <br/>
    <br/>
    <input type="button" data-action="del" class="remove" value="Удалить"/>
    <?php
} ?>
<?php
\yii\widgets\ActiveForm::end() ?>
<br/>
<br/>
