<?php
/**
 * Created by PhpStorm.
 * User: matin
 * Date: 7/28/2018
 * Time: 4:58 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $fillable = ['name'];

}