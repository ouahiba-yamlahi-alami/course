<?php
function database(){
   try{
      return $conn= new PDO("mysql:host=mysql57;dbname=stagieres","root","root" ,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
   }catch(Exception $e){
       echo "Erreure de connexion". $e->getMessage();
   }

}
function listeStagiare(){
    $pdo = database();
    return $pdo->query("SELECT * FROM stagiere ")->fetchAll(PDO::FETCH_CLASS);

}
function create()
{
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age'])){
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $age= htmlspecialchars($_POST['age']);
            $pdo = database();
            $sqlState= $pdo->prepare("INSERT INTO stagiere(nom,prenom,age) VALUES (?,?,?)");
            return $sqlState->execute([ $nom,$prenom,$age ]);
        }
    }

}
function edit($id,$nom,$prenom,$age)
{

    $pdo = database();
    $sqlState= $pdo->prepare(" UPDATE stagiere SET 
                                                          nom=?,
                                                          prenom=?,
                                                          age=?
                                                    WHERE id=? ");
    return $sqlState->execute([$nom,$prenom,$age,$id]);
}


function destroy($id)
{

    $pdo = database();
    $sqlState = $pdo-> prepare ("DELETE FROM stagiere WHERE id = ?");
    return $sqlState->execute([$id]);
}

function vieus($id){
    $pdo= database();
    $sqlstate = $pdo->prepare('SELECT * FROM stagiere WHERE id=?');
    $sqlstate->execute([$id]);
    return $sqlstate->fetch(PDO::FETCH_OBJ);
}