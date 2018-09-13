<?php

namespace EditableWeb;

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
        $sections = [];
        foreach (PageSection::where('page_id', $this->id)->get() as $page_section) {
            array_push($sections, Section::find($page_section->section_id));
        }
        return $sections;
    }
}
