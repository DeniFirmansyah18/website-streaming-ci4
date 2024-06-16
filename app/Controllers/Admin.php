<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/index', $data);
    }

    public function detail($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data['user'] = $users->find($id);
        return view('admin/detail', $data);
    }

    public function update($id)
    {
        $users = new \Myth\Auth\Models\UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
        ];

        $users->update($id, $data);

        // Set flashdata message
        session()->setFlashdata('pesan', 'User updated successfully.');

        return redirect()->to(base_url('admin/' . $id));
    }

    public function delete($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        // Check if user exists
        if ($users->find($id)) {
            $users->delete($id);
            $users->purgeDeleted(); // Permanent deletion

            // Verify if the user is actually deleted
            if ($users->find($id)) {
                session()->setFlashdata('pesan', 'User could not be deleted.');
            } else {
                session()->setFlashdata('pesan', 'User deleted successfully.');
            }
        } else {
            session()->setFlashdata('pesan', 'User not found.');
        }

        return redirect()->to(base_url('admin'));
    }
}
