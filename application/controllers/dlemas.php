<?php
class dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_dlemas');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[3]',
            [
                'required' => 'Nama Siswa Harus diisi',
                'min_lenght' => 'isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'Nis Siswa',
            'required|min_length[3]',
            [
                'required' => 'Nis Siswa Harus diisi',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas Siswa',
            'required|min_length[3]',
            [
                'required' => 'Kelas Siswa Harus diisi',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'tanggal',
            'Tanggal Siswa',
            'required|min_length[3]',
            [
                'required' => 'Tanggal Siswa Harus diisi',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'tempat',
            'Tempat Siswa',
            'required|min_length[3]',
            [
                'required' => 'Tempat Siswa Harus diisi',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat Siswa',
            'required|min_length[3]',
            [
                'required' => 'Alamat Siswa Harus diisi',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelamin',
            'Kelamin Siswa',
            'required|min_length[3]',
            [
                'required' => 'Kelamin Siswa Harus dipilih',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'agama',
            'Agama Siswa',
            'required',
            [
                'required' => 'Agama Siswa Harus dipilih',
                'min_lenght' => 'Isi terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view_form_dlemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'), // Corrected line, remove extra quote
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('view_data_dlemas', $data);
        }
    }
}