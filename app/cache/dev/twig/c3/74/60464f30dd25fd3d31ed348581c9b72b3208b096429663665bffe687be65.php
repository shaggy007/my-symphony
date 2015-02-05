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
    <body>
<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">My Symphony</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"active\"><a href=\"#\">Home</a></li>
                  <li><a href=\"#\">Items</a></li>
                  <li><a href=\"#\">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>

      </div>

    </div>
        
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
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
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cover.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
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
        return array (  108 => 43,  105 => 42,  100 => 35,  94 => 11,  88 => 7,  85 => 6,  79 => 5,  73 => 48,  71 => 42,  63 => 36,  61 => 35,  35 => 13,  33 => 6,  29 => 5,  23 => 1,);
    }
}
