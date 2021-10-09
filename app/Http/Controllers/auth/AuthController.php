<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register(request $request)
  {
    try {
      if ($this->verify('username', $request->username) > 0) {
        return $this->GagalWithMsg("Username sudah digunakan !");
      } else {
        $req = $request->all();
        $req['kode_users'] = 'users-' . rand(9999999, 0000000);
        $req["password"] = Hash::make($request->password);
        $req['role'] = 1;
        $data = Users::create($req);
        if ($data) {
          return $this->Sukses();
        } else {
          return $this->Gagal();
        }
      }
    } catch (\Exception $e) {
      error_log("error: " . $e->getMessage());
      return $this->ErrorServer($e->getMessage());
    }
  }

  public function login(request $request)
  {
    try {
      $req = $request->all();
      $getUser = Users::where('username', $request->username)->first();
      if ($getUser) {
        $verify = Hash::check($req["password"], $getUser["password"]);
        if ($verify) {
          return $this->SuksesWithData($getUser);
        } else {
          return $this->GagalWithMsg("Password anda salah !");
        }
      } else {
        return $this->GagalWithMsg("Username anda tidak ditemukan !");
      }
    } catch (\Exception $e) {
      error_log("error: " . $e->getMessage());
      return $this->ErrorServer($e->getMessage());
    }
  }

  private function verify($key, $value)
  {
    return Users::where($key, $value)->count();
  }
}
