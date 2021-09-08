<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this

            ->add('Country', 'select', [

                'choices' => ['bang' => 'Bangladesh', 'india' => 'India'],
                'selected' => 'bang',
                'empty_value' => '=== Select Country ==='

            ])
            ->add('name', 'text',[

                'attr' => [ 'name'=>'name', ],
            ]);



            /*->add('lyrics', 'textarea')

            ->add('islam', 'checkbox', [
                'value' => 'islam',
                'attr' => ['class' => 'form-check-input form-check radio','name'=>'gender'],


            ])*/













        $this->add('Male', 'radio', [
            'value' => 'Male',
            'attr' => [ 'name'=>'gender', ],

        ]);

        $this->add('Female', 'radio', [

            'value' => 'Female',
            'attr' => [  'name'=>'gender'],

        ])


  ->add('Check Remember', 'checkbox', [
        'value' => 'Islam',
        'attr' => [ 'name'=>'Islam'],





    ]);


    }
}
