<?php

/* base.html.twig */
class __TwigTemplate_c37460464f30dd25fd3d31ed348581c9b72b3208b096429663665bffe687be65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body style=\"background-color:#DDD\">
<header class=\"navbar navbar-static-top navbar-default\" id=\"top\" role=\"banner\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">My Symfony</a>
    </div>
    <nav class=\"collapse navbar-collapse bs-navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        
        <li>
          <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("my_symphony_blog_homepage");
        echo "\">Blogs</a>
        </li>
      </ul>
    </nav>
  </div>
</header>


        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">

            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\">
            
        ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "            <!-- Latest compiled and minified JavaScript -->
            
            <script src=\"https://code.jquery.com/jquery-2.1.3.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/blog.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  111 => 43,  108 => 42,  103 => 39,  94 => 7,  91 => 6,  85 => 5,  79 => 49,  77 => 42,  73 => 40,  71 => 39,  60 => 31,  51 => 25,  35 => 13,  33 => 6,  29 => 5,  23 => 1,);
    }
}
