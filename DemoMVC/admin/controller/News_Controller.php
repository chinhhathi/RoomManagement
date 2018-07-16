<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class News_Controller extends Controller
{
    public function indexAction() {
        //lấy token name = token name
        echo 'Token name = ' . $this->config->item('token_name') . '<br>';

        //thay đổi token name
        $this->config->set_item('token name', 'new token');
        echo 'New token = ' .$this->config->item('token_name') . '<br>';

        //tạo mới token
        $this->config->set_item('new_token', 'website');
        echo 'New token name = ' . $this->config->item('new_token');

    }
}