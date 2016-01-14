# Boxes (LightBox Youtube)
Hello, This plugin makes a lightbox with videos from youtube for CakePHP.

## Install
* Add Boxes folder in your Plugin folder;
* Install the Boxes.sql in your database.

## How to use
* Insert in your header this code:

```markup
<?php 
    if ($this->request->here == '/') {
        echo $this->element('lightbox', array(), array('plugin' => 'Boxes')); 
    }
?>
```
