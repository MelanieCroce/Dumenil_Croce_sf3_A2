<?php

namespace ArticleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArticleBundle extends Bundle
{
{{ render(controller("Article:edit.html.twig")) }}
}
