<?php
class ClientController{
    public function getoneclient(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = client::getclient($data);
			return $client;}
		}
        
    public function authent(){
		if(isset($_POST['submit'])){
			$data = array(
				'name' => $_POST['name']
			);
			$client= client::login($data);
            if($client->full_name === $_POST['name'] && password_verify($_POST['password'],$client->password)){
                $_SESSION['logged'] = true;
				$_SESSION['username'] = $client->full_name;
				$_SESSION['userid'] = $client->id;
				$_SESSION['role'] = $client->role;
				$_SESSION['time'] = date('l jS \of F Y h:i:s A');
                Session::set('success','loged in successfuly');
                Redirect::to('home');
			return $client;
		}else{
            Session::set('error','invalid name or password');
				Redirect::to('login');
        }
	}
}
    public function getSellers(){
		// if(isset($_POST['id'])){
		// 	$data = array(
		// 		'id' => $_POST['id']
		// 	);
			$client = client::getseller();
			return $client;
		// }
	}
    public function getbuyers(){
		// if(isset($_POST['id'])){
		// 	$data = array(
		// 		'id' => $_POST['id']
		// 	);
			$client = client::getbuyer();
			return $client;
		// }
	}
    public function getAllClient(){
        $client= Client::getAll();
        return $client;
    }
    public function addClients(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role'=>$_POST['role'],
            );
            $result= client::addClient($data);
            if($result === 'ok'){
                Session::set('success','client ajoute');
                Redirect::to('displayclient');
            }else{
                echo $result;
            }
        }
    }
    public function signup(){
        if(isset($_POST['submit'])){
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
            $filetmp=$_FILES['image']['tmp_name'];
            $filename=$_FILES['image']['name'];
            $data= array(
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$password,
                'image'=>$filename,
                'role'=>$_POST['role'],
            );
            move_uploaded_file( $filetmp,'view/asset/image/'. $filename);
            $result= client::addClient($data);
            if($result === 'ok'){
                Session::set('success','created account please login');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }

    public function updateClients(){
        if(isset($_POST['submit'])){
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$password,
                'role'=>$_POST['role'],
            );
            $_SESSION['role']=$_POST['role'];
            $result= client::updateClient($data);
            if($result === 'ok'){
                Session::set('success','client modifiee');
                Redirect::to('displayclient');
            }else{
                echo $result;
            }
        }
    }
    public function updateprofil(){
        if(isset($_POST['submit'])){
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$password,
            );
            $_SESSION['username']=$_POST['name'];
            $result= client::updateClient($data);
            if($result === 'ok'){
                Session::set('success','updated profil');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public function deleteClient(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = client::delete($data);
			if($result === 'ok'){
                Session::set('success','client Supprimé');
                Redirect::to('displayclient');
			}else{
				echo $result;
			}
		}
	}

    public function findclient(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = client::searchclient($data);
		return $client;
	} 

	static public function logout(){
		session_destroy();
        redirect::to('login');
	}
}