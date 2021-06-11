<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NoticeModels;

class NoticeBoard extends Controller{
    //인덱스
    public function index(){
         $this->select();
    }




    //찾기
    public function select(){
        $model = new NoticeModels();

        $data['board'] = $model->selectData();

        echo view('Script');
        echo view('selectView',$data);
    }




    //쓰기
    public function insert(){
        $model = new NoticeModels();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'post' => 'required|min_length[0]|max_length[2000]',
            'name' => 'required|min_length[0]|max_length[10]',
            'boardType' => 'required|min_length[0]|max_length[30]',
        ]))
        {
        $model->save([
            'boardType' => $this->request->getPost('boardType'),
            'name'  => $this->request->getPost('name'),
            'views'  => '0',
            'date'  => 'now()',
            'post'  => $this->request->getPost('post'),
        ]);
            echo ("<script>location.href='/index.php/NoticeBoard/select'</script>");
        }
        else
        {
            echo view('Script');
            echo view('insert');
        }       
    }




    //특정게시판 찾기
    public function selectEx(){
        $model = new NoticeModels();

        $data['urData'] = $model->selectExData($this->request->getGet('id'));
        // $model->modify($this->request->getGet('id'),);
        echo view('Script');
        echo view('selectEx',$data);
    }




    //삭제
    public function delete(){
        $model = new NoticeModels();

        $model->delectData($this->request->getGet('id'));
        echo ("<script>location.href='/index.php/NoticeBoard/select'</script>");
    }




    //수정
    public function update(){
        $model = new NoticeModels();
        $id = $this->request->getPost('id');

        $data=[
            'boardType' => $this->request->getPost('boardType'),
            'name' => $this->request->getPost('name'),
            'post' => $this->request->getPost('post')
        ];

        $model->modify($id,$data);
        echo ("<script>location.href='/index.php/NoticeBoard/select'</script>");
    }
}
?>