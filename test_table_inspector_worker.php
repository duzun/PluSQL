<?php
    require_once('table_inspector_worker.class.php');
    $link = mysql_connect('localhost','root','++WEREWOLFbatMITZVAH++');
    mysql_select_db('anorm');
    $worker = new TableInspectorWorker('author',$link);
    print_r($worker->primaryKeys());
    $worker = new TableInspectorWorker('book',$link);
    print_r($worker->primaryKeys());
    $worker = new TableInspectorWorker('reader_reviews_book',$link);
    print_r($worker->primaryKeys());
