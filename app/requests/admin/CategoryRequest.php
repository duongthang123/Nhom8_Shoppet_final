<?php

require_once("app/requests/BaseResquest.php");

class CategoryRequest extends BaseRequest
{
    public function vilidateCategory($data)
    {
        if(empty($data['name'])){
            $this->errors['name'] = "Không được để trống tên danh mục!";
        }
        return $this->errors;
    }
}