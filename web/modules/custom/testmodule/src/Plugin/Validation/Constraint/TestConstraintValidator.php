<?php

namespace Drupal\testmodule\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/*
**valdate the TestConstraint Constraint*
*/

/*class TestConstraintValidator extends ConstraintValidator{

  public function validate($items, Constraint $constraint){

    foreach ($items as $item){
      if(!strpos('test',$item->value)){

        $this->context->addViolation($constraint->missword ,['%value'=>$item->value] );
      }
    }
  }


}*/
