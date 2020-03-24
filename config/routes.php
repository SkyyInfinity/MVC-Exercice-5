<?php
//array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments),

$routes = array(
  //ORIGIN
  array('home','default','index'),
  //ABONNES
  array('readabonne','abonne','read'),
  array('addabonne','abonne','add'),
  array('detailabonne','abonne','detail',array('id')),
  array('updateabonne','abonne','update',array('id')),
  array('deleteabonne','abonne','delete',array('id')),
  //PRODUITS
  array('readproduct','product','read'),
  array('addproduct','product','add'),
  array('detailproduct','product','detail',array('id')),
  array('updateproduct','product','update',array('id')),
  array('deleteproduct','product','delete',array('id')),
);
