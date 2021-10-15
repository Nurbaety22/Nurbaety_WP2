<?php 

class Matakuliah extends CI_Controller
{
	
	public function index()
	{
		$this->load->view("view_from_matakuliah");
	}
	public function cetak()
	{
		$this->form_validation->set_rules('kode','Kode Matakuliah','required|min_lenght[3]', [
			'required' => "Kode Matakuliah Harus diisi!",
			'min_lenght' => "Tulisan minimal 3 karakter!"
		]);
		$this->form_validation->set_rules('nama','Namah Matakuliah','required|min_lenght[3]', [
			'required' => "Nama Matakuliah Harus diisi!",
			'min_lenght' => "Tulisan minimal 3 karakter!"
		]);
		$this->form_validation->set_rules('sks','SKS Matakuliah','required|min_lenght[3]', [
			'required' => "SKS Matakuliah Harus diisi!",
		]);
		$data =
			[
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks'),
			];
			if ($this->form_validation->run() != false) {
				$this->load->view('view_data_matakuliah', $data);
			} else {
				$this->load->view('view_form_matakuliah',);
			}

	}
}

?>