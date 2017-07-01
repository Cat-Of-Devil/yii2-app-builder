<?php
namespace auth\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use auth\models\ClientForm;

/**
 * Auth Base Controller class.
 */
class Controller extends \yii\rest\Controller
{
	/**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        // remove authentication filter
        unset($behaviors['authenticator']);
        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
	{
		if ($action->id !== 'options') {
			$params = Yii::$app->request->bodyParams;
			if (Yii::$app->client->loadClient($params) === false) {
	        	throw new BadRequestHttpException('Unknown requester');
			}
		}
	    return parent::beforeAction($action);
	}

}
