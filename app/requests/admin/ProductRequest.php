<?php 

require_once("app/requests/BaseResquest.php");

class ProductRequest extends BaseRequest
{
    public function VilidateProduct($data) 
    {

        if(empty($data)) {
            $this->errors['category_id'] = "Hãy chọn thể loại";
        }

        if(empty($data['name'])){
            $this->errors['name'] = "Không được để trống tên sản phẩm!";
        }

        if(empty($data['description'])){
            $this->errors['description'] = "Không được để trống mô tả";
        }

        if($data['price'] == "") {
            $this->errors['price'] = "Không được để trống giá";
        } else if(!preg_match('/^[0-9]+$/', $data['price']) || $data['price'] < 0) {
            $this->errors['price'] = "Dữ liệu nhập không chính xác, vui lòng nhập lại!";
        }

        if($data['quantity'] == "") {
            $this->errors['quantity'] = "Không được để trống số lượng";
        }else if(!preg_match('/^[0-9]+$/', $data['quantity']) || $data['quantity'] < 0) {
            $this->errors['quantity'] = "Dữ liệu nhập không chính xác, vui lòng nhập lại!";
        }

        if(empty($_FILES['img']['name'])) {
            $this->errors['img']['name'] = "Hãy chọn ảnh!";
        }

        return $this->errors;
    }
}