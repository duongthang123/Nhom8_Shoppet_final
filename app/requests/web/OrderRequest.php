<?php

require_once("app/requests/BaseResquest.php");

class OrderRequest extends BaseRequest
{
    public function VilidateOrder($data)
    {
        // fullname
        if(empty($data['fullname']))
        {
            $this->errors['fullname'] = "Không được để trống Họ Tên !";
        } else if(preg_match('/^[0-9]+$/', $data['fullname'])) 
            {
                $this->errors['fullname'] = "Không được nhập số. Vui lòng nhập lại!";
            }

        // phone number
        if(empty($data['phoneNumber']))
        {
            $this->errors['phoneNumber'] = "Không được để trống số điện thoại !";
        } else if(!preg_match('/^[0-9]+$/', $data['phoneNumber'])) 
            {
                $this->errors['phoneNumber'] = "Hãy nhập số. Vui lòng nhập lại!";
            }

        // city
        if(empty($data['city']))
        {
            $this->errors['city'] = "Không được để trống tên thành phố !";
        } else if(preg_match('/^[0-9]+$/', $data['city'])) 
            {
                $this->errors['city'] = "Không được nhập số. Vui lòng nhập lại!";
            }
        
        // address
        if(empty($data['address'])) {
            $this->errors['address'] = "Không được để trống địa chỉ !";
        }

        // email
        if(empty($data['email'])) {
            $this->errors['email'] = "Không được để trống email !";
        } else {
            if(!preg_match('/^([a-zA-Z0-9])+([a-z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/', $data['email'])) {
                $this->errors['email'] = "Email không hợp lệ !";

            }
        }

        return $this->errors;
    }
}