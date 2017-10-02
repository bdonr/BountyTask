<?php
$REST = array(
    '/' => array(
      'script' => function($DB, $METHOD){
          $json = array('hello' => 'world');
          echo json_encode($json);
      }
    ),
    '/login' => array(
      'script' => function($DB, $METHOD){
        $state = array('login' => false);
        $send_data = json_decode(file_get_contents('php://input'), true);
        echo json_encode($state);
      }
    ),
    '/user' => array(
        'script' => function($DB, $METHOD){
            $send_data = json_decode(file_get_contents('php://input'), true);
            $ret = [];

            switch($METHOD) {
                case 'GET':
                    $ret = $DB->user_get($send_data['name'], $send_data['pass']);
                break;
                case 'PUT':
                    // TODO: need to validate
                    $ret = $DB->user_add($send_data['user']);
                break;
                case 'POST':
                    // TODO: need to validate user data
                    $ret = $DB->user_update($send_data['user']);
                break;
                case 'DELETE':
                    $ret = $DB->user_delete($send_data['user']);
                break;
            }

            echo json_encode($ret);
        }
    ),
    '/task' => array(
      'script' => function($DB, $METHOD){
        if(!isset($_SESSION['user'])){
          // TODO: turn error-codes in to a function
          echo json_encode(array('err' => ['err_msg' => 'Not logged in', 'err_code' => '401' ]));
          die();
        }
        $send_data = json_decode(file_get_contents('php://input'), true);

        switch ($method) {
          case 'GET':
          break;
          case 'PUT':
          break;
          case 'POST':
          break;
          case 'DELETE':
          break;
        }
      }
    )
  );
?>
