<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'mufit.asmari555@gmail.com',  // Email gmail
            'smtp_pass'   => 'mufit00748',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('mufit.asmari555@gmail.com', 'Mr.MR/Mufit asmari');

        // Email penerima
        $this->email->to('mufit.asmari16@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.123rf.com%2Fphoto_79173919_stock-vector-mr-m-r-brush-logo-letters-design-with-red-and-black-colors-and-brush-letter-concept-.html&psig=AOvVaw0ABVUAhoTDZhEJ7utP8G2k&ust=1593828902699000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKC0tL-BsOoCFQAAAAAdAAAAABAD');

        // Subject email
        $this->email->subject('Percobaan Kirim Email dengan SMTP Gmail CodeIgniter | Mr.MR/ MUfit asmari');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.123rf.com%2Fphoto_79173919_stock-vector-mr-m-r-brush-logo-letters-design-with-red-and-black-colors-and-brush-letter-concept-.html&psig=AOvVaw0ABVUAhoTDZhEJ7utP8G2k&ust=1593828902699000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKC0tL-BsOoCFQAAAAAdAAAAABAD' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}