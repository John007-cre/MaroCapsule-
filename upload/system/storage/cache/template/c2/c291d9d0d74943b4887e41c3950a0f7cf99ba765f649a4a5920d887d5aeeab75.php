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

/* default/template/common/footer.twig */
class __TwigTemplate_8ad128d79a0eafbee6fb827c1d201344fc1dbe7a2620cd41b03004577bb2a4d5 extends \Twig\Template
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
        echo "
  <footer class=\"section footer-section\">
    <div class=\"container\">
      <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-5\">
          <h3>Quick Link</h3>
          <ul class=\"list-unstyled link\">
            <li><a href=\"#\">About Us</a></li>
            <li><a href=\"#\">Terms &amp; Conditions</a></li>
            <li><a href=\"#\">Privacy Policy</a></li>
            <li><a href=\"#\">Help</a></li>
            <li><a href=\"#\">Rooms</a></li>
          </ul>
        </div>
        <div class=\"col-md-3 mb-5\">
          <h3>Support</h3>
          <ul class=\"list-unstyled link\">
            <li><a href=\"#\">Our Location</a></li>
            <li><a href=\"#\">The Hosts</a></li>
            <li><a href=\"#\">About</a></li>
            <li><a href=\"#\">Contact</a></li>

          </ul>
        </div>
        <div class=\"col-md-3 mb-5 pr-md-5 contact-info\">
          <h3>Contact Info</h3>
          <p><span class=\"d-block\">Address:</span> <span> casablanca </span></p>
          <p><span class=\"d-block\">Phone:</span> <span> +212603980808</span></p>
          <p><span class=\"d-block\">Email:</span> <span> MaroCapsule@gmail.com</span></p>
        </div>
        <div class=\"col-md-3 mb-5\">
          <h3>Subscribe</h3>
          <p>Sign up for our newsletter</p>
          <form action=\"#\" class=\"footer-newsletter\">
            <div class=\"form-group\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Your email...\">
              <button type=\"submit\" class=\"btn\"><span class=\"fa fa-paper-plane\"></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class=\"row bordertop text-center pt-5\">
        <p class=\"col-md-12\">&copy; Copyright 2020. All Rights Reserved. <br> Developed by junior solution MaroCapsule<a
            href=></a> <br> <a href=\"\">MaroCapsule</a></p>

        <p class=\"col-md-12 social\">
          <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
          <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
          <a href=\"#\"><span class=\"fa fa-instagram\"></span></a>
          <a href=\"#\"><span class=\"fa fa-linkedin\"></span></a>
          <a href=\"#\"><span class=\"fa fa-youtube\"></span></a>

        </p>
      </div>
    </div>
  </footer>
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 58
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 60,  99 => 58,  95 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
