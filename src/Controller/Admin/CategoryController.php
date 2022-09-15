<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route(path: '/admin/categories', name: 'categories', methods: ['GET'])]
    public function index(): Response
    {
        return new Response();
    }

    #[Route(path: '/admin/categories/create', name: 'categories_create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        return new Response();
    }

    #[Route(path: '/admin/categories/{id}/update', name: 'categories_update', methods: ['GET', 'POST'])]
    public function update(Request $request, int $id): Response
    {
        return new Response();
    }

    #[Route(path: '/admin/categories/{id}/delete', name: 'categories_delete', methods: ['DELETE'])]
    public function delete(Request $request, int $id): Response
    {
        return new Response();
    }

    #[Route(path: '/admin/categories/{id}/force_delete', name: 'categories_force_delete', methods: ['DELETE'])]
    public function forceDelete(): Response
    {
        return new Response();
    }
}