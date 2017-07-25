<?php class Auth{

	/**
	* Permet d'identifier un utilisateur et de garder ses infos dans une variable SESSION
	**/
	function login($d){
		global $bdd;
		$req=$bdd->prepare('SELECT login,pwd,utilisateur.code_priv,privilege.designation,privilege.level FROM utilisateur LEFT JOIN privilege ON utilisateur.code_priv=privilege.code_priv WHERE login=:login AND pwd=:pwd');
		$req->execute(array(':login'=>$d['Login'], ':pwd'=>$d['Pwd']));
		$data=$req->fetchAll();
		print_r($data);
		if(count($data)>0){ 
			$_SESSION['Auth']=$data[0];
			return true;
		}
		return false;
	}	


	/**
	* Permet a l'utilisateur d'avoir une page forbidden en cas de non autorisation
	**/

	function allow($rang){
		global $bdd;
		$req=$bdd->prepare('SELECT slug,level FROM privilege');
		$req->execute();
		$data=$req->fetchAll();
		$roles= array();
		foreach ($data as $d) {
			$roles[$d->slug]=$d->level;
		}
		$this->user('slug');
	}

	/**
	* Recupere des informations de l'utilisateur
	**/

	function user($field){

	}

}

$Auth=new Auth();