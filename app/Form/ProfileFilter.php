<?php

namespace App\Form;

use App\Models\RegistrationFieldTable;
use Laminas\InputFilter\InputFilter;

class ProfileFilter extends InputFilter {
    function __construct() {


        $this->add(array(
            'name'=>'name',
            'required'=>true,
            'validators'=>array(
                array(
                    'name'=>'NotEmpty'
                )
            )
        ));

        $this->add(array(
            'name'=>'last_name',
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
