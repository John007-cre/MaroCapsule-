<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/home.twig */
class __TwigTemplate_76d3d559407d0e87567504515242b0651720342f14ff0b6ace5c88496a6b8481 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 12
        echo ($context["column_right"] ?? null);
        echo "</div>
    <div class=\"section custom-content-style1\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"section-header text-center\">
                                <h2 class=\"h2\">Produits cosmétiques</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row align-items-center mb-4\">
                        <div class=\"col-12 col-sm-4 col-md-4 col-lg-4\">
                            <div class=\"custom-text text-center\">
                                <h4 class=\"h3\">
                                    <a class=\"custom\">Huiles essentielles de meilleure qualité</a>
                                </h4>
                                <div class=\"rte-setting\">
                                    <p>jusqu'à 60% de réduction </p>
                                </div>
                                <a class=\"btn\" href=\"#\">Shop Now</a>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-4 col-md-4 col-lg-4\">
                            <div class=\"custom-text text-center\">
                                <img class=\"blur-up lazyload\" style=\"width:350px;height:400px\" data-src=\"catalog/view/theme/default/image/1.png\" src=\"catalog/view/theme/default/image/1.png\"
                                    alt=\"\" title=\"\">
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-4 col-md-4 col-lg-4\">
                            <div class=\"custom-text text-center\">
                                <img class=\"blur-up lazyload\" style=\"width:350px;height:400px\" data-src=\"catalog/view/theme/default/image/3.jpg\" src=\"catalog/view/theme/default/image/3.jpg\"
                                    alt=\"\" title=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row align-items-center\">
                        <div class=\"col-12 col-sm-8 col-md-8 col-lg-8\">
                            <div class=\"custom-text text-center\">
                                <img class=\"blur-up lazyload\" data-src=\"catalog/view/theme/default/image/4.jpg\" src=\"catalog/view/theme/default/image/4.jpg\"
                                    alt=\"\" title=\"\">
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-4 col-md-4 col-lg-4\">
                            <div class=\"custom-text text-center\">
                                <h4 class=\"h3\">
                                    <a class=\"custom\">Vous rêvez d'une peau douce et un éclat incroyable!</a>
                                </h4>
                                <div class=\"rte-setting\">
                                    <p>Utilisez cette huile prodigieuse d'argan qui se distingue par une efficacité remarquable ...</p>
                                </div>
                                <a class=\"btn\" href=\"#\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End -->

</div>
";
        // line 71
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 71,  74 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
