<?php
//array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments),

$routes = array(
  //ORIGIN
  array('home','default','index'),
  //ABONNES
  array('read','abonne','read'),
  array('add','abonne','add'),
  array('detail','abonne','detail',array('id')),
  array('update','abonne','update',array('id')),
  array('delete','abonne','delete',array('id')),
);
