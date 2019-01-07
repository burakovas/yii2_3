<?php

use yii\helpers\Html;
use app\models\filters\TasksSearch;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\filters\TasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MyTask';


$form = ActiveForm::begin(
        ['id' => 'form-input-example',
            'options' => [
                'class' => 'form-horizontal col-lg-11',
                'enctype' => 'multipart/form-data'
                ],
        ]);


$searchModel = new TasksSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'view'
])

?>

<?php ActiveForm::end(); ?>

