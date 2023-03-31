<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Masyarakat;
use App\Mail\SendTanggapan;
use DB;

class TanggapanController extends Controller
{
    public function response(Request $request) {

        $pengaduan = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->first();

        $tanggapan = Tanggapan::where('id_pengaduan', $request->id_pengaduan)->first();

        if($tanggapan) {
            $pengaduan->update(['status' => $request->status]);

            $tanggapan->update([
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan ?? '',
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);

            $send_tanggapan = DB::table('tanggapan as T')
            ->select('T.*', 'P.*', 'U.name', 'U.email')
            ->join('pengaduan as P', 'T.id_pengaduan', '=', 'P.id_pengaduan')
            ->join('masyarakat as U', 'P.nik', '=', 'U.nik')
            ->where('P.id_pengaduan', '=', $pengaduan->id_pengaduan)
            ->first();

            $data_tanggapan = [
                'tgl_pengaduan' => $send_tanggapan->tgl_pengaduan,
                'isi_laporan'   => $send_tanggapan->isi_laporan,
                'tanggapan'     => $send_tanggapan->tanggapan,
                'status'        => $send_tanggapan->status
            ];
    
            Mail::to($send_tanggapan->email)->send(new SendTanggapan($data_tanggapan));

            if($request->ajax()) {
                return 'success';
            }

            return redirect()->route('pengaduan.show', ['id_pengaduan' => $request->id_pengaduan, 'pengaduan' => $pengaduan, 'tanggapan' => $tanggapan])->with(['status' => 'Berhasil Ditanggapi!']);
        } else {
            $pengaduan->update(['status' => $request->status]);

            $tanggapan = Tanggapan::create([
                'id_pengaduan' => $request->id_pengaduan,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan ?? '',
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);

            if($request->ajax()) {
                return 'success';
            }
            return redirect()->route('pengaduan.show', ['id_pengaduan' => $request->id_pengaduan, 'pengaduan' => $pengaduan, 'tanggapan' => $tanggapan])->with(['status' => 'Berhasil Ditanggapi!']);
        }
    }
}
