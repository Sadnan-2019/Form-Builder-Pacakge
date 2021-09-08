<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Faker\Provider\Text;

use Kris\LaravelFormBuilder\Field;
use App\Forms\UserForm;


class RegistrationController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(UserForm::class, [

        ]);

        return view('song.create', compact('form'));
    }

    /*public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(UserForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
    }*/
}
