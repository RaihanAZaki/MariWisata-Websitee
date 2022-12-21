<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactUsModel;

class ContactUs extends BaseController
{
    public function index()
    {
        $model = new ContactUsModel();
        $data['title']     = 'Contact Us';
        $data['getContact'] = $model->getContact();

        // echo view('header', $data);
        // echo view('employee_view', $data);
        // echo view('footer', $data);
    }

    public function add()
    {
        $model = new ContactUsModel();
        $data = array(
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'telp' => $this->request->getPost('telp'),
            'message' => $this->request->getPost('message')
        );
        $model->saveContact($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Vaksinasi Karyawan");
                window.location="' . base_url('contact-us') . '"
            </script>';
    }
}
