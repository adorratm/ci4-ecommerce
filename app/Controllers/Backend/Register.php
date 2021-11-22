<?php

namespace App\Controllers\Backend;
use \App\Controllers\BaseController;
use App\Entities\UserEntity;
use App\Libraries\EmailTo;
use App\Models\UserModel;

class Register extends BaseController
{
    /**
     * Variables
     * @var \CodeIgniter\Validation\Validation
     */
    protected $validation;
    protected $session;
    protected $userEntity;
    protected $userModel;
    /**
     * Constructor
     */
    public function __construct()
    {
        /**
         * Call Validation Service
         */
        $this->validation = \Config\Services::validation();
        /**
         * Call Session Service
         */
        $this->session = \Config\Services::session();
        /**
         * Call User Entity
         */
        $this->userEntity = new UserEntity();
        /**
         * Call User Model
         */
        $this->userModel = new UserModel();
    }

    /**
     * Index
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function index(){
        if($this->request->getMethod() == "post"){
            /**
             * Set Post Data
             */
            $data = [
              'first_name' => $this->request->getPost('first_name'),
              'sur_name' => $this->request->getPost('sur_name'),
              'email' => $this->request->getPost('email'),
              'phone' => $this->request->getPost('phone'),
              'password' => $this->request->getPost('password'),
              'password_conf' => $this->request->getPost('password_conf'),
            ];
            /**
             * If Validation Error Occured
             */
            if(!$this->validation->run($data,'register')){
                /**
                 * Set Errors Flash Data
                 */
                $this->session->setFlashdata(["errors" => $this->validation->getErrors()]);
                /**
                 * Return Redirect Back
                 */
                return redirect()->to(route_to("admin_register"));
            }

            /**
             * Set Entities
             */
            $this->userEntity->setFirstName($data["first_name"]);
            $this->userEntity->setSurName($data["sur_name"]);
            $this->userEntity->setEmail($data["email"]);
            $this->userEntity->setVerifyKey();
            $this->userEntity->setVerifyCode();
            $this->userEntity->setStatus(USER_PENDING);
            $this->userEntity->setPhone($data["phone"]);
            $this->userEntity->setPassword($data["password"]);

            /**
             * Insert Entities
             */
            $insert = $this->userModel->insert($this->userEntity);

            /**
             * If Insert Errors
             */
            if($this->userModel->errors()){
                /**
                 * Set Errors Flash Data
                 */
                $this->session->setFlashdata(["errors" => $this->userModel->errors()]);
                /**
                 * Return Redirect Back
                 */
                return redirect()->to(route_to("admin_register"));
            }

            $email = new EmailTo();
            $user = $this->userModel->find($insert);
            $to = $email->settings()->setUser($user)->accountVerify()->send();
            if($to){
                /**
                 * If Insert Success Set Flash Data
                 */
                $this->session->setFlashdata(['success' => lang("Register.controller.success_register")]);
                /**
                 * Return Redirect Back
                 */
                return redirect()->to(route_to("admin_register"));
            }

            /**
             * Set Errors Flash Data
             */
            $this->session->setFlashdata(["errors" => lang("Register.controller.error_email")]);
            /**
             * Return Redirect Back
             */
            return redirect()->to(route_to("admin_register"));

        }
        /**
         * Return View
         */
        return view('admin/pages/auth/register');
    }
}