<?php

/* MySymphonyBlogBundle:Default:index.html.twig */
class __TwigTemplate_87cf1deb92baf80712c3ef4c3c72736cb53f42032f7bd03fc490d67029ed181f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
<div\tclass=\"row\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "\t<div class=\"well well-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "\">
\t<h1>
\t<small class=\"pull-right\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "getCreatedAt", array(), "method"), "d M, Y"), "html", null, true);
            echo "</small>
\t";
            // line 10
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["post"], "getTitle", array(), "method")), "html", null, true);
            echo "</h1>
\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getDescription", array(), "method"), "html", null, true);
            echo "</p>
\t<p>
\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_symphony_blog_delete", array("id" => $this->getAttribute($context["post"], "getId", array(), "method"))), "html", null, true);
            echo "\" data-id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "' class=\"btn btn-xs btn-primary remove-btn\">Remove</a>
\t</p>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t<div class=\"well\">
\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("my_symphony_blog_new");
        echo "\" class=\"btn btn-sm btn-primary\">Create new Post</a>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MySymphonyBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  78 => 17,  66 => 13,  61 => 11,  57 => 10,  53 => 9,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
