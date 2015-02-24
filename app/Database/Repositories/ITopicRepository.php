<?php
/**
 * Thread repository contract.
 *
 * @version 2.0.0
 * @author  MyBB Group
 * @license LGPL v3
 */

namespace MyBB\Core\Database\Repositories;

use MyBB\Core\Database\Models\Forum;
use MyBB\Core\Database\Models\Topic;

interface ITopicRepository
{
	/**
	 * Get all threads.
	 *
	 * @return mixed
	 */
	public function all();

	/**
	 * Increment view count for topic
	 */
	public function incrementViewCount(Topic $topic);

	/**
	 * Get all threads within a forum.
	 *
	 * @param Forum $forum The forum the threads belong to.
	 *
	 * @return mixed
	 */
	public function allForForum(Forum $forum);

	/**
	 * Get all threads created by a user.
	 *
	 * @param int $userId The ID of the user.
	 *
	 * @return mixed
	 */
	public function allForUser($userId = 0);

	/**
	 * Find a single thread by ID.
	 *
	 * @param int $id The ID of the thread to find.
	 *
	 * @return mixed
	 */
	public function find($id = 0);

	/**
	 * Find a single thread by its slug.
	 *
	 * @param string $slug The slug of the thread. Eg: 'my-first-thread'.
	 *
	 * @return mixed
	 */
	public function findBySlug($slug = '');

	/**
	 * Create a new topic
	 *
	 * @param array $details Details about the topic.
	 *
	 * @return mixed
	 */
	public function create(array $details = []);
}
