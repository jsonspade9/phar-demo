<?php


$phar = new Phar('user.phar', 0, 'user.phar');  
    // ����ѹ��Ŀ¼  
    $phar->buildFromDirectory(dirname(__FILE__) . '/user');  
    // ѹ��php�ļ�������ļ�  
    $phar->setStub($phar->createDefaultStub('test.php', 'test.php'));  
    // ѹ����ʽ  
    $phar->compressFiles(Phar::GZ);  