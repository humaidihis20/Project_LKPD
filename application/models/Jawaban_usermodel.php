<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban_usermodel extends Ci_Model {

	public function save(){
		$gambar = 0;

		
		$nilai = 0;

		if ($this->input->post('1') == 2) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('2') == 6) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('3') == 10) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('4') == 14) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('5') == 18) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('6') == 22) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('7') == 27) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('8') == 30) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('9') == 34) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('10') == 38) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('11') == 42) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('12') == 46) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('13') == 51) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('14') == 54) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('15') == 60) {
			$nilai = $nilai+10;
		}

		if ($this->input->post('gambar1') == 'rawa.jpg') {
			$nilai = $nilai+10;
		}

		if ($this->input->post('gambar2') == 'padangrumput.jpg') {
			$nilai = $nilai+10;
		}

		if ($this->input->post('gambar3') == 'langit.jpg') {
			$nilai = $nilai+10;
		}

		if ($this->input->post('gambar4') == 'laut.jpg') {
			$nilai = $nilai+10;
		}

		if ($this->input->post('gambar5') == 'sawah.jpg') {
			$nilai = $nilai+10;
		}

		$nilaiakhir = $nilai/2;

		$data = [
		'nama' => $this->input->post('nama'),
		'nis' => $this->input->post('nis'),
		'nilai' => $nilaiakhir,
		'date' => date("Y-m-d H:i:s"),
		'jawaban_1' => $this->input->post('1'),
		'jawaban_2' => $this->input->post('2'),
		'jawaban_3' => $this->input->post('3'),
		'jawaban_4' => $this->input->post('4'),
		'jawaban_5' => $this->input->post('5'),
		'jawaban_6' => $this->input->post('6'),
		'jawaban_7' => $this->input->post('7'),
		'jawaban_8' => $this->input->post('8'),
		'jawaban_9' => $this->input->post('9'),
		'jawaban_10' => $this->input->post('10'),
		'jawaban_11' => $this->input->post('11'),
		'jawaban_12' => $this->input->post('12'),
		'jawaban_13' => $this->input->post('13'),
		'jawaban_14' => $this->input->post('14'),
		'jawaban_15' => $this->input->post('15'),
		];
		
		return $this->db->insert('tb_hasil',$data);
	}

}