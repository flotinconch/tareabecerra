<?php

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/user.controller.php';
    require_once 'controller/template.controller.php';
    require_once 'controller/aprendiz.controller.php';
    require_once 'controller/matricula.controller.php';
   
    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    require_once 'model/dao/aprendiz.dao.php';
    require_once 'model/dto/aprendiz.dto.php';
    require_once 'model/dao/matricula.dao.php';
    require_once 'model/dto/matricula.dto.php';
    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conexion.php';

    /////////////////////////////////////////////
    //                  LIBRARYS               //
    /////////////////////////////////////////////
    

    /////////////////////////////////////////////
                    /* run */
    $objRun = new Template();
    $objRun->getIntro();
    
?>