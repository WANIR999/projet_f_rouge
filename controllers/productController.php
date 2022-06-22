<?php
class productController{
    public function getoneproduct(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = product::getproduct($data);
			return $client;
		}
	}
    public function getuserproduct(){
		if(isset($_SESSION['userid'])){
			$data = array(
				'id' =>$_SESSION['userid']
			);
			$client = product::getuserproduct($data);
			return $client;
		}
	}
    public function getAllproducts(){
        $client= product::getAllproduct();
        return $client;
    }
    public function addproducts(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'desc'=>$_POST['desc'],
                'seller'=>$_POST['seller'],
            );
            $result= product::addproduct($data);
            if($result === 'ok'){
                Session::set('success','produit ajoute');
                Redirect::to('displayproduct');
            }else{
                echo $result;
            }
        }
    }
    public function creatprod(){
        if(isset($_POST['submit'])){
            $pic=$_FILES["image"]["name"];
            $pictmp=$_FILES["image"]["tmp_name"];
            move_uploaded_file($pictmp,'./view/asset/image/'.$pic);
            $data= array(
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'desc'=>$_POST['desc'],
                'seller'=>$_POST['seller'],
                'image'=>$pic,
                
            );
            $result= product::creatproduct($data);
            if($result === 'ok'){
                Session::set('success','produit ajoute');
                Redirect::to('displayproduct');
            }else{
                echo $result;
            }
        }
    }

    public function updateproducts(){
        if(isset($_POST['submit'])){
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'desc'=>$_POST['desc'],
            );
            $result= product::updateproduct($data);
            if($result === 'ok'){
                Session::set('success','produit modifiee');
                Redirect::to('displayproduct');
            }else{
                echo $result;
            }
        }
    }

    public function deleteproducts(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = product::deleteproduct($data);
			if($result === 'ok'){
                Session::set('success','produit Supprimé');
                Redirect::to('displayproduct');
			}else{
				echo $result;
			}
		}
	}
    public function deleteuserproducts(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = product::deleteuserproduct($data);
			if($result === 'ok'){
                Session::set('success','produit Supprimé');
                Redirect::to('displayproduct');
			}else{
				echo $result;
			}
		}
	}

    public function findproducts(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = product::searchproduct($data);
		return $client;
	} 
}