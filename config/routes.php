<?php

// массив, который содержит в себе пути. Сост.из запроса в адресн.строке > строку 
return array(

    // 'product/([0-9]+)' => 'product/view/$1',            //  actionView > ProductController
    'add' => 'site/add',                                    

    'delete' => 'site/delete',                              // actionDelete > SiteController

    'view/([0-9]+)' => 'site/view/$1',                     //  actionView > SiteController

    'edit/([0-9]+)' => 'site/edit/$1',                     //  actionEdit > SiteController

    '' => 'site/index',                                    //  actionIndex > SiteController
);