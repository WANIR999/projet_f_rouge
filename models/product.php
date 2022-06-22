<?php
class product{

    static public function getproduct($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM product WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
    static public function getuserproduct($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM product WHERE id_seller=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':id',$id);
			$stmt->execute();
			$employe = $stmt->fetchAll();
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

   static public function getallproduct(){
        $con= DB::connect()->prepare('SELECT * FROM product');
        $con->execute();
        return $con->fetchAll();
   } 
   static public function addproduct($data){
    $con= DB::connect()->prepare('INSERT INTO product (name,price,description,id_seller) VALUES (:name,:price,:desc,:seller)');
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':price',$data['price']); 
    $con->bindParam(':desc',$data['desc']); 
    $con->bindParam(':seller',$data['seller']); 
     if($con->execute()){
         return 'ok';
     }else{
         return 'error';
     }
     $con= null;
      
   }
   static public function creatproduct($data){
    $con= DB::connect()->prepare('INSERT INTO product (name,price,description,id_seller,image) VALUES (:name,:price,:desc,:seller,:image)');
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':price',$data['price']); 
    $con->bindParam(':desc',$data['desc']); 
    $con->bindParam(':seller',$data['seller']); 
    $con->bindParam(':image',$data['image']); 
     if($con->execute()){
         return 'ok';
     }else{
         return 'error';
     }
     $con= null;
      
   }

   static public function updateproduct($data){
    $con= DB::connect()->prepare('UPDATE product SET name=:name, price=:price, description=:desc WHERE id=:id');
    $con->bindParam(':id',$data['id']); 
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':price',$data['price']); 
    $con->bindParam(':desc',$data['desc']); 
     if($con->execute())
     {
         return 'ok';
     }else{
         return 'error';
     }    
   }

   static public function deleteproduct($data){
    $id = $data['id'];
    try{
        $query = 'DELETE FROM product WHERE id=:id';
        $con = DB::connect()->prepare($query);
        $con->execute(array(":id" => $id));
        if($con->execute()){
            return 'ok';
        }
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}
   static public function deleteuserproduct($data){
    $id = $data['id'];
    try{
        $query = 'DELETE FROM product WHERE id_seller=:id';
        $con = DB::connect()->prepare($query);
        $con->execute(array(":id" => $id));
        if($con->execute()){
            return 'ok';
        }
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}
        static public function searchproduct($data){
            $search = $data['search'];
            try{
                $query = 'SELECT * FROM product WHERE name LIKE ? OR description LIKE ?';
                $con = DB::connect()->prepare($query);
                $con->execute(array('%'.$search.'%','%'.$search.'%'));
                $client = $con->fetchAll();
                return $client;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }

}