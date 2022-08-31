<?php

namespace App\Form;

use Laminas\Form\Form;

class NewsflashForm extends Form {
    public function __construct($name = null)
    {
    	// we want to ignore the name passed
    	parent::__construct('user');
    	$this->setAttribute('method', 'post');



    	$this->add(array(
    		'name'=>'title',
    	    'attributes' => array(
    	    'type'=>'text',
    	    		'class'=>'form-control ',
    	    		'required'=>'required',
    	        ),
    	    'options'=>array('label'=>__lang('Title')),
    	));

    	$this->add(array(
    			'name'=>'content',
    	    'attributes' => array(
    			'type'=>'textarea',
    	    		'class'=>'form-control ',
    	    		'required'=>'required',
    	    		'id'=>'hcontent'
    	        ),
    			'options'=>array('label'=>__lang('Content')),
    	));



    	$this->add(array(
    			'name'=>'picture',
    			'attributes' => array(
    					'type'=>'hidden',
    					'class'=>'form-control ',
    					'required'=>'required',
    					'id'=>'image'
    			),
    			'options'=>array('label'=>__lang('Picture')),
    	));


    }

}

?>
