<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 6/29/2018
 * Time: 11:36 AM
 */

if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Product_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->view->load('product');
    }
}
?>