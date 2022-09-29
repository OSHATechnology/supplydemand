<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use App\Models\Produksi;
use App\Models\Penjualan2;
use App\Models\Target;
use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    public function index(Request $request){
        $data = Barang::all();
        if ($request->ajax()) {
            return datatables()->of($data)
            ->addColumn('action', function ($data) {
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="View" class="view btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="Edit" class="edit btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" data-id="' . $data->id . '" title="Delete" class="deletes btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('components.barang.index');
    }

    public function countPenjualan($year)
    {
        $init = 0;
        $penjualan = [];
        $tipeMobil = [];
        $x = 0;
        $data_mobil = DB::table('tb_penjualan')
            ->select('tipe_mobil', DB::raw('count(tipe_mobil) as total'))
            ->where('jenis', '=', 'mobil')
            ->where('tahun','=', $year)
            ->groupBy('tipe_mobil')
            ->get();
        if(!$init) {
            $data_penjualan = DB::table('tb_penjualan')
            ->select('total', 'tipe_mobil')
            ->where('jenis', '=', 'mobil')
            ->where('tahun','=', $year)
            ->get();

            

            foreach($data_penjualan as $p) {
                $penjualan[$x] = $p->total;
                $x++;
            }
        }
        $dataTarget = DB::table('target_sales')
                         ->select('*')
                         ->where('tahun', '=', $year)
                         ->get();
        $xArray = [];
        $totalX = 0;
        $totalY = 0;
        $totalXY = 0;
        $totalX2 = 0;
        $nilaiProyeksiY = 0;
        $nilaiProyeksiYArray = [];
        $nilaiYArray = [];
        $nilaiA = 0;
        $nilaiB = 0;
        $count = 0;

        $totalXPenjualan = 0;
        $totalYPenjualan = 0;
        $totalXYPenjualan = 0;
        $totalX2Penjualan = 0;
        $nilaiProyeksiYPenjualan = 0;
        $nilaiProyeksiArrayPenjualan = [];
        $nilaiYArrayPenjualan = [];
        $nilaiAPenjualan = 0;
        $nilaiBPenjualan = 0;
        $xArrayPenjualan = [];
        // $data = DetailPenjualan::select(DB::raw('sum(harga_jual) as `harga`'), DB::raw("DATE_FORMAT(date_sales, '%m-%Y') new_date"),  
        //             DB::raw('YEAR(date_sales) year, MONTH(date_sales) month'))
        //             ->groupby('year','month')
        //             ->where( DB::raw('YEAR(date_sales)'), '=', '2022' )
        //             ->get();

        $data = DB::table('tb_produksi')
            ->where('id_jenis_barang', '=', 1)
            ->where('tahun','=', $year)
            ->get();

        for($i = 0; $i < count($data); $i++) {
            $xArray[$i] = $i;
            $totalX = $totalX + $i;
            $totalY = $totalY + $data[$i]->total_unit;
            $totalXY = $totalXY + ($i * $data[$i]->total_unit);
            $totalX2 = $totalX2 + pow($i, 2);
            $nilaiYArray[$i] = $data[$i]->total_unit;
        }

        $temp = (count($data)*$totalXY) - ($totalX*$totalY);
        $temp2 = (count($data)*$totalX2) - ($totalX*$totalX);
     //    dd($data);

        $nilaiB = $temp / $temp2;

        $tempA = ($totalY - ($nilaiB*$totalX));
        $tempA2 = count($data);
        $nilaiA = $tempA / $tempA2;
        $month = 1;
        foreach($data as $d) {
            $tmpBulan = '';

            if($count > 7) {
                $nilaiProyeksiYArray[$count] = ($nilaiA + ($nilaiB * $count));
            } else {
                $nilaiProyeksiYArray[$count] = '';
            }
            if($month < 10) {
                $tmpBulan = '0';
            } 
            $time[$count] = $tmpBulan.$month.'/01'.'/'.$d->tahun . ' GMT';

            $count++;
            $month++;
        }

        for($i = 0; $i < count($penjualan); $i++) {
            $xArrayPenjualan[$i] = $i;
            $totalXPenjualan = $totalXPenjualan + $i;
            $totalYPenjualan = $totalYPenjualan + $penjualan[$i];
            $totalXYPenjualan = $totalXYPenjualan + ($i * $penjualan[$i]);
            $totalX2Penjualan = $totalX2Penjualan + pow($i, 2);
            $nilaiYArrayPenjualan[$i] = $penjualan[$i];
        }

        $countPenjualan = 0;
        $tempPenjualan = (count($penjualan)*$totalXYPenjualan) - ($totalXPenjualan*$totalYPenjualan);
        $temp2Penjualan = (count($penjualan)*$totalX2Penjualan) - ($totalXPenjualan*$totalXPenjualan);
        $nilaiBPenjualan = $tempPenjualan / $temp2Penjualan;

        $tempAPenjualan = ($totalYPenjualan - ($nilaiBPenjualan*$totalXPenjualan));
        $tempA2Penjualan = count($penjualan);
        $nilaiAPenjualan = $tempAPenjualan / $tempA2Penjualan;
        
        foreach($penjualan as $d) {
            $nilaiProyeksiArrayPenjualan[$countPenjualan] = ($nilaiAPenjualan + ($nilaiBPenjualan * $countPenjualan));
            

            $countPenjualan++;
        }

        $tipe = [];
        $jml = [];
        $xTipe = 0;
        foreach($data_mobil as $tm) {
            $tipe[$xTipe] = $tm->tipe_mobil;
            $jml[$xTipe] = $tm->total;

            $xTipe++;
        }

        echo json_encode(array('produksi' => $nilaiYArray, 'penjualan' => $penjualan, 'time' => $time, 'proyeksi' => $nilaiProyeksiYArray, 'proyeksi_penjualan' => $nilaiProyeksiArrayPenjualan, 'tipe_mobil' => $tipe, 'jml' => $jml, 'data_mobil' => $data_mobil, 'target_sales'=>$dataTarget));
    }
}
