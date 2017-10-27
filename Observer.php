<?php
class Observer implements SplObserver
{
  public function update(SplSubject $obj)
  {
    echo 'Observer1 a été notifié ! Nouvelle valeur de l\'attribut <strong>nom</strong> : ', $obj->getNom();
  }
}

?>
