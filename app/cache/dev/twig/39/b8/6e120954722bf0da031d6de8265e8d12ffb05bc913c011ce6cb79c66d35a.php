<?php

/* base.html.twig */
class __TwigTemplate_39b86e120954722bf0da031d6de8265e8d12ffb05bc913c011ce6cb79c66d35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_robots' => array($this, 'block_meta_robots'),
            'meta_facebook_title' => array($this, 'block_meta_facebook_title'),
            'meta_facebook_type' => array($this, 'block_meta_facebook_type'),
            'meta_facebook_image' => array($this, 'block_meta_facebook_image'),
            'meta_facebook_url' => array($this, 'block_meta_facebook_url'),
            'meta_facebook_description' => array($this, 'block_meta_facebook_description'),
            'meta_facebook_admins' => array($this, 'block_meta_facebook_admins'),
            'meta_twitter_card' => array($this, 'block_meta_twitter_card'),
            'meta_twitter_url' => array($this, 'block_meta_twitter_url'),
            'meta_twitter_title' => array($this, 'block_meta_twitter_title'),
            'meta_twitter_description' => array($this, 'block_meta_twitter_description'),
            'meta_twitter_image' => array($this, 'block_meta_twitter_image'),
            'meta_google_publisher' => array($this, 'block_meta_google_publisher'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headscript' => array($this, 'block_headscript'),
            'body_attr' => array($this, 'block_body_attr'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        ";
        // line 7
        echo "        <title>Pdf My Site - ";
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "        <meta name=\"description\" content=\"";
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\"/>
        ";
        // line 11
        echo "        <meta name=\"robots\" content=\"";
        $this->displayBlock('meta_robots', $context, $blocks);
        echo "\"/>
        ";
        // line 13
        echo "        <meta property=\"og:title\" content=\"Smsdroid - ";
        $this->displayBlock('meta_facebook_title', $context, $blocks);
        echo "\"/>
        ";
        // line 15
        echo "        <meta property=\"og:type\" content=\"";
        $this->displayBlock('meta_facebook_type', $context, $blocks);
        echo "\"/>
        ";
        // line 17
        echo "        <meta property=\"og:image\" content=\"";
        $this->displayBlock('meta_facebook_image', $context, $blocks);
        echo "\"/>
        ";
        // line 19
        echo "        <meta property=\"og:url\" content=\"";
        $this->displayBlock('meta_facebook_url', $context, $blocks);
        echo "\"/>
        ";
        // line 21
        echo "        <meta property=\"og:description\" content=\"";
        $this->displayBlock('meta_facebook_description', $context, $blocks);
        echo "\"/>
        ";
        // line 23
        echo "        <meta property=\"fb:admins\" content=\"";
        $this->displayBlock('meta_facebook_admins', $context, $blocks);
        echo "\"/>
        ";
        // line 25
        echo "        <meta name=\"twitter:card\" content=\"";
        $this->displayBlock('meta_twitter_card', $context, $blocks);
        echo "\">
        ";
        // line 27
        echo "        <meta name=\"twitter:url\" content=\"";
        $this->displayBlock('meta_twitter_url', $context, $blocks);
        echo "\">
        ";
        // line 29
        echo "        <meta name=\"twitter:title\" content=\"smsdroid - ";
        $this->displayBlock('meta_twitter_title', $context, $blocks);
        echo "\">
        ";
        // line 31
        echo "        <meta name=\"twitter:description\" content=\"";
        $this->displayBlock('meta_twitter_description', $context, $blocks);
        echo "\">
        ";
        // line 33
        echo "        <meta name=\"twitter:image\" content=\"";
        $this->displayBlock('meta_twitter_image', $context, $blocks);
        echo "\">
        ";
        // line 35
        echo "        <link rel=\"publisher\" href=\"https://plus.google.com/";
        $this->displayBlock('meta_google_publisher', $context, $blocks);
        echo "\"/>
        ";
        // line 37
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        $this->displayBlock('headscript', $context, $blocks);
        // line 43
        echo "<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-60x60.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-120x120.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-76x76.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon-152x152.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-196x196.png"), "html", null, true);
        echo "\" sizes=\"196x196\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-160x160.png"), "html", null, true);
        echo "\" sizes=\"160x160\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-96x96.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
<meta name=\"msapplication-TileColor\" content=\"#603cba\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mstile-144x144.png"), "html", null, true);
        echo "\">
";
        // line 66
        echo "</head>
<body ";
        // line 67
        $this->displayBlock('body_attr', $context, $blocks);
        echo ">
";
        // line 68
        $this->displayBlock('navigation', $context, $blocks);
        // line 69
        $this->displayBlock('body', $context, $blocks);
        echo "\t
";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        $this->displayBlock('javascript', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_meta_description($context, array $blocks = array())
    {
    }

    // line 11
    public function block_meta_robots($context, array $blocks = array())
    {
        echo "index,follow";
    }

    // line 13
    public function block_meta_facebook_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 15
    public function block_meta_facebook_type($context, array $blocks = array())
    {
        echo "website";
    }

    // line 17
    public function block_meta_facebook_image($context, array $blocks = array())
    {
    }

    // line 19
    public function block_meta_facebook_url($context, array $blocks = array())
    {
    }

    // line 21
    public function block_meta_facebook_description($context, array $blocks = array())
    {
    }

    // line 23
    public function block_meta_facebook_admins($context, array $blocks = array())
    {
    }

    // line 25
    public function block_meta_twitter_card($context, array $blocks = array())
    {
        echo "summary";
    }

    // line 27
    public function block_meta_twitter_url($context, array $blocks = array())
    {
    }

    // line 29
    public function block_meta_twitter_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 31
    public function block_meta_twitter_description($context, array $blocks = array())
    {
    }

    // line 33
    public function block_meta_twitter_image($context, array $blocks = array())
    {
        echo "url";
    }

    // line 35
    public function block_meta_google_publisher($context, array $blocks = array())
    {
        echo "pdfmysite";
    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_headscript($context, array $blocks = array())
    {
    }

    // line 67
    public function block_body_attr($context, array $blocks = array())
    {
    }

    // line 68
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 71
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  324 => 71,  319 => 70,  314 => 69,  309 => 68,  304 => 67,  299 => 39,  294 => 38,  288 => 35,  282 => 33,  277 => 31,  271 => 29,  266 => 27,  260 => 25,  255 => 23,  250 => 21,  245 => 19,  240 => 17,  234 => 15,  228 => 13,  222 => 11,  217 => 9,  211 => 7,  205 => 72,  203 => 71,  201 => 70,  197 => 69,  195 => 68,  191 => 67,  188 => 66,  184 => 57,  179 => 55,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  130 => 43,  128 => 39,  126 => 38,  123 => 37,  118 => 35,  113 => 33,  108 => 31,  103 => 29,  98 => 27,  93 => 25,  88 => 23,  83 => 21,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  58 => 11,  53 => 9,  48 => 7,  41 => 1,);
    }
}
