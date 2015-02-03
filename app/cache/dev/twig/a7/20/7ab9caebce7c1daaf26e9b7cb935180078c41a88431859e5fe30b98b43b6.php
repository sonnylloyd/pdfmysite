<?php

/* PdfMySiteFrontBundle:Default:index.html.twig */
class __TwigTemplate_a7207ab9caebce7c1daaf26e9b7cb935180078c41a88431859e5fe30b98b43b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PdfMySiteFrontBundle:Default:layout.html.twig");
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
        return "PdfMySiteFrontBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <label for=\"urlinput\">Enter the website's Url: </label>
                    <div class=\"input-group\">
                        <input id=\"urlinput\" type=\"text\" class=\"form-control\" placeholder=\"http://www.pdfmysite.com\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><span class=\"hidden-xs\">Archive</span> <i class=\"fa fa-check-circle-o\"></i></button>
                            <button class=\"btn btn-danger\" type=\"button\"><span class=\"hidden-xs\">Generate</span> <i class=\"fa fa-arrow-right\"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"starter-template\">
            <h1>Welcome To Pdf My Site</h1>
            <p class=\"lead\">A Free service to generate any url to a pdf document</p>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"starter-template\">
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <h1>ads here</h1>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <h1>ads here</h1>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <h1>ads here</h1>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PdfMySiteFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
