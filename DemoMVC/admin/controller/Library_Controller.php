<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 6/29/2018
 * Time: 10:22 AM
 */
    if (!defined('PATH_SYSTEM')) die ('Bad request');

    class Library_Controller extends Controller {
        public function indexAction() {
            // tạo mới thư viện
            $this->library->load('upload');


            $this->library->upload->upload();
        }

    }
?>