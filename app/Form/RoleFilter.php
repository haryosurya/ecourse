<?php

namespace App\Form;

use Laminas\InputFilter\InputFilter;

class RoleFilter extends InputFilter {
    function __construct() {


        $this->add(array(
            'name'=>'role',
            'required'=>true,
            'validators'=>array(
                array(
                    'name'=>'NotEmpty'
                )
            )
        ));



    }
}

?>