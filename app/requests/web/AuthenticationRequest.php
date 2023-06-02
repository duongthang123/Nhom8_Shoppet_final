<?php

require_once("app/requests/BaseResquest.php");

class AuthenticationRequest extends BaseRequest
{
    public function VilidateLogin($data)
    {
        if(empty($data['email'])) {
            $this->errors['email'] = "Không được để trống email !";
        } else {
            if(!preg_match('/^([a-zA-Z0-9])+([a-z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/', $data['email'])) {
                $this->errors['email'] = "Email không hợp lệ !";

            }
        }

        if(empty($data['password'])) {
            $this->errors['password'] = "Không được để trống password !";
        }

        return $this->errors;
    }

    public function VilidateRegister($data)
    {
        if(empty($data['name']))
        {
            $this->errors['name'] = "Không được để trống Họ Tên !";
        } else if(preg_match('/^[0-9]+$/', $data['name'])) 
            {
                $this->errors['name'] = "Không được nhập số. Vui lòng nhập lại!";
            }

            if(empty($data['email'])) {
                $this->errors['email'] = "Không được để trống email !";
            } else {
                if(!preg_match('/^([a-zA-Z0-9])+([a-z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/', $data['email'])) {
                    $this->errors['email'] = "Email không hợp lệ !";
    
                }
            }

        if(empty($data['password'])) {
            $this->errors['password'] = "Không được để trống password !";
        } else 
            {
                if($data['password'] !== $data['confirm_password'] )
                {
                    $this->errors['confirm_password'] = "Mật khẩu không trùng khớp";
                }
            }

        return $this->errors;
    }


}