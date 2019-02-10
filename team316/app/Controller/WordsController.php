<?php
App::uses('CakeEmail','Network/Email');

class WordsController extends AppController{
	public $helpers = array('Html', 'Form');
	var $uses = array('Word', 'Contact');
    public $components = array('Demo');
    // public $layout = 'default2';  

	public function index(){

        // echo $message = $this->Demo->hello();
//        echo $this->Session->flash($message);
        // $this->redirect(array(
        //     'controller' => 'posts',
        //     'action' => 'index'));

		//mail機能
		if ($this->request->is('post') || $this->request->is('pust')) {
            $this->Contact->set($this->request->data);
            if ($this->Contact->Validates()) {
                $vars = $this->request->data['Contact'];
                $email = new CakeEmail();
                $email->config('contact');    // $contact の設定を使う
                $email->to($this->request->data['Contact']['email']);
                $email->viewVars($vars);
                $email->template('contact', 'contact');
                $email->subject($this->request->data['Contact']['title']." 【発想支援ツール】#DeNAインターン #アイデア");
                if ($email->send()) {
                    $this->Session->setFlash('送信完了');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('送信失敗');
                }
            }
        }

		$random = Array();
		while(true) {
			$num = mt_rand(0, $this->Word->find('count'));
			if(!in_array($num, $random)){
				$random[] = $num;
			}
			if(count($random) > 3){
				break;
			}
		}
		$conditions = Array();
		foreach($random as $num) {
			$conditions[] = Array('id' => $num);
		}
		$result = $this->Word->find('list', Array('conditions' => Array('OR' => $conditions),
		 'fields' => Array('id', 'word')));
		$this->set('words', $result);
	}

    public function design2(){
        //mail機能
        if ($this->request->is('post') || $this->request->is('pust')) {
            $this->Contact->set($this->request->data);
            if ($this->Contact->Validates()) {
                $vars = $this->request->data['Contact'];
                $email = new CakeEmail();
                $email->config('contact');    // $contact の設定を使う
                $email->to($this->request->data['Contact']['email']);
                $email->viewVars($vars);
                $email->template('contact', 'contact');
                $email->subject($this->request->data['Contact']['title']." 【発想支援ツール】#DeNAインターン #アイデア");
                if ($email->send()) {
                    $this->Session->setFlash('送信完了');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('送信失敗');
                }
            }
        }
        $random = Array();
        while(true) {
            $num = mt_rand(0, $this->Word->find('count'));
            if(!in_array($num, $random)){
                $random[] = $num;
            }
            if(count($random) > 3){
                break;
            }
        }
        $conditions = Array();
        foreach($random as $num) {
            $conditions[] = Array('id' => $num);
        }
        $result = $this->Word->find('list', Array('conditions' => Array('OR' => $conditions),
         'fields' => Array('id', 'word')));
        $this->set('words', $result);
    }

     public function design3(){
        //mail機能
        if ($this->request->is('post') || $this->request->is('pust')) {
            $this->Contact->set($this->request->data);
            if ($this->Contact->Validates()) {
                $vars = $this->request->data['Contact'];
                $email = new CakeEmail();
                $email->config('contact');    // $contact の設定を使う
                $email->to($this->request->data['Contact']['email']);
                $email->viewVars($vars);
                $email->template('contact', 'contact');
                $email->subject($this->request->data['Contact']['title']." 【発想支援ツール】#DeNAインターン #アイデア");
                if ($email->send()) {
                    $this->Session->setFlash('送信完了');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('送信失敗');
                }
            }
        }
        $random = Array();
        while(true) {
            $num = mt_rand(0, $this->Word->find('count'));
            if(!in_array($num, $random)){
                $random[] = $num;
            }
            if(count($random) > 3){
                break;
            }
        }
        $conditions = Array();
        foreach($random as $num) {
            $conditions[] = Array('id' => $num);
        }
        $result = $this->Word->find('list', Array('conditions' => Array('OR' => $conditions),
         'fields' => Array('id', 'word')));
        $this->set('words', $result);
    }



}
