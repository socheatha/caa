<?php

return [
    
  'verified' => 'The Data has not yet been reviewed.',

  'taxtype' => [

    'small' => 'This Company is a small tax payer.',
    'medium' => 'This Company is a medium tax payer.',
    'large' => 'This Company is a large tax payer.',

  ],

  'crud' => [

    'success' => [
      'create' => ':name has been created successfully.',
      'update' => ':name has been updated successfully.',
      'delete' => ':name has been deleted successfully.',
      'remove' => ':name has been removed successfully.',
      'submit' => 'Data has been submitted.',
      'resubmit' => 'Data has been sent to re-check.',
    ],

    'error' => [
      'wrongpass' => 'Your password is not correct!',
      'delete' => ':name can not be deleted',
    ],
  ],

	'alert' => [

    'title' => [
      'disabled_action' => 'The action has been disabled!',
    ],
    'text' => [
      'disabled_form' => 'Can not insert the data after submitted!',
    ],
	],

  'swal' => [
    'title' => [
      'save' => 'Do you want to save?',
      'offline' => 'You have been offline for too long!',
      'empty_field' => 'Please in input require field first.',
      'empty' => 'Field can not be empty.',
      'sure' => 'Are you sure?',
      'delete' => 'Are you sure to delete :name ?',
      'edit' => 'Are you sure to edit :name ?',
      'submit' => 'Are you sure to submit?',
      'resubmit' => 'Are you sure to send to re-check?',
      'no_one_percent_tax' => 'Do you want to enable 1% TAX NOT INCLUDED?',
    ],
    'text' => [
      'save' => 'Do you want to save?',
      'offline' => 'Please press Okay to reload.',
      'empty_field' => 'Please input all require field.',
      'unrevertible' => 'This action can not be reverted!',
      'revertible' => 'This action can be reverted back!',
      'submit' => 'Please check all to make sure before submit',
      'resubmit' => 'Please check all to make sure before send to re-check',
      'no_one_percent_tax' => '1% TAX NOT INCLUDED was enabled last month, Do you want to enable it this month?',
    ],
    'button' => [
      'recheck' => 'Re-check',
      'submit_next' => 'Submit Next',
      'no' => 'No',
      'yes' => 'Yes',
    ],
    'result' => [
      'title' => [
        'save' => 'Save successfully',
        'wrong' => ':name is not correct!',
        'success' => 'Successful',
      ],
      'text' => [
        'submit' => 'Data has been submitted.',
        'resubmit' => 'Data has been sent to re-check.',
        'delete' => ':name has been deleted.',
        'save' => ':name has been saved.',
        'duplicate' => 'Can not insert duplicated Invoice number in the same year.',
        'duplicate1' => 'Duplicate data can not be inserted.',
        'no_one_percent_tax' => '1% TAX NOT INCLUDED has been enabled',
      ],
      'button' => [
        'no' => 'No',
        'yes' => 'Yes',
      ],
    ],
  ],

  'swaljs' => [
  	'title' => [
      'save' => 'Do you want to save?',
      'offline' => 'You have been offline for too long!',
      'empty_field' => 'Please in input require field first.',
      'empty' => 'Field can not be empty.',
      'sure' => 'Are you sure?',
      'delete' => 'Are you sure to delete :name ?',
      'edit' => 'Are you sure to edit :name ?',
      
      'delete_purchase' => 'Are you sure to delete this purchase?',
      'delete_sale' => 'Are you sure to delete this Sale?',
      'delete_salary' => 'Are you sure to delete this Salary?',
  	],
    'text' => [
      'empty_field' => 'Please input all require field.',
      'unrevertible' => 'This action can not be reverted!',
      'revertible' => 'This action can be reverted back!',
    ],
    'button' => [
      'no' => 'No',
      'yes' => 'Yes',
    ],
    'result' => [
      'title' => [
        'save' => 'Save successfully',
        'wrong' => ':name is not correct!',
        'success' => 'Successful',

        'no_selected_id' => 'Check at least one row to delete!',
      ],
      'text' => [
        'delete' => ':name has been deleted.',
        'save' => ':name has been saved.',
      ],
    ],
  ],

  'modal' => [
    'title' => [
      'edit_main_menu' => 'Edit Main Menu',
      'add_user' => 'Create new User',
      'change_password' => 'Change Password',
      'password_confirm' => 'Confirm-Password',
      'choose_year' => 'Choose Year',
      'choose_print_date' => 'Choose Printing Date',
      'purchase' => 'Purchase',
      'sale' => 'Sale',
      'salary' => 'Salary',
      'add_supplier' => 'Create new Supplier',
      'add_customer' => 'Create new Customer',
    ],
    'form' => [
      'password_confirm' => 'Input your password',
      'current_password' => 'Current Password',
      'new_password' => 'New Password',
      'confirm_password' => 'Confirm Password',
    ],
    'button' => [
      'close' => 'Close',
    ],
  ]


];
