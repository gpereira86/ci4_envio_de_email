<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        $email = service('email');

        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => 'sandbox.smtp.mailtrap.io',
            'SMTPUser' => '77cf80e730fddf',
            'SMTPPass' => 'ec1091d144619a',
            'SMTPPort' => 2525,
            'wordWrap' => true,
            'mailType'  => 'html',
            'charset'   => 'utf-8',
        ];

        $email->initialize($config);

        $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $email->setTo('piradaojpa@gamail.com');

        $template = view('emails/contact', [
            'name' => 'Graico',
            'from' => $this->request->getPost('name'),
            'message' => $this->request->getPost('message'),
        ]);

        $email->setSubject($this->request->getPost('subject'));
//        $email->setMessage($this->request->getPost('message'));
        $email->setMessage($template);

        $sent = $email->send();

        if(!$sent) {
           var_dump($email->printDebugger());
        }
    }
}
