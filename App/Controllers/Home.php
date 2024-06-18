<?php 

class Home extends Core {
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('Home',$data);
    }
}

?>