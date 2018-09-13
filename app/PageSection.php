<?php

namespace EditableWeb;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'page_id', 'section_id', 'title', 'content',
    ];
    //
}
