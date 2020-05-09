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

/* index.html.twig */
class __TwigTemplate_cc745151ea8bd9a21f0bb0e6aaa55eacb79080a55507a3518c168781a4365703 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/index.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-4.4.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\">
</head>
<body>

<!-- NAV BAR -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<!-- NAV BAR END-->

<div class=\"page\">
    <div class=\"intro\">
        <h1> Vous avez le pouvoir</h1>
        <h2> D'apprendre de nouvelles choses aujourd'hui </h2>
    </div>

    <div class=\"row\">
        <div class=\"col-5\">
            <h3>Découvrir</h3>
        </div>
        <div class=\"col-2\"></div>
        <div class=\"col-5\">
            <h3>Expérimenter</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-5\">
            <img onclick=\"window.location.href = window.location.href+this.id;\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/web/light_bulb.png"), "html", null, true);
        echo "\" alt=\"bulb\" class=\"imgChoice\" id=\"cours\" />
        </div>
        <div class=\"col-2\"></div>
        <div class=\"col-5\">
            <img onclick=\"window.location.href = window.location.href+this.id;\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/web/lightning.png"), "html", null, true);
        echo "\" alt=\"bulb\" class=\"imgChoice\" id=\"exercice\"/>
        </div>
    </div>
</div>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  103 => 54,  53 => 7,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/index.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-4.4.1-dist/css/bootstrap.css') }}\">
</head>
<body>

<!-- NAV BAR -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<!-- NAV BAR END-->

<div class=\"page\">
    <div class=\"intro\">
        <h1> Vous avez le pouvoir</h1>
        <h2> D'apprendre de nouvelles choses aujourd'hui </h2>
    </div>

    <div class=\"row\">
        <div class=\"col-5\">
            <h3>Découvrir</h3>
        </div>
        <div class=\"col-2\"></div>
        <div class=\"col-5\">
            <h3>Expérimenter</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-5\">
            <img onclick=\"window.location.href = window.location.href+this.id;\" src=\"{{ asset('assets/web/light_bulb.png') }}\" alt=\"bulb\" class=\"imgChoice\" id=\"cours\" />
        </div>
        <div class=\"col-2\"></div>
        <div class=\"col-5\">
            <img onclick=\"window.location.href = window.location.href+this.id;\" src=\"{{ asset('assets/web/lightning.png') }}\" alt=\"bulb\" class=\"imgChoice\" id=\"exercice\"/>
        </div>
    </div>
</div>


</body>

</html>", "index.html.twig", "C:\\Users\\robin\\Desktop\\tesseraktWeb\\templates\\index.html.twig");
    }
}
