<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/home.htm */
class __TwigTemplate_aa34e90a0294a52c80bafbfd9e4fcf418b2d31738d379844581c0a75c06c2ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "lastPage", array()), "html", null, true);
        echo "\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    {% partial 'home/posts' %}
</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"{{ posts.lastPage }}\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/home.htm", "");
    }
}
