<?php

/* PdfMySiteFrontBundle:Default:index.html.twig */
class __TwigTemplate_a7207ab9caebce7c1daaf26e9b7cb935180078c41a88431859e5fe30b98b43b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PdfMySiteFrontBundle:Default:layout.html.twig");

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
                <div class=\"col-lg-6\">
                    <label for=\"urlinput\">Enter the website's Url: </label>
                    <div class=\"input-group\">
                        <input id=\"urlinput\" type=\"text\" class=\"form-control\" placeholder=\"http://www.pdfmysite.com\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Generate!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"starter-template\">
            <h1>Bootstrap starter template</h1>
            <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
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
        return array (  31 => 3,  28 => 2,);
    }
}
