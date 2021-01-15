<?php namespace FennCS\NewsPageViews\Components;
use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts as BlogPost;
use Db;
class Views extends ComponentBase
{
    /**
     * @var Indikator\News\Models\Posts The post model used for display.
     */
    public $post;
    public function componentDetails()
    {
        return [
            'name'        => 'fenncs.newspageviews::lang.component.views_name',
            'description' => 'fenncs.newspageviews::lang.component.views_description'
        ];
    }
    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'indikator.news::lang.settings.post_slug',
                'description' => 'indikator.news::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }
    public function onRun()
    {
        $this->views = $this->page['views'] = $this->getViews();
    }
    protected function loadPost()
    {
        $slug = $this->property('slug');
        $post = BlogPost::isPublished()->where('slug', $slug)->first();
        return $post;
    }
    protected function getViews()
    {
        $out = 0;
        $post = $this->loadPost();
        
        if(!is_null($post)) {
            $obj = Db::table('fenncs_newspageviews_views')
                ->where('post_id', $post->getKey());
            if ($obj->count() > 0) {
                $out = $obj->first()->views;
            }
        }
        
        return $out;
    }
}