<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $fillable = ['school_name','principal_name','email','address','contact_person','contact_number','details'];
}
