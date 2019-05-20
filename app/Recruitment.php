<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    //
   protected $table='recruitment';
   protected $fillable = [
   	'name_vi','name_en','name_jp','name_kr','name_chn','alias_vi','mota_vi','mota_en','mota_jp','mota_kr','mota_chn','yeucau_vi','yeucau_en','yeucau_jp','yeucau_kr','yeucau_chn','chedo_vi','chedo_en','chedo_jp','chedo_kr','chedo_chn','hoso_vi','hoso_en','hoso_jp','hoso_kr','hoso_chn','room_vi','room_en','room_jp','room_kr','room_chn','number','end_date','status','title_vi','title_en','title_jp','title_kr','title_chn','description_vi','description_en','description_jp','description_kr','description_chn','keyword_vi','keyword_en','keyword_jp','keyword_kr','keyword_chn','photo'
   ];

   public function getFillable($value='')
   {
   		return $this->fillable;
   }
}
