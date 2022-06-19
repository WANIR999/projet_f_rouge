<?php
class payment{

    static public function getpayment($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM payment WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

   static public function getallpayment(){
        $con= DB::connect()->prepare('SELECT * FROM payment');
        $con->execute();
        return $con->fetchAll();
   } 
   static public function addpayment($data){
    $con= DB::connect()->prepare('INSERT INTO payment (product,price,date,idproduct,id_buyer,id_seller) VALUES (:name,:price,:date,:idprod,:buyer,:seller)');
    $con->bindParam(':name',$data['name']);  
    $con->bindParam(':idprod',$data['idprod']);  
    $con->bindParam(':buyer',$data['idbuyer']);  
    $con->bindParam(':seller',$data['idseller']);  
    $con->bindParam(':price',$data['price']);  
    $con->bindParam(':date',$data['date']); 
     if($con->execute()){
         return 'ok';
     }else{
         return 'error';
     }
     $con= null;
      
   }
   static public function getuserpayment($data){
    $id = $data['id'];
    try{
        $query = 'SELECT * FROM payment WHERE id_seller=:id OR id_buyer=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $employe = $stmt->fetchAll();
        return $employe;
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}

   static public function updatepayment($data){
    $con= DB::connect()->prepare('UPDATE payment SET product=:name,price=:price,date=:date WHERE id=:id');
    $con->bindParam(':id',$data['id']); 
    $con->bindParam(':name',$data['name']);  
    $con->bindParam(':price',$data['price']);  
    $con->bindParam(':date',$data['date']); 
     if($con->execute())
     {
         return 'ok';
     }else{
         return 'error';
     }    
   }

   static public function deletepayment($data){
    $id = $data['id'];
    try{
        $query = 'DELETE FROM payment WHERE id=:id';
        $con = DB::connect()->prepare($query);
        $con->execute(array(":id" => $id));
        if($con->execute()){
            return 'ok';
        }
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}
        static public function searchpayment($data){
            $search = $data['search'];
            try{
                $query = 'SELECT * FROM payment WHERE product LIKE ? OR date LIKE ? OR price LIKE ?';
                $con = DB::connect()->prepare($query);
                $con->execute(array('%'.$search.'%','%'.$search.'%','%'.$search.'%'));
                $client = $con->fetchAll();
                return $client;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }

}