<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	function grafik()
	{
		//Grafik 1

		$chartData=file_get_contents('assets/jumlahsampah.json');
		$chartData=json_decode($chartData);
		$res=array();
		foreach ($chartData as $row) {
			$dat=[$row->tahun,(double)$row->jumlah];
			array_push($res, $dat);
		}
		 
		$data['PieChartData']=json_encode($res);
		$data['PieChartTitle']='Presentase Jumlah sampah pertahun di DKI Jakarta';
		 
		//Grafik 2 
		 
		$chartData1=file_get_contents('assets/jenissampah.json');
		$chartData1=json_decode($chartData1);
		$res1=array();
		foreach ($chartData1 as $row) {
			$dat1=[$row->komposisi,(double)$row->persen];
			array_push($res1, $dat1);
		}
		
		$data['PieChartData1']=json_encode($res1);
		$data['PieChartTitle1']='Persentase komposisi sampah pertahun di DKI Jakarta';

		//Grafik 3

		$chartData2=file_get_contents('assets/sampahtahun.json');
		$chartData2=json_decode($chartData2);
		$res2=array();
		foreach ($chartData2 as $row) {
			$dat2=[$row->tahun,(double)$row->jktbarat,(double)$row->jktselatan,(double)$row->jktTimur,(double)$row->jktpusat,(double)$row->jktutara];
			array_push($res2, $dat2);
		}
		
		$data['LineChartData2']=json_encode($res2);
		$data['LineChartTitle2']='Perbandingan Jumlah sampah pertahun berdasarkan lokasi di DKI Jakarta';

		//Grafik 4

		$chartData3=file_get_contents('assets/pengelolahsampah.json');
		$chartData3=json_decode($chartData3);
		$res3=array();
		foreach ($chartData3 as $row) {
			$dat3=[$row->tahun,(double)$row->volsampah,(double)$row->sampahdiolah,(double)$row->sampahditangani];
			array_push($res3, $dat3);
		}
		
		$data['BarChartData3']=json_encode($res3);
		$data['BarChartTitle3']='Data pengelolaan sampah pertahun diDKI Jakarta';


		//Grafik 5

		$chartData5=file_get_contents('assets/sampahsitu.json');
		$chartData5=json_decode($chartData5);
		$res5=array();
		foreach ($chartData5 as $row) {
			$dat5=[$row->periode,(double)$row->Lembang,(double)$row->Beacukai,(double)$row->Riario,(double)$row->Sunter,(double)$row->Kebunragunan];
			array_push($res5, $dat5);
		}
		
		$data['BarChartData5']=json_encode($res5);
		$data['BarChartTitle5']='Data jumlah sampah di situ DKI Jakarta';

		

		
		 $this->load->view('Grafik',$data);
		
		 
	}

 }