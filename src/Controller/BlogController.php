<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController 
{

    // #[Route('/blog', 'blog_list')]
    // public function list()
    // {
    //     $this->render('/templates');
    // }

    // #[Route('/api/posts/{id}', methods: ['GET', 'HEAD'])]
    // public function show(int $id): Response
    // {
    //     // ... return a JSON response with the post
    // }

    // #[Route('/api/posts/{id}', methods: ['PUT'])]
    // public function edit(int $id): Response
    // {
    //     // ... edit a post
    // }

    // #[Route('/blog/{page}', name: 'blog_list',
    //     requirements: ['page' => '\d+']
    // )]
    // public function list(int $page): Response
    // {
    //     // ...
    // }

    // #[Route('/blog/{slug}', name: 'blog_show')] b
    // public function show($slug): Response
    // {
    //     // ...
    // }

    //or

    // #[Route('/blog/{page<\d+>}', name: 'blog_list')]
    // public function list(int $page): Response
    // {
    //     // ...
    // }

    //or with default value 

    // #[Route('/blog/{page<\d+>?1}', name: 'blog_list')]
    // public function list(int $page): Response
    // {
    //     // ...
    // }


    // /**
    //  * @Route("/blog/{slug}", name="blog_show")
    //  */
    // public function show(BlogPost $post): Response
    // {
    //     // $post is the object whose slug matches the routing parameter


    // #[Route(
    //     path: '/articles/{_locale}/search.{_format}',
    //     locale: 'en',
    //     format: 'html',
    //     requirements: [
    //         '_locale' => 'en|fr',
    //         '_format' => 'html|xml',
    //     ],
    // )]
    // public function search(): Response
    // {
    // }

}