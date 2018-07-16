<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 6/29/2018
 * Time: 11:06 AM
 */
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Helper_Controller extends Controller
{
    public function indexAction()
    {
        // Load heloer
        $this->helper->load('string');

        // Gọi đến hàm string_to_int
        echo string_to_int('hello world');
    }
}
?>