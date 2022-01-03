<?php

namespace app\controllers;

use app\models\DrawPlayers;
use app\models\DrawPlayersMatches;
use app\models\Draws;
use app\models\Player;
use app\models\Tournament;
use app\models\TournamentPlayers;
use app\models\TournamentSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;


class TournamentController extends Controller
{

    public function init()
    {
        parent::init();
        $this->request = \yii::$app->request;
        $this->layout = 'admin';
    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'actions' => null, // all
                            'allow' => true,
                            'matchCallback' => function ($rule, $action) {
                                $user = \Yii::$app->getUser()->identity;
                                if (!$user) {
                                    return false;
                                }
                                return $user->is_admin > 0;
                            }
                        ],
                    ],
                ],
//                'verbs' => [
//                    'class' => VerbFilter::className(),
//                    'actions' => [
//                        'delete' => ['POST'],
//                    ],
//                ],
            ]
        );
    }

    /**
     * Lists all Tournament models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TournamentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tournament model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tournament model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tournament();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tournament model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tournament model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tournament model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Tournament the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tournament::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     */
    public function actionPlayers($tid)
    {
        if ($this->request->isPost) {
            switch ($this->request->post('act')) {
                case 'add':
                    $tp = new TournamentPlayers();
                    $tp->tournament_id = $tid;
                    $tp->player_id = $this->request->post('pid');
                    $tp->class = $this->request->post('class');
                    $tp->save();

                    // clear draws
                    $this->clearDraws($tp->tournament_id, $tp->class);
                    break;

                case 'remove':
                    $tp = TournamentPlayers::findOne($this->request->post('id'));
                    // clear draws
                    $this->clearDraws($tp->tournament_id, $tp->class);

                    $tp->delete();
                    break;

                case 'draw-add':
                    $cnt = $this->request->post('cnt');
                    $class = $this->request->post('class');
                    $tPlayers = TournamentPlayers::find()
                        ->where(['tournament_id' => $tid])
                        ->andWhere(['class' => $class])
                        ->all();
                    $tPlayersCnt = count($tPlayers);

                    $perDrawCnt = floor($tPlayersCnt / $cnt);
                    $draws = [];
                    for ($i = 0; $i < (int)$cnt; $i++) {
                        $draw = new Draws();
                        $draw->tournament_id = $tid;
                        $draw->class = $class;
                        if ($perDrawCnt <= 3) {
                            $draw->winners_count = 1;
                        } elseif ($perDrawCnt <= 5) {
                            $draw->winners_count = 2;
                        } else {
                            $draw->winners_count = 3;
                        }
                        $draw->matches_count = 3;
                        $draw->type = 'group';
                        $draw->completed = 0;
                        $draw->save();
                        $draws[] = $draw;
                        for ($j = 0; $j < (int)$perDrawCnt; $j++) {
                            $buf = new DrawPlayers();
                            $buf->draw_id = $draw->id;
                            $ind = mt_rand(0, count($tPlayers) - 1);
                            $buf->player_id = $tPlayers[$ind]->player_id;
                            $buf->save();
                            unset($tPlayers[$ind]);
                            $tPlayers = array_values($tPlayers);
                        }
                    }
                    if (count($tPlayers)) {
                        $ind = 0;
                        while (count($tPlayers)) {
                            $buf = new DrawPlayers();
                            $buf->draw_id = $draws[$ind % count($draws)]->id;
                            $ind = mt_rand(0, count($tPlayers) - 1);
                            $buf->player_id = $tPlayers[$ind]->player_id;
                            $buf->save();
                            unset($tPlayers[$ind]);
                            $tPlayers = array_values($tPlayers);
                            $ind++;
                        }
                    }
                    break;

                case 'draw-add-olymp':
                    $tour = $this->findModel($tid);
                    $class = $this->request->post('class');

                    $draw = new Draws();
                    $draw->tournament_id = $tour->id;
                    $draw->class = $this->request->post('class');
                    $draw->winners_count = 0;
                    $draw->matches_count = 3;
                    $draw->type = 'olymp';
                    $draw->completed = 0;
                    $draw->save();

                    $tPlayers = TournamentPlayers::find()
                        ->where(['tournament_id' => $tid])
                        ->andWhere(['class' => $class])
                        ->all();
                    foreach ($tPlayers as $player) {
                        $buf = new DrawPlayers();
                        $buf->draw_id = $draw->id;
                        $buf->player_id = $player->id;
                        $buf->save();
                    }
                    break;

                case 'draw-remove':
                    $this->clearDraws($tid, $this->request->post('class'));
                    break;
            }
            $this->redirect('/admin/tournaments/players?tid=' . $tid);
            return;
        }


        return $this->render('tour-players', [
            'model' => $this->findModel($tid),
            'players' => Player::find()->orderBy('name')->all(),
            'currentPlayers' => TournamentPlayers::find()
                ->where(['tournament_id' => $tid])
                ->all(),
            'draws' => Draws::find()
                ->where(['tournament_id' => $tid])
                ->orderBy('id')
                ->all(),
        ]);
    }

    /**
     */
    public function actionDraws($tid)
    {
        if ($this->request->isPost) {
            switch ($this->request->post('act')) {
                case 'draw-score-save':
                    $draw = Draws::findOne($this->request->post('did'));
                    if ($draw->completed) {
                        break;
                    }


                    /** @var DrawPlayers[] $players */
                    $players = $draw->getDrawPlayers()->all();
                    $nscores = $this->request->post('nscore');
//                    echo '<pre>';
//                    print_r($nscores);
//                    echo '</pre>';

                    $scores = [];
                    $pass = [];
                    foreach ($players as $pl1) {
                        foreach ($players as $pl2) {
                            if (isset($pass[$pl1->id . '-' . $pl2->id])) {
                                continue;
                            }
                            if (isset($nscores[$pl1->id][$pl2->id])) {
                                $extdraws = $draw->getDrawPlayersMatches($pl1, $pl2);

                                for ($z = 0; $z < $draw->matches_count; $z++) {
                                    if (isset($extdraws[$z])) {
                                        $score = $extdraws[$z];
                                    } else {
                                        $score = new DrawPlayersMatches();
                                        $score->draw_id = $draw->id;
                                    }
                                    if (isset($nscores[$pl1->id][$pl2->id][$z])) {
                                        $score->draw_player1 = $pl1->id;
                                        $score->draw_player2 = $pl2->id;
                                        $score->player1_score = (int)$nscores[$pl1->id][$pl2->id][$z];
                                        if ($score->player1_score < 0) {
                                            $score->player1_score = 0;
                                        }
                                        if ($score->player1_score > 30) {
                                            $score->player1_score = 30;
                                        }

                                        $score->player2_score = (int)($nscores[$pl2->id][$pl1->id][$z] ?? 0);
                                        if ($score->player2_score < 0) {
                                            $score->player2_score = 0;
                                        }
                                        if ($score->player2_score > 30) {
                                            $score->player2_score = 30;
                                        }

                                        if (empty($score->player2_score) && $score->player1_score > 21) {
                                            $score->player2_score = $score->player1_score - 2;
                                        } elseif (empty($score->player1_score) && $score->player2_score > 21) {
                                            $score->player1_score = $score->player2_score - 2;
                                        }


                                        $scores[] = $score;

                                        $pass[$pl1->id . '-' . $pl2->id] = 1;
                                        $pass[$pl2->id . '-' . $pl1->id] = 1;
                                    }
                                }
                            }
                        }
                    }

                    foreach ($scores as $score) {
                        $score->save();
                    }

                case 'create-olymp':
                    $tour = $this->findModel($tid);
                    /** @var Draws[] $draws */
                    $draws = Draws::find()
                        ->where(['tournament_id' => $tid, 'class' => $this->request->post('class')])
                        ->orderBy('id')
                        ->all();

                    $players = [];
                    foreach ($draws as $draw) {
                        foreach ($draw->sortGroupPlayersByScore(true) as $wPl) {
                            $players[] = $wPl['player'];
                        }
                        $draw->completed = 1;
                        $draw->save();
                    }

                    $draw = new Draws();
                    $draw->tournament_id = $tour->id;
                    $draw->class = $this->request->post('class');
                    $draw->winners_count = 0;
                    $draw->matches_count = 3;
                    $draw->type = 'olymp';
                    $draw->completed = 0;
                    $draw->save();

                    foreach ($players as $player) {
                        $buf = new DrawPlayers();
                        $buf->draw_id = $draw->id;
                        $buf->player_id = $player->id;
                        $buf->save();
                    }

                    break;
            }
            $this->redirect('/admin/tournaments/draws?tid=' . $tid);
            return;
        }


        return $this->render('tour-draws', [
            'model' => $this->findModel($tid),
            'draws' => Draws::find()
                ->where(['tournament_id' => $tid, 'type' => 'group'])
                ->orderBy('id')
                ->all(),
        ]);
    }

    /**
     */
    public function actionDrawOlymp($tid, $class)
    {
        $tour = $this->findModel($tid);
        $draw = $tour->getOlympDrawByClass($class);

        if ($this->request->isPost) {
            switch ($this->request->post('act')) {
                case 'set-olymp-score':
                    /** @var DrawPlayers[] $players */
//                    $players = $draw->getDrawPlayers()->all();
                    $nscores = $this->request->post('nscore');

                    $pl1 = DrawPlayers::findOne($this->request->post('dr_pl_id1'));
                    $pl2 = DrawPlayers::findOne($this->request->post('dr_pl_id2'));
                    if (!$pl2 || !$pl1) {
                        break;
                    }

                    $extdraws = $draw->getDrawPlayersMatches($pl1, $pl2);

                    $scores = [];
                    for ($z = 0; $z < $draw->matches_count; $z++) {
                        if (isset($extdraws[$z])) {
                            $score = $extdraws[$z];
                        } else {
                            $score = new DrawPlayersMatches();
                            $score->draw_id = $draw->id;
                        }
                        $score->draw_player1 = $pl1->id;
                        $score->draw_player2 = $pl2->id;
                        $score->player1_score = (int)$nscores[$z][$pl1->id];
                        if ($score->player1_score < 0) {
                            $score->player1_score = 0;
                        }
                        if ($score->player1_score > 30) {
                            $score->player1_score = 30;
                        }

                        $score->player2_score = (int)$nscores[$z][$pl2->id];
                        if ($score->player2_score < 0) {
                            $score->player2_score = 0;
                        }
                        if ($score->player2_score > 30) {
                            $score->player2_score = 30;
                        }

                        if (empty($score->player2_score) && $score->player1_score > 21) {
                            $score->player2_score = $score->player1_score - 2;
                        } elseif (empty($score->player1_score) && $score->player2_score > 21) {
                            $score->player1_score = $score->player2_score - 2;
                        }
                        $scores[] = $score;
                    }
                    foreach ($scores as $score) {
                        $score->save();
                    }

                    $wData = $draw->getOlympWinner();
                    if (!empty($wData['player'])) {
                        $draw->completed = 1;
                        $draw->save();
                    }

                    break;

            }
            $this->redirect('/admin/tournament/draw-olymp?tid=' . $tid . '&class=' . $class);
            return;
        }


        return $this->render('tour-draw-olymp', [
            'model' => $this->findModel($tid),
            'draw' => $draw,
        ]);
    }

    /**
     * @param int $tid
     * @param string $class
     * @return void
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    protected function clearDraws($tid, $class)
    {
        $draws = Draws::findAll([
            'tournament_id' => $tid,
            'class' => $class,
        ]);

        foreach ($draws as $draw) {
            $draw->delete();
        }
    }

}
