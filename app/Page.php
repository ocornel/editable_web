<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name', 'type', 'parent'
    ];

    public function getParentPage() {
        return Page::find($this->parent_id);
    }

    public function getChildren() {
        return Page::where('parent_id', $this->id)->get();
    }

    public function getSections() {
        return PageSection::where('page_id', $this->id)->get();
    }
}
