<?php

/* MySymphonyBlogBundle:Default:new.html.twig */
class __TwigTemplate_9508624f3102bff6e5b7eb4ed28021856deb77a78424d580435612e57278887f extends Twig_Template
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
\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("my_symphony_blog_store");
        echo "\" class=\"form-horizontal\" method=\"post\" >
\t\t<fieldset>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Title\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<textarea name=\"description\" class=\"form-control\" placeholder=\"Description\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Post\"/>
\t\t\t</div>\t\t\t
\t\t</fieldset>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MySymphonyBlogBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
