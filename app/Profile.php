<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Profile extends Model
{
    protected $fillable = ['user_id','gender','skincolor','haircolor','hairlength','eyecolor','tattoos','piercing',
        'cup','bust','hips','dress','waist','shoe','height','weight','ethnicity','compensation','experience','acting',
        'art','bodypaint','cosplay','dance','editorial','erotic','fashion','fetish','fitmodeling','fitness','glamour',
        'hairmakeup','lifestyle','lingerie','parts','performance','pinup','pregnancy','promotional','runway','spokesperson',
        'sports','stunt','swimwear','underwater'];
    public function user()
    {
        return $this->belongsTo('User');
    }

}
