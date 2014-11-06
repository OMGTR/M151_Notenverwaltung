<?php
/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 06.11.2014
 * Time: 13:55
 */

    class controller {

        private $model;
        private $view;

        public function __construct() {

            $this->model = new model();
            $this->view = new view();
        }

        public function display(){
            $data = $this->model->getdata();
            //$html = $this->view->gethtml();
            return $this->view->gethtml($data);
        }
    }

?>