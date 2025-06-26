<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case BlogIndex = 'blog-index';
    case BlogEdit = 'blog-edit';
    case BlogDelete = 'blog-delete';
    case BlogStore = 'blog-store';
}
