<?php

namespace App\Policies;


use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function before(Usuario $user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function view(Usuario $user)
    {
        if($user->rol ==='CAMARERO')
        {

        }
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        return $user->rol === 'GERENTE';
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Usuario $user)
    {
       // return $user->owns($post);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Usuario $user)
    {
       // return $user->owns($post) && !$post->isPublished();
    }

    public function deleteAll()
    {
        return false;
    }
}