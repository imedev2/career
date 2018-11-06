<?php
/**
 * Created by PhpStorm.
 * User: imedev2
 * Date: 06/11/2018
 * Time: 11:28 AM
 */

use Imedev2\Career\Models\Company;

Route::get('contact', function(){
    return Company::all();
});