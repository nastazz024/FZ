<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_tournament}}".
 *
 * @property int $id
 * @property string $name
 * @property string $date_start
 * @property string $date_end
 * @property string|null $description
 * @property string $classes
 *
 * //* @property Draws[] $tDraws
 */
class Tournament extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t_tournament}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date_start', 'date_end', 'classes'], 'required'],
            [['date_start', 'date_end'], 'safe'],
            [['date_start', 'date_end'], 'validateDate'],
            [['description', 'classes'], 'string'],
            [['name'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'date_start' => 'Начало',
            'date_end' => 'Окончание',
            'description' => 'Описание',
            'classes' => 'Категории',
        ];
    }

    /**
     * Gets query for [[Draws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDraws()
    {
        return $this->hasMany(Draws::className(), ['tournament_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TournamentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TournamentQuery(get_called_class());
    }

    /**
     * @param $class
     * @return Draws[]
     */
    public function getDrawsByClass($class)
    {
        return Draws::findAll([
            'tournament_id' => $this->id,
            'class' => $class,
        ]);
    }

    /**
     * @param $class
     * @return Draws
     */
    public function getOlympDrawByClass($class)
    {
        return Draws::findOne([
            'tournament_id' => $this->id,
            'class' => $class,
            'type' => 'olymp',
        ]);
    }

    public function validateDate($attribute, $params, $validator)
    {
        $date = $this->{$attribute};

        if (!strtotime($date)) {
            $this->addError($attribute, 'Невалидная дата');
        }
    }

    /**
     * @param $from
     * @param $to
     * @return Tournament[]
     */
    public static function getCompletedByDates($from, $to)
    {
        $to = @strtotime($to);
        if (!$to) {
            $to = strtotime('now');
        }
        $to = date('Y-m-d', $to);

        $from = @strtotime($from);
        if (!$from) {
            $from = strtotime('1- month');
        }
        $from = date('Y-m-d', $from);

        $q = self::find()
            ->where(['>=', 'date_start', $from])
            ->andWhere(['<=', 'date_start', $to])
            ->joinWith([
                'draws' => function (\yii\db\ActiveQuery $query) {
                    $query->andWhere('completed=1');
                },
            ])
            ->orderBy('date_start');

//        echo $sql = $q->createCommand()->rawSql;

        return $q->all();
    }
}
