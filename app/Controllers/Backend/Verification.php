<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Entities\UserEntity;
    use App\Models\UserModel;

    class Verification extends BaseController
    {
        protected $userModel;
        protected $userEntity;

        public function __construct(){
            $this->userModel = new UserModel();
            $this->userEntity = new UserEntity();
        }
        public function account($token){
            $decode = base64_decode($token);
            $explode = explode(".",$decode);
            if(!is_array($explode) && !empty($explode[0]) && !empty($explode[1])){
                return $this->response->setJSON(["msg" => "Token Bilgisi Bulunamadı."]);
            }
            $userID = $explode[0];
            $verifyKey = $explode[1];

            $user = $this->userModel->where(["id" => $userID, "verify_key" => $verifyKey,'status' => USER_PENDING])->find();

            if(empty($user)){
                return $this->response->setJSON(["msg" => "Bilgilere Ait Kullanıcı Verisi Bulunamadı."]);
            }

            $this->userEntity->setStatus(USER_ACTIVE);
            $this->userEntity->setVerifyKey();

            $update = $this->userModel->update($userID,$this->userEntity);
            if(!$update){
                return $this->response->setJSON(["msg" => ""])
                echo "Kullanıcı Güncelleştirilirken Hata Oluştu. Lütfen Tekrar Deneyin.";
                die();
            }
            return view("admin/pages/verify/account-success");
        }
    }