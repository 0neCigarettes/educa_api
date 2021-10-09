<?php

namespace App\Http\Utils;

trait Response
{

  public function SuksesWithData($result)
  {
    return response()
      ->json([
        "status" => true,
        "message" => "Berhasil memuat permintaan !",
        "result" => $result
      ]);
  }

  public function SuksesEmpty()
  {
    return response()
      ->json([
        "status" => true,
        "message" => "Tidak ada data !",
        "result" => []
      ]);
  }

  public function Sukses()
  {
    return response()
      ->json([
        "status" => true,
        "message" => "Berhasil memuat permintaan !"
      ]);
  }

  public function Gagal()
  {
    return response()
      ->json([
        "status" => false,
        "message" => "Gagal memuat permintaan !"
      ]);
  }

  public function GagalWithMsg($msg)
  {
    return response()
      ->json([
        "status" => false,
        "message" => $msg
      ]);
  }

  public function No_Data()
  {
    return response()
      ->json([
        "status" => true,
        "message" => 'Tidak ada data !'
      ]);
  }

  public function ErrorServer($log)
  {
    return response()
      ->json([
        "status" => false,
        "message" => 'Terjadi keslahan pada server !',
        "log" => $log
      ]);
  }
}
