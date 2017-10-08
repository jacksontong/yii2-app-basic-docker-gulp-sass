<?php
namespace tests\models;

use app\models\User;
use app\fixtures\User as UserFixture;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->tester->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'user.php'
            ]
        ]);
    }
    public function testFindUserById()
    {
        expect_that($user = User::findIdentity(1));
        expect($user->email)->equals('nicole.paucek@schultz.info');

        expect_not(User::findIdentity(999));
    }

    public function testFindUserByEmail()
    {
        expect_that($user = User::findByEmail('nicole.paucek@schultz.info'));
        expect_not(User::findByEmail('not-admin@gmail.com'));

        return $user;
    }

    /**
     * @depends testFindUserByEmail
     */
    public function testValidateUser($user)
    {
        expect_that($user->validateAuthKey($user->auth_key));
        expect_not($user->validateAuthKey('test102key'));

        expect_that($user->validatePassword('password_0'));
        expect_not($user->validatePassword('123456'));        
    }

}
