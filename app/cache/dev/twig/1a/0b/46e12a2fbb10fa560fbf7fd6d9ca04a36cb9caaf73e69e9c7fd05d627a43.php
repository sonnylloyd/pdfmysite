<?php

/* PdfMySiteFrontBundle:Default:layout.html.twig */
class __TwigTemplate_1a0b46e12a2fbb10fa560fbf7fd6d9ca04a36cb9caaf73e69e9c7fd05d627a43 extends Twig_Template
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
            // asset "0c5ae51_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c5ae51_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_bootstrap_1.css");
            // line 10
            echo " 
    <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "0c5ae51_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c5ae51_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_main_2.css");
            // line 10
            echo " 
    <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "0c5ae51_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c5ae51_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_font-awesome_3.css");
            // line 10
            echo " 
    <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "0c5ae51"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c5ae51") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.css");
            // line 10
            echo " 
    <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        // line 16
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("pdf_my_site_front_homepage");
        echo "\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/img/logo/pdfmysite.png"), "html", null, true);
        echo "\" alt=\"pdfmysite logo\" />
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
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06bead0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06bead0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront_bootstrap_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "06bead0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06bead0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "    ";
    }

    // line 52
    public function block_headscript($context, array $blocks = array())
    {
        // line 53
        echo "    <!--[if lt IE]>
    ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a79e4b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a79e4b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/mainfront.ie_ie-emulation-modes-warning_1.js");
            // line 62
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
        // line 63
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
        return array (  188 => 63,  171 => 62,  167 => 54,  164 => 53,  161 => 52,  157 => 50,  137 => 48,  132 => 42,  129 => 41,  124 => 39,  107 => 26,  103 => 25,  92 => 16,  89 => 15,  85 => 13,  79 => 11,  76 => 10,  69 => 11,  66 => 10,  60 => 11,  57 => 10,  51 => 11,  48 => 10,  43 => 3,  40 => 2,  11 => 1,);
    }
}
