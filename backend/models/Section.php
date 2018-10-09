<?php
namespace backend\models;
class Section extends \common\models\Section{
    public $name="tani";
    public $old=20;
    public function getmyold(){
        return $this->old;
    }
}
