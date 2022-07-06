<?php

namespace Fitop\TagsInput;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class TagsInputServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/bootstrap-tagsinput.min.js',
    ];
	protected $css = [
		'css/bootstrap-tagsinput.css',
	];

	public function register()
	{
		//
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tags-input');
        Form::extend('tagsInput', TagsInput::class);
	}

	public function init()
	{
		parent::init();
        Admin::requireAssets('@fitop.tags-input');

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
