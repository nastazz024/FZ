<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function getName($id)
    {
        return $id . '.' . $this->imageFile->extension;
    }

    public function getDir()
    {
        return \Yii::getAlias('@app/web/img') . '/';
    }

    public function getPath($id)
    {
        return $this->getDir() . $this->getName($id);
    }

    public function upload($id)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs($this->getPath($id));
            return true;
        } else {
            return false;
        }
    }
}
