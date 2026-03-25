<?php

namespace App\Livewire\Admin;

use App\Livewire\Traits\ModalInteractions;
use Livewire\Component;
use App\Models\News as NewsModel;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Enums\PostStatus;

class News extends Component
{
    use WithPagination, ModalInteractions, WithFileUploads;
    public $headline, $content, $status, $image, $tag, $existingImage;
    public array $tags = [];



    #[Computed()]
    public function allNews()
    {
        return NewsModel::paginate(10);
    }

    public function addTag()
    {
        $this->tags[] = $this->tag;
        $this->tag = '';
    }

    public function removeTag($tag)
    {
        $this->tags = array_filter($this->tags, function ($t) use ($tag) {
            return $t !== $tag;
        });
    }

    public function saveNews()
    {
        $this->validate([
            'headline' => 'required',
            'content' => 'required',
            'status' => 'required',
            'image' => 'nullable|image',
            'tags' => 'required'
        ]);
        if ($this->instransit) {
            $news = $this->instransit;
        } else {
            $news = new NewsModel();
        }
        if ($this->image) {
            $news->image = $this->image->store('news', 'public');
        }
        $news->title = $this->headline;
        $news->content = $this->content;
        $news->status = $this->status;
        $news->tags = $this->tags;
        $news->save();
        $this->dispatch('success', message: 'News saved successfully');
        $this->closeModal();
    }

    public function edit(NewsModel $news)
    {
        $this->instransit = $news;
        $this->headline = $news->title;
        $this->content = $news->content;
        $this->status = $news->status;
        $this->tags = $news->tags;
        $this->existingImage = $news->image;
        $this->openModal();
    }

    public function delete(NewsModel $news)
    {
        File::delete($news->image);
        $news->delete();
        $this->dispatch('success', message: 'News deleted successfully');
    }



    public function render()
    {
        return view('livewire.admin.news', [
            'counts' => NewsModel::selectRaw("
                        COUNT(*) as total,
                        COUNT(CASE WHEN status = ? THEN 1 END) as published,
                        COUNT(CASE WHEN status = ? THEN 1 END) as draft
                    ", [
                PostStatus::PUBLISHED->value,
                PostStatus::DRAFT->value,
            ])->first()
        ]);
    }
}
