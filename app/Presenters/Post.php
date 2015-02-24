<?php
/**
 * Post presenter class.
 *
 * @version 2.0.0
 * @author  MyBB Group
 * @license LGPL v3
 */

namespace MyBB\Core\Presenters;

use McCool\LaravelAutoPresenter\BasePresenter;
use MyBB\Core\Database\Models\Post as PostModel;

class Post extends BasePresenter
{
	/** @var PostModel $wrappedObject */

	/**
	 * @param PostModel $resource The post being wrapped by this presenter.
	 */
	public function __construct(PostModel $resource)
	{
		$this->wrappedObject = $resource;
	}
}
