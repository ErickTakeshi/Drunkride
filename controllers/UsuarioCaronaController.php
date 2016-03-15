<?php

namespace app\controllers;

use Yii;
use app\models\UsuarioCarona;
use app\models\UsuarioCaronaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioCaronaController implements the CRUD actions for UsuarioCarona model.
 */
class UsuarioCaronaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all UsuarioCarona models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioCaronaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UsuarioCarona model.
     * @param integer $usuario_idusuario
     * @param integer $carona_idcarona
     * @return mixed
     */
    public function actionView($usuario_idusuario, $carona_idcarona)
    {
        return $this->render('view', [
            'model' => $this->findModel($usuario_idusuario, $carona_idcarona),
        ]);
    }

    /**
     * Creates a new UsuarioCarona model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UsuarioCarona();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_idusuario' => $model->usuario_idusuario, 'carona_idcarona' => $model->carona_idcarona]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UsuarioCarona model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $usuario_idusuario
     * @param integer $carona_idcarona
     * @return mixed
     */
    public function actionUpdate($usuario_idusuario, $carona_idcarona)
    {
        $model = $this->findModel($usuario_idusuario, $carona_idcarona);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_idusuario' => $model->usuario_idusuario, 'carona_idcarona' => $model->carona_idcarona]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UsuarioCarona model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $usuario_idusuario
     * @param integer $carona_idcarona
     * @return mixed
     */
    public function actionDelete($usuario_idusuario, $carona_idcarona)
    {
        $this->findModel($usuario_idusuario, $carona_idcarona)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UsuarioCarona model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $usuario_idusuario
     * @param integer $carona_idcarona
     * @return UsuarioCarona the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usuario_idusuario, $carona_idcarona)
    {
        if (($model = UsuarioCarona::findOne(['usuario_idusuario' => $usuario_idusuario, 'carona_idcarona' => $carona_idcarona])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
