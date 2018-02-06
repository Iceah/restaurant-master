<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Order;


class OrderController extends Controller{


  public function viewOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::all();
    return $this->view->render($response, 'order.php', array('order' => $order));
  }

  public function viewSingleOrders($request, $response, $args){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }
    $id = $args['id'];
    $singleOrder = Order::where('order_id', $id)->first();
    return $this->view->render($response, 'singleorder.php', array('order' => $singleOrder));
  }

  public function delOrder($request, $response, $id){
      $id = $id['id'];
      $order = Order::where('order_id',$id)->first();
      if($request->isGet()){
          return $this->view->render($response,'deleteorder.php',array('order'=>$order));
      }
      if ($request->isPost()){
          Order::where('order_id',$id)->delete();
          return $this->view->render($response,'deleteorder.php',array('deleted'=>'1'));
      }
  }

    public function editOrder($request, $response, $args){

        if(!$this->auth->check()){
            return $response->withRedirect($this->router->pathFor('home'));
        }

        $id = $args['id'];
        $order = Order::where('order_id', $id)->first();

        if($request->isGet()){
            return $this->view->render($response, 'editorder.php');
        }

        if($request->isPost()){
            $order_id = $request->getParam('order_id');
            $order_status = $request->getParam('status');

            Order::where('order_id',$id)->update(['order_id'=>$order_id,'status'=>$order_status]);
            return $this->view->render($response,'editorder.php',array('message'=>'Modification effectuée'));
        }
    }




}
