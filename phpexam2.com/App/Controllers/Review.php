<?php
namespace App\Controllers;

use \Core\View;
use App\Models\User;

/**
 * Summary of Feed
 * to show questions in the feed
 */
class Review extends \Core\Controller
{

    public function newAction(){
        if(isset($_SESSION['username'])){
            $app_id=$_GET['id'];
            View::render('Review/new.php');
        }
        else{
            header('Location: /Login/new');
        }
    }

    /**
     * Summary of createAction
     * @return void
     */
    public function createAction(){
      $app_id=$_GET['app_id'];
      $user = new User($_POST);
      if($user->rateApp($app_id)) {
          header('Location: /Feed/new');
      }
      else{
          View::render('/Feed/new.php',[
              'user' => $user
          ]);
      }
    }
  }
?>