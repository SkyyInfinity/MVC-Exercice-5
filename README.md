<h1>BRIEF - EXO</h1>

Création d'une application pour gèrer les emprunts de produits par des abonnés d'une association.

<h4>3 entités :</h4>
    <p>- **Abonnes** (id, nom, prenom, email, age (null), created_at)</p>
    <p>- **Products** (id, titre, reference, description(textarea) ) </p>
    <p>- **Borrows** (id, id_abonne, id_product, date_start, date_end(null)) </p>

<h4>Listing, Show, New, Edit, Delete. (CRUD)</h4>
Faire un crud complet pour les abonnés et aussi les Produits.

<h4>Les emprunts</h4>
Faire une seule page qui va afficher tous les emprunts
ainsi que le formulaire d'ajout qui contiendra deux select, un pour choisir parmi les abonnées et un autre pour sélectionnez le produit
On pourra enlever un emprunt de la liste en donnant une date à date_end
<h4>Page Statistiques</h4>
<p>Afficher le nombre d'abonnés.</p>
<p>Afficher le nombre de produits.</p>
<p>Afficher le nombre d’emprunts total.</p>
<p>Afficher le nombre d’emprunts en cours.(date_end IS NULL)</p>

------------------------------------------------------

<h4>Bonus</h4>

- Gestion des catégories de produits.
- Pagination numérotée des listings des abonnés et des produits.
- Gestion d'un formulaire au choix à l'aide d'Ajax.
