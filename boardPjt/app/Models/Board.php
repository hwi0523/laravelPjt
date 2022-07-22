<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // protected table = '바꾸고싶은 테이블 명';
    // protected $primarykey = 'i_board' ; 바꾸고싶은 PK
    protected $fillable = ['title','ctnt','hits'];
    protected $guarded = ['created_at']; // 한번 입력되면 수정이 안됐으면
}
