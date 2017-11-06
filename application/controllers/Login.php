<?php
/**
 *
 */
class Login extends CI_controller
{
  public function avaa_lomake(){
    $data['sivu']='login/avaa_lomake';
    $this->load->view('menu/content',$data);
  }
  public function kirjaudu(){
    $_SESSION['user']=$this->input->post('tunnus');
    $_SESSION['kirjautunut']=true;
  }
  public function kirjaudu_ulos(){
    $_SESSION['kirjautunut']=false;
    $data['sivu']='login/ulos';
    $this->load->view('menu/content',$data);
  }
}
