<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );


    public function person()
    {
        return $this->belongsTo('App\Person');
    }
    public function getData()
    {
        return $this->id . ':' . $this->title . '(' . $this->person->name . ')';
    }


    // public function person()
    // {
    //     return $this->belongsTo('App\Person');
    // }

    // public function getData()
    // {
    //     return $this->id . ':' . $this->title . '(' . $this->person->name . ')';
    // }

    

    // public function scopeNameEqual($query, $str)
    // {
    //     return $query->where('name', $str);
    // }

    // public function scopeAgeGreaterThan($query, $n)
    // {
    //     return $query->where('age', '>=', $n);
    // }

    // public function scopeAgeLessThan($query, $n)
    // {
    //     return $query->where('age', '<=', $n);
    // }
}
