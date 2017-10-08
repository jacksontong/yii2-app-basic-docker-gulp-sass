<?php

namespace app\fixtures;

use yii\test\ActiveFixture;

/**
 * Class User
 *
 * @author Jackson Tong <tongtoan2704@gmail.com>
 * @package app\fixtures
 */
class User extends ActiveFixture
{
    public $modelClass = \app\models\User::class;
}