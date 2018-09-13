<?php

namespace EditableWeb;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name',
    ];

    public function getPages() {
        $pages = [];
        foreach (PageSection::where('section_id', $this->id)->get() as $page_section) {
            array_push($pages, Page::find($page_section->page_id));
        }
        return $pages;
    }
}