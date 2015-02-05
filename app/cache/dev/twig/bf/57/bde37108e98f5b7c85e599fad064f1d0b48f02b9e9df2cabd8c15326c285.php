<?php

/* MySymphonyBlogBundle:Default:view.html.twig */
class __TwigTemplate_bf57bde37108e98f5b7c85e599fad064f1d0b48f02b9e9df2cabd8c15326c285 extends Twig_Template
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
\t<div class=\"row\">
\t\t<div class=\"well\">
\t<h3>
\t<small class=\"pull-right\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedAt", array()), "d M, Y"), "html", null, true);
        echo "</small>
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTitle", array(), "method"), "html", null, true);
        echo "
\t</h3>
\t
\t<p>
\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDescription", array()), "html", null, true);
        echo "
\t</p>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MySymphonyBlogBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
