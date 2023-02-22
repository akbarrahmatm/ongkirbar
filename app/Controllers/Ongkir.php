<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ongkir extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cek Ongkir',
            'province' => $this->ongkir->getProvince()['rajaongkir']['results']
        ];
        return view('ongkir/cek', $data);
    }
    public function getCity($idProvince)
    {
        $this->ongkir->getCity($idProvince);
    }
    public function process()
    {
        if(!$this->validate([
            'courier' => [
                'rules' => 'required|in_list[jne,pos,tiki]',
                'label' => 'Kurir',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!',
                    'in_list' => '{field} tidak valid, pilih salah satu (JNE, POS Indonesia, Atau TIKI)'
                ]
            ],
            'origin-city' => [
                'rules' => 'required',
                'label' => 'Kota Asal',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'destination-city' => [
                'rules' => 'required',
                'label' => 'Kota Tujuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'weight' => [
                'rules' => 'required|integer',
                'label' => 'Berat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!',
                    'integer' => '{field} harus berisi angka!',
                ]
            ],
        ])){
            $this->session->setFlashData('error', $this->validator->listErrors());
            return redirect()->to(site_url('ongkir'));
        }else{
            $response = [
                'courier' => $this->request->getVar('courier'),
                'origin' => $this->request->getVar('origin-city'),
                'destination' => $this->request->getVar('destination-city'),
                'weight' => $this->request->getVar('weight'),
            ];
    
            $urlField = "origin=". $response['origin'] ."&destination=". $response['destination'] ."&weight=". $response['weight'] ."&courier=" . $response['courier'];
    
            
            $this->session->setFlashData('data_ongkir', $this->ongkir->cost($urlField));
            return redirect()->to(site_url('ongkir/hasil'));
        }
        

    }
    public function result()
    {
        $data = $this->session->getFlashdata('data_ongkir');

        $status = $data['rajaongkir']['status'];
        $origin = $data['rajaongkir']['origin_details'];
        $destination = $data['rajaongkir']['destination_details'];
        $weight = $data['rajaongkir']['query']['weight'];
        $results = $data['rajaongkir']['results'];
        $courier = $data['rajaongkir']['query']['courier'];

        if ($status['code'] == 200) {
            $data = [
                'title' => 'Hasil Cek Ongkir',
                'results' => $results,
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            ];
            // var_dump($results);
            return view('ongkir/hasil', $data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

    }
    
}
