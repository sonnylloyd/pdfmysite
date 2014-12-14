<?php

/* PdfMySiteFrontBundle:Default:layout.html.twig */
class __TwigTemplate_1a0b46e12a2fbb10fa560fbf7fd6d9ca04a36cb9caaf73e69e9c7fd05d627a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
            'headscript' => array($this, 'block_headscript'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c5755dd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5755dd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_bootstrap_1.css");
            // line 9
            echo " 
    ";
            // asset "c5755dd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5755dd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_main_2.css");
            echo " 
    ";
        } else {
            // asset "c5755dd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5755dd") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.css");
            echo " 
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mainfront.css"), "html", null, true);
        echo "\" />
";
    }

    // line 13
    public function block_navigation($context, array $blocks = array())
    {
        // line 14
        echo "    <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("pdf_my_site_front_homepage");
        echo "\">
                <object data=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/img/pdfmysite.svg"), "html", null, true);
        echo "\" type=\"image/svg+xml\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/img/pdfmysite.png"), "html", null, true);
        echo "\" alt=\"pdfmysite logo\" />
                </object>
            </a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">Archives</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>\t
";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascript($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "06bead0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06bead0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_jquery-1.11.1.min_1.js");
            // line 48
            echo "    ";
            // asset "06bead0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06bead0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_bootstrap_2.js");
            echo "    ";
        } else {
            // asset "06bead0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06bead0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.js");
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mainfront.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 51
    public function block_headscript($context, array $blocks = array())
    {
        // line 52
        echo "    <!--[if lt IE]>
    ";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a79e4b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie_ie-emulation-modes-warning_1.js");
            // line 61
            echo "    ";
            // asset "8a79e4b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie_ie10-viewport-bug-workaround_2.js");
            echo "    ";
            // asset "8a79e4b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie_html5shiv_3.js");
            echo "    ";
            // asset "8a79e4b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie_respond.min_4.js");
            echo "    ";
        } else {
            // asset "8a79e4b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie.js");
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mainfront.ie.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "PdfMySiteFrontBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  142 => 61,  138 => 53,  135 => 52,  132 => 51,  125 => 49,  114 => 48,  109 => 42,  106 => 41,  101 => 39,  83 => 25,  79 => 24,  75 => 23,  64 => 14,  61 => 13,  54 => 11,  40 => 9,  35 => 3,  32 => 2,);
    }
}
