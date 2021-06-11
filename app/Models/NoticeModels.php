<?php 
namespace App\Models;
use CodeIgniter\Model;

class NoticeModels extends Model{
    protected $table ='noticedata';
    protected $allowedFields = ['id','boardType','name','views','data','post'];

    public function selectData(){
        return $this->findAll();
    }

    public function selectExData($selected){
        return $this->find($selected);
    }

    public function delectData($deleteed){
        return $this-> delete($deleteed);
    }

    public function modify($id, $modifyed){
        return $this-> update($id, $modifyed);
    }

    public function viewsData($id, $modifyed){
        return $this-> update($id, $modifyed);
    }
}
?>