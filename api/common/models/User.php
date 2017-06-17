<?php
namespace api\common\models;

/**
 * api User model
 */
class User extends common\models\User
{
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = Yii::$app->cache->get($token);
        return ($user) ? new static($user) : null;
    }
}