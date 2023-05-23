<h1>Ajouter un éleve</h1>

<div class="contenu">

<form method = "POST" action = "index.php?uc=admin&choix=ajoutEleve" entype = "multipart/form-data">
  <div class="mb-3">
    <label for="nomDuProduit" class="form-label">Nom de l'Éleve</label>
    <input type="text" class="form-control" id="nomEleve" name = "nom">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Prénom de l'Éleve</label>
    <input type="text" class="form-control" id="pronomEleve" name = "prenom">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Téléphone de l'Éleve </label>
    <input type="text" class="form-control" id="telEleve" placeholder = "ex : 0187947812" name = "tel">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Mail de l'Éleve</label>
    <input type="text" class="form-control" id="MailEleve" name = "mail">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Adresse de l'Éleve</label>
    <input type="text" class="form-control" id="adresseEleve" name = "adresse">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Niveau de l'Éleve</label>
    <input type="text" class="form-control" id="niveauEleve" placeholder = "1/2/3" name = "niveau">
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Bourse de l'Éleve</label>
    <input type="text" class="form-control" id="bourseEleve" placeholder = "non = 0 ou oui = 1" name = "bourse">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

</div>
