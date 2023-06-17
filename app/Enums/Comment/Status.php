<?php

namespace App\Enums\Comment;

enum Status: int {
    case DRAFR = 0;
    case APPROVED = 10;
    case REJECTED = 20;

}
