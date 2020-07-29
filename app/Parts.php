<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    //
    protected $table = 'parts';
    protected $fillable = [
      'name', 'works', 'type',
      'level', 'hp', 'combatAtk',
      'shotAtk', 'combatDef', 'shotDef',
      'beamResistance', 'phycicalResistance'];
    protected $guarded = ['id'];
}
