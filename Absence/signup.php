<?php require_once "header2.php"?>

    <div class="container" >
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                <form action="signup.php" method="POST" autocomplete="off" >
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="type_compte" class="form-control" >
                            <option selected value="etudiant">Etudiant</option>
                            <option value="professeur">Professeur</option>
                            
                            
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="row student">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">MATRICULE</label>
                                <input type="text" name="matricule" class="form-control" placeholder="MATRICULE">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Date naissance</label>
                                <input type="date" name="date_naissance" class="form-control" placeholder="Date naissance">
                            </div>
                        </div>
                    </div>
                    <!-- Student -->
                    <div class="row student">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lieu de naissance</label>
                                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu_naissance" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <textarea name="adresse" class="form-control" placeholder="Adresse" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Professeur -->
                    <div class="form-group professeur">
                        <label for="">MATRICULE</label>
                        <input type="number"  " name="matricule" class="form-control" placeholder="MATRICULE" >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" >
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe : </label>
                        <input type="password" class="form-control" name="cin" placeholder="Mot de passe" >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup" class="btn btn-success btn-lg" > S'inscrire </button>
                        <a href="Acceuil2.php" class="btn btn-lg btn-primary">exit</a>
                    </div>

                </form>
            </div>

        </div>
    </div>

<?php require_once "footer.php" ?>