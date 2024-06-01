<?php
    class controller{
        public function model($model){
            include_once './MVC/Models/'.$model.'.php';
            return $model;
        }

        public function view($view, $data=[]){
            include_once './MVC/Views/'.$view.'.php';
        }
    }
?>