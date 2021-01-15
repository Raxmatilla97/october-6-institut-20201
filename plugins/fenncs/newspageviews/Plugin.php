<?php namespace FennCS\NewsPageViews;
use Db;
use Session;
use System\Classes\PluginBase;
use Indikator\News\Components\Post as PostComponent;
use Indikator\News\Models\Posts as PostModel;
/**
 * BlogViews Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array   Require the Indikator.News plugin
     */
    public $require = ['Indikator.News'];
    /**
     * @var string   Table to store post views count
     */
    public $table_views = 'fenncs_newspageviews_views';
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'fenncs.newspageviews::lang.plugin.name',
            'description' => 'fenncs.newspageviews::lang.plugin.description',
            'author'      => 'Fon E. Noel NFEBE',
            'icon'        => 'oc-icon-eye',
            'homepage'    => 'https://github.com/fenn-cs/newspageviews'
        ];
    }
    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'FennCS\NewsPageViews\Components\Views'   => 'views',
            'FennCS\NewsPageViews\Components\Popular' => 'popularPosts'
        ];
    }
    public function boot()
    {
        PostComponent::extend(function($component) {
            if ($this->app->runningInBackend()) {
                return;
            }
            // getting slug value using logic from Cms\Classes\Controller setComponentPropertiesFromParams
            $routerParameters = $component->getController()->getRouter()->getParameters();
            $slugValue = $component->property('slug');
            $slugValueFromUrl = null;
            if (preg_match('/^\{\{([^\}]+)\}\}$/', $slugValue, $matches)) {
                $paramName = trim($matches[1]);
                if (substr($paramName, 0, 1) == ':') {
                    $routeParamName = substr($paramName, 1);
                    $slugValueFromUrl = array_key_exists($routeParamName, $routerParameters)
                        ? $routerParameters[$routeParamName]
                        : null;
                }
            }
            if (!$slugValueFromUrl)
                return;
            if (!Session::has('postsviewed')) {
                Session::put('postsviewed', []);
            }
            $post = PostModel::where('slug', $slugValueFromUrl)->first();
            if (!is_null($post) && !in_array($post->getKey(), Session::get('postsviewed'))) {
                $this->setViews($post);
                Session::push('postsviewed', $post->getKey());
            }
            return true;
        });
        PostModel::extend(function($model) {
            $model->addDynamicMethod('getViewsAttribute', function() use ($model) {
                $obj = Db::table('fenncs_newspageviews_views')
                    ->where('post_id', $model->getKey());
                $out = 0;
                if ($obj->count() > 0) {
                    $out = $obj->first()->views;
                }
                return $out;
            });
        });
    }
    public function setViews($post, $views = null)
    {
        $obj = Db::table($this->table_views)
            ->where('post_id', $post->getKey());
        if ($obj->count() > 0) {
            $row = $obj->first();
            if (!$views) {
                $views = ++$row->views;
            }
            $obj->update(['views' => $views]);
        } else {
            if (!$views) {
                $views = 1;
            }
            Db::table($this->table_views)->insert([
                'post_id' => $post->getKey(),
                'views'   => $views
            ]);
        }
    }
}