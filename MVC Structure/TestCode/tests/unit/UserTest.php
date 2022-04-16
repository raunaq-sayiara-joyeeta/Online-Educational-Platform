<?php
class UserTest extends \PHPUnit\Framework\TestCase{
    
    
    public function testReturnUserName(){
        $user = new \App\Model\User;
        $user->setUserName('Anurag');
        $this->assertEquals($user->getUserName(), 'Anurag');
    }
    public function testReturnCourseCode(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE470');
    }
    public function testReturnEmailAddress(){
		$user = new \App\Model\User;
		$user->setEmail('anuragdutta74@gmail.com');
        $this->assertEquals($user->getEmail(), 'anuragdutta74@gmail.com');
    }

      
    /*public function testUserNameIsEmptyByDefault(){
        $user = new \App\Model\User;
        $user->setUserName('Anu');
        $this->assertEquals($user->getUserName(), '');
    }
    public function testCourseCodeShouldCorrect(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE4');
    } */

}
