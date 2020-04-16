<?php
include 'MyList.php';
$list = new MyList();
$list->add(1);
$list->add(2);
$list->add(3);
$list->add('');
$list->add(4);
$list->add(5);
$list->add(6);
$list->add(7);
echo implode('-', $list->remove(5)) . '<br>';
if ($list->contains(8)) {
    echo 'true' . '<br>';
} else {
    echo 'false' . '<br>';
}
echo $list->indexOf(4).'<br>';
echo implode('-', $list->clear()) . '<br>';
echo $list->get(4).'<br>';
echo implode('-', $list->insertElement(2,10)).'<br>';
echo $list->size().'<br>';


