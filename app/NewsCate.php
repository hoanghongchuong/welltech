<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model {

	protected $table='news_categories';

	protected $fillable = ['id','name_vi','alias_vi','photo','mota_vi','parent_id','stt','status','title','keyword','description'];

	public $timestamps = true;

}
